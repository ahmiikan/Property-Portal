<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{

    // function __construct()
    // {
    //      $this->middleware('permission:blog-list|Create-Blog|blog-edit|blog-delete', ['only' => ['store','create']]);
    //      $this->middleware('permission:Create-Blog', ['only' => ['create','store']]);
    //      $this->middleware('permission:blog-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:blog-delete', ['only' => ['destroy']]);
         

    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return Post::first()->author->name;
        $post=Post::whereStatus('published')->orderBy('id','DESC')->paginate(20);

        return view('posts.index')->with('posts',$post)
            ->with('categories', Category::all())->with('i', ($request->input('page', 1) - 1) * 20);
    } 
    
    public function list(Request $request)
    {
        $posts=Post::whereStatus('published')->orderBy('id','DESC')->paginate(10);
        return view('posts.list', compact('posts'))
            ->with('categories', Category::all())->with('i', ($request->input('page', 1) - 1) * 5);
    } 
    public function draft(Request $request)
    {
        $posts=Post::whereStatus('draft')->orderBy('id','DESC')->paginate(10);
        return view('posts.draft', compact('posts'))
            ->with('categories', Category::all())->with('i', ($request->input('page', 1) - 1) * 5);
    } 
    
    public function deleted(Request $request)
    {
        $posts=Post::onlyTrashed()->orderBy('id','DESC')->paginate(10);
        return view('posts.deleted', compact('posts'))
            ->with('categories', Category::all())->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postBlogform')
            ->with('categories', Category::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, ['title' => 'required', 'content' => 'required', 'desc' => 'required', 'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048','action'=>'in:draft,published']);

        $content = $request->content;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/uploads/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        $wordCount = str_word_count(strip_tags($content));
        $minutes = (int) floor($wordCount / 200);
        $cover = time() . '.' . $request->file('cover')
            ->getClientOriginalExtension();

        $post = Post::create(['title' => $request->title, 'desc' => $request->desc, 'author_username' => Auth::user()->name, 'user_id' => Auth::id(), 'category_name' => $request->category, 'content' => $request->content, 'reading_time' => $minutes, 'cover' => $cover ,'status'=>$request->action]);
        $request->file('cover')
            ->move(public_path('uploads'), $cover);
        // return $post;
        return view('posts.index')->with('posts', Post::all())
            ->with('categories', Category::all())
            ->with('success', 'Post'.$request->action .'Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {  
        $id=Post::whereSlug($slug)->whereStatus('published')->firstOrFail()->id;
        // return $id;

        $Count = Comment::where('post_id', $id)->count();
        // return $Count;
        return view('posts.show')->with('post', Post::find($id))->with('posts', Post::whereStatus('published')->get())
            ->with('categories', Category::all())->with('commentcount', $Count);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        //
        return view('editBlogform')
            ->with('categories', Category::all())->with('post', Post::where('slug',$slug)->first());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        //


        // $request->validate(['title' => 'required', 'content' => 'required', 'description' => 'required', 'cover' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|nullable']);

        $content = $request->content;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/uploads/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        $wordCount = str_word_count(strip_tags($content));
        $minutes = (int) floor($wordCount / 200);

        $post = Post::where('slug',$slug)->update(['title' => $request->title, 'desc' => $request->description, 'author_username' => Auth::user()->name, 'user_id' => Auth::id(), 'category_name' => $request->category, 'content' => $request->content, 'reading_time' => $minutes,'status'=>$request->action]);

        if ($request->has('cover')) {

            $cover = time() . '.' . $request->file('cover')
                ->getClientOriginalExtension();
            $request->file('cover')
                ->move(public_path('uploads'), $cover);

            $post->update(['cover' => $request->cover]);

        }

        return redirect()->back()->with('success', 'Post Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        //
        $id=Post::onlyTrashed()->whereSlug($slug)->firstOrFail()->id;

        Comment::where('post_id',$id)->delete();

        $post = Post::onlyTrashed()->whereSlug($slug)->firstOrFail();
        $post->forceDelete();
        return redirect()->back()->with('success','Post deleted Permanently');
    }

    public function view($slug)
    {  
        $id=Post::whereSlug($slug)->firstOrFail()->id;

        $Count = Comment::where('post_id', $id)->count();
        // return $Count;
        return view('posts.show')->with('post', Post::find($id))->with('posts', Post::whereStatus('published')->get())
            ->with('categories', Category::all())->with('commentcount', $Count);
    }

    public function delete($slug)

    { 
        $post = Post::whereSlug($slug)->firstOrFail();
        $post->delete();
        return redirect()->back()->with('success','Post deleted successfully');


}

public function restore($slug)

    { 
        $post = Post::onlyTrashed()->whereSlug($slug)->firstOrFail();
        $post->restore();
        return redirect()->back()->with('success','Post restored successfully');
    }
}