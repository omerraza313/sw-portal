<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Service;
use App\Models\ServiceWorkingDay;
use App\Models\ServicePackage;
use App\Models\ServicePackageAttr;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class FrontController extends Controller
{
    public function home(){
        $service = Service::orderBy('id', 'desc')->take(4)->get();;
        $category = Category::all();
        $recent_posts = Blog::orderBy('created_at', 'desc')->take(3)->get();
        return view('Front.home.home', compact('service','category', 'recent_posts'));
    }
    public function blog(){
        $blog = Blog::all();
        return view('Front.blog.blog', compact('blog'));
        //return $blog;
    }
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

    /*************Service Routes**************/
    
    public function single_service($user_name, $slug){
       $user = User::where('username', $user_name)->first();
       $service = Service::where('user_id', $user->id)->where('slug', $slug)->first();
       $service_package = ServicePackage::where('service_id', $service->id)->get();
       // return $service_package;
       return view('Front.service.single_service', compact('user', 'service', 'service_package'));
    }
 
}
