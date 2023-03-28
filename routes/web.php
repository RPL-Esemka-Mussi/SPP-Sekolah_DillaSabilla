<?php

use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/login', [PageController::class, 'login']);
Route::post('/auth', [PageController::class, 'auth']);



//route User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/simpan', [UserController::class, 'simpan']);
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::post('/user/update', [UserController::class, 'update']);
Route::get('/user/hapus/{id}' , [UserController::class, 'hapus']);

//route Kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/tambah', [KelasController::class, 'tambah']);
Route::post('/kelas/simpan', [KelasController::class, 'simpan']);
Route::get('/kelas/edit/{id}', [KelasController::class, 'edit']);
Route::post('/kelas/update', [KelasController::class, 'update']);
Route::get('/kelas/hapus/{id}', [KelasController::class, 'hapus']);

//route SPP
Route::get('/spp', [SppController::class, 'index']);
Route::get('/spp/tambah', [SppController::class, 'tambah']);
Route::post('/spp/simpan', [SppController::class, 'simpan']);
Route::get('/spp/edit/{id}', [SppController::class, 'edit']);
Route::post('/spp/update', [SppController::class, 'update']);
Route::get('/spp/hapus/{id}', [SppController::class, 'hapus']);

//route Siswa
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/tambah', [SiswaController::class, 'tambah']);
Route::post('/siswa/simpan', [SiswaController::class, 'simpan']);
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit']);
Route::post('/siswa/update', [SiswaController::class, 'update']);
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'hapus']);

//route Pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/transaksi/{id}', [PembayaranController::class, 'transaksi']);
Route::post('/pembayaran/simpan', [PembayaranController::class, 'simpan']);
Route::get('/pembayaran/edit/{id}', [PembayaranController::class, 'edit']);
Route::post('/pembayaran/update', [PembayaranController::class, 'update']);
Route::get('/pembayaran/hapus/{id}', [PembayaranController::class, 'hapus']);









