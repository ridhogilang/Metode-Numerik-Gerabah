<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }
    
    public function store(Request $request)
    {
        $validatedData = $request->validate([ 
            'name' => 'required|max:200',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:50'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success','Registrasi Berhasil!! Silahkan Login');
    }
}