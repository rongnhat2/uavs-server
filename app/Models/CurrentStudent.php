<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentStudent extends Model
{
    use HasFactory;
    protected $table = 'current_student';
    protected $fillable = ['category_id', 'image', 'name', 'slug', 'description', 'detail', 'status', 'created_at', 'updated_at'];
}
