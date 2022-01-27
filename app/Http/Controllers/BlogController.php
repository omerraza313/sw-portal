<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;

class BlogController extends Controller
{
 
    public function index()
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

    public function blog_sub_category(){

        $categories = BlogCategory::all();
        $subcategories = BlogSubCategory::all();
        return view('Admin.blog.blog_sub_category', compact('categories','subcategories'));

    }

     public function add_sub_category(Request $request){

         $request->validate([
            'name'=>'required|unique:blog_sub_categories'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/

        $model = new BlogSubCategory;
        $model->name = $request->post('name');
        $model->slug = $str2;
        $model->image = 'test';
        $model->blog_category_id = $request->blog_category_id;
        $model->save();
        return redirect('/admin/blog/sub_category')->with('msg', 'Category Inserted');

    }
 
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(Blog $blog)
    {
        //
    }

    
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
