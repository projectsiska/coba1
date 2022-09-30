<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\agenda;


class AgendaController extends Controller
{
    //
     

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function index()
     {
           return view('agenda.index',[
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
     
    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('agenda.create');
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
        //dd($request->all());
          $validatedData = $request->validate([
            'tanggal' => 'date',
            'jam' => 'required',
            'acara' => 'required',
            'tempat' => 'required',
            'penyelenggara' => 'required',
            'disposisi' => 'required',
            'kehadiran' => 'required',
            'keterangan' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        // die();
        
        agenda::create($validatedData);
        return redirect('/agenda')->with('success','New agenda Has Been Add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(agenda $agenda)
    {
        //
          return view('agenda.edit',[
              'agenda'=> $agenda
          ]);
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, agenda $agenda)
    {
        //

          $validatedData = $request->validate([
            'tanggal' => 'date',
            'jam' => 'required',
            'acara' => 'required',
            'tempat' => 'required',
            'penyelenggara' => 'required',
            'disposisi' => 'required',
            'kehadiran' => 'required',
            'keterangan' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        // die();
        agenda::where('id',$agenda->id)
        ->update($validatedData);
        return redirect('/agenda')->with('success','agenda Has Been Update!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(agenda $agenda)
    {
        // dd($agenda->all());
        agenda::destroy($agenda->id);
        return redirect('/agenda')->with('deleted','Your agenda Has Been Deleted!');
  
    }
}
