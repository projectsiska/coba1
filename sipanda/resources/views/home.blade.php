
 
@extends('layouts.main')



@section('judul')
Data siswa
@endsection


@section('container')
    
  
  <div class="right" style="">
    <div class="title">SIPANDA</div>
    <div class="description">Sistem Informasi Pendataan Agenda</div>
</div>
  <div class="right" style="background-color:#f6f6fc00">
    <div class="row">
      <div class="graph">
          

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Hari</th>
      <th scope="col">Jam</th>
      <th scope="col">Acara</th>
      <th scope="col">Tempat</th>
      <th scope="col">Penyelenggara</th>
      <th scope="col">Disposisi</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody style="overflow:auto;">
   @foreach($gabungan as $posta)
              
                <tr> 
                <th rowspan="">{{ $a = \Carbon\Carbon::parse($posta->tanggal)->translatedFormat('l, d M Y')}}</th>
                <td>{{ $b = \Carbon\Carbon::parse($posta->jam)->translatedFormat('H:s')}}</td>
                <td>{{ $posta->acara }}</td>
                <td>{{ $posta->tempat }}</td>
                <td>{{ $posta->penyelenggara }}</td>
                <td>{{ $posta->disposisi }} - {{ $posta->kehadiran }}</td>
                <td>{{ $posta->keterangan }} </td>
                 
                </tr>

             @endforeach
      
    <tr>
      <th scope="row">Selasa, 20 Agustus</th>
      <td>08.30</td>
      <td>Undangan</td>
      <td>DPRD</td>
      <td>DPRD</td>
      <td>Kabid-Kabid Hadiri</td>
      <td> </td>
    </tr>

     @foreach ($gabungan as $posta)
      <!-- gabungan  -->
     <tr>
	 
        <th rowspan="10">{{$posta['tanggal']}}    </th>
</tr>
@endforeach

        
    
  </tbody>
</table>
      </div>

      <center>{{ $gabungan->links() }}</center>
         
    </div>
    
   
  </div>
</div><a class="inspiration" href="https://dribbble.com/shots/3875272-Stock-App-Dashboard" target="_blank">inspiration  </a>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>