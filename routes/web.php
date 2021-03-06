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
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SocialController;


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
Route::get('/test', [AdminController::class, 'testFunction']);

Route::get('/', [FrontController::class, 'home'])->name('front.home');

	
Auth::routes(['verify'=> true]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/**********Frontend Routes***********/

/********Home Page Search***********/
Route::get('/search', [FrontController::class, 'search'])->name('front.search');
/********Home Page Search End*******/

//Blog Routes
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('blog/{slug}', [FrontController::class, 'single_post'])->name('front.single.post');
Route::get('blog/category/{slug}', [FrontController::class, 'single_category_post'])->name('front.single.category_post');

//Services Routes

Route::get('user/{user_name}/{slug}', [FrontController::class, 'single_service'])->name('front.service.single');
Route::get('/service/', [FrontController::class, 'service_all'])->name('front.service.all');

Route::get('category/{slug}', [FrontController::class, 'single_category_service'])->name('front.single.category.service');

Route::get('/contact/', [FrontController::class, 'contact'])->name('front.contact');

Route::post('/newsletter', [NewsletterController::class, 'store'])->name('store.newsletter.email');

Route::get('/profile/user/{user_name}', [FrontController::class, 'profile']);

/**********End Frontend Routes***********/



/**********Admin Dashboard Routes***********/

//dashboard
Route::group(['middleware'=> ['admin', 'auth']], function(){
Route::group(['prefix'=>'admin'], function(){

	/**********Admin Controller************/

	


	Route::get('/', [AdminController::class, 'index'])->name('admin.dash');
	//Inbox View
	Route::get('/inbox', [AdminController::class, 'inbox'])->name('admin.inbox');
	//user View
	Route::get('/user', [AdminController::class, 'users'])->name('admin.user');

	//Blog routes

	Route::get('/blog', [BlogController::class, 'index'])->name('admin.blog');
	Route::get('/blog/add_post', [BlogController::class, 'add_post'])->name('admin.blog.add');
	Route::post('/blog/create_post', [BlogController::class, 'create_post'])->name('admin.blog.create');
	Route::get('/blog/edit_post/{id}', [BlogController::class, 'edit_post'])->name('admin.blog.edit');
	Route::post('/blog/update/', [BlogController::class, 'update_post'])->name('admin.blog.update');
	Route::get('/blog/delete_post/{id}', [BlogController::class, 'delete_post'])->name('admin.delete_post');
	Route::get('/blog/category', [BlogController::class, 'blog_category'])->name('admin.blog_category');
	Route::post('/blog/creat-category', [BlogController::class, 'create_blog_category'])->name('admin.blog.create_category');
	Route::post('/blog/edit-category', [BlogController::class, 'edit_category'])->name('admin.edit_category');
	Route::get('/blog/delete-category/{id}', [BlogController::class, 'delete_category'])->name('admin.delete_blog_category');
	Route::get('/blog/sub_category', [BlogController::class, 'blog_sub_category'])->name('admin.sub_blog_category');
	Route::post('/blog/sub_category/add', [BlogController::class, 'add_sub_category'])->name('admin.sub_category_add');
	Route::post('/blog/sub_category/edit', [BlogController::class, 'edit_sub_category'])->name('admin.edit_sub_category');
	Route::get('/blog/delete-sub-category/{id}', [BlogController::class, 'delete_sub_category'])->name('admin.delete_blog_sub_category');
	
	//Category Routes

	Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
	Route::post('/category/add', [CategoryController::class, 'create_category'])->name('admin.create_category');
	Route::post('/category/edit', [CategoryController::class, 'edit_category'])->name('admin.edit.category');
	Route::get('/category/delete/{id}', [CategoryController::class, 'delete_category'])->name('admin.delete_category');

	Route::get('/sub_category', [CategoryController::class, 'sub_category'])->name('admin.sub_category');
	Route::post('/sub_category/add', [CategoryController::class, 'create_sub_category'])->name('admin.sub_category.create');
	Route::post('/sub_category/edit', [CategoryController::class, 'edit_sub_category'])->name('admin.edit.sub_category');
	Route::get('/sub_category/delete', [CategoryController::class, 'delete_sub_category'])->name('admin.sub_category.delete');



	//business listing
	Route::get('/business', [AdminController::class, 'business'])->name('admin.business');
	//service listing
	Route::get('/services', [ServiceController::class, 'index'])->name('admin.service');
	Route::get('/service/add', [ServiceController::class, 'add_service'])->name('admin.service.add');
	Route::post('/service/create', [ServiceController::class, 'create_service'])->name('admin.service.create');
	Route::get('/service/edit/{id}', [ServiceController::class, 'edit_service'])->name('admin.service.edit');
	Route::post('/service/update', [ServiceController::class, 'service_update'])->name('admin.service.update');
	Route::get('/service/delete/{id}', [ServiceController::class, 'delete_service'])->name('admin.service.delete');
	Route::get('service/working_day/delete/{wdid}/{sid}', [ServiceController::class, 'delete_working_day'])->name('admin.service.workingday.delete');
	Route::get('/service/package', [ServiceController::class, 'service_package'])->name('admin.service.package');
	Route::get('/service/package/add/{id}', [ServiceController::class, 'add_service_package'])->name('admin.service.package.add');
	Route::post('/service/package/insert', [ServiceController::class, 'insert_service_package'])->name('admin.service.package.insert');
	Route::get('/service/package/{id}', [ServiceController::class, 'show_service_package'])->name('admin.service.package.show');
	Route::get('service/package/edit/{id}', [ServiceController::class, 'edit_service_package'])->name('admin.service.package.edit');
	Route::get('/service/package/delete/{packageid}/{serviceid}', [ServiceController::class, 'delete_service_package'])->name('admin.service.package.delete');
	Route::get('/service/package_attr/delete/{paid}/{sid}', [ServiceController::class, 'delete_package_attr'])->name('admin.service.package.attribute.delete');
	Route::post('/service/package/update', [ServiceController::class, 'update_service_package'])->name('admin.service.package.update');


	//Pending Approval
	Route::get('/approval', [AdminController::class, 'approval'])->name('admin.approval');
	Route::get('/approval/status/{id}', [AdminController::class, 'comment_satus_change'])->name('admin.approved');
	Route::get('/approval/delete/{id}', [AdminController::class, 'comment_delete'])->name('admin.approved.delete');	

	//pending services
	Route::get('/pending/services', [AdminController::class, 'pendingService']);
	Route::get('/pending/service/approval/{id}', [AdminController::class, 'approvalService']);
	//Notification
	Route::get('/notifications', [AdminController::class, 'notifications']);
	Route::post('/notification/read', [AdminController::class, 'notificationRead'])->name('notification.Read');


	//reviews
	
	Route::get('/review', [ReviewController::class, 'index'])->name('admin.review');
	Route::get('/review/approve/{approve}', [ReviewController::class, 'approve']);


	//newsletter

	Route::get('/newsletter', [NewsletterController::class, 'index'])->name('admin.newsletter');

});
});
/*********Admin Controller End******/

/*********Member Routes*************/
Route::group(['middleware'=> ['member', 'auth']], function(){


Route::group(['prefix'=>'member'], function(){

/**********Chat Routes************/
	Route::get('/chat/', [ChatController::class, 'chat'])->name('member.chat');
	Route::post('/chat/message/', [ChatController::class, 'chatMessage']);
	Route::get('/chat/get-messages', [ChatController::class, 'getMessages']);
	Route::get('/chat/syncMessage', [ChatController::class, 'syncMessages']);
	Route::get('/chat/list', [ChatController::class, 'chatList']);
	Route::post('/chat/init', [ChatController::class, 'chatInit'])->name('chat.init');

/********End Chat Routes*********/


	Route::get('/dashboard', [MemberController::class, 'dashboard'])->name('member.dashboard');
	//service listing
	Route::get('/service', [MemberController::class, 'index'])->name('member.service');
	Route::get('/service/add', [MemberController::class, 'add_service'])->name('member.service.add');
	Route::post('/service/create', [MemberController::class, 'create_service'])->name('member.service.create');
	Route::get('/service/edit/{service}', [MemberController::class, 'edit_service'])->name('member.service.edit');
	Route::post('/service/update', [MemberController::class, 'service_update'])->name('member.service.update');
	Route::get('/service/delete/{id}', [MemberController::class, 'delete_service'])->name('member.service.delete');
	Route::get('/service/working_day/delete/{wdid}/{sid}', [MemberController::class, 'delete_working_day'])->name('member.service.workingday.delete');
	Route::get('/service/package', [MemberController::class, 'service_package'])->name('member.service.package');
	Route::get('/service/package/add/{id}', [MemberController::class, 'add_service_package'])->name('member.service.package.add');
	Route::post('/service/package/insert', [MemberController::class, 'insert_service_package'])->name('member.service.package.insert');
	Route::get('/service/package/{service}', [MemberController::class, 'show_service_package'])->name('member.service.package.show');
	Route::get('service/package/edit/{servicePackage}/{service}', [MemberController::class, 'edit_service_package'])->name('member.service.package.edit');
	Route::get('/service/package/delete/{packageid}/{serviceid}', [MemberController::class, 'delete_service_package'])->name('member.service.package.delete');
	Route::get('/service/package_attr/delete/{paid}/{sid}', [MemberController::class, 'delete_package_attr'])->name('member.service.package.attribute.delete');
	Route::post('/service/package/update', [MemberController::class, 'update_service_package'])->name('member.service.package.update');

	/********Member Profile**********/
	Route::get('/profile/', [MemberController::class, 'user_profile'])->name('member.profile');
	Route::post('/profile/update', [MemberController::class, 'user_profile_update'])->name('member.update.profile');
	Route::post('/profile/update_info', [MemberController::class, 'user_profile_info_update'])->name('member.profile.info.update');

	Route::post('/profile/social/update', [SocialController::class, 'update'])->name('member.social.info.update');
	/********End Member Profile******/

	/********* Favourites ************/

	Route::get('favourites', [FavouriteController::class, 'index']);
	Route::post('favourite', [FavouriteController::class, 'favourite']);

	Route::post('review', [ReviewController::class, 'storeReview']);


});

});
/*********End Member Routes*********/
	
	Route::post('/blog/add-comment', [BlogController::class, 'addComment'])->name('blog.comment.add');


