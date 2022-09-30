 
@extends('layouts.layadmin')



@section('judul')
@endsection


@section('container')
 
<div class="row" style="display:flex; margin-bottom:5px; padding-top:10px">
        <div class="col-md-8"> <!--<button class="btn-primary">Tambah</button>--></div>
        <div class="col-md-4">
          <form action="/agenda">
            <div class="input-group mb-3">
              <input type="text" name="search" class="form-control" 
              value="{{request('search')}}"
              placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button type="submit" class="btn btn-outline-secondary" >Search</button>
              </div>
            </div>
          </form>
        </div>
</div>
<input hidden  value="{{ $apa = $title }}">
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">Hari </th>
                <th scope="col">Jam</th>
                <th scope="col">Acara</th>
                <th scope="col">Tempat</th>
                <th scope="col">Penyelenggara</th>
                <th scope="col">Disposisi</th>
                <th scope="col">Keterangan</th>
                  
                </tr>
            </thead>
            <tbody style="overflow:auto;">

            
             
             @foreach($gabungan as $key => $posta)
              
             
                <tr>
                <th rowspan="1">{{ $a = \Carbon\Carbon::parse($posta->tanggal)->translatedFormat('l, d M Y')}}</th>
                <td>{{ $b = \Carbon\Carbon::parse($posta->jam)->translatedFormat('H:s')}}</td>
                <td>{{ $posta->acara }}</td>
                <td>{{ $posta->tempat }}</td>
                <td>{{ $posta->penyelenggara }}</td>
                <td>{{ $posta->disposisi }} - {{ $posta->kehadiran }}</td>
                <td>{{ $posta->keterangan }} </td>
               </tr>
               
               
               </tr>
 
             @endforeach
               
                
            </tbody>
            </table>
     
<center>{{ $gabungan->links() }}</center>
@endsection