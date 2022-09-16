<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\periodeControl;

class periodeController extends Controller
{
     public function index()
     {
           return view('periode',[
"id_periode"=>"periodenya",
"post"=> periodeControl::all()

    ]);
     }

     
public function show($slug)
{
   return view('post', [
        "id_periode" => "per001",
        "post" => periodeControl::find($slug)
    ]);   
}
}

