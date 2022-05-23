<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\UserScope;
use Illuminate\Notifications\Notifiable;
use Auth;

class Service extends Model
{
    use HasFactory, Notifiable;


    // protected static function boot()
    // {
    //     parent::boot();
    //     if (auth()->check()) {
    //         static::addGlobalScope(new UserScope());
    //     }
    //     static::observe(\App\Observers\CommonObserver::class);
    // }

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

    public function favourite(){

        return $this->hasMany('App\Models\Favourite');
    }

    public function userFav(){

        return $this->favourite()->where('user_id', Auth::id());
    }

    public function reviews(){

        return $this->hasMany('App\Models\Review');
    }

    public function approvedReviews(){

        return $this->reviews()->where('status', 'approved');
    }

    public function pendingReviews(){

        return $this->reviews()->where('status', 'pending');
    }


}
