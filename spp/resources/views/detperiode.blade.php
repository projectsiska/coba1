

@extends('layouts.main')

@section('container')
 
<div class="container">
<div class="row">
<div class="col-md-3">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>Bulan</td>
      <td>:</td>
      <td>{{$detperiode->bulan}}</td>
    </tr>

    <tr>
          
      <td>Tahun</td>
      <td>:</td>
      <td>{{$detperiode->tahun}}</td>
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
      <td>{{$detperiode->id}}</td> 
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$detperiode->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama siswa</td>
      <td>:</td>
      <td>{{$detperiode->nama_siswa}}</td>
    </tr>

    <tr>
          
      <td>Genre</td>
      <td>:</td>
      <td>{{$detperiode->jk}}</td>
    </tr>


    <tr>
          
      <td>Alamat siswa</td>
      <td>:</td>
      <td>{{$detperiode->alamat}}</td>
    </tr>

    <tr>
          
      <td>Telepon siswa</td>
      <td>:</td>
      <td>{{$detperiode->telepon}}</td>
    </tr>


    <tr>
          
      <td>Nama Ayah</td>
      <td>:</td>
      <td>{{$detperiode->nama_ayah}}</td>
    </tr>
    
    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$detperiode->nis}}</td>
    </tr>


    <tr>
          
      <td>Nama Ibu</td>
      <td>:</td>
      <td>{{$detperiode->nama_ibu}}</td>
    </tr>

    <tr>
          
      <td>NIS siswa</td>
      <td>:</td>
      <td>{{$detperiode->nis}}</td>
    </tr>


    <tr>
          
      <td>Telepon Orang Tua</td>
      <td>:</td>
      <td>{{$detperiode->telepon_ortu}}</td>
    </tr>
<!--
    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td>{{$detperiode->username}}</td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td>{{$detperiode->password}}</td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

@endsection