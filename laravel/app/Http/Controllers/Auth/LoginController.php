<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Classes\User;



class LoginController extends Controller
{
    public function show () {
        return view('general.login');
    }

    public function login (Request $request) {
        //dd(bcrypt('12345678'));
        //dd($request->only('email', 'password'));
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Auth login
        if (!Auth::attempt($request->only('email', 'password'))) {
            return back()->with('error', 'Invalid Credentials!');
        }

        // Redirect to home page
        return User::redirectTo();
            
    }
   
        public function logout() {
            Auth::logout(); // logout user
            return redirect(\URL::previous());
    
    }
}
