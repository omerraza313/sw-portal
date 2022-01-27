<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    function business(){
    	return $this->belongsTo('\App\Models\Business');
    }

    function category(){
    	return $this->belongsTo('\App\Models\Category');
    }
}
