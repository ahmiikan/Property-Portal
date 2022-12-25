<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\PropertyListing;
use App\Models\PropertyImages;
use App\Models\City;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Builder\Property;

class PropertyListingController extends Controller
{

    // function __construct()
    // {
    //      $this->middleware('permission:property-list|property-create|property-edit|property-delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:property-create', ['only' => ['create','store']]);
    //      $this->middleware('permission:property-edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:property-delete', ['only' => ['destroy']]);
    //      $this->middleware('permission:property-approve', ['only' => ['approve']]);
    //      $this->middleware('permission:property-disapprove', ['only' => ['reject']]);
    //      $this->middleware('permission:property-review', ['only' => ['reviewlist']]);

    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return('0');
        $data  = PropertyListing::orderBy('id','DESC')->paginate(5);
                // return $data[0];
        return view('showProperty',compact('data'));
    }
    public function reviewlist()
    {
        $properties  = PropertyListing::whereStatus('pending')->paginate(15);
        return view('reviewListing',compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addProperty')
        ->with('cities', City::where('country_id', 162)->get(["name", "id"]));


      
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
        // dd($request->images);    
         $request->validate([
            'purpose'=>['required', 'string', 'max:100'],
            'PropertyType' => ['required', 'string', 'max:100'],         
            'location' => ['required', 'string', 'max:100'],    
            'totalPrice'=>['required', 'string', 'max:255'],
            'city'=>['required', 'string', 'max:255'],
            'areaSize'=> ['required', 'string', 'max:255'],
            'propertyTitle'=>['required', 'string', 'max:255'],
            'description'=>['required', 'string', 'max:1000'],
            // 'images' => 'required|array',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'        
        ]);
        if($request->purpose==0){
            $purpose='sale';
        }
        else{
            $purpose='rent';
    
        }  
    
        if($request->PropertyType==0){
            $type='home';
        }
        else{
            $type='commercial';
    
        }

        $property = PropertyListing::create([
            'type' => $type,
            'purpose' => $purpose,
            'location' => $request->city,
            'title' => $request->propertyTitle,
            'description' => $request->description,
            'address' => $request->location ,
            'size' => $request->areaSize ,
            'price' => $request->totalPrice ,
            'user_id' => Auth::id() ,

        ]);
        if ($property) {
           foreach($request->images as $image){
            $imageName = time() . '.' .$image->getClientOriginalName();
            PropertyImages::create([
                'image' => $imageName ,
                'listing_id' => $property->id ,

            ]);
            // move(public_path().'/images/', $name); 
            $image->move(public_path('images'), $imageName);

           }
        }

        if(auth()->user()->roles->pluck('name')[0] == 'User'){
            $property->status = 'pending';
            $property->save();
        }
        if(auth()->user()->roles->pluck('name')[0] == 'Agent'){

           
            if(auth()->user()->agent->status=='verified'){
                $property->status = 'active';
                $property->save();
            }
            else{
                $property->status = 'pending';
                $property->save();
            }
           
        }

        return redirect()->back()->with('success', 'Property Listed Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyListing $property)
    {
        return view('propertyDetails',compact('property'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
   
    public function edit(PropertyListing $property)
    {
        $cities = City::where('country_id', 162)->get(["name", "id"]);
        return view('propertyUpdate',compact('property','cities'));

        
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'purpose'=>['required', 'string', 'max:100'],
            'PropertyType' => ['required', 'string', 'max:100'],         
            'location' => ['required', 'string', 'max:100'],    
            'totalPrice'=>['required', 'string', 'max:255'],
            'city'=>['required', 'string', 'max:255'],
            'areaSize'=> ['required', 'string', 'max:255'],
            'propertyTitle'=>['required', 'string', 'max:255'],
            'description'=>['required', 'string', 'max:1000'],
            // 'images' => 'required|array',
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'        
        ]);
    //    return $request;
    if($request->purpose==0){
        $purpose='sale';
    }
    else{
        $purpose='rent';

    }  

    if($request->PropertyType==0){
        $type='home';
    }
    else{
        $type='commercial';

    }
        // return $purpose;

        $property=PropertyListing::findOrFail($id);
        $property->title = $request->propertyTitle;
        $property->description = $request->description;
        $property->price = $request->totalPrice ;
        $property->size = $request->areaSize ;
        $property->address = $request->location ;
        $property->purpose = $purpose ;
        $property->type = $type ;
        $property->location = $request->city ;
       
        if  ($request->hasFile('images')){
     

            PropertyImages::where('listing_id',$id)->delete();

            if ($property) {
                foreach($request->images as $image){
                 $imageName = time() . '.' .$image->getClientOriginalName();
                 PropertyImages::create([
                     'image' => $imageName ,
                     'listing_id' => $property->id ,
     
                 ]);
                 // move(public_path().'/images/', $name); 
                 $image->move(public_path('images'), $imageName);
     
                }
             }
     
    
    
           }
    

        if(auth()->user()->roles->pluck('name')[0] == 'User'){
            $property->status = 'pending';
        }
        if(auth()->user()->roles->pluck('name')[0] == 'Agent'){

           
            if(auth()->user()->agent->status=='verified'){
                $property->status = 'active';
            }
            else{
                $property->status = 'pending';
            }
           
        }
        $property->save();
        // return $property->status;

        return redirect()->back()->with('success', 'Property Updated Successfully');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyListing  $propertyListing
     * @return \Illuminate\Http\Response
     */
    public function deleted(Request $request)
    {
        $data = PropertyListing::onlyTrashed()->orderBy('id','DESC')->paginate(5);
        return view('showProperty',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
     public function destroy(PropertyListing $property)
    {
        $property->forceDelete();
        return redirect()->back()->with('success', 'Property Deleted Successfully');
       
    }
    public function delete($id)
    {
        // $property = PropertyListing::find($id->id);
        $property=PropertyListing::find($id);
        $property->delete();
        $property->updated_by = Auth()->id();
        $property->save();
        return redirect()->back()->with('success', 'Property Deleted Successfully');
    }
    public function approve($id)

    { 
        $user = PropertyListing::find($id);
        $user->status='active';
        $user->updated_by = Auth()->user()->id;
        $user->save();
        return redirect()->back()->with('success','Approved Successfully');
    }
    
    public function unlist($id)

    { 
        $property = PropertyListing::find($id);
        $property->status='unlist';
        $property->updated_by = Auth()->user()->id;
        $property->save();
        return redirect()->back()->with('success','Unlisted Successfully');
    }
    public function reject($id)

    { 
        $property = PropertyListing::find($id);
        $property->status='rejected';
        $property->updated_by = Auth()->user()->id;
        $property->save();
        return redirect()->back()->with('success','Rejected Successfully');
    }
    public function findbyid(Request $request)

    { 
        // return $request->id;
        $property = PropertyListing::find($request->id)->first();
        // return $property;
        return view('searchById')->with(compact('property'));
        
    }
    public function propertystatusupdate(Request $request,$id)

    { 

        $property = PropertyListing::find($id);
        $property->status=$request->status;
        $property->updated_by = Auth()->user()->id;
        $property->save();
        return redirect()->back()->with('success','status updated Successfully');
    }

    public function search(Request $request)

    { 
        return $request;
        // $property = PropertyListing::find($request->id)->first();
        // return $property;
        // return view('searchById')->with(compact('property'));
        
    }

    public function findBySearchKeyAll(Request $request)
    {
        $request->validate(['search'=>'string']);
        $searchTerm=$request->search;
        $properties=PropertyListing::where('title', 'LIKE', "%{$searchTerm}%") 
                    ->orWhere('description', 'LIKE', "%{$searchTerm}%")
                    ->where('status','active');
                    
        if ($request->type) {
            $properties->where('type',$request-> type);
        }
        if ($request->city) {
            $properties->where('location',$request-> city);
        }
        if ($request->min) {
            $properties->where('price', '>',  $request->min);
        }
        if ($request->max) {
            $properties->where('price', '<',  $request->max);
        }
       $properties= $properties->orderBy('id','DESC')->paginate(5);

        // return $properties;

        return view('welcome', compact('properties'))->with('cities', City::where('country_id', 162)->get(["name", "id"]));
        
    }



    public function myListing(Request $request){

         
        $data = PropertyListing::Where('user_id',auth()->id())->orderBy('id','DESC')->paginate(5);
        return view('showProperty',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);


    }

    public function soldAllListing(Request $request){

         
        $data = PropertyListing::Where('status','sold Out')->orderBy('id','DESC')->paginate(5);
        return view('showProperty',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);


    }

    public function mySoldListing(Request $request){

         
        $data = PropertyListing::Where('user_id',auth()->id())->where('status','sold Out')->orderBy('id','DESC')->paginate(5);
        return view('showProperty',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);


    }
    public function searchkeyall(Request $request)
    {
        $request->validate(['searchTerm'=>'string']);
        $searchTerm=$request->searchTerm;
        $properties=PropertyListing::where('title', 'LIKE', "%{$searchTerm}%") 
                    ->orWhere('description', 'LIKE', "%{$searchTerm}%")
                    ->where('status','active')->Where('user_id',auth()->id());
                    
       
       $data= $properties->orderBy('id','DESC')->paginate(5);

        // return $data;
        return view('showProperty',compact('data'));
        
    }
}
