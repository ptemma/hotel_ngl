<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\VerifyCsrfToken;

class RegisterController extends Controller
{
    public function getViewRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Create new user
        $user = new Users();
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);
        $user->role = 'user';
        $user->save();

        // Redirect to login page or any other page
        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }
}
