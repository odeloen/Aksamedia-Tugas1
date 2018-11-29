<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    public function doLogin(Request $request){
        $username = $request->username; //the input field has name='username' in form
        $password = $request->password;
        if(filter_var($username, FILTER_VALIDATE_EMAIL)) {
            //user sent their email
            Auth::attempt(['email' => $username, 'password' => $password]);
        } else {
            //they sent their username instead
            Auth::attempt(['username' => $username, 'password' => $password]);
        }

        //was any of those correct ?
        if ( Auth::check() ) {
            //send them where they are going
            return redirect()->intended('dashboard');
        }

        //Nope, something wrong during authentication
        return redirect()->back()->withErrors([
            'credentials' => 'Please, check your credentials'
        ]);
    }
}
