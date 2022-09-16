@extends('layouts.main')

@section('container')
 
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id Kelas</td>
      <td>{{$post->id}}</td> 
    </tr>

    <tr>
          
      <td>Nama Kelas</td>
      <td>{{$post->nama_kelas}}</td>
    </tr>

    <tr>
          
      <td>Wali Kelas</td>
      <td>{{$post->wali_kelas}}</td>
    </tr>
    
  </tbody>
</table>


@endsection