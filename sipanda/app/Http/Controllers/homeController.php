<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use App\Models\agenda;

class homeController extends Controller
{
    //
     public function index()
     {
            return view('home',[
            "id_admin"=>"adminnya",
            "title"=>"dashboard",
            
           "post"=> agenda::orderBy('tanggal','desc')
            ->orderBy('jam','asc'),

            "gabungan"=> agenda::orderBy('tanggal','desc') 
            ->orderBy('jam','asc')
            ->filter(request(['search']))
            ->paginate(5)->withQueryString() 
            
            ]);
             

           



            
     }
}
