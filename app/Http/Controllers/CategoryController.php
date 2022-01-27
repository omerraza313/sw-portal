<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('Admin.category.category', compact('categories'));
    }

    public function create_category(Request $request){

        $request->validate([
            'name'=>'required|unique:categories'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/

        $model = new Category;
        $model->name = $request->name;
        $model->slug = $str2;
        $model->image = "test";
        $model->business_id = 0;
        $model->save();
        return redirect('/admin/category')->with('msg', 'Category Has Been Added');
    }

    public function edit_category(Request $request){
         $request->validate([
            'name'=>'required|unique:categories'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/
        $edit_cat = Category::find($request->id);
        $edit_cat->name = $request->name;
        $edit_cat->slug = $str2;
        $edit_cat->image = "test";
        $edit_cat->business_id = 0;
        $edit_cat->save();
        return redirect('/admin/category')->with('msg', 'Category Has Been Updated');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
