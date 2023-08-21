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
    public function future(){
        $page = "future";
        return view('customer.future', compact("page"));
    }
    public function future_detail($slug){
        $data = $this->future->get_with_slug($slug);  
        $page = "future";
        return view('customer.future-detail', compact("page", "data"));
    }
    public function current(){
        $page = "current";
        return view('customer.current', compact("page"));
    }
    public function current_detail($slug){
        $data = $this->current->get_with_slug($slug); 
        $page = "current";
        return view('customer.current-detail', compact("page", "data"));
    }
    public function event(){
        $page = "event";
        return view('customer.event', compact("page"));
    }
    public function event_detail($slug){
        $data = $this->news->get_with_slug($slug); 
        $page = "event";
        return view('customer.event-detail', compact("page", "data"));
    }
    public function community(){
        $page = "community";
        return view('customer.community', compact("page"));
    }
    public function news_detail(){
        $page = "event";
        return view('customer.news-detail', compact("page"));
    }
}
