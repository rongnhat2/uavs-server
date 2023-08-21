<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class CurrentRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all($request){
        $word = $request->keyword;
        $category = $request->category;  
        
        return DB::table('current_student')
                ->when($word != "null", function ($query) use ($word) {
                    return $query->where('current_student.name', "like", '%'.$word.'%');
                }) 
                ->when($category != "null", function ($query) use ($category) {
                    return $query->where('current_student.category_id', $category);
                })->get();
    }
    
    public function get_one($id){
        return DB::table('current_student')
                ->where("current_student.id", "=", $id)
                ->first(); 
    }
 
    public function get_count(){ 
        return DB::table('current_student')
                ->count();
    }
    public function get_all_category(){ 
        return DB::table('current_category')
                ->select("current_category.id", "current_category.name", DB::raw("count(current_student.id) as count"),)
                ->leftjoin("current_student", "current_student.category_id", "=", "current_category.id") 
                ->groupBy("current_category.id", "current_category.name")
                ->get();
    }
    public function get_with_slug($slug){ 
        return DB::table('current_student')
                ->where("current_student.slug", "=", $slug)
                ->first(); 
    }

}
