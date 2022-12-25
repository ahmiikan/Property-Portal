<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ReasonController extends Controller
{
    //
    public function create($type, $status , $id)
    {  
        return view('reason',compact('type','status','id'));
    }

    public function store(Request $request, $type, $status , $id )
    {  

        if($type == 1){
            $user=User::findOrFail($id);
            if ($user->roles->pluck('name')->first()=='Admin'){
                return redirect()->route('users.index')->with('success','Admin can not be deleted');
            }
            $user->delete();
            $user->deleted_by = Auth()->user()->id;
            $user->reason = $request->reason;
            $user->save();
        }
        return redirect()->route('users.index')->with('success','User deleted successfully');
    }
}
