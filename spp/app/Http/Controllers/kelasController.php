<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;

class kelasController extends Controller
{
     public function index()
     {
           return view('kelas',[
            "id_kelas"=>"Kelasnya",
            
            "post"=> kelas::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

    ]);
     }

     
public function show(kelas $tes)
{
   return view('post', [
        "id" => "1",
        "post" => $tes
    ]);   
}
}

