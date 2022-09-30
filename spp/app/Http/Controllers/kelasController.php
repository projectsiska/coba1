<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use \Cviebrock\EloquentSluggable\Services\SlugService;



class kelasController extends Controller
{
    protected $fillable = [
        'nama_kelas',  
        'slug', 
        'wali_kelas' 
    ];
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('kelas.index',[
            "id_kelas"=>"Kelasnya",
            
            "post"=> kelas::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

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
        return view('kelas.create');
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
        $validatedData = $request->validatse([
            'nama_kelas' => 'required|max:25',
            'slug' => 'required|unique:kelas',
            'wali_kelas' => 'required'
        ]);

        // die();
        kelas::create($validatedData);
        return redirect('/kelas')->with('success','New Kelas Has Been Add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
public function show($id)
    {
       // dd($id);
     $kelas = array(
         'id_kelas'=>"kelasnya",
         'kelas'=> kelas::find($id));
    return view('kelas.detkelas')->with($kelas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $kelas = array(
         'id_kelas'=>"kelasnya",
         'kelas'=> kelas::find($id));

        return view('kelas.edit')->with($kelas);
          
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kelas $kelas)
    {
        //

         $validatedData = $request->validate([
            'nama_kelas' => 'required|max:25',
             
            'wali_kelas' => 'required'
        ]);

        if($request->slug !=$kelas->slug)
        {
            $rules['slug'] = 'required|unique:kelas';
        }
        kelas::where('id',$kelas->id)
        ->update($validatedData);
        return redirect('/kelas')->with('success','kelas Has Been Update!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        // dd($kelas->all());
        kelas::destroy($kelas->id);
        return redirect('/kelas')->with('deleted','kelas Has Been Deleted!');
  
    }
 
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(kelas::class, 'slug', $request->nama_kelas);
        return response()->json(['slug' => $slug]);
    }
}

