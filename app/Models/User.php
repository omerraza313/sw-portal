<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'f_name',
        'l_name',
        'username',
        'email',
        'role',
        'account_type',
        'profile_img',
        'education',
        'country',
        'state',
        'city',
        'town',
        'zip_code',
        'personal_info',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setEmailAttribute($value){
      $this->attributes['email'] = strtolower($value);
    }

    public function setFNameAttribute($value){
      $this->attributes['f_name'] = ucfirst($value);
    }

    public function setLNameAttribute($value){
      $this->attributes['l_name'] = ucfirst($value);
    }


    public function services(){

        return $this->hasMany('App\Models\Service');
    }

    public function favourites(){

        return $this->hasMany('App\Models\Favourite');
    }

    public function info(){

        return $this->hasOne('App\Models\WorkerInfo');
    }

    public function chat(){

        return $this->hasMany('App\Models\Chat');
    }
    public function social(){

        return $this->hasOne('App\Models\Social');
    }
}
