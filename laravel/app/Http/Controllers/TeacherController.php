<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = User::where('role',3)->get();
        return view('teacher.index',['teacher'=>$teacher]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|min:5",
            "email" => "required|email",
            "password" => "required|min5",


        ]);
        User::create([
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => Hash::make($request['password']),
            "course" => $request["course"]
        ]);
        return redirect(route("teacher.show"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view ('teacher.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('teacher.edit',['user',$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            "name"=>"required|min:5",  
            "email"=>"required|email",
            "password"=>"required|min5",      
           
        ]);

        $user->update([
            "name"=>$request["name"],
            "email"=>$request["email"],
            "password"=>$request["password"],
            "course"=>$request["course"]
            
            ]);
            
           return redirect(route("teacher.show",["user"=>$user]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route("teacher.index"));
    }
}
