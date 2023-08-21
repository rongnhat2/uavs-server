<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class NewsRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all($request){ 
        $word = $request->keyword;
        $category = $request->category;  
        return DB::table('news')
                ->when($word != "null", function ($query) use ($word) {
                    return $query->where('news.name', "like", '%'.$word.'%');
                }) 
                ->when($category != "null", function ($query) use ($category) {
                    return $query->where('news.category_id', $category);
                })->get();
    }
    
    public function get_one($id){
        return DB::table('news')
                ->where("news.id", "=", $id)
                ->first(); 
    }
    public function get_count(){ 
        return DB::table('news')
                ->count();
    }
    public function get_all_category(){ 
        return DB::table('news_category')
                ->select("news_category.id", "news_category.name", DB::raw("count(news.id) as count"),)
                ->leftjoin("news", "news.category_id", "=", "news_category.id") 
                ->groupBy("news_category.id", "news_category.name")
                ->get();
    } 
    public function get_record($limit){ 
        return DB::table('news')
                ->limit($limit)
                ->get();
    }
    public function get_with_slug($slug){ 
        return DB::table('news')
                ->where("news.slug", "=", $slug)
                ->first(); 
    }
 
}
