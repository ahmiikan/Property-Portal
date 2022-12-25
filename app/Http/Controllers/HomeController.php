<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\PropertyListing;
use App\Models\Message;


class HomeController extends Controller
{
    //

    public function index(Request $request)
    {
        //

        
            // $post=Post::whereStatus('published')->orderBy('id','DESC')->paginate(20);
    
          //  return view('posts.index')->with('posts',$post)
           // ->with('categories', Category::all())->with('i', ($request->input('page', 1) - 1) * 20);
           
           
           $properties=PropertyListing::whereStatus('active')->orderBy('id','DESC')->paginate(20);
    
            // $data  = PropertyListing::all();
                    // return $data[0];
            // return view('welcome',compact('data'));

        return view('welcome')->with('properties',$properties)->with('i', ($request->input('page', 2) - 2) * 20)
        ->with('cities', City::where('country_id', 162)->get(["name", "id"]));
  
    }
    
    public function dashboard(){
        $count = Message::where('recipient_id',auth()->id())->count();
        return view('dashboard', compact('count'));

    }

}
