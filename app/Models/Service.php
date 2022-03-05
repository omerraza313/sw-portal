<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

     function user(){
        return $this->belongsTo('App\Models\User');
    }

    function business(){
    	return $this->belongsTo('\App\Models\Business');
    }

    function category(){
    	return $this->belongsTo('\App\Models\Category');
    }

    function subcategory(){
        return $this->belongsTo('\App\Models\SubCategory', 'sub_category_id' , 'id');
    }

    function service_working_days(){
    	return $this->hasMany('\App\Models\ServiceWorkingDay');
    }

    function service_packages(){
    	return $this->hasMany('\App\Models\ServicePackage');
    }
}
