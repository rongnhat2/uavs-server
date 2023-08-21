<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\FutureRepository;
use App\Models\FutureStudent; 
use App\Models\FutureCategory; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class FutureController extends Controller
{
    protected $future;
    protected $category;

    public function __construct(FutureStudent $future, FutureCategory $category){
        $this->future             = new FutureRepository($future); 
        $this->category             = new FutureRepository($category); 
    }
    public function index(){
        return view("admin.manager.future");
    }

    public function get(Request $request){
        $data = $this->future->get_all($request);
        return $this->future->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->future->get_one($id);
        return $this->future->send_response(200, $data, null);
    }
 
    public function store(Request $request){
        $data_image     = $this->future->imageInventor('image-future', $request->data_image, 900);
        $data = [ 
            "category_id"   => $request->data_category, 
            "name"          => $request->data_name,  
            "slug"          => $this->future->to_slug($request->data_name),  
            "image"         => $data_image,  
            "description"   => $request->data_description, 
            "detail"        => $request->data_detail,
        ];
        $data_create = $this->future->create($data); 
        return $this->future->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "category_id"   => $request->data_category, 
            "name"          => $request->data_name,  
            "slug"          => $this->future->to_slug($request->data_name),
            "description"   => $request->data_description, 
            "detail"        => $request->data_detail,
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->current->imageInventor('image-future', $request->data_image, 900);
        }
        $data_update = $this->future->update($data, $request->data_id);
        return $this->future->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->future->delete($id); 
        return $this->future->send_response(200, "Delete successful", null);
    }


    public function category_get(){
        $data = [
            "category"  => $this->category->get_all_category(),
            "count"     => $this->category->get_count(),
        ];
        return $this->category->send_response(201, $data, null);
    }
    public function category_store(Request $request){ 
        $data = [ 
            "name"          => $request->data_name,  
            "slug"          => $this->category->to_slug($request->data_name),   
        ];
        $data_create = $this->category->create($data); 
        return $this->category->send_response("Create successful", $data_create, 201);
    }
    public function category_update(Request $request){  
        $data = [ 
            "name"          => $request->data_name,  
            "slug"          => $this->future->to_slug($request->data_name), 
        ]; 
        $data_update = $this->category->update($data, $request->data_id);
        return $this->category->send_response("Update successful", $data_update, 200);
    }

    public function category_delete($id){
        $this->category->delete($id); 
        return $this->category->send_response(200, "Delete successful", null);
    }
}
