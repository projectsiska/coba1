

@extends('layouts.main')

@section('container')
 
<div class="container">
   <br>
<a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
<br>
<br>
<div class="row">
<div class="col-md-3">

<table class="table">
   
  <tbody>

    <tr>
          
      <td>kelas</td>
      <td>:</td>
      <td>{{$pembayaran->id}}</td>
    </tr>

    <tr>
          
      <td>Wali siswa</td>
      <td>:</td>
      <td>{{$pembayaran->siswa_id}}</td>
    </tr>

    <tr>
           
<!--
    <tr>
          
      <td>Username siswa</td>
      <td>:</td>
      <td>{{$pembayaran->username}}</td>
    </tr>


    <tr>
          
      <td>Password</td>
      <td>:</td>
      <td>{{$pembayaran->password}}</td>
    </tr>
-->
  
  </tbody>
</table>

</div>
</div>
</div>

@endsection