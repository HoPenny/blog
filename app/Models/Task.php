<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'enabled', 'enabled_at', 'sort'];
    public function users()
    {
        return $this->belongsToMany(User::class); //屬於誰的關聯,設Cgy屬於Article的關聯
    }
}
