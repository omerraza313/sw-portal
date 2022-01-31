<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogSubCategoryController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\FavouriteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**********Admin Dashboard Routes***********/

//dashboard
Route::group(['prefix'=>'admin'], function(){

	/**********Admin Controller************/
	Route::get('/', [AdminController::class, 'index'])->name('admin.dash');
	//user View
	Route::get('/user', [AdminController::class, 'users'])->name('admin.user');

	//Blog routes

	Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
	Route::get('/blog/add_post', [BlogController::class, 'add_post'])->name('admin.blog.add');
	Route::post('/blog/create_post', [BlogController::class, 'create_post'])->name('admin.blog.create');


	Route::get('/blog/category', [BlogController::class, 'blog_category'])->name('admin.blog_category');
	Route::post('/blog/creat-category', [BlogController::class, 'create_blog_category'])->name('admin.blog.create_category');
	Route::post('/blog/edit-category', [BlogController::class, 'edit_category'])->name('admin.edit_category');
	Route::get('/blog/delete-category/{id}', [BlogController::class, 'delete_category'])->name('admin.delete_blog_category');
	Route::get('/blog/sub_category', [BlogController::class, 'blog_sub_category'])->name('admin.sub_blog_category');
	Route::post('/blog/sub_category/add', [BlogController::class, 'add_sub_category'])->name('admin.sub_category_add');
	Route::post('/blog/sub_category/edit', [BlogController::class, 'edit_sub_category'])->name('admin.edit_sub_category');
	
	//Category Routes

	Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
	Route::post('/category/add', [CategoryController::class, 'create_category'])->name('admin.create_category');
	Route::post('/category/edit', [CategoryController::class, 'edit_category'])->name('admin.edit_category');
	Route::get('/category/delete/{id}', [BlogController::class, 'delete_category'])->name('admin.delete_category');

	//business listing
	Route::get('/business', [AdminController::class, 'business'])->name('admin.business');
	//service listing
	Route::get('/service', [AdminController::class, 'service'])->name('admin.service');
	//Pending Approval
	Route::get('/approval', [AdminController::class, 'approval'])->name('admin.approval');
	//Pending Review
	Route::get('/review', [AdminController::class, 'review'])->name('admin.review');



	/*********Admin Controller End*******/


});
