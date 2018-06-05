<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class RegistrationController extends Controller
{
    //
    public function create(){
        return view('sessions.create');
    }

    public function store(){
        //validate form
        $this->validate(request(), [
            'name' => 'required',
            'email'=> 'required|email',
            'password'=> 'required|min:8|confirmed'
        ]);
        // create the user
        $user = User::create(request(['name', 'email', 'password']));
        // Log in the user 
        auth()->login($user);
        // redirect
        return redirect('/');
    }
}
