<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }
    
    // traitement du formulaire d'inscription
    public function signup(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Create a new user
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // Optionally, log in the user after sign-up
        auth()->login($user);

        // Redirect to a page after successful sign-up
        return redirect('/');
    }
}
