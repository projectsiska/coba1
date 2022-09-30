<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\periode;

class periodeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         return view('periode.index',[
            "id_periode"=>"periodenya",
            
            "post"=> periode::latest()->filter(request(['search']))->paginate(5)->withQueryString() 
         ]);
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           return view('periode.create');
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
            'bulan' => 'required|max:25', 
            'tahun' => 'required'
        ]);

        // die();
        periode::create($validatedData);
        return redirect('/periode')->with('success','New periode Has Been Add!');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function show(periode $periode)
    {
        //
          return view('periode.detperiode',[
        'periode' => $periode
    ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function edit(periode $periode)
    {
        //
        return view('periode.edit',[
              'periode'=> $periode
          ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, periode $periode)
    {
        //
          $validatedData = $request->validate([
            'bulan' => 'required|max:25', 
            'tahun' => 'required'
        ]);

        
        periode::where('id',$periode->id)
        ->update($validatedData);
        return redirect('/periode')->with('success','periode Has Been Update!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\periode  $periode
     * @return \Illuminate\Http\Response
     */
    public function destroy(periode $periode)
    {
        //
          periode::destroy($periode->id);
        return redirect('/periode')->with('deleted','Your periode Has Been Deleted!');
  
    }
 
 
}

