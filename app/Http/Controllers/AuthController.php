<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register_page()
    {
        return view('auth.register_page');
    }

    public function register_store(Request $request)
    {
        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role' => 'user'
        ]);

        return redirect()->route('login_page')->with('success', 'Register Success');
    }

    public function login_page()
    {
        return view('auth.login_page');
    }

    public function login_store(Request $request)
    {
        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            $user = Auth::user();

            if($user->role === 'user'){
                return redirect()->route('pilihprovinsi')->with('success', 'Login Success');
            }else{
                return redirect()->route('dataprovinsi.index')->with('success', 'Login Success');
            }
        }else{
            return 'Login Failed';
        }
    }

    
}
