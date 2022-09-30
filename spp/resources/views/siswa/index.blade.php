@extends('layouts.main') @section('judul') Data siswa @endsection @section('container') @if ($post->count()) 
  
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <a type="button" href="/siswa/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
          <form action="/siswa">
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
<table class="table table-striped">


  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis siswa</th>
      <th scope="col">Nama siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody> @foreach($post as $posta) <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>
        <a href="/siswa/{{ $posta->slug}}">{{ $posta->nis }}</a>
      </td>
      <td>{{ $posta->nama_siswa }}</td>
      <td>{{ $posta->kelas->nama_kelas }}</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td>
    </tr>
     @endforeach 
  </tbody>
</table> @Else <p>Post Not Found</p> @endif

<div class="d-flex center-content-end">{{ $post->links() }} </div>

@endsection

</div>