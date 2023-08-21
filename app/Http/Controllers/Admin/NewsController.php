<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\NewsRepository;
use App\Models\News; 
use App\Models\NewsCategory; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class NewsController extends Controller
{
    protected $news;
    protected $category;

    public function __construct(News $news, NewsCategory $category){
        $this->news             = new NewsRepository($news); 
        $this->category             = new NewsRepository($category); 
    }
    public function index(){
        return view("admin.manager.news");
    }

    public function get(Request $request){
        $data = $this->news->get_all($request);
        return $this->news->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->news->get_one($id);
        return $this->news->send_response(200, $data, null);
    }
 
    public function store(Request $request){
        $data_image     = $this->news->imageInventor('image-news', $request->data_image, 900);
        $data = [ 
            "category_id"   => $request->data_category, 
            "name"          => $request->data_name,  
            "slug"          => $this->news->to_slug($request->data_name),  
            "image"         => $data_image,  
            "description"   => $request->data_description, 
            "detail"        => $request->data_detail,
        ];
        $data_create = $this->news->create($data); 
        return $this->news->send_response("Create successful", $data_create, 201);
    }
    public function update(Request $request){  
        $data = [ 
            "category_id"   => $request->data_category, 
            "name"          => $request->data_name,  
            "slug"          => $this->news->to_slug($request->data_name),
            "description"   => $request->data_description, 
            "detail"        => $request->data_detail,
        ];

        if ($request->data_image != "null") {
            $data["image"] = $this->news->imageInventor('image-news', $request->data_image, 900);
        }
        $data_update = $this->news->update($data, $request->data_id);
        return $this->news->send_response("Update successful", $data_update, 200);
    }

    public function delete($id){
        $this->news->delete($id); 
        return $this->news->send_response(200, "Delete successful", null);
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
            "slug"          => $this->category->to_slug($request->data_name), 
        ]; 
        $data_update = $this->category->update($data, $request->data_id);
        return $this->category->send_response("Update successful", $data_update, 200);
    }

    public function category_delete($id){
        $this->category->delete($id); 
        return $this->category->send_response(200, "Delete successful", null);
    }
    public function customer_get(){
        $limit = 5;
        $data = $this->news->get_record($limit);
        return $this->news->send_response(201, $data, null);
    }
    
}
