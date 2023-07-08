<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    public function login()
    {
        return view('login',[
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request)
    {
       $crendentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'     
        ]);

        if(Auth::attempt($crendentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError', 'Login Gagal!!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/login');
    }
}