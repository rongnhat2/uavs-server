<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FutureCategory extends Model
{
    use HasFactory;
    protected $table = 'future_category';
    protected $fillable = ['name', 'slug', 'status', 'created_at', 'updated_at'];
}
