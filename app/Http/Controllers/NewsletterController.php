<?php

namespace App\Http\Controllers;
use Newsletter;
use Illuminate\Http\Request;
use App\Models\City;
use App\Models\PropertyListing;

class NewsletterController extends Controller
{
    public function create(Request $request)
    {
        $properties=PropertyListing::whereStatus('active')->orderBy('id','DESC')->paginate(20);
    
        // $data  = PropertyListing::all();
                // return $data[0];
        // return view('welcome',compact('data'));

    return view('welcome')->with('properties',$properties)->with('i', ($request->input('page', 2) - 2) * 20)
    ->with('cities', City::where('country_id', 162)->get(["name", "id"]));
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            Newsletter::subscribePending($request->email);
            return redirect('newsletter')->with('success', 'Thanks For Subscribe');
        }
        return redirect('newsletter')->with('failure', 'Sorry! You have already subscribed ');
            
    }
}