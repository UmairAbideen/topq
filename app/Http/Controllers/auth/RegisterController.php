<?php

namespace App\Http\Controllers\auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //register page view ==============================================
    public function view()
    {
        return view('auth.register');
    }

    //register a new account ==========================================
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required',
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'created_at' => now(),
        ]);

        return redirect()->route('index')->with('status', 'Account has been successfully created.');
    }

}
