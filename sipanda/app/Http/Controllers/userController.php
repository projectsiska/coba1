<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    //
     public function index()
     {
           return view('user',[
            "id_user"=>"usernya",
            
            "post"=> user::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

    ]);
}
}