<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function loginUI()
    {
        return view('login');
    }
    public function loginPost(Request $request)
    {
        $i = 1;

        $d = Hash::make($i);

       $user= DB::table('users')->where('email',$request->email)->first();
      if ($user) {
        if (Hash::check($request->password,$user->password)) {
            return redirect('/dashboard');
            }else{
             return redirect('/')->with('error',"email dan password anda salah");
            }
      }else{
        return redirect('/')->with('error',"email dan password anda salah");
       }

    }
}
