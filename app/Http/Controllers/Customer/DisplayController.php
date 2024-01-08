<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

use App\Repositories\Manager\CurrentRepository;
use App\Models\CurrentStudent; 
use App\Models\CurrentCategory; 
use App\Repositories\Manager\FutureRepository;
use App\Models\FutureStudent; 

use App\Repositories\Manager\NewsRepository;
use App\Models\News; 
use Carbon\Carbon;
use Session;
use Hash;
use DB;

class DisplayController extends Controller
{
    protected $current;
    protected $future;
    protected $category;
    protected $news;

    public function __construct(News $news, CurrentStudent $current, CurrentCategory $category, FutureStudent $future){
        $this->current             = new CurrentRepository($current); 
        $this->category             = new CurrentRepository($category); 
        $this->future             = new FutureRepository($future); 
        $this->news             = new NewsRepository($news); 
    }
    public function index(){ 
        $page = "index";
        return view('customer.index', compact("page"));
    }
    public function about(){
        $page = "about";
        return view('customer.about', compact("page"));
    }
    public function event(){
        $page = "event";
        return view('customer.event', compact("page"));
    }
    public function sponsor(){
        $page = "sponsor";
        return view('customer.sponsor', compact("page"));
    }
    public function blog(){
        $page = "blog";
        return view('customer.blog', compact("page"));
    }
    public function contact(){
        $page = "contact";
        return view('customer.contact', compact("page"));
    }
    public function register(){
        $page = "register";
        return view('customer.register', compact("page"));
    }
    
}
