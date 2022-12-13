<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

// class Task_user extends Model
// {
//     use HasFactory;

// }
class Task_user extends Pivot
{
    use HasFactory;

}
