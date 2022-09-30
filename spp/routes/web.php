<?php

use Illuminate\Support\Facades\Route;
use App\Models\kelas;
use App\Http\Controllers\kelasController;
use App\Models\periode;
use App\Http\Controllers\periodeController;
use App\Models\siswa;
use App\Http\Controllers\siswaController;
use App\Models\pembayaran;
use App\Models\ketentuan;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ketentuanController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 

Route::get('/admin', function () {
    return view('about');
});


Route::get('/', function () {
    return view('home', [
        "nama"=> "Siapa ini",
        "user" => "Administrator",
        "aplikasi" => "Pembayaran SPP",
        "image" => "gambar.png",
        "objek" => "SMA APA GITU"
    ]);
});

 






//kelas komponen
  

Route::get('/kelas/checkSlug', [kelasController::class, 'checkSlug']);
Route::resource('/kelas', kelasController::class);
 
 //end kelas


//periode komponen

Route::get('/periode/checkSlug', [periodeController::class, 'checkSlug']);
Route::resource('/periode', periodeController::class);
 
//end periode




//siswa komponen

Route::get('/siswa/checkSlug', [siswaController::class, 'checkSlug']);
Route::resource('/siswa', siswaController::class); 
 
//end siswa





//pembayaran komponen

Route::get('/pembayaran/checkSlug', [pembayaranController::class, 'checkSlug']);
Route::resource('/pembayaran', pembayaranController::class); 

//end pembayaran



//ketentuan komponen

Route::get('/ketentuan/checkSlug', [ketentuanController::class, 'checkSlug']);
Route::resource('/ketentuan', ketentuanController::class); 

//end ketentuan

 
 /* 
Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'authenticate']); */



