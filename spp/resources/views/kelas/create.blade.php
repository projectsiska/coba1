
@extends('layouts.main')



@section('judul')
Tambah Data Kelas
@endsection


@section('container')

 
<div class="container">
  <br>
    <a type="button" href=" " class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/kelas">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kelas</label>
    <input type="text" value="{{ old('nama_kelas')}}" required name="nama_kelas" autofocus class="form-control @error('nama_kelas') is->invalid @enderror" id="nama_kelas" aria-describedby="nama_kelas" placeholder="Nama Kelas"> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Slug</label>
    <input type="text" name="slug"  value="{{ old('slug')}}" disabled required class="form-control @error('slug') is->invalid @enderror" id="slug" placeholder="Slug">
  </div>

  @error('slug')
  <div class="invalid-feedback">
    error nich
  </div>
  @enderror

  <div class="form-group">
    <label for="exampleInputPassword1">Wali Kelas</label>
    <input type="text" required  value="{{ old('wali_kelas')}}" name="wali_kelas" class="form-control" id="wali_kelas" placeholder="Nama Wali Kelas">
  </div>

   <button type="submit" class="btn btn-primary">Tambah Kelas</button>
</form>

</div>

<script>

  const nama_kelas= document.querySelector('#nama_kelas');
  const slug= document.querySelector('#slug');

  nama_kelas.addEventListener('change', function() {
    fetch('/kelas/checkSlug?nama_kelas=' + nama_kelas.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

</script>
@endsection




