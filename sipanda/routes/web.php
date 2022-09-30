<?php

use Illuminate\Support\Facades\Route;
use App\Models\user;
use App\Http\Controllers\userController;

use App\Models\admin;
use App\Models\home;
use App\Http\Controllers\adminController;
use App\Models\agenda;
use App\Http\Controllers\agendaController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\homeController;
 
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

Route::get('/', function () {
    return view('home',[
            "id_admin"=>"adminnya",
            "title"=>"dashboard",
            
           "post"=> agenda::orderBy('tanggal','desc')
            ->orderBy('jam','asc'),

            "gabungan"=> agenda::orderBy('tanggal','desc') 
            ->orderBy('jam','asc')
            ->filter(request(['search']))
            ->paginate(5)->withQueryString() 
            
            ])->middleware('auth');
             

})->middleware('auth');

Route::get('/',[homeController::class,'index'])->middleware('auth');
 
 
//admin
Route::get('/admin',[adminController::class,'index'])->middleware('auth');

//End Admin


//agenda
Route::get('/agenda', function () {
    return view('agenda');
})->middleware('auth');
 

Route::resource('/agenda', agendaController::class)->middleware('auth');
//end agenda
//user

Route::get('/user', function () {
 
})->middleware('auth');
Route::resource('/user', userController::class);
Route::get('/user',[userController::class,'index']);
 
//end user

Route::get('/login', [loginController::class,'index'])->name('login');
Route::post('/login', [loginController::class,'authenticate']);
Route::post('/logout', [loginController::class,'logout']);