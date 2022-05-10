<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = ['sender_id', 'reciever_id'];

    public function messages(){
        
        return $this->hasMany('App\Models\ChatMessage');
    }

    public function unreadCount(){

        return $this->messages()->where('status', 1);
    }

    public function recieverUser(){

        return $this->belongsTo('App\Models\User', 'reciever_id', 'id');
    }

    public function senderUser(){

        return $this->belongsTo('App\Models\User', 'sender_id', 'id');
    }
}
