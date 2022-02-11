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
        $recent_posts = Blog::orderBy('created_at', 'desc')->take(3)->get();
        //return $blog;
        return view('Front.blog.single_post', compact('single_post', 'blog_cat', 'recent_posts'));
    }

    public function single_category_post($slug){
    	$blog_cat = BlogCategory::all();
    	$single_cat = BlogCategory::where('slug', $slug)->first();
    	$blog_posts = $single_cat->blogs;
    	$recent_posts = Blog::orderBy('created_at', 'desc')->take(3)->get();
        
        //return $recent_posts;

        return view('Front.blog.single_category_post', compact('blog_cat', 'blog_posts', 'recent_posts'));
    }
}
