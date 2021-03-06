<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'icon'];

    public function services(){
    	return $this->hasMany('\App\Models\Service');
    }

    public function subcategories(){

    	return $this->hasMany('App\Models\SubCategory');
    }

}
