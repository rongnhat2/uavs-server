<?php

namespace App\Repositories\Manager;

use Illuminate\Database\Eloquent\Model;
use App\Repositories\BaseRepository;
use App\Repositories\RepositoryInterface;
use Session;
use Hash;
use DB;

class PartnersRepository extends BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model){
        $this->model = $model;
    }
    public function get_all(){ 
        return DB::table('partners')->get();
    }
    
    public function get_one($id){
        return DB::table('partners')
                ->where("partners.id", "=", $id)
                ->first(); 
    }
 
}
