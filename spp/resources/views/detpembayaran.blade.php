

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
      <td>{{$detpembayaran->id}}</td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td>{{$detpembayaran->siswa_id}}</td>
    </tr>

    <tr>
           
<!--
    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td>{{$detpembayaran->username}}</td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td>{{$detpembayaran->password}}</td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

@endsection