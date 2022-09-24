

@extends('layouts.main')

@section('container')
 
<div class="container">
  <br>
<a href="" class="btn btn-primary"><span data-feather="arrow-left"></span>Back</a>
<br>
<br>
<div class="row">
 

<table class="table">
   
  <tbody>

    <tr>
          
      <td>kelas</td>
      <td>:</td>
      <td>{{$kelas->id}}</td>
    </tr>

    <tr>
          
      <td>Wali kelas</td>
      <td>:</td>
      <td>{{$kelas->wali_kelas}}</td>
    </tr>

    
  
  </tbody>
</table>

</div>
</div>
</div>

@endsection