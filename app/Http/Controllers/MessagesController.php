<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
class MessagesController extends Controller
{
    //



    public function index()
    {
        $messages = Message::where('recipient_id', auth()->id())->orderBy('created_at', 'ASC')->groupBy('sender_id')->get();
        dd($messages);
        return view('test', compact('messages'));
    }

   public function createMessage(Request $request, $id)
    {

        // $messages=Message::where('Sender')
        $messages = DB::table('messages')->where([
            ['sender_id', '=', auth()->id()],
            ['recipient_id', '=', $id],
        ])->orWhere(function($messages) use ($id) {
            $messages->where('sender_id', '>', $id)
                  ->where('recipient_id', '=', auth()->id());
        })->orderBy('id', 'asc')->get();

        $recipient = User::find($id);
        return view('messages.create' , compact('messages','recipient'));

    }

    public function sendMessage(Request $request, $id)
    {
        //
        $request->validate([
            'message' => 'required_without:img',
            'img' => 'required_without:message|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = User::findOrFail($id);

        $message = Message::create([
            'message' => $request->message,
            'recipient_id' => $user->id,
            'recipient_name' => $user->name]);

        if (!empty($request->img)) {
            $filename = time() . '.' . $request->img->extension();
            $request->img->move(public_path('images'), $filename);
            $message->image = $filename;
            $message->save();

        }

        // return response()->json(['success'=>$request->img ]);
        return response()->json([
            'success' => 'msg sent.',
        ], 200);

    }

}
