<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DeleteRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $date = today()->format('Y-m-d');
        // $date=Carbon::now()->toDateTimeString();
        $user=User::where('deletion_request','<',$date)->delete();
        // return  $user;
        // Carbon::now()->toDateTimeString();
        return view('reqDeleteAccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(["reason"=> 'required|string']);
        // $currentDateTime = Carbon::now();
        $newDateTime = Carbon::now()->addDays(5);
        $user=Auth::user();
        $user->deletion_request=$newDateTime;
        $user->user_feedback=$request->reason;
        $user->save();
        Auth::logout();
        return redirect()->route('login')->with('success', 'Account Scheduled for deletion Successfully. If You want to cancel the account deletion login back under 5 days.After that your account will be permanently deleted');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
