<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
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

	Route::get('/', [AdminController::class, 'index'])->name('admin.dash');

	//admin business
	Route::get('/business', [BusinessController::class, 'index'])->name('admin.business');

	//admin service
	Route::get('/service', [ServiceController::class, 'index'])->name('admin.service');

	//admin category
	Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');

	//admin category
	Route::get('/sub-category', [SubCategoryController::class, 'index'])->name('admin.sub-categpry');

});
