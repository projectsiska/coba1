
@extends('layouts.layadmin')



@section('judul')
Data User
@endsection


@section('container')
   
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/font-awsome/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 


<div class="container" style="padding: 20px">

<div class="container">
  <br>
    <a type="button" href=" " class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/user">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pejabat</label>
    <input type="text" value="{{ old('name')}}" required name="name" autofocus class="form-control @error('name') is->invalid @enderror" id="name" aria-describedby="name" placeholder="Nama Kelas"> 
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" required  value="{{ old('email')}}" name="email" class="form-control" id="email" placeholder="Email">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Jabatan</label>
  <select id="inputState" name="jabatan" class="form-control">
        <option value="Admin">Admin</option>
        <option value="Kabid PPM">Kabid PPM</option>
        <option value="Kabid PPEPD">Kabid PPEPD</option>
        <option value="Kabid Litbang">Kabid Litbang</option>
        <option value="Kabid PSI">Kabid PSI</option>
        <option value="Sekre">Sekre</option>
        <option value="Kaban">Kaban</option>
        <option value="Super Admin">Super Admin</option>      
      </select>
</div>

  <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" required  value="{{ old('username')}}" name="username" class="form-control" id="username" placeholder="Username">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required  value="{{ old('password')}}" name="password" class="form-control" id="password" placeholder="Password">
  </div>


   <button type="submit" class="btn btn-primary">Tambah Kelas</button>
</form>

</div>


</div>
@endsection