
@extends('layouts.main')



@section('judul')
Data Pembayaran
@endsection


@section('container')


<div class="container">
      <div class="row">
        <div class="col-md-8">
          <a type="button" href="/pembayaran/create" class="btn btn-primary">Tambah</a> 
        </div><div class="col-md-4">
          <form action="/pembayaran">
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
      <th scope="col">Periode</th>
      <th scope="col">Nama siswa</th>
      <th scope="col">Total</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  
    
      @foreach($post as $posta)
      
      
    <tr>
      <th scope="row">1</th>
      <td><a href="/detpembayaran/{{$posta->slug}}">{{ $posta->periode->bulan }} {{ $posta->periode->tahun }}</a></td>
      <td>{{ $posta->siswa->nama_siswa }}</td>
      <td>{{ $posta->total }}</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td></td>
    </tr>
    @endforeach
     
  </tbody>
</table>

<div class="d-flex center-content-end">{{ $post->links() }} </div>

@endsection