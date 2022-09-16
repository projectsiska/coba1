<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class siswaController extends Controller
{
     public function index()
     {
        return view('siswa',[
        "id_siswa"=>"siswanya",
        "post"=> siswa::with('kelas')->latest()->get()

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

