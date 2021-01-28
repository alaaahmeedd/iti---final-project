<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseVideo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'course_id',
        'url',
        'image',
    ];
   
   
    public function comments(){
        return $this->hasMany(Comment::class,'video_id','id');
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function task(){
        return $this->hasMany(Task::class,'video_id','id');
    }

}
