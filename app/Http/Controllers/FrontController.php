<?php

namespace App\Http\Controllers;

use App\Models\Front;
use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function single_post($slug){
        echo "This is single post view";
    }
}
