

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
          
      <td>Bulan</td>
      <td>:</td>
      <td>{{$periode->bulan}}</td>
    </tr>

    <tr>
          
      <td>Tahun</td>
      <td>:</td>
      <td>{{$periode->tahun}}</td>
    </tr>

    
    
</tbody>
</table>
</div>



<div class="col-md-9">
<table class="table">
   
 
  
  <tbody>
  </tbody>
</table>

</div>
</div>
</div>

@endsection