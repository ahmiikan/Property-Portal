<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Http\Requests\StoreCommentRequest;
use Illuminate\Support\Facades\Validator;

class PostCommentsApiController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(int $post_id)
  {
    return Post::where('slug',$slug)->comments;
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // return $request;
    $slug = $request->route('slug');
    if (!Post::where('slug',$slug)) {
      return redirect("blog/posts/$slug#commentsSection");
    }
    $id=Post::whereSlug($slug)->whereStatus('published')->firstOrFail()->id;

    // return $slug;
    $validator = Validator::make($request->all(), [
      'post_id' =>'required',
      'email' => ['required', 'min:5', 'max:255'],
      'name' => ['required', 'min:5', 'max:255'],
      'message' => ['required', 'min:1', 'max:255'],
      'replyTo' => ['integer', 'nullable']
    ]);

    if ($validator->stopOnFirstFailure()->fails()) {
      return redirect("blog/posts/$slug#commentsSection")->withErrors(
        $validator
      );
    }

    $validated = $validator
      ->safe()
      ->only(['name', 'email', 'message', 'post_id','replyTo']);

    // return $validated['post_id'];
    $comment = new Comment([
      'poster' => $validated['name'],
      'email' => $validated['email'],
      'content' => $validated['message'],
      'post_id'=>$validated['post_id']
    ]);
    

    $comment->post()->associate($id);
    // return $comment;
    if (
      isset($validated['replyTo']) &&
      ($_comment = Comment::find($validated['replyTo']))
    ) {
      $comment->reply_to = $_comment->id;
    }

    $comment->save();

    return redirect("blog/posts/$slug#comment" . $comment->id);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($slug, $comment_id)
  {
    return Post::where('slug',$slug)-first()->comments->find($comment_id);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
