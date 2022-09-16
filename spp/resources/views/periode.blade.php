 
@extends('layouts.main')



@section('judul')
Data Periode
@endsection


@section('container')


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Periode</th>
      <th scope="col">Bulan</th>
      <th scope="col">Tahun</th> 
      <th scope="col">Aksi</th> 
    </tr>
  </thead>
  <tbody>
      @foreach($post as $post)
      
    <tr>
      <th scope="row">1</th>
      <td><a src="/periode/{{ $post["slug"]}}"> {{ $post['id_periode'] }} </a></td>
      <td>{{ $post['bulan'] }}</td>
      <td>{{ $post['tahun'] }}</td>
      <td>@mdo</td>
    </tr>
    @endforeach
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