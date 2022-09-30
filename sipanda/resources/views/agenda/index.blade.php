 
@extends('layouts.layadmin')



@section('judul')
@endsection


@section('container')
 
<div class="row" style="display:flex; margin-bottom:5px; padding-top:10px">
        <div class="col-md-8">
         <a type="button" href="/agenda/create" class="btn btn-primary">Tambah</a>   
        </div>
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
      
        <div class="col-md-12">

@if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{session('success')}}
      </div>
@elseif(session()->has('deleted'))
 <div class="alert alert-danger" role="alert">
        {{session('deleted')}}
      </div>
  @endif
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
                <input  hidden value="{{ $siapa = auth()->user()->level}}">

                 @if($siapa=="Super Admin" or $siapa=="Admin")
                 
                <th class="text-center">Aksi</th>
                  @endif
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
                 @if($siapa=="Super Admin" or $siapa=="Admin")
                
                 <td>
                    <a href="/agenda/{{$posta->id}}/edit"  class="badge bg-warning border-0"><i class="fa fa-pencil" style="color:white; font-size:18px; margin:3px" aria-hidden="true"></i></a>

                    <form action="/agenda/{{ $posta->id  }}" class="d-inline" method="post">
                    @method('delete')
                    @csrf

                      <button onclick="return confirm('Are You Sure')" class="badge bg-danger border-0"><i class="fa fa-trash-o" style="color:white; font-size:18px; margin:3px" aria-hidden="true"></i></button>
                    </form>
                 </td>
                @endif
                </tr>

             @endforeach
               
                
            </tbody>

            
            </table>

</div>
<div class="col-md-4"></div>

      <div class="col-md-4" style="display:-webkit-inline-box">
        <center>{{ $gabungan->links() }}</center>
      </div>
</div>
</div>
@endsection