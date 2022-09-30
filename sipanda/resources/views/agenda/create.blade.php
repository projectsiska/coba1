 
@extends('layouts.layadmin')



@section('judul')
Data siswa
@endsection


@section('container')
 <link rel="stylesheet" href="/css/style.css">
 <link rel="stylesheet" href="/js/jam.js">
<link rel="stylesheet" href="/font-awsome/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

 

 <!-- CSS Boostrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<!-- CSS Bootstrap Datepicker -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- Javascript Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js">
</script>
<!-- Javascript Bootstrap Datepicker -->
<script src="/js/jam.js"
href="/js/jam.js">
</script>

<style>
body{
   font-family: sans-serif;
}
</style>

<div class="" style="
    padding-left: 20px;
    padding-top: 20px;
    padding-bottom: 10px;
    padding-right: 20px;
">
 <form method="post" action="/agenda">
<div class="row" style="margin-bottom:20px!important">
  @csrf
  <div class="col-md-4">
      <div class="form-group">
      <label  class="control-label" >Tanggal:</label>
      <br> 
        <input type="text" name="tanggal" Placeholder="Pilih Tanggal" class="form-control datepicker" style="border-color : seashell; border-style:double">
      </div>

      <div class="form-group">
      <label  class="control-label" >Waktu:</label>
      <br> 
        <input type="time" name="jam" Placeholder="Pilih Tanggal" class="form-control" style="border-color : seashell; border-style:double">
      </div>

  </div>

   <div class="col-md-8">

    <div class="form-group">
      <label  class="control-label" >Acara:</label>
      <br> 
        <input type="text" name="acara" Placeholder="Ketik Acaranya" class="form-control" >
      </div>

      <div class="form-group">
      <label  class="control-label" >Tempat:</label>
      <br> 
        <input type="Tempat" name="tempat" Placeholder="Dimana Tempatnya?" class="form-control" >
      </div>

      <div class="form-group">
      <label  class="control-label" >Penyelenggara:</label>
      <br> 
        <input type="Tempat" name="penyelenggara" Placeholder="Siapa Penyelenggaranya?" class="form-control" >
      </div>


  </div>
  </div>

  <hr style="margin-top:0px; margin-bottom:0px; border-top: 2px solid #abaaaa85">

  <div class="row">
 
  <div class="col-md-4">
    <div class="form-group">
     <label  class="control-label" >Disposisi:</label>
     <br>
     <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="disposisi" type="radio" id="inlineradio1" value="Sekretaris">
      <label class="form-check" for="inlineradio1">Sekretaris</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="disposisi" type="radio" id="inlineradio2" value="Kabid PPEPD">
      <label class="form-check" for="inlineradio2">Kabid PPEPD</label>
    </div>
    <br>
        <div class="form-check form-check-inline">
      <input class="form-check-input" name="disposisi" type="radio" id="inlineradio1" value="Kabit PPM">
      <label class="form-check" for="inlineradio3">Kabit PPM</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="disposisi" type="radio" id="inlineradio2" value="Kabid PSI">
      <label class="form-check" for="inlineradio4">Kabid PSI</label>
    </div>
    <br> 
        <div class="form-check form-check-inline">
      <input class="form-check-input" name="disposisi" type="radio" id="inlineradio1" value="Kabid Litbang">
      <label class="form-check" for="inlineradio3">Kabid Litbang</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="disposisi" type="radio" id="inlineradio2" value="Semua Kabid">
      <label class="form-check" for="inlineradio4">Semua Kabid</label>
    </div>
</div>


  </div>

  <div class="col-md-3">
    <div class="form-group">
     <label  class="control-label" >Kehadiran:</label>
     <br>
     <br>
    <div class="form-check form-check-inline">
    <input class="form-check-input" name="kehadiran" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Mewakili">
    <label class="form-check-" for="inlineRadio1">Mewakili</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="kehadiran" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Hadir">
      <label class="form-check-" for="inlineRadio2">Hadir</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="kehadiran" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Bersama Saya">
      <label class="form-check-" for="inlineRadio1">Bersama Saya</label>
    </div>
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="kehadiran" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="Utus JFT">
      <label class="form-check-" for="inlineRadio2">Utus JFT</label>
    </div> 
    <br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" name="kehadiran" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="Utus Staff">
      <label class="form-check-" for="inlineRadio2">Utus Staff</label>
    </div> 

    </div>
</div>
  <div class="col-md-5">
     <label for="exampleFormControlTextarea1">Keterangan</label>
    <textarea name="keterangan" class="form-control" rows="4"> </textarea>
  </div>

  </div>

  <div class="row">
    <div class="col-md-8">
    </div>
    <div class="col-md-4">
    <button class="btn btn-danger">Batal</button>
    <button class="btn btn-primary">Simpan</button>
    </div>
</div>

</form>
</div>
</div>
  
 
<script type="text/javascript">
$('.datepicker').datepicker();
</script>
@endsection