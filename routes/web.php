<?php

use Illuminate\Support\Facades\Route;

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

    //  ----------------   FRONT PAGE   ------------------ //

    Route::get('/', function () {
        return view('welcome');
    });
    
                //  ----------------   ADMIN PAGE   ------------------ //
    
    Auth::routes();
    
    Route::prefix('admin')->group(function(){

                                    // Dashboard 
        Route::get('/admin',[App\Http\Controllers\DashboardController::class,'index']);
                                    // Kelola Kategori
        Route::get('/kategori',[App\Http\Controllers\KategoriController::class,'index']);
        Route::get('/tambah_kategori',[App\Http\Controllers\KategoriController::class,'tambah_kategori']);
        Route::post('/tambah_data_kategori',[App\Http\Controllers\KategoriController::class,'tambah_data_kategori']);
        Route::delete('/hapus_kategori/{id_kategori}',[App\Http\Controllers\KategoriController::class,'hapus_kategori']);
                                    // Kelola Pertanyaan
        Route::get('/kategori',[App\Http\Controllers\KategoriController::class,'index']);
        Route::get('/tambah_kategori',[App\Http\Controllers\KategoriController::class,'tambah_kategori']);
        Route::post('/tambah_data_kategori',[App\Http\Controllers\KategoriController::class,'tambah_data_kategori']);
        Route::delete('/hapus_kategori/{id_kategori}',[App\Http\Controllers\KategoriController::class,'hapus_kategori']);
    
    });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
