<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;


class AgendaController extends Controller
{
    //
     public function index()
     {
           return view('agenda',[
            "id_agenda"=>"agendanya",
             'title' => "all",
            
            "post"=> agenda::orderBy('tanggal','desc')
            ->orderBy('jam','asc'),

            "gabungan"=> agenda::orderBy('tanggal','desc') 
            ->orderBy('jam','asc')
            ->filter(request(['search']))
            ->paginate(5)->withQueryString() 

            ]);
     }
}
