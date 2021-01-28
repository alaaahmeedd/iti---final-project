<?php

namespace App\Http\Controllers;

use App\Models\StudentTask;
use Illuminate\Http\Request;
use App\Models\Task;

class StudentTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task = Task::all();
        return view('task.result',['task'=>$task]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        StudentTask::create([
            "marks"=>$request['marks'],
            "user_id"=>$request['studentId'],
            "task_id"=>$request['taskId']
        ]);
        $task=Task::where('id',$request['taskId'])->get();
       
        $id=$task[0]->coursevideo->id;
        $url='/result/'.$id;
        return redirect($url);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StudentTask  $studentTask
     * @return \Illuminate\Http\Response
     */
    public function show(StudentTask $studentTask)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StudentTask  $studentTask
     * @return \Illuminate\Http\Response
     */
    public function edit(StudentTask $studentTask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentTask  $studentTask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StudentTask $studentTask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StudentTask  $studentTask
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudentTask $studentTask)
    {
        $studentTask->delete();
        return redirect(route('task.result'));
    }
}
