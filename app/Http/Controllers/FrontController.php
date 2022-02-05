<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function single_post($slug){
        $single_post = Blog::where('slug',$slug)->first();
        $blog_cat = BlogCategory::all();
        //return $blog;
        return view('Front.blog.single_post', compact('single_post', 'blog_cat'));
    }
}
