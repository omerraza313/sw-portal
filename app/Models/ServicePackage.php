<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackage extends Model
{
    use HasFactory;
    protected $fillable=['service_id', 'package_type'];

    function service(){
    	return $this->belongsTo('App\Models\Service');
    }

    function package_attrs(){
    	return $this->hasMany('App\Models\ServicePackageAttr');
    }
   
}
