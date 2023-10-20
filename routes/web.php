<?php

use App\Http\Controllers\AdminController;
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
    Route::get('logout',[AdminController::class,'logout']);
    Route::get('register',[AdminController::class,'register']);
    Route::post('register',[AdminController::class,'data']);
    Route::get('pengaduan',[AdminController::class,'pengaduan']);

});

// Route masyarakat
Route::get('/', function () {
    return view('Masyarakat.Index');
});