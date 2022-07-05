<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
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
            'name'=>'required|unique:categories',
            'icon'=>'required'

        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/

        $model = new Category;
        $model->name = $request->name;
        $model->slug = $str2;
        $model->icon = $request->icon;
        $model->save();
        return redirect('/admin/category')->with('msg', 'Category Has Been Added');
    }

    public function edit_category(Request $request){
         $request->validate([
            'name'=>'required|unique:categories',
            'icon'=>'required'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/
        $edit_cat = Category::find($request->id);
        $edit_cat->name = $request->name;
        $edit_cat->slug = $str2;
        $edit_cat->icon = "test";
        $edit_cat->save();
        return redirect('/admin/category')->with('msg', 'Category Has Been Updated');
    }
    
    public function delete_category($id){
        $model = Category::where('id',$id)->first();
        $model->delete();
        return redirect('admin/category')->with('del_msg', 'Category has been deleted');
    }

    public function sub_category()
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('Admin.category.sub_category', compact('categories', 'sub_categories'));
    }

    public function create_sub_category(Request $request){

        $request->validate([
            'name'=>'required|unique:sub_categories'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/

        $model = new SubCategory;
        $model->name = $request->name;
        $model->slug = $str2;
        $model->image = "test";
        $model->category_id = $request->category_id;
        $model->save();
        return redirect('/admin/sub_category')->with('msg', 'Category Has Been Added');
    }

    public function edit_sub_category(Request $request){
         $request->validate([
            'name'=>'required|unique:sub_categories'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/
        $edit_cat = SubCategory::find($request->id);
        $edit_cat->name = $request->name;
        $edit_cat->slug = $str2;
        $edit_cat->image = "test";
        $edit_cat->category_id = $request->category_id;
        $edit_cat->save();
        return redirect('/admin/sub_category')->with('msg', 'Sub Category Has Been Updated');
    }

    
    public function delete_sub_category($id)
    {
        $model = SubCategory::where('id',$id)->first();
        $model->delete();
        return redirect('admin/sub_category')->with('del_msg', 'Sub Category has been deleted');
    }

}
