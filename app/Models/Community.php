<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;
    protected $table = 'community';
    protected $fillable = ['image', 'name', 'description', 'facebook', 'google', 'status', 'created_at', 'updated_at'];
}
