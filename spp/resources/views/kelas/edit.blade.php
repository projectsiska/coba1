
@extends('layouts.main')



@section('judul')
Edit Data Kelas
@endsection


@section('container')
 
 
<div class="container">
  <br>
    <a type="button" href="{{ URL::previous() }}" class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/kelas/{{$kelas->slug}}">
      
  {{$kelas->slug}}
 @csrf
   @method('put')
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kelas</label>
    <input type="text" value="{{ old('nama_kelas',$kelas->nama_kelas)}}" 
    required name="nama_kelas" class="form-control @error('nama_kelas') is->invalid @enderror" id="nama_kelas" aria-describedby="nama_kelas" placeholder="Nama Kelas"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Slug</label>
    <input type="text" name="slug"  value="{{ old('slug',$kelas->slug)}}" readonly required class="form-control @error('slug') is->invalid @enderror" id="slug" placeholder="Slug">
  </div>

  @error('slug')
  <div class="invalid-feedback">
    error nich
  </div>
  @enderror

  <div class="form-group">
    <label for="exampleInputPassword1">Wali Kelas</label>
    <input type="text" required  value="{{ old('wali_kelas',$kelas->wali_kelas)}}" name="wali_kelas" class="form-control" id="wali_kelas" placeholder="Nama Wali Kelas">
  </div>

   <button type="submit" class="btn btn-primary">Edit Kelas</button>
</form>

</div>
 
@endsection




