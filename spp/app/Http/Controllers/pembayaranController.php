<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembayaran;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\kelas;
use App\Models\siswa;
use App\Models\periode;
use App\Models\ketentuan;

class pembayaranController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return view('pembayaran.index',[
        "id_pembayaran"=>"pembayarannya",
        "post"=> pembayaran::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

    ]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('pembayaran.create', [
            'kelas' => kelas::all(),
            'siswa' => siswa::all(),
            'periode' => periode::all(),
            'ketentuan' => ketentuan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
/* 
        return view('pembayaran.detpembayaran', [
        "id" => "3",
        "detpembayaran" => '{b:slug}'
    ]);   
 */
    return view('pembayaran.detpembayaran',[
        'pembayaran' => $pembayaran
    ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }
    
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(pembayaran::class, 'slug', $request->id);
        return response()->json(['slug' => $slug]);
    }
}

?>
