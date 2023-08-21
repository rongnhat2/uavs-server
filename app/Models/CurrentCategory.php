<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentCategory extends Model
{
    use HasFactory;
    protected $table = 'current_category';
    protected $fillable = ['name', 'slug', 'status', 'created_at', 'updated_at'];
}
