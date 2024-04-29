<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("Login");
    }

    public function login(Request $request)
    {
        
        $email = $request -> email;
        $password = $request -> password;
        $values = ["email" => $email ,'password' => $password ];
        if(Auth::attempt($values)){
            $request -> session()->regenerate();
            return redirect()->route('home', ['id' => Auth::id()]);
        }else{
            return back()->withErrors([
                'email' => 'email ou mot de passe incorrect. '
            ])-> onlyInput('email');
        }
    }
    

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
