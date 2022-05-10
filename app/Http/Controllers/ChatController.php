<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatMessage;
use App\Models\Service;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ServiceWorkingDay;
use App\Models\ServicePackage;
use App\Models\ServicePackageAttr;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\WorkerInfo;
use Auth;


class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function chat()
    {
        $reciever_user = Chat::where('reciever_id', Auth::id())->orWhere('sender_id', Auth::id())->get();
        
        return view('Chat.chat', compact('reciever_user'));
    }

    public function chatInit(Request $request){

        $existingChatOne = Chat::where('sender_id', Auth::id())->where('reciever_id', $request->reciever_id)->exists();

        $existingChatTwo = Chat::where('sender_id', $request->reciever_id)->where('reciever_id', Auth::id())->exists();

        if (!$existingChatOne && !$existingChatTwo) {
            Chat::create([

                'sender_id' => Auth::id(),
                'reciever_id' => $request->reciever_id,

            ]);

            return redirect('member/chat');
        }


        return redirect('member/chat');

    }

    public function chatMessage(Request $request){

        $chat = new ChatMessage;
        $chat->chat_id = $request->chat_id;
        $chat->message = $request->message;
        $chat->user_id = Auth::id();
        $chat->status = 1;
        $chat->save();

        return response()->json($chat);    

    }

    public function getMessages(Request $request){

        $chat = ChatMessage::where('chat_id', $request->chat_id)->orderBy('id', 'ASC')->get();
        foreach($chat as $msg){
            if ($msg->status == 1) {
                $msg->status = 0;
                $msg->update();
            }
        }
        return response()->json($chat);
    }

    public function chatList(){

        $chatList = Chat::where('sender_id', Auth::id())->first();
        return response()->json($chatList);
    }

    public function syncMessages(Request $request){

        $chat = ChatMessage::where('chat_id', $request->chat_id)->where('status', 1)->orderBy('id', 'DESC')->first();

        if ($chat->user_id != Auth::id()) {
            

            $chat->status = 0;
            $chat->save();   
        }

             

        return response()->json($chat);
    }



    
}
