<?php

namespace App\Http\Controllers;


use App\Models\Service;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ServiceWorkingDay;
use App\Models\ServicePackage;
use App\Models\ServicePackageAttr;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\WorkerInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notification;
use App\Notifications\NewServiceNotification;
use Auth;

class MemberController extends Controller
{
    public function __construct(){

        $this->middleware(['auth','verified']);
    }

    public function dashboard(){
        $service = Service::where('user_id', Auth::id())->count();
        return view('Member.dashboard.member_dash', compact('service'));
    }

    public function index()
    {
        $service = Service::where('user_id', Auth::id())->get();
    
        return view('Member.service.service', compact('service'));
    }

    public function add_service(){

        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('Member.service.add_service', compact('categories','sub_categories'));
    }

    public function create_service(Request $request){
        //return $request;

       $content = $request->service_desc;
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

        $service = new Service;
        $service->user_id = Auth::user()->id;
        $service->title = $request->service_title;


/**********Converting title to lowercase************/
       $str = $request->service_title;
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);
/************End Converting Title to Lowercase*******************/

        $service->slug = $str2;

        /************Image Handling****************/

        if($request->hasfile('featured_img')){
            $image = $request->file('featured_img');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->storeAs('/public/media', $image_name);
            $service->featured_img = $image_name;
        }
        
        /************Image Handling End*********/
        $service->category_id = $request->category_id;
        $service->sub_category_id = $request->sub_category_id;
        $service->description = $content;
        $service->status = 'draft';
        $service->save();
               
        $notify_user = User::find($service->user_id);

        $notify_user->notify(new NewServiceNotification($service));

        // Notification::send(new NewServiceNotification($service));

        $sid = $service->id;

        /********Working Days********/
        $dayArr = $request->post('service_day');
        $hour_fArr = $request->post('hour_from');
        $hour_tArr = $request->post('hour_to');

        foreach($dayArr as $key=>$value)
        {
            $workingArr['service_id'] = $sid;
            $workingArr['day'] = $dayArr[$key];
            $workingArr['opening_at'] = $hour_fArr[$key];
            $workingArr['closing_at'] = $hour_tArr[$key];

            DB::table('service_working_days')->insert($workingArr);
        }
        /******End Working Days******/

