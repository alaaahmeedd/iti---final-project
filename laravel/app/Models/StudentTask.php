<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTask extends Model
{
    use HasFactory;
    protected $fillable = [
        'marks',
        'user_id',
        'task_id'
       
    ];

}
