<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ketentuan;

class ketentuanController extends Controller
{

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('ketentuan.index',[
            "id_ketentuan"=>"ketentuannya",
            
            "post"=> ketentuan::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

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
        return view('ketentuan.create');
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
        // dd($request->all());
        
        

         
        $validatedData = $request->validate([
            'spp' => 'required',
            'denda' => 'required',
            'uang_lainnya' => 'required',
            'keterangan' => 'required'
        ]);

        // die();
        ketentuan::create($validatedData);
        return redirect('/ketentuan')->with('success','New ketentuan Has Been Add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function show(ketentuan $ketentuan)
    {
       
    return view('ketentuan.detketentuan',[
        'ketentuan' => $ketentuan
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function edit(ketentuan $ketentuan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ketentuan $ketentuan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ketentuan  $ketentuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(ketentuan $ketentuan)
    {
        //
    }

     
 
}