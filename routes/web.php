<?php

use Illuminate\Support\Facades\Auth;
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
        return view('portal.question');
    });
    
                //  ----------------   ADMIN PAGE   ------------------ //
    
    Auth::routes();
    
    Route::prefix('admin')->middleware('auth')->group(function(){

                                    // Dashboard 
        Route::get('/',[App\Http\Controllers\DashboardController::class,'index'])->middleware('auth');
                                    // Kelola Kategori
        Route::get('/kategori',[App\Http\Controllers\KategoriController::class,'index']);
        Route::get('/tambah_kategori',[App\Http\Controllers\KategoriController::class,'tambah_kategori']);
        Route::post('/tambah_data_kategori/{id_kategori}',[App\Http\Controllers\KategoriController::class,'tambah_data_kategori']);
        Route::delete('/hapus_kategori/{id_kategori}',[App\Http\Controllers\KategoriController::class,'hapus_kategori']);
                                    // Kelola Pertanyaan
        Route::get('/pertanyaan',[App\Http\Controllers\PertanyaanController::class,'index']);
        Route::get('/tambah_pertanyaan',[App\Http\Controllers\PertanyaanController::class,'tambah_pertanyaan']);
        Route::post('/tambah_data_pertanyaan',[App\Http\Controllers\PertanyaanController::class,'tambah_data_pertanyaan']);
        Route::get('/ubah_pertanyaan/{id_pertanyaan}',[App\Http\Controllers\PertanyaanController::class,'ubah_pertanyaan']);
        Route::post('/ubah_data_pertanyaan/{id_pertanyaan}',[App\Http\Controllers\PertanyaanController::class,'ubah_data_pertanyaan']);
        Route::delete('/hapus_pertanyaan/{id_pertanyaan}',[App\Http\Controllers\PertanyaanController::class,'hapus_pertanyaan']);
    
    });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
