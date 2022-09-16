
@extends('layouts.main')



@section('judul')
Data siswa
@endsection


@section('container')




<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id siswa</th>
      <th scope="col">Nama siswa</th>
      <th scope="col">Kelas</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

<!-- 
  @if($post->count())
  
  <tr>
      <th scope="row">1</th>
      <td><a href="/siswa/{{ $post->slug}}">{{ $post->id }}</a></td>
      <td>{{ $post->nama_siswa }}</td>
      <td>{{ $post->kelas->nama_kelas }}</td>
      <td>@mdo</td>
    </tr>
    @else 
    <p class="text-center fs-4"> No Post Found. </p>
    @endif -->
  
    
      @foreach($post as $aa)
      
      
    <tr>
      <th scope="row">1</th>
      <td><a href="/siswa/{{ $aa[0]->slug}}">{{ $aa->id }}</a></td>
      <td>{{ $aa->nama_siswa }}</td>
      <td>{{ $aa->kelas->nama_kelas }}</td>
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