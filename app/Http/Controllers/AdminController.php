<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;

class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }
    public function index()
    {
    	return view('Admin.dashboard');
    }
    /********All User View*******/
    public function users()
    {
    	return view('Admin.user.user');
    }

    /**********inbox Functions Start************/

    public function inbox(){
        echo "This is inbox";
    }
    /**********Inbox Functions End***********/

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
