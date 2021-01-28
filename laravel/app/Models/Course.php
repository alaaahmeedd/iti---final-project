<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'grade',
        'teacher_id',
       
    ];
    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id','id');
    }

    public function coursevideos (){
        return $this->hasMany(CourseVideo::class);
    }
    
    public function task(){
        return $this->belongsTo(Task::class);
    }
    
}


