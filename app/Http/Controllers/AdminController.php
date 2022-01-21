<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('Admin.dashboard');
    }
    /********All User View*******/
    public function users()
    {
    	return view('Admin.user.user');
    }

    /**********All Blog function************/
    public function blog()
    {
    	return view('Admin.blog.post');
    }
    public function blog_category()
    {
        return view('Admin.blog.blog_category');
    }

    /**********Blog Functions End***********/

    /**********All Business View***********/
    public function business()
    {
        return view('Admin.business.business');
    }
    /*********All Service View**********/
    public function service()
    {
        return view('Admin.service.service');
    }
    /*********Pending Approvals View********/
    public function approval()
    {
        return view('Admin.approval.approvals.approvals');
    }
    /*********Pending Reviews View********/
    public function review()
    {
        return view('Admin.approval.reviews.reviews');
    }


}
