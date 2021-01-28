<?php

namespace App\Classes;

class User {

    public static function redirectTo () 
    {
        $role=auth()->user()->role;
        if($role==1){
            return redirect('/admin/dash');

        }
        if($role==2){
            return redirect('/student/home');
        }
        if($role==3){
            return redirect('/parent/home');
        }
        if($role==4){
            return redirect('/teacher/home');  
        }
        else{
            return redirect('guest/home');
        }
        
       
    }

}