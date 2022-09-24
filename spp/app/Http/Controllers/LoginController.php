<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index',[
            'title' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
     $request->validate([
         'email'=> 'required',
         'password' =>'required'
     ])   ;

     dd('berhasil login');
    }

}

