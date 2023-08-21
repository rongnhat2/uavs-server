<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\MessageRepository;
use App\Models\Message; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class MessageController extends Controller
{
    protected $message; 

    public function __construct(Message $message ){
        $this->message             = new MessageRepository($message); 
    }

    public function index(){
        return view("admin.manager.message");
    }

    public function get(){
        $data = $this->message->get_all();
        return $this->message->send_response(201, $data, null);
    }
    public function get_one($id){
        $data = $this->message->get_one($id);
        return $this->message->send_response(200, $data, null);
    }
 
    public function store(Request $request){ 
        
        $data = [ 
            "name"      => $request->data_name,  
            "email"      => $request->data_email,  
            "phone"      => $request->data_phone,  
            "message"      => $request->data_message,  
        ];
        $data_create = $this->message->create($data); 
        return $this->message->send_response("Create successful", $data_create, 201);
    } 

    public function delete($id){
        $this->message->delete($id); 
        return $this->message->send_response(200, "Delete successful", null);
    }
}
