
@extends('layouts.main')



@section('judul')
Tambah Data siswa
@endsection


@section('container')

 
<div class="container">
  <br>
    <a type="button" href=" " class="btn btn-primary">Back</a> 
  <br>
  <br>
  <form method="post" action="/pembayaran">
 @csrf

 <div class ="row">
    <div class ="col-md-5">
      <div class="form-group">
        <label for="exampleInputEmail1">NIS siswa</label>
        <input type="text" value="{{ old('nis')}}" required name="nis" autofocus class="form-control @error('nis') is->invalid @enderror" id="nis" aria-describedby="nis" placeholder="Nis siswa"> 
      </div>

      <div class="form-group">
      <label for="inputState">Kelas</label>
      <select id="inputState" name="kelas_id" class="form-control">
        <option selected>Pilih Kelas</option>
        @foreach( $kelas as $kelas)
        <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
        @endforeach 
      </select>
    </div>

     <div class="form-group">
    <label for="exampleInputPassword1">Tahun Masuk</label>
    <input type="text" required  value="{{ old('tahun_masuk')}}" name="tahun_masuk" class="form-control" id="tahun_masuk" placeholder="Tahun Masuk">
    </div>

     <div class="form-group">
      <label for="inputState">Status Pembayaran</label>
      <select id="inputState" name="status_byr" class="form-control">
        <option selected>Pilih Status Pembayaran</option>
         
        <option>Mandiri</option>
        <option>Bantuan</option>
        
      </select>
    </div>


    <div class="form-group">
      <label for="inputState">Status Siswa</label>
      <select id="inputState" name="status_siswa" class="form-control">
        <option selected>Pilih Status Siswa</option>
         
        <option>Aktif</option>
        <option>Tidak Aktif</option>
        <option>Alumni</option>
        
      </select>
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" required  value="{{ old('username')}}" name="username" class="form-control" id="username" placeholder="Nama Siswa">
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" required  value="{{ old('password')}}" name="password" class="form-control" id="password" placeholder="Password">
    </div>

    </div>


 <div class ="col-md-7">
 

  <div class="form-group">
    <label for="exampleInputPassword1">Nama Siswa</label>
    <input type="text" required  value="{{ old('nama_siswa')}}" name="nama_siswa" class="form-control" id="nama_siswa" placeholder="Nama Siswa">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Slug</label>
    <input type="text" name="slug"  value="{{ old('slug')}}" readonly required class="form-control @error('slug') is->invalid @enderror" id="slug" placeholder="Slug">
  </div>

  @error('slug')
  <div class="invalid-feedback">
    error nich
  </div>
  @enderror 
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Kelamin</label>
    <Br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jk" id="jk1" value="Laki-Laki">
      <label class="form-check-label" for="jk1">Laki-Laki</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="jk" id="jk2" value="Perempuan">
      <label class="form-check-label" for="jk2">Perempuan</label>
    </div>
  
  </div>


   <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <textarea type="text" required  value="{{ old('alamat')}}" name="alamat" class="form-control" id="alamat" placeholder="Alamat Siswa"></textarea>
   </div>

    <div class="form-group">
    <label for="exampleInputPassword1">Telepon</label>
    <input type="text" required  value="{{ old('telepon')}}" name="telepon" class="form-control" id="telepon" placeholder="Nama Siswa">
    </div>


    <div class="form-group">
    <label for="exampleInputPassword1">Nama Ayah</label>
    <input type="text" required  value="{{ old('nama_ayah')}}" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Nama Ayah">
    </div>


     <div class="form-group">
    <label for="exampleInputPassword1">Nama Ibu</label>
    <input type="text" required  value="{{ old('nama_ibu')}}" name="nama_ibu" class="form-control" id="nama_ibu" placeholder="Nama Ibu">
    </div>

     <div class="form-group">
    <label for="exampleInputPassword1">Telepon Orang Tua</label>
    <input type="text" required  value="{{ old('telepon_ortu')}}" name="telepon_ortu" class="form-control" id="telepon_ortu" placeholder="Telepon Ortu">
    </div>


     

   <button type="submit" class="btn btn-primary">Tambah siswa</button>
</form>

</div>
</div>
</div>


<script>

  const nis= document.querySelector('#nis');
  const slug= document.querySelector('#slug');
  const nama_siswa= document.querySelector('#nama_siswa');

  nis.addEventListener('change', function() {
    fetch('/siswa/checkSlug?nis=' + nis.value + nama_siswa.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });

</script>
@endsection




