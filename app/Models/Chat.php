<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function messages(){
        return $this->hasMany('App\Models\ChatMessage');
    }

    public function unread(){

        return $this->messages()->where('status', 0)->get();
    }

    public function unreadCount(){

        return $this->messages()->where('status', 0)->count();
    }

    public function recieverUser(){

        return $this->belongsTo('App\Models\User', 'reciever_id', 'id');
    }

    public function senderUser(){

        return $this->belongsTo('App\Models\User', 'sender_id', 'id');
    }
}
