<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Blog extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['title', 'slug' ,'blog_category_id', 'blog_sub_category_id','post_image', 'body'];

    public function category(){

    	return $this->belongsTo('App\Models\BlogCategory' , 'blog_category_id' , 'id');
    }

     public function subcategory(){

    	return $this->belongsTo('App\Models\BlogSubCategory', 'blog_sub_category_id' , 'id');
    }


    public function comments(){

        return $this->hasMany('App\Models\Comment');
    }

    public function approvedComments(){

        return $this->comments()->where('status', 'approved');
    }
}
