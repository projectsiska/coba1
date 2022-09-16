
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
 
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>


@endsection