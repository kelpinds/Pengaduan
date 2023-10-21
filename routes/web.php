<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatController;
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
    Route::get('register',[AdminController::class,'register']);
    Route::post('register',[AdminController::class,'data']);
    Route::get('validasi',[AdminController::class,'validasi']);

});

Route::prefix('masyarakat')->group(function(){
    Route::get('/',function(){
        return view('Masyarakat.index');
    })->middleware(validasiAdmin::class);
    Route::get('layout',[MasyarakatController::class,'layout']);
    Route::get('login',[MasyarakatController::class,'login']);
    Route::post('login',[MasyarakatController::class,'ceklogin']);
    Route::get('register',[MasyarakatController::class,'register']);
    Route::post('register',[MasyarakatController::class,'data']);
    Route::get('pengaduan',[MasyarakatController::class,'pengaduan']);
    
});

// Route masyarakat
Route::get('/', function () {
    return view('Masyarakat.Index');
});