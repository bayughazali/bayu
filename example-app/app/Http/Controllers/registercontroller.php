<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class registercontroller extends Controller
{
    public function index ()
    {
        return view ('register.index',[
            'title' => 'register',
            'active' => 'register'
        ]);
        return redirect('/register');
    

}


public function registerPost(Request $request)
{
    $request->validate([
        "email" => ['required','unique:users,email'],
        "name" => ['required'],
        "alamat" => ['required'],
        "telepon" => ['required'],
        "password" => ['required','min:8']
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'telepon' => $request->telepon,
        'password' =>Hash::make($request->password),
        
    ]);
    return redirect('/');
}

      
}

