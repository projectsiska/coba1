
@extends('layouts.layadmin')



@section('judul')
Data User
@endsection


@section('container')
   
<div class="container" style="padding: 20px">

<div class="row" style="display:flex; margin-bottom:5px">
        <div class="col-md-8"> <!--<button class="btn-primary">Tambah</button>--></div>
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

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Email</th>
      <th scope="col">Username</th> 
    </tr>
  </thead>
  <tbody style="overflow:auto;">
  @foreach($post as $posta)
    <tr>
      
      <td>{{ $posta->name }}</td>
      <td>{{ $posta->level }}</td>
      <td>{{ $posta->email }}</td>
      <td>{{ $posta->username }}</td> 
    </tr>
  @endforeach
  </tbody>
</table>
</div>
@endsection