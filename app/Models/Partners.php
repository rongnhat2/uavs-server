<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $table = 'partners';
    protected $fillable = ['image', 'name', 'status', 'created_at', 'updated_at'];
}
