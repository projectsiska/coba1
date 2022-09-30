
@extends('layouts.main')



@section('judul')
Ketentuan Pembayaran
@endsection


@section('container')

<div class="container">
      <div class="row">
        <div class="col-md-8">
          <a type="button" href="/ketentuan/create" class="btn btn-primary">Tambah</a> 
        </div>
        <div class="col-md-4">
          <form action="/ketentuan">
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

@if ($post->count())
  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-8">
    <form action="/ketentuan">
    </form>
  </div>
  </div>

   @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
  @endif

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Ketentuan</th>
      <th scope="col">SPP</th>
      <th scope="col">Denda</th>
      <th scope="col">Uang lainnya</th>
      <th scope="col">Catatan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
 
      @foreach($post as $posta)
      
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td><a href="/ketentuan/{{ $posta['id']}}"> {{ $posta['id'] }} </a></td>
      <td>Rp. {{ $posta['spp'] }}</td>
      <td>Rp. {{ $posta['denda'] }}</td> 
      <td>Rp. {{ $posta['uang_lainnya'] }}</td>
      <td>{{ $posta['keterangan'] }}</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td></td>
    </tr>
    @endforeach
  </tbody>
</table>

@Else
<p>Data Not Found</p>

@endif
<div class="d-flex center-content-end">{{ $post->links() }} </div>

@endsection