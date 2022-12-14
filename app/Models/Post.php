<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $dates = ['enabled_at'];

    protected $fillable = ['title', 'pic', 'sort', 'content', 'status', 'enabled'];
}