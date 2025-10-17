<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {

        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validate and create the user
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:4|confirmed',
            'role' => 'required|in:student,admin',
        ]);

        // Create the user (assuming User model exists)
        \App\Models\User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        // Redirect to login page after successful registration
        return redirect()->route('auth.login')->with('success', 'Registration successful. Please login.');
    }
}
