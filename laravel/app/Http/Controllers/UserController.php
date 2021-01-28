<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
 

        

    // retrive student dataz

     //list all students
    public function showYear4(){
        $student = User::where(['role'=>2,'grade'=>4])->get();
        return view('admin.year4',['student'=> $student]);
    }
    public function showYear3(){
        $student = User::where(['role'=>2,'grade'=>3])->get();
        return view('admin.year3',['student'=> $student]);
    }
    public function showYear1(){
        $student = User::where(['role'=>2,'grade'=>1])->get();
        return view('admin.year1',['student'=> $student]);
    }
    public function showYear2(){
        $student = User::where(['role'=>2,'grade'=>2])->get();
        return view('admin.year2',['student'=> $student]);
    }
    public function showYear5(){
        $student = User::where(['role'=>2,'grade'=>5])->get();
        return view('admin.year5',['student'=> $student]);
    }
    public function showYear6(){
        $student = User::where(['role'=>2,'grade'=>6])->get();
        return view('admin.year6',['student'=> $student]);
    }
    
    // //list all Parents
    public function indexParent(){
        $parent = User::where('role',3)->get();
        return view('admin.parent-dash',['parent'=> $parent]);
    }
    
    // //list all Teachers
    public function indexTeacher(){
        $teacher = User::where('role',4)->get();
        return view('admin.teacher-dash',['teacher'=> $teacher]);
    }
    
    // //list all User
    public function indexUser(){
        $user = User::whereNotIn ('role',[2,3,4])->get();
        return view('admin.user-dash',['user'=> $user]);
    }}

    


//view specific student by id
// function view($id){
//     return User::find($id);
// }

// public function show(User $student)
// {
//     return view("admin.view.view-student",["User"=>$student]);
// }
