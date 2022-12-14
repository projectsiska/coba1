<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class loginController extends Controller
{
    public function index()
    {
    return view('login.index', [
        'title' => 'Login'
    ]);
    }

    public function authenticate(Request $request)
    {
       $credentials =  $request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            //dd($credentials->user->level);
            return redirect()->intended('/admin');
        }

        return back()->with('loginError','Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }
}
