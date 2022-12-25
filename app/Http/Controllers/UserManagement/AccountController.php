<?php

namespace App\Http\Controllers\UserManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;

use App\Models\AccountUnblockAppeal;
class AccountController extends Controller
{
    public function update(Request $request)
    {
        $user=auth()->user();
        $user->name = $request->name;
        $user->cell_no = $request->cell_no;
        $user->city_id = $request->city ;
        $user->save();


       if  ($request->hasFile('image')){
     

        $userImage = time() . '.' . $request->file('image')->getClientOriginalExtension();

        $request->file('image')->move(public_path('images'), $userImage);
        $user->image=$userImage;
        $user->save();


       }
        return redirect()->back()->with('success', 'Property Updated Successfully');
    }

    public function appeal(){
        if (AccountUnblockAppeal::where('user_id',auth()->id())->count()>0){
            // return AccountUnblockAppeal::where('user_id',auth()->id())->get();
            return view('appealed');
        }else{
            return view('blockedaccount');


        }

    }

    public function create(){
        $cities= City::where("country_id", 162)->get(["name", "id"]);
        return view('personalInfo',compact('cities'));
    }



    public function unblockAppeal(Request $request){
       
    //    return AccountUnblockAppeal::all();

    $this->validate($request, [
        'appeal' => 'required',
    ]);

        $appeal=AccountUnblockAppeal::create([

                'appeal'=>$request->appeal,
                'user_id'=>auth()->id(),


        ]);

        return view('appealed');
    }
    

}
