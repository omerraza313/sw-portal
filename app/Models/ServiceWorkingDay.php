<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceWorkingDay extends Model
{
    use HasFactory;

    function service(){
    	return $this->belongsTo('\App\Models\Service');
    }
}
