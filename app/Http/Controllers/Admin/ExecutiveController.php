<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\ExecutiveRepository;
use App\Models\Executive; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class ExecutiveController extends Controller
{
    protected $executive;

    public function __construct(Executive $executive){
        $this->executive             = new ExecutiveRepository($executive); 
    }
    public function index(){
        return view("admin.manager.executive");
    }

    public function get(){
        $data = $this->executive->get_all();
        return $this->executive->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->executive->get_one($id);
        return $this->executive->send_response(200, $data, null);
    }
 
    public function store(Request $request){
        $data_image     = $this->executive->imageInventor('image-executive', $request->data_image, 500);
        $data = [ 
            "name"          => $request->data_name,  
            "image"         => $data_image,   
            "description"   => $request->data_description, 
            "position"        => $request->data_position,
        ];
        $data_create = $this->executive->create($data); 
        return $this->executive->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "name"          => $request->data_name,  
            "description"   => $request->data_description, 
            "position"        => $request->data_position,
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->executive->imageInventor('image-executive', $request->data_image, 500);
        }
        $data_update = $this->executive->update($data, $request->data_id);
        return $this->executive->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->executive->delete($id); 
        return $this->executive->send_response(200, "Delete successful", null);
    }
}
