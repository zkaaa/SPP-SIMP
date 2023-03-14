<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPetugas;
use App\Http\Controllers\DashboardSiswa;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\TransaksiController;
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

// Route::group([
//     'middleware' => ['guest']
// ], function(){
//     Route::prefix('login')->group(function()
//     {
//         Route::get('/', [AuthController::class, 'index'])->name('login');
//         Route::post('/', [AuthController::class, 'authenticated']);
//     });
// });

// Route::group([
//     'middleware'    =>  ['auth']
// ], function(){
    
//     Route::get('/logout', [AuthController::class, 'logout']);
// });

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth:petugas');

Route::prefix('siswa')->group(function()
{
    Route::get('/', [SiswaController::class, 'index']);
    Route::get('/tambah', [SiswaController::class, 'tambah']);
    Route::post('/store', [SiswaController::class, 'store']);
    Route::get('/edit/{nisn}', [SiswaController::class, 'edit']);
    Route::put('/update/{nisn}', [SiswaController::class, 'update']);
    Route::get('/hapus/{nisn}', [SiswaController::class, 'delete']);
})->middleware('level:admin');

Route::prefix('petugas')->group(function()
{
    Route::get('/', [PetugasController::class, 'index']);
    Route::get('/tambah', [PetugasController::class, 'tambah']);
    Route::post('/store', [PetugasController::class, 'store']);
    Route::get('/edit/{id_petugas}', [PetugasController::class, 'edit']);
    Route::post('/update/{id}', [PetugasController::class, 'update']);
    Route::get('/hapus/{id}', [PetugasController::class, 'delete']);
});

Route::prefix('kelas')->group(function()
{
    Route::get('/', [KelasController::class, 'index']);
    Route::get('/tambah', [KelasController::class, 'tambah']);
    Route::post('/store', [KelasController::class, 'store']);
    Route::get('/edit/{id_kelas}', [KelasController::class, 'edit']);
    Route::post('/update/{id_kelas}', [KelasController::class, 'update']);
    Route::get('/hapus/{id_kelas}', [KelasController::class, 'delete']);
});

Route::prefix('spp')->group(function()
{
    Route::get('/', [SppController::class, 'index']);
    Route::get('/tambah', [SppController::class, 'tambah']);
    Route::post('/store', [SppController::class, 'store']);
    Route::get('/edit/{id_spp}', [SppController::class, 'edit']);
    Route::post('/update/{id_spp}', [SppController::class, 'update']);
    Route::get('/hapus/{id_spp}', [SppController::class, 'delete']);
});

Route::prefix('transaksi')->group(function()
{
    Route::get('/', [TransaksiController::class, 'index']);
    Route::get('/tambah', [TransaksiController::class, 'tambah']);
    Route::post('/store', [TransaksiController::class, 'store']);
});

Route::prefix('history')->group(function()
{
    Route::get('/', [HistoryController::class, 'index']);
    Route::get('/edit/{id_pembayaran}', [HistoryController::class, 'edit']);
    Route::post('/update/{id_pembayaran}', [HistoryController::class, 'update']);
    Route::get('/hapus/{id_pembayaran}', [HistoryController::class, 'delete']);
    Route::get('/generatepdf', [HistoryController::class, 'generatepdf']);
});

