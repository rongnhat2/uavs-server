<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\PartnersRepository;
use App\Models\Partners; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class PartnersController extends Controller
{
    protected $partners;

    public function __construct(Partners $partners){
        $this->partners             = new PartnersRepository($partners); 
    }
    public function index(){
        return view("admin.manager.partners");
    }

    public function get(){
        $data = $this->partners->get_all();
        return $this->partners->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->partners->get_one($id);
        return $this->partners->send_response(200, $data, null);
    }
 
    public function store(Request $request){ 

        $data_image = $this->partners->imageInventor('images-partners', $request->data_image, 500);
        $data = [ 
            "name"      => $request->data_name,  
            "image"      => $data_image,  
        ];
        $data_create = $this->partners->create($data); 
        return $this->partners->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "name"      => $request->data_name, 
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->partners->imageInventor('images-partners', $request->data_image, 500);
        }
        $data_update = $this->partners->update($data, $request->data_id);
        return $this->partners->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->partners->delete($id); 
        return $this->partners->send_response(200, "Delete successful", null);
    }
}
