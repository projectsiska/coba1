<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswaController extends Controller
{
     public function index()
     {
        // dd(request('search'));
        return view('siswa',[
        "id_siswa"=>"siswanya",
        "post"=> siswa::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

    ]);
     }

     
public function show(siswa $p)
{
   return view('detsiswa', [
        "id" => "3",
        "detsiswa" => $p
    ]);   
}
}

