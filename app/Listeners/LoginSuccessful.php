<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;

class LoginSuccessful
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        DB::table('login_history')->insert([
            'user_id' => auth()->user()->id,
            'ip_address' => request()->ip(),
            'user_agent' => request()->server('HTTP_USER_AGENT'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);
        $user=auth()->user();
        $user->deletion_request=null;
        $user->save();


    }
}
