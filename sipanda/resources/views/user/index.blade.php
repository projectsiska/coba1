
@extends('layouts.layadmin')



@section('judul')
Data User
@endsection


@section('container')
   
<div class="container" style="padding: 20px">

<div class="row" style="display:flex; margin-bottom:5px">
        <div class="col-md-8">
         <a type="button" href="/user/create" class="btn btn-primary">Tambah</a>   
        </div>
        <div class="col-md-4">
          <form action="/user">
            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" 
              value="{{request('search')}}"
              placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary" >Search</button>
              </div>
            </div>
          </form>
        </div>
      </div>

       @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
  @endif

                <input  hidden value="{{ $siapa = auth()->user()->level}}">


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th> 
       @if($siapa=="Super Admin" or $siapa=="Admin")
                 
                <th class="text-center">Aksi</th>
                  @endif
    </tr>
  </thead>
  <tbody style="overflow:auto;">
  @foreach($post as $posta)
    <tr>
      
      <td>{{ $posta->name }}</td>
      <td>{{ $posta->level }}</td>
      <td>{{ $posta->email }}</td>
      <td>{{ $posta->username }}</td>
        @if($siapa=="Super Admin")
                <td><div class="button">Edit</div> <div class="button">Hapus</div></td>
      @elseif($siapa=="Admin") 
      <td><div class="button">Edit</div> </td>
        @endif
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection