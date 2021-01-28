<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class UserRecourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.student-dash");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.create");
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
            "name"=>"required",  
            "email"=>"required|email"]);
            
        if($request->role == 2){
            // dd($id);
            User::create([
                "name"=>$request["parentname"],
                "email"=>$request["parentemail"],
                "password"=> Hash::make($request['parentpassword']),
                "role"=>3
              ]);
              $id=User::orderby('created_at', 'desc')->first()->id;

              User::create([
                "name"=>$request["name"],
                "profile_photo_path"=>$request["photo"],
                "email"=>$request["email"],
                "password"=> Hash::make($request['password']),
                "role"=>2,
                "grade"=>$request["grade"],
                "parent_id"=>$id,
              ]);
        }else{
                  User::create([
                    "name"=>$request["name"],
                    "email"=>$request["email"],
                    "password"=> Hash::make($request['password']),
                    "role"=>4,
                    "profile_photo_path"=>$request["photo"],

                   
                    ]);}
                  $student = User::where('email',$request["email"])->get();
                //   dd($student);
                  return view('user.show',['user'=>$student[0]]);
          
              
    }

    /**P
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view ('user.show',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view ('user.edit',['user'=>$user]);
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
            "name"=>"required",  
            "email"=>"required|email",
            
           
        ]);

        $user->update([
            "name"=>$request["name"],
            "email"=>$request["email"],
            "parentId"=>$request["parentId"],
            "studentId"=>$request["studentId"],
            "grade"=>$request["grade"],
            "course"=>$request["course"],
            "profile_photo_path"=>$request["photo"],

            ]);
            
           return redirect(route("user.show",["user"=>$user]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user){
    
       if($user->role == 2){
            $user->delete();
            return redirect(url("admin/year{$user->grade}"));
       }
        
        if($user->role==4){
            $user->delete();
            return redirect(url("admin/teacher"));

        }
        if($user->role==3){
            $user->delete();
            return redirect(url("admin/parent"));

        }


        
    
    }}

