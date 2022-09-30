 
@extends('layouts.layadmin')



@section('judul')
Data Admin
@endsection


@section('container')


 
 
<div class="row" style="display:flex; margin-bottom:5px">
        <div class="col-md-8"> <!--<button class="btn-primary">Tambah</button>--></div>
        <div class="col-md-4">
          <form action="/user">
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
            @foreach(\App\Models\Gabungan::where('tanggal', $posta->tanggal)->get() as $apa
                <tr>
                <th scope="row" rowspan="">{{ $posta->tanggal }}</th>
                <td>{{ $posta->jam }}</td>
                <td>{{ $posta->acara }}</td>
                <td>{{ $posta->tempat }}</td>
                <td>{{ $posta->penyelenggara }}</td>
                <td>{{ $posta->disposisi }} - {{ $posta->kehadiran }}</td>
                <td>{{ $posta->keterangan }} </td>
                </tr>

             @endforeach
                <tr>
                
                <td>08.30</td>
                <td>Undangan</td>
                <td>DPRD</td>
                <td>DPRD</td>
                <td>Kabid-Kabid Hadiri</td>
                <td> </td>
                </tr>
                <tr>
                <th scope="row">Selasa, 20 Agustus</th>
                <td>08.30</td>
                <td>Undangan</td>
                <td>DPRD</td>
                <td>DPRD</td>
                <td>Kabid-Kabid Hadiri</td>
                <td> </td>
                </tr>
                
            </tbody>
            </table>
     


@endsection