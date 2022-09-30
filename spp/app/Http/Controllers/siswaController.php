<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;
use App\Models\kelas;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class siswaController extends Controller
{


    public $table = "siswas";

    protected $fillable = [
        'nis', 
        'nama_siswa', 
        'slug', 
        'jk', 
        'alamat',
        'telepon',
        'nama_ayah',
        'nama_ibu',
        'telepon_ortu',
        'kelas_id',
        'tahun_masuk',
        'status_byr',
        'status_siswa',
        'username',
        'password' 
    ];

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          return view('siswa.index',[
            "id_siswa"=>"siswanya",
            
            "post"=> siswa::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

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
        return view('siswa.create', [
            'kelas' => kelas::all()
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
         
        $validatedData = $request->validate([
            'nis' => 'required|unique:siswas',
            'nama_siswa' => 'required',
            'slug' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'telepon_ortu' => 'required',
            'kelas_id' => 'required',
            'tahun_masuk' => 'required',
            'status_byr' => 'required',
            'status_siswa' => 'required',
            'username' => 'required|unique:siswas',
            'password' => 'required'
        ]);

        dd($validatedData->all());

        $validatedData['password']=bcrypt($validatedData['password']);

        // die();
        siswa::create($validatedData);
        return redirect('/siswa')->with('success','New siswa Has Been Add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
       
    return view('siswa.detsiswa',[
        'siswa' => $siswa
    ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        //
    }

      public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(siswa::class, 'slug', $request->nis);
        return response()->json(['slug' => $slug]);
    }
 
}

