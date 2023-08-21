<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\TestimonialsRepository;
use App\Models\Testimonials; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class TestimonialsController extends Controller
{
    protected $testimonials;

    public function __construct(Testimonials $testimonials){
        $this->testimonials             = new TestimonialsRepository($testimonials); 
    }
    public function index(){
        return view("admin.manager.testimonials");
    }

    public function get(){
        $data = $this->testimonials->get_all();
        return $this->testimonials->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->testimonials->get_one($id);
        return $this->testimonials->send_response(200, $data, null);
    }
 
    public function store(Request $request){    
        $data_image = $this->testimonials->imageInventor('testimonials', $request->data_image, 500);
        $data = [ 
            "name"      => $request->data_name,  
            "position"      => $request->data_position, 
            "comment"      => $request->data_comment, 
            "image"      => $data_image,  
        ];
        $data_create = $this->testimonials->create($data); 
        return $this->testimonials->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "name"      => $request->data_name,  
            "position"      => $request->data_position, 
            "comment"      => $request->data_comment, 
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->product->imageInventor('testimonials', $request->data_image, 500);
        }
        $data_update = $this->testimonials->update($data, $request->data_id);
        return $this->testimonials->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->testimonials->delete($id); 
        return $this->testimonials->send_response(200, "Delete successful", null);
    }

    public function customer_get(){
        $limit = 5;
        $data = $this->testimonials->get_record($limit);
        return $this->testimonials->send_response(201, $data, null);
    }
}
