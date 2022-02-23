<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePackageAttr extends Model
{
    use HasFactory;
    protected $fillable=['service_package_id', 'plan_name', 'price'];

    function service_package(){
    	return $this->belongsTo('App\Models\ServicePackage', 'service_package_id', 'id');
    }
}
