<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agent;

class ReportsController extends Controller
{
    //
    public function reports(){
        $data['activeUsers'] = User::where('user_status' ,'active')->count();
        $data['deleteUsers'] = User::onlyTrashed()->count();
        $data['blockedUsers'] = User::where('user_status' ,'blocked')->count();
        $data['AllUsers'] = User::count();
        $data['verifiedAgents']  = Agent::whereStatus('verified')->count();
        $data['rejectedAgents']  = Agent::whereStatus('rejected')->count();
        $data['InReviewAgents'] = Agent::whereStatus('in-review')->count();
        $data['unverifiedAgents'] = Agent::whereStatus('unverified')->count();
        // return $verifiedAgents;
        // return $data;
        
        return view(
            // 'analyticsAdmin',compact('activeUsers','deleteUsers','blockedUsers')
            'analyticsAdmin',compact('data')
            // ->with('verifiedAgents', $verifiedAgents)
            // ->with('rejectedAgents', $rejectedAgents)
            // ->with('InReviewAgents', $InReviewAgents)
            // ->with('unverifiedAgents', $unverifiedAgents)
    );
    }

}
