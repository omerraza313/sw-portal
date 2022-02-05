<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogController;

class BlogController extends Controller
{
 
    public function index()
    {
        $posts = Blog::all();
        return view('Admin.blog.posts', compact('posts'));
    }
    public function add_post(){
        $blog_categories = BlogCategory::all();
        $blog_sub_categories = BlogSubCategory::all();
        return view('Admin.blog.add_post', compact('blog_categories','blog_sub_categories'));
    }
    public function create_post(Request $request){
       

       $request->validate([
            'post_image'=>'required|mimes:jpeg,jpg,png'
        ]);

       $content = $request->body;
       $dom = new \DomDocument();
       $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
       $imageFile = $dom->getElementsByTagName('imageFile');
 
       foreach($imageFile as $item => $image){
           $data = $img->getAttribute('src');

           list($type, $data) = explode(';', $data);
           list(, $data)      = explode(',', $data);

           $imgeData = base64_decode($data);
           $image_name= "/upload/" . time().$item.'.png';
           $path = public_path() . $image_name;
           file_put_contents($path, $imgeData);
           
           $image->removeAttribute('src');
           $image->setAttribute('src', $image_name);
        }
 
       $content = $dom->saveHTML();

/**********Converting title to lowercase************/
       $str = $request->post('title');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);
/************End Converting Title to Lowercase*******************/
//return $str2;
       $post = new Blog;

       
       $post->title = $request->title;
       $post->slug = $str2;
       $post->blog_category_id = $request->blog_category_id;
       $post->blog_sub_category_id = $request->blog_sub_category_id;

       /************Image Handling****************/

        if($request->hasfile('post_image')){
            $image = $request->file('post_image');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->storeAs('/public/media', $image_name);
            $post->post_image = $image_name;
        }
        //return $request->file('post_image');
        /************Image Handling End*********/

       $post->body = $content;

       $post->save();

       return redirect('/admin/blog')->with('msg', 'Post has been created');


    }

    public function edit_post($id){

        $blog_categories = BlogCategory::all();
        $blog_sub_categories = BlogSubCategory::all();

        $post = Blog::findOrfail($id);
       // return $post;

        return view('Admin.blog.edit_post', compact('post','blog_categories','blog_sub_categories'));
    }

    public function update_post(Request $request){

/************Converting Title to lowercase*****************/
        $str = $request->post('title');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);
/************End Converting Title to Lowercase*************/
       
        $request->merge([

            'slug' => $str2
        ]);
    
       Blog::find($request->id)->update($request->all());

       return redirect('admin/blog')->with('update_msg', 'Post has been updated');

    }

    public function delete_post($id){
        $model = Blog::where('id',$id)->first();
        $model->delete();
        return redirect('admin/blog')->with('del_msg', 'Post has been deleted');
    }

    public function blog_category()
    {
        $data = BlogCategory::all();
        return view('Admin.blog.blog_category', compact('data'));
    }
    
    public function create_blog_category(Request $request)
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
        $blog_sub_category = $model->subcategories;
        foreach($blog_sub_category as $sub_category){

            $sub_category->delete();
        }
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

    public function edit_sub_category(Request $request){

        $request->validate([
            'name'=>'required|unique:blog_sub_categories'
        ]);
        
        /*******Converting slug to lowercase******/

        $str = $request->post('name');
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);

        /********Slug Converted*******/
        $edit_sub_cat = BlogSubCategory::find($request->id);
        $edit_sub_cat->name = $request->post('name');
        $edit_sub_cat->slug = $str2;
        $edit_sub_cat->image = 'test';
        $edit_sub_cat->blog_category_id = $request->blog_category_id;
        $edit_sub_cat->save();
        return redirect('/admin/blog/sub_category')->with('msg', 'Category Updated');
    }

    public function delete_sub_category($id)
    {
        $model = BlogSubCategory::find($id);
        
        $model->delete();
        
        return redirect('/admin/blog/sub_category')->with('msg', 'Sub Category Deleted');
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
