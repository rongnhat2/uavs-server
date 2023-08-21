<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    use HasFactory;
    protected $table = 'executive';
    protected $fillable = ['image', 'name', 'position', 'description', 'status', 'created_at', 'updated_at'];
}
