
@extends('layouts.main')



@section('judul')
Data Kelas
@endsection


@section('container')


<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id Kelas</th>
      <th scope="col">Nama Kelas</th>
      <th scope="col">Wali Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach($post as $post)
      
    <tr>
      <th scope="row">1</th>
      <td><a href="/kelas/{{ $post->slug}}">{{ $post->id }}</a></td>
      <td>{{ $post->nama_kelas }}</td>
      <td>{{ $post->wali_kelas }}</td>
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