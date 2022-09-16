

@extends('layouts.main')

@section('container')
 
<div class="container">
<div class="row">
<div class="col-md-3">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>kelas</td>
      <td>:</td>
      <td>{{$detsiswa->kelas->nama_kelas}}</td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td>{{$detsiswa->kelas->wali_kelas}}</td>
    </tr>

    <tr>
          
      <td>Tahun Masuk</td>
      <td>:</td>
      <td>{{$detsiswa->tahun_masuk}}</td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td>{{$detsiswa->status}}</td>
    </tr>

    
    
</tbody>
</table>
</div>



<div class="col-md-9">
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id siswa</td>
      <td>:</td>
      <td>{{$detsiswa->id}}</td> 
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$detsiswa->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama siswa</td>
      <td>:</td>
      <td>{{$detsiswa->nama_siswa}}</td>
    </tr>

    <tr>
          
      <td>Genre</td>
      <td>:</td>
      <td>{{$detsiswa->jk}}</td>
    </tr>


    <tr>
          
      <td>Alamat siswa</td>
      <td>:</td>
      <td>{{$detsiswa->alamat}}</td>
    </tr>

    <tr>
          
      <td>Telepon siswa</td>
      <td>:</td>
      <td>{{$detsiswa->telepon}}</td>
    </tr>


    <tr>
          
      <td>Nama Ayah</td>
      <td>:</td>
      <td>{{$detsiswa->nama_ayah}}</td>
    </tr>
    
    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$detsiswa->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama Ibu</td>
      <td>:</td>
      <td>{{$detsiswa->nama_ibu}}</td>
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$detsiswa->nis}}</td>
    </tr>


    <tr>
          
      <td>Telepon Orang Tua</td>
      <td>:</td>
      <td>{{$detsiswa->telepon_ortu}}</td>
    </tr>

    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td>{{$detsiswa->username}}</td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td>{{$detsiswa->password}}</td>
    </tr>

  
  </tbody>
</table>

</div>
</div>
</div>

@endsection