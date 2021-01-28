<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $parent = User::where('role',4)->get();
        return view('parent.index',['parent'=>$parent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('parent.create');
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
            "name"=>"required|min:5",  
            "email"=>"required|email",
            "password"=>"required|min5",
            "student"=>"required",
        ]);
        User::create([
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => Hash::make($request['password']),
            "student" => $request["student"],
        ]);
        return redirect(route("parent.show",));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view ('parent.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('parent.edit',['user',$user]);
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
            "student_id"=>"required",
        ]);
        $user->update([
            "name" => $request["name"],
            "email" => $request["email"],
            "password" => Hash::make($request['password']),
            "student_id" => $request["student_id"],
        ]);
        return redirect(route("parent.show",["user"=>$user]));
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
        return redirect(route("parent.index"));
    }
}
