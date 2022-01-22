<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;

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
        $data = BlogCategory::all();
        return view('Admin.blog.blog_category', compact('data'));
    }
    public function create_category(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:blog_categories'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/

        $model = new BlogCategory;
        $model->name = $request->post('name');
        $model->slug = $str2;
        $model->image = 'test';
        $model->save();
        return redirect('/admin/blog/category')->with('msg', 'Category Inserted');
    }
    public function edit_category(Request $request)
    {
        //return $request;
        $request->validate([
            'name'=>'required|unique:blog_categories'
        ]);
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/
        $edit_category = BlogCategory::find($request->id);
       // return $edit_category;

        $edit_category->name = $request->name;
        $edit_category->slug = $str2;
        $edit_category->image = 'test';
        $edit_category->save();
        return redirect('/admin/blog/category')->with('msg', 'Category Updated');

    }
    public function delete_category($id)
    {
        $model = BlogCategory::find($id);
        $model->delete();
        return redirect('/admin/blog/category')->with('msg', 'Category Deleted');
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
