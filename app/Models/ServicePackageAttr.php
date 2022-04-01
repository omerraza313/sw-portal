<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;

class ServicePackageAttr extends Model
{
    use HasFactory;
    protected $fillable=['service_package_id', 'plan_name', 'price'];

    // protected static function boot()
    // {
    //     parent::boot();
    //     if (auth()->check()) {
    //         static::addGlobalScope(new UserScope());
    //     }
    //     static::observe(\App\Observers\CommonObserver::class);
    // }

    function service_package(){
    	return $this->belongsTo('App\Models\ServicePackage', 'service_package_id', 'id');
    }
}
