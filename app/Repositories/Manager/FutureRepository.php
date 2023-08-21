<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class FutureRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all($request){ 
        $word = $request->keyword;
        $category = $request->category;  
        
        return DB::table('future_student')
                ->when($word != "null", function ($query) use ($word) {
                    return $query->where('future_student.name', "like", '%'.$word.'%');
                }) 
                ->when($category != "null", function ($query) use ($category) {
                    return $query->where('future_student.category_id', $category);
                })->get();
    }
    
    public function get_one($id){
        return DB::table('future_student')
                ->where("future_student.id", "=", $id)
                ->first(); 
    }

    public function get_count(){ 
        return DB::table('future_student')
                ->count();
    }
    public function get_all_category(){ 
        return DB::table('future_category')
                ->select("future_category.id", "future_category.name", DB::raw("count(future_student.id) as count"),)
                ->leftjoin("future_student", "future_student.category_id", "=", "future_category.id") 
                ->groupBy("future_category.id", "future_category.name")
                ->get();
    }
    public function get_with_slug($slug){ 
        return DB::table('future_student')
                ->where("future_student.slug", "=", $slug)
                ->first(); 
    }
 
}
