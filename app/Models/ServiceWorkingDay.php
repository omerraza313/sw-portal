<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;

class ServiceWorkingDay extends Model
{
    use HasFactory;

    // protected static function boot()
    // {
    //     parent::boot();
    //     if (auth()->check()) {
    //         static::addGlobalScope(new UserScope());
    //     }
    //     static::observe(\App\Observers\CommonObserver::class);
    // }

    function service(){
    	return $this->belongsTo('\App\Models\Service');
    }
}
