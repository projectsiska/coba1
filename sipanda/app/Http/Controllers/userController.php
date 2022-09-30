<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    //
     public function index()
     {
           return view('user.index',[
            "id_user"=>"usernya",
            
            "post"=> user::latest()->filter(request(['search']))->paginate(5)->withQueryString() 

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
        return view('user.create');
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
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'level' => 'required',
            'username' => 'required|unique:users', 
            'password' => 'required'
        ]);

        // die();

         $validatedData['password']=bcrypt($validatedData['password']);

        user::create($validatedData);
        return redirect('/user')->with('success','New User Has Been Add!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        //
    }
}