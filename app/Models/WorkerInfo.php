<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkerInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'user_id',
        'profile_img',
        'education',
        'country',
        'state',
        'city',
        'town',
        'zip_code',
        'personal_info'
    ];

    public function user(){

        return $this->belongsTo('App\Models\User');
    }
}
