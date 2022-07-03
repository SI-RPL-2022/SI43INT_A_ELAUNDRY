<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login'

        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        echo $request;

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // echo 'yes';
            
            return redirect()->intended('/');
        }
        // echo 'no';

        return back()->with('loginError', 'Login Failed!');
        // dd('berhasil');
    }
}
