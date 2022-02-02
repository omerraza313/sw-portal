<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;


    public function subcategories(){

    	return $this->hasMany('App\Models\BlogSubCategory');
    }

    public function blogs(){

    	return $this->hasMany('App\Models\Blog');
    }
}
