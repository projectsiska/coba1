

@extends('layouts.main')

@section('container')
 
<div class="container">
  <br>
<a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
<br>
<br>
<div class="row">


<div class="col-md-4">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>kelas</td>
      <td>:</td>
      <td>{{$siswa->kelas->nama_kelas}}</td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td>{{$siswa->kelas->wali_kelas}}</td>
    </tr>

    <tr>
          
      <td>Tahun Masuk</td>
      <td>:</td>
      <td>{{$siswa->tahun_masuk}}</td>
    </tr>

    <tr>
          
      <td>Status siswa</td>
      <td>:</td>
      <td>{{$siswa->status_siswa}}</td>
    </tr>

    <tr>
          
      <td>Status Pembayaran</td>
      <td>:</td>
      <td>{{$siswa->status_byr}}</td>
    </tr>

    
    
</tbody>
</table>
</div>



<div class="col-md-8">
<table class="table">
   
  <tbody>
    <tr>
         
      <td>Id siswa</td>
      <td>:</td>
      <td>{{$siswa->id}}</td> 
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$siswa->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama siswa</td>
      <td>:</td>
      <td>{{$siswa->nama_siswa}}</td>
    </tr>

    <tr>
          
      <td>Genre</td>
      <td>:</td>
      <td>{{$siswa->jk}}</td>
    </tr>


    <tr>
          
      <td>Alamat siswa</td>
      <td>:</td>
      <td>{{$siswa->alamat}}</td>
    </tr>

    <tr>
          
      <td>Telepon siswa</td>
      <td>:</td>
      <td>{{$siswa->telepon}}</td>
    </tr>


    <tr>
          
      <td>Nama Ayah</td>
      <td>:</td>
      <td>{{$siswa->nama_ayah}}</td>
    </tr>
    
    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$siswa->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama Ibu</td>
      <td>:</td>
      <td>{{$siswa->nama_ibu}}</td>
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$siswa->nis}}</td>
    </tr>


    <tr>
          
      <td>Telepon Orang Tua</td>
      <td>:</td>
      <td>{{$siswa->telepon_ortu}}</td>
    </tr>
<!--
    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td>{{$siswa->username}}</td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td>{{$siswa->password}}</td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

@endsection