<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ChatRoom;
use App\ChatRoomUser;
use App\ChatMessage;
use App\User;

use App\Events\ChatPusher;

use Auth;

class ChatController extends Controller
{
    public static function chat(Request $request)
    {

        $chat = new ChatMessage();
        $chat->chat_room_id = $request->chat_room_id;
        $chat->user_id = $request->user_id;
        $chat->message = $request->message;
        $chat->save();

        event(new ChatPusher($chat));
    }
}
