<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogCategory;
use App\Models\BlogSubCategory;
use App\Models\User;
use App\Models\Comment;
use DB;
use App\Models\Service;

class AdminController extends Controller
{
    public function testFunction(){

        $notifications = DB::table('notifications')->where('read_at', null)->get();

        // dd($notifications);

        foreach($notifications as $notify){
            
           $array = json_decode($notify->data);
           echo $array->username;

        }

    }

    public function __construct(){

        $this->middleware('auth');
    }
    public function index()
    {
    	return view('Admin.dashboard');
    }

    public function notifications(){

         $notifications = DB::table('notifications')->where('read_at', null)->get();
        return view('Admin.notifications.notifications', compact('notifications'));
    }

    public function notificationRead(Request $request){

         auth()->user()
        ->unreadNotifications
        ->when($request->input('id'), function ($query) use ($request) {
            return $query->where('id', $request->input('id'));
        })
        ->markAsRead();

        return redirect()->back();


    }

    /********All User View*******/
    public function users()
    {
        $users = User::all();
        // $users = User::where('role', 'Member')->get();
    	return view('Admin.user.user', compact('users'));
    }

    /**********inbox Functions Start************/

    public function inbox(){
        echo "This is inbox";
    }
    /**********Inbox Functions End***********/

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
        $comments = Comment::where('status','pending')->get();
        //return $comments;
        return view('Admin.approval.approvals.approvals', compact('comments'));
    }
    public function comment_satus_change($id){
        // echo "this is status";
        // die();
       $single_comment = Comment::findOrfail($id);
       $single_comment->status = 'approved';
       $single_comment->save();
       return redirect('/admin/approval')->with('success', 'Comment has been approved');
    }
    public function comment_delete($id){
        $single_comment = Comment::findOrfail($id);
        $single_comment->delete();
       return redirect('/admin/approval')->with('danger', 'Comment has been deleted');
    }
    /*********Pending Reviews View********/
    public function review()
    {
        return view('Admin.approval.reviews.reviews');
    }

    public function pendingService(){

        $pending_services = Service::where('is_Approve', false)->get();
        return view('Admin.approval.service_approval.service_approval', compact('pending_services'));
    }

    public function approvalService($id){

        $service = Service::find($id);
        $service->is_Approve = 1;
        $service->status = 'publish';
        $service->update();

        return redirect()->back();
    }


}
