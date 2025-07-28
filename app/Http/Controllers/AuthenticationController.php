<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|string', // since your login form accepts email or user id, use string instead of email validation
            'password' => 'required|min:5',
        ]);

        // Attempt to login using email or id:
        $login_field = filter_var($credentials['email'], FILTER_VALIDATE_EMAIL) ? 'email' : 'id';

        if (Auth::attempt([$login_field => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/admin'); // redirect to admin dashboard on success
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }

    public function register(Request $request)
    {
        // Validate form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:5|confirmed',
            'phone' => 'required|string|max:20',
            'student_id' => 'required|string|max:50',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle avatar upload
        $avatarPath = null;
        if ($request->hasFile('avatar')) {
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
        }

        // Create user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'phone' => $validatedData['phone'],
            'student_id' => $validatedData['student_id'],
            'avatar' => $avatarPath,
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to dashboard or homepage
        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }
}
