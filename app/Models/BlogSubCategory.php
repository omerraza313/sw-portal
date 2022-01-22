<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSubCategory extends Model
{
    use HasFactory;

      public function category(){

    	return $this->belongsTo('App\Models\BlogCategory');
    }



    // $categories = Category::all();

    // <select name="category_id">
    // @foreach($categories as $cat)

    // <option value="{{$cat->id}}">
}
