<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class loginController extends Controller
{
    //
    function login(){
        return view('login');
    }

    function loggedIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return redirect()->back()->with('status','Username or Password is not Matched');
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/');
        }
    }

    function register(){
        return view('register');
    }

    function registered(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            
        ]);
        
        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('status','Successfully registered');
    }
}
