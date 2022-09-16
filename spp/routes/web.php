<?php

use Illuminate\Support\Facades\Route;
use App\Models\kelas;
use App\Http\Controllers\kelasController;
use App\Http\Controllers\periodeController;
use App\Models\periodeControl;
use App\Models\siswa;
use App\Http\Controllers\siswaController;
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
Route::get('/kelas', function () {
 
});

Route::get('/kelas',[kelasController::class,'index']);

Route::get('kelas/{tes:slug}',[kelasController::class, 'show']);

//end kelas


//periode komponen

Route::get('/periode', function () {
 
});

Route::get('/periode',[periodeController::class,'index']);

Route::get('periode/{slug}',[periodeController::class, 'show']);

//end periode




//siswa komponen
Route::get('/siswa', function () {
 
}); 

Route::get('/siswa',[siswaController::class,'index']);

Route::get('siswa/{p:slug}',[siswaController::class, 'show']);

//end siswa



Route::get('/ketentuan', function () {
    return view('ketentuan');
});


Route::get('/pembayaran', function () {
    return view('pembayaran');
});




