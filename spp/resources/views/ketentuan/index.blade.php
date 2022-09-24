
@extends('layouts.main')



@section('judul')
Ketentuan Pembayaran
@endsection


@section('container')


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
      <td>{{ $posta['spp'] }}</td>
      <td>{{ $posta['denda'] }}</td> 
      <td>{{ $posta['uang_lainnya'] }}</td>
      <td>{{ $posta['keterangan'] }}</td>
      <td><button type="button" class="btn btn-warning">Edit</button>
<button type="button" class="btn btn-danger">Hapus</button></td></td>
    </tr>
    @endforeach
  </tbody>
</table>

<div class="d-flex center-content-end">{{ $post->links() }} </div>

@endsection