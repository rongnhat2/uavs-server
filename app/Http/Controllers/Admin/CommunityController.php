<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\CommunityRepository;
use App\Models\Community; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class CommunityController extends Controller
{
    protected $community;

    public function __construct(Community $community){
        $this->community             = new CommunityRepository($community); 
    }
    public function index(){
        return view("admin.manager.community");
    }

    public function get(){
        $data = $this->community->get_all();
        return $this->community->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->community->get_one($id);
        return $this->community->send_response(200, $data, null);
    }
 
    public function store(Request $request){    
        $data_image = $this->community->imageInventor('image-community', $request->data_image, 500);
        $data = [ 
            "name"      => $request->data_name,  
            "image"      => $data_image,  
            "description"      => $request->data_description, 
            "facebook"      => $request->data_facebook, 
            "google"      => $request->data_google, 
        ];
        $data_create = $this->community->create($data); 
        return $this->community->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "name"      => $request->data_name,  
            "description"      => $request->data_description, 
            "facebook"      => $request->data_facebook, 
            "google"      => $request->data_google, 
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->community->imageInventor('image-community', $request->data_image, 500);
        }
        $data_update = $this->community->update($data, $request->data_id);
        return $this->community->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->community->delete($id); 
        return $this->community->send_response(200, "Delete successful", null);
    }
}
