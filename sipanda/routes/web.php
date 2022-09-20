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
    return view('home');
});

Route::get('/',[homeController::class,'index']);
 
 
//admin
Route::get('/admin',[adminController::class,'index']);

//End Admin


//agenda
Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/tbagenda', function () {
    return view('tbagenda');
});

Route::get('/agenda',[agendaController::class,'index']);
//end agenda
//user

Route::get('/user', function () {
 
});

Route::get('/user',[userController::class,'index']);
 
//end user

Route::get('/login', [loginController::class,'index']);
Route::post('/login', [loginController::class,'authenticate']);