<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'facebook', 'twitter', 'google_plus', 'linkedin', 'pinterest', 'youtube', 'whatsapp'];


    public function user(){

        return $this->belongsTo('App\Models\User');
    }
}
