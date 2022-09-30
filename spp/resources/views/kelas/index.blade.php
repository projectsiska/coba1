
@extends('layouts.main')



@section('judul')
Data Kelas
@endsection


@section('container')

<div class="container">
      <div class="row">
        <div class="col-md-8">
          <a type="button" href="/kelas/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
          <form action="/kelas">
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
@elseif(session()->has('deleted'))
 <div class="alert alert-danger" role="alert">
        {{session('deleted')}}
      </div>
  @endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th> 
      <th scope="col">Nama Kelas</th>
      <th scope="col">Wali Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($post as $posta)
      
    <tr>
      <th scope="row">{{$loop->iteration}}</th> 
      <td><a href="/kelas/{{ $posta['id']}}">{{ $posta->nama_kelas }}</a></td>
      <td>{{ $posta->wali_kelas }}</td>
      <td>
 <a href="/kelas/{{$posta->id}}/edit"  role="button" class="btn btn-warning">Edit</a>
<form action="/kelas/{{ $posta->id }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf

                      <button onclick="return confirm('Are You Sure')"  role="button" class="btn btn-danger">Hapus</button>
</form>
                    </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

<div class="d-flex center-content-end">{{ $post->links() }} </div>

@endsection