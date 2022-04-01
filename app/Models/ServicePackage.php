<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;

class ServicePackage extends Model
{
    use HasFactory;
    protected $fillable=['service_id', 'package_type'];

    // protected static function boot()
    // {
    //     parent::boot();
    //     if (auth()->check()) {
    //         static::addGlobalScope(new UserScope());
    //     }
    //     static::observe(\App\Observers\CommonObserver::class);
    // }

    function service(){
    	return $this->belongsTo('App\Models\Service');
    }

    function package_attrs(){
    	return $this->hasMany('App\Models\ServicePackageAttr');
    }
   
}
