<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create() {
        return view('auth.login');
    }
    
    public function store() {
        if(!auth()->attempt([

            'email' => request('email'),
            'password' => request('password')

        ])) {

            return back()->withErrors([
    
                'message' => 'Wrong email and/or password, please try again'
            ]);
        }


        if(auth()->user()->is_verified) {
            return redirect('/');
        }
        

        if(! auth()->user()->is_verified) {
            $this->destroy();

            return back()->withErrors([

                'message' => 'Please verify your account, email has been sent !'
            ]);
        }
    }


    public function destroy() {
        auth()->logout();
    
        return redirect('/login');
    }
}
