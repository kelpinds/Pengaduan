<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\Masyarakatmiddleware;
use App\Http\Middleware\validasiAdmin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        return view('Administrator.index');
    })->middleware(validasiAdmin::class);
    Route::get('login',[AdminController::class,'login']);
    Route::post('login',[AdminController::class,'ceklogin']);
    Route::get('registrasi',[AdminController::class,'register']);
    Route::post('registrasi',[AdminController::class,'data']);
    Route::get('validasi',[AdminController::class,'validasi']);
    Route::get('index',[AdminController::class,'index']);
    Route::get('status/{id}',[AdminController::class,'status']);
});

Route::prefix('masyarakat')->group(function(){
    Route::get('/',function(){
        return view('Masyarakat.index');
    })->middleware(Masyarakatmiddleware::class);
    Route::get('layout',[MasyarakatController::class,'layout']);
    Route::get('login',[MasyarakatController::class,'login']);
    Route::post('login',[MasyarakatController::class,'ceklogin']);
    Route::get('registrasi',[MasyarakatController::class,'register']);
    Route::post('registrasi',[MasyarakatController::class,'data']);
    Route::get('pengaduan',[MasyarakatController::class,'pengaduan']);
    Route::post('pengaduan',[MasyarakatController::class,'cekpengaduan']);
    Route::get('logout',[MasyarakatController::class,'logout']);

    
});

// Route masyarakat
Route::get('/', function () {
    return view('Masyarakat.Index');
});