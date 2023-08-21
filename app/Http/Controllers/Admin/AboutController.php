<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\AboutRepository;
use App\Models\About;  
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class AboutController extends Controller
{
    protected $about; 

    public function __construct(About $about){
        $this->about             = new AboutRepository($about);  
    }
    public function index(){
        return view("admin.manager.about");
    }
    public function get(Request $request){  
        $data = $this->about->get_one(1);
        return $this->about->send_response("Update successful", $data, 200);
    }
    public function update(Request $request){  
        $data = $this->about->get_one(1);

        $home_decode = json_decode($data->home);
        if ($request->data_image_header_1 != "null") { $home_decode->data_image_header_1 = $this->about->imageInventor('image-about', $request->data_image_header_1, 300); }
        if ($request->data_image_header_2 != "null") { $home_decode->data_image_header_2 = $this->about->imageInventor('image-about', $request->data_image_header_2, 300); }
        if ($request->data_image_header_3 != "null") { $home_decode->data_image_header_3 = $this->about->imageInventor('image-about', $request->data_image_header_3, 300); }
        if ($request->data_image_header_4 != "null") { $home_decode->data_image_header_4 = $this->about->imageInventor('image-about', $request->data_image_header_4, 300); }
        if ($request->data_image_about != "null") { $home_decode->data_image_about = $this->about->imageInventor('image-about', $request->data_image_about, 600); }
        $home_decode->data_num_1 = $request->data_num_1;
        $home_decode->data_num_2 = $request->data_num_2;
        $home_decode->data_num_3 = $request->data_num_3;
        $home_decode->data_num_4 = $request->data_num_4;
        $home_decode->data_detail_1 = $request->data_detail_1;
        $home_decode->data_detail_2 = $request->data_detail_2;
        $home_decode->data_detail_3 = $request->data_detail_3;
        $home_decode->data_detail_4 = $request->data_detail_4;
        $home_decode->data_detail_5 = $request->data_detail_5;
        if ($request->data_image_contact != "null") { $home_decode->data_image_contact = $this->about->imageInventor('image-about', $request->data_image_contact, 600); }
        $home_encode = json_encode($home_decode);

        $about_decode = json_decode($data->about);
        if ($request->data_image_about_01 != "null") { $about_decode->data_image_about_01 = $this->about->imageInventor('image-about', $request->data_image_about_01, 600); }
        if ($request->data_image_about_02 != "null") { $about_decode->data_image_about_02 = $this->about->imageInventor('image-about', $request->data_image_about_02, 600); }
        if ($request->data_image_about_03 != "null") { $about_decode->data_image_about_03 = $this->about->imageInventor('image-about', $request->data_image_about_03, 600); }
        $about_encode = json_encode($about_decode);
 
        $data = [ 
            "home"              => $home_encode, 
            "about"          => $about_encode,  
        ];
 
        $data_update = $this->about->update($data, 1);
        return $this->about->send_response("Update successful", $data_update, 200);
    }
}