        $request->session()->flash('add', 'New Product Inserted');
        return redirect('/member/service');

    }

    public function edit_service(Service $service){

        $this->authorize('canEdit', $service);
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        
        $working_days = ServiceWorkingDay::where('service_id', $service->id)->get();
        //return $working_days;
        
        return view('Member.service.edit_service', compact('service', 'working_days', 'categories', 'sub_categories'));
    }

    public function service_update(Request $request){
        //return $request;

        $content = $request->service_desc;
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

        $find_service = Service::find($request->id);

        $find_service->id = $request->id;
        $find_service->title = $request->title;

/**********Converting title to lowercase************/
       $str = $request->title;
        $str1 = strtolower($str);
        $str2 = str_replace(" ","-",$str1);
/************End Converting Title to Lowercase*******************/

        $find_service->slug = $str2;

         /************Image Handling****************/

        if($request->hasfile('featured_img')){
            $image = $request->file('featured_img');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->storeAs('/public/media', $image_name);
            $find_service->featured_img = $image_name;
        }
        
        /************Image Handling End*********/
        //$find_service->featured_img = 'test';

        $find_service->category_id = $request->category_id;
        $find_service->sub_category_id = $request->sub_category_id;
        $find_service->description = $content;
        $find_service->save();
        $sid = $find_service->id;

        /*****Working Days**********/ 
        $swdidArr = $request->post('working_day_id');
        $dayArr = $request->post('service_day');
        $hour_fArr = $request->post('hour_from');
        $hour_tArr = $request->post('hour_to');
        //return $dayArr;
        foreach($dayArr as $key=>$list)
        {
            $workingArr['service_id'] = $sid;
            $workingArr['day'] = $dayArr[$key];
            $workingArr['opening_at'] = $hour_fArr[$key];
            $workingArr['closing_at'] = $hour_tArr[$key];

           // return $swdidArr[$key];
           // return $workingArr;
            if($swdidArr[$key] > 0){
                DB::table('service_working_days')->where(['id'=>$swdidArr[$key]])->update($workingArr);
            }
            else{
                DB::table('service_working_days')->insert($workingArr);
            }
           
        }
        /*****End Working Day*******/

         return redirect('/member/service')->with('msg', 'Service has been updated');
    }

    public function delete_working_day(Request $request ,$dayid, $serviceid){
        $model = ServiceWorkingDay::where('id', $dayid)->first();
        $check = $model->delete();
        if($check){
            return redirect('Member/service/edit/'.$serviceid);
        }
        else{
            echo "Not Deleted";
        }
    }
    public function delete_service($id){
        $service = Service::findOrfail($id);
        $serv_days = ServiceWorkingDay::where('service_id', $service->id)->get();
        $serv_packs = ServicePackage::where('service_id', $service->id)->get();

         /*******Delete Package Attributes********/

        // foreach($serv_packs->package_attrs as $key=>$attr){
        //     $attr->delete();
        // }

        /*******Delete Package********/

        foreach($serv_packs as $key=>$pack){

            foreach($pack->package_attrs as $key=>$list){
                $list->delete();
            }
            $pack->delete();
        }

        /*******Delete Working Days********/

        foreach($serv_days as $key=>$day){
            $day->delete();
        }

        /*******Delete Service********/
        $service->delete();

        return redirect('member/service')->with('msg', 'Service Deleted');
        // $single_package = ServicePackage::findOrfail($packageid);
        // foreach($single_package->package_attrs as $key=>$list){
        //     $list->delete();
       // return $serv_packs;
    }

    public function service_package()
    {
        return view('Member.service.service_package');
    }

    public function add_service_package($id){
        return view('Member.service.add_service_package', compact('id'));
    }

    public function insert_service_package(Request $request){

     
        $service_id = $request->service_id;

        $model = new ServicePackage;
       
        $model->service_id = $request->service_id;
        $model->package_type = $request->package_name;
        $model->save();

        $package_id = $model->id;
        $detailArr = $request->post('plan_name');
        $priceArr = $request->post('price');
        // return count($request->plan_name);
        foreach($detailArr as $key=>$val){

            $packageAttr['service_package_id'] = $package_id;
            $packageAttr['plan_name'] = $detailArr[$key];
            $packageAttr['price'] = $priceArr[$key];


            DB::table('service_package_attrs')->insert($packageAttr);
        }
       
       $service_package_count = ServicePackage::where('service_id', $service_id)->count();

        if ($service_package_count == 1) {
             $service = Service::find($service_id);
            $service->status = 'pending';
            $service->is_Approve = 0;
            $service->update();
        }
        
        return redirect('/member/service/')->with('msg','Package has been added');

    }

    public function show_service_package(Service $service){
        $this->authorize('canEdit', $service);
        $package = ServicePackage::where('service_id', $service->id)->get();
        //$package = ServicePackage::where('id', $pid)->where('service_id', $id)->first();
        return view('Member.service.service_package', compact('service', 'package'));
      
    }

    public function delete_service_package($packageid, $serviceid){

        $id = $serviceid;
        //echo "This is delete function";
        $single_package = ServicePackage::findOrfail($packageid);
        foreach($single_package->package_attrs as $key=>$list){
            $list->delete();
        }
        $single_package->delete();
        $package = ServicePackage::where('service_id', $id)->get();
        return view('Member.service.service_package', compact('id', 'package'));
        //return redirect()->route('Member.service.package.show', ['id' => $id]);
        // return redirect('')->with(compact('id'));
       // return $package->package_attrs;
    }

    public function edit_service_package(ServicePackage $servicePackage, Service $service){
        //return $id;
        $this->authorize('canEdit', $service);
        // $package = ServicePackage::findOrfail($id);
        // return $servicePackage->package_attrs;
        // return $servicePackage;
        // $packageAttr = $servicePackage->with('package_attrs')->get();
        // return $packageAttr;
        $packageAttr = $servicePackage->package_attrs;;
        // return $packageAttr;
        return view('Member.service.edit_service_package', compact('servicePackage', 'packageAttr'));
    }

    public function update_service_package(Request $request){
        //return $request;
        $pack_update = ServicePackage::find($request->id);
        $pack_update->id = $request->id;
        $pack_update->service_id = $request->service_id;
        $pack_update->package_type = $request->package_name; 
        $pack_update->save();
        $pid = $pack_update->id;

        /********Package Attributes*********/
        $packAttrid = $request->post('package_attr_id');
        $packPlan_name = $request->post('plan_name');
        $packPrice = $request->post('price');

        foreach($packPrice as $key=>$list){
            $packageAttribute['service_package_id'] = $pid;
            $packageAttribute['plan_name'] = $packPlan_name[$key];
            $packageAttribute['price'] = $packPrice[$key];

            if($packAttrid[$key]>0){

                DB::table('service_package_attrs')->where(['id'=>$packAttrid[$key]])->update($packageAttribute);
            }
            else{

                DB::table('service_package_attrs')->insert($packageAttribute);
            }
        }
        return redirect('/member/service/')->with('msg','Package has been updated');
    }

    public function delete_package_attr($paid, $sid){
        $p_attr = ServicePackageAttr::findOrfail($paid);
        $package = ServicePackage::where('id', $p_attr->service_package_id)->first();
       
        //$p_attr = ServicePackageAttr::findOrfail($paid);
        $check = $p_attr->delete();
         $packageAttr = ServicePackageAttr::where('service_package_id', $package->id)->get();
        if($check){

            return redirect('Member/service/package/edit/'. $package->id)->with(['package' => $package, 'packageAttr' => $packageAttr]);

            // return view('Member.service.edit_service_package', compact('package', 'packageAttr'));
        }
        else{
            echo "Not deleted";
        }
    }

    /*********Member Profile**********/
    public function user_profile()
    {
        return view('Member.profile.profile');
    }

    public function user_profile_update(Request $request){

        // $data validator::make($request([

        //     'password' => ['required', 'string', 'min:8', 'confirmed'],

        // ]));

        $password = Hash::make($request->password);      

        $user = User::find(Auth::id());
        $user->password = $password;
        $user->update();

        return redirect()->back();
    }

    public function user_profile_info_update(Request $request)
    {

        if($request->hasfile('profile_img')){
            $image = $request->file('profile_img');
            $ext = $image->extension();
            $image_name = time().'.'.$ext;
            $image->storeAs('/public/media', $image_name);
            $profile_img = $image_name;
        }

        $data = [

             
            'profile_img' => $profile_img,
            'education' => $request->education,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'town' => $request->town,
            'zip_code' => $request->zip_code,
            'personal_info' => $request->personal_info

        ];

        WorkerInfo::updateOrCreate(
            [

                'user_id' => Auth::id()
            ],
            $data);

        return redirect()->back();



    }
    /*********End Member Profile*******/



}
