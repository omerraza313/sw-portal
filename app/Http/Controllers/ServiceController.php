<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.service.service');
    }

    public function add_service(){

        $categories = Category::all();
        $sub_categories = SubCategory::all();
        return view('Admin.service.add_service', compact('categories','sub_categories'));
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
        $service->user_id = 1;
        $service->title = $request->service_title;
        $service->category_id = $request->category_id;
        $service->sub_category_id = $request->sub_category_id;
        $service->description = $content;

        $service->save();
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
        return redirect('/admin/service');

    }
}
