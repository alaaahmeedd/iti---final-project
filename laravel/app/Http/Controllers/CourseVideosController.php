<?php

namespace App\Http\Controllers;
use App\Models\Task;
use App\Models\CourseVideo;
use Illuminate\Http\Request;

class CourseVideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursevideo = CourseVideo::all();
        return view('coursevideo.index',['coursevideo'=>$coursevideo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coursevideo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CourseVideo::create([
            "name"=>$request["name"],
            "url"=>$request["url"],
            "course_id"=>$request["courseId"],
            "image"=>$request["image"],
        ]);
        return redirect(route('coursevideo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function show(CourseVideo $coursevideo)
    {
        return view('student.coursevideo',['coursevideo'=>$coursevideo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseVideo $coursevideo)
    {
        return view ('coursevideo.edit',['coursevideo'=>$coursevideo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseVideo $coursevideo)
    {
        $coursevideo->update([
            "name"=>$request["name"],
            "url"=>$request["url"],
            "course_id"=>$request["courseId"],
            "image"=>$request["image"],
        ]);
        return redirect(route("coursevideo.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseVideo  $courseVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseVideo $coursevideo)
    {
        $coursevideo->delete();
        return redirect(route('coursevideo.index'));
  }
}
