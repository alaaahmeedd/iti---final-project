<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'url',
        'result',
        'video_id',
        'result',
       
    ];
    
    public function video(){
        return $this->belongsTo(CourseVideo::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function teacher(){
        return $this->belongsTo(User::class,'teacher_id','id');
    }
   
    public function name(){
        return $this->belongsTo(Course::class,'course_id','id');
    }
    public function task(){
        return $this->belongsTo(CourseVideo::class,'video_id','id');
    }
  
    public function coursevideo(){
        return $this->belongsTo(CourseVideo::class,'video_id','id');
    }



}
