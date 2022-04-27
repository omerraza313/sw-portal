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

    public function chatMessage(Request $request){

        $chat = new ChatMessage;
        $chat->chat_id = 1;
        $chat->message = $request->message;
        $chat->user_id = Auth::id();
        $chat->save();

        return response()->json($chat);    

    }

    public function getMessages(Request $request){

        $chat = ChatMessage::where('chat_id', $request->chat_id)->get();

        return response()->json($chat);
    }

    public function chatList(){

        $chatList = Chat::where('sender_id', Auth::id())->first();
        return response()->json($chatList);
    }

    public function syncMessages(Request $request){

        $chat = ChatMessage::where('chat_id', $request->chat_id)->latest()->first();

        return response()->json($chat);
    }

    
}
