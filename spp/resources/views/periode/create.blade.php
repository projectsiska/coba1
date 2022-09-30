
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
  <form method="post" action="/periode">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Bulan Periode</label>
    <input type="text" value="{{ old('bulan')}}" required name="bulan" autofocus class="form-control @error('bulan') is->invalid @enderror" id="bulan" aria-describedby="bulan" placeholder="Bulan Periode"> 
  </div>
   
 

  <div class="form-group">
    <label for="exampleInputPassword1">Tahun</label>
    <input type="text" required  value="{{ old('tahun')}}" name="tahun" class="form-control" id="tahun" placeholder="Nama Tahun">
  </div>

   <button type="submit" class="btn btn-primary">Tambah Periode</button>
</form>

</div>

<script>

  const bulan= document.querySelector('#bulan');
  const slug= document.querySelector('#slug');

  bulan.addEventListener('change', function() {
    fetch('/kelas/checkSlug?bulan=' + bulan.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

</script>
@endsection




