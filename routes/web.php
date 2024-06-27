<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\NilaiController;
use App\Models\mata_kuliah;
use App\Models\nilai;
use App\Models\laporan;
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

Route::get('/', function () {
    return view('header/navbar');
});

Route::get('/index-mhs', [MahasiswaController::class, 'index']);
Route::get('/tambah-mhs', [MahasiswaController::class, 'tambah']);
Route::get('/edit-mhs/{no}', [MahasiswaController::class, 'edit']);
Route::post('/store-mhs', [MahasiswaController::class, 'store']);
Route::post('/update-mhs', [MahasiswaController::class, 'update']);
Route::get('/delete-mhs/{no}', [MahasiswaController::class, 'delete']);

Route::get('/index-nm', [NilaiController::class, 'index']);
Route::get('/tambah-nm', [NilaiController::class, 'tambah']);
Route::get('/edit-nm/{no}', [NilaiController::class, 'edit']);
Route::post('/store-nm', [NilaiController::class, 'store']);
Route::post('/update-nm', [NilaiController::class, 'update']);
Route::get('/delete-nm/{no}', [NilaiController::class, 'delete']);

Route::get('/index-lprn', [LaporanController::class, 'index']);
Route::get('/tambah-lprn', [LaporanController::class, 'tambah']);
Route::get('/edit-lprn/{no}', [LaporanController::class, 'edit']);
Route::post('/store-lprn', [LaporanController::class, 'store']);
Route::post('/update-lprn', [LaporanController::class, 'update']);
Route::get('/delete-lprn/{no}', [LaporanController::class, 'delete']);

// Cetak
Route::get('/laporan/{nbi}', [NilaiController::class, 'print']);