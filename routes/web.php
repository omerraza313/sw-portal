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
	Route::get('/blog', [AdminController::class, 'blog'])->name('admin.blog');
	Route::get('blog-category', [AdminController::class, 'blog_category'])->name('admin.blog_category');
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
