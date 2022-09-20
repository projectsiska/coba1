<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\periode;

class periodeController extends Controller
{
     public function index()
     {
           return view('periode',[
"id_periode"=>"periodenya",
  "post"=> periode::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

    ]);
     }

       
public function show(periode $q)
{
   return view('detperiode', [
        "id" => "3",
        "detperiode" => $q
    ]);   
}
}

