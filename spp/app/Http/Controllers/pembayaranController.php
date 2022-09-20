<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;

class pembayaranController extends Controller
{
      public function index()
     {
        return view('pembayaran',[
        "id_pembayaran"=>"pembayarannya",
        "post"=> pembayaran::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

    ]);
     }

     
public function show(pembayaran $b)
{
   return view('detpembayaran', [
        "id" => "3",
        "detpembayaran" => $b
    ]);   
}
}

?>
