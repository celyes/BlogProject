<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct(){
        $this->middleware('guest', ['except'=>'destroy']);
    }
    // login route
    public function login(){
        return view('sessions.login');
    }
    // Authenticate user function
    public function create(){
        if(!auth()->attempt(request(['email' , 'password']))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);} 
        return redirect('/posts');
    }
    //log out function 
    public function destroy(){
        
        auth()->logout();

        return redirect()->home();

    }
}
