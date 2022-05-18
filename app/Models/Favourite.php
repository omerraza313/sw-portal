<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'user_id'];

    public function user(){

        return $this->belongsTo('App\Models\User');
    }

    public function service(){

        return $this->belongsTo('App\Models\Service');
    }
}
