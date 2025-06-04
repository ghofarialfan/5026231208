<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiDBController;
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
    return view('welcome');
});

Route::view('pertama','pertama');
Route::view('FEC5026231208','FEC5026231208');
Route::view('js1','js1');
Route::view('js2','js2');
Route::view('linktree','linktree');
Route::view('ets','ets');
Route::view('danantara','danantara');
//Route::get('/pegawai/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);





Route::get('/dosen', [DosenController::class, 'index']);


Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/edit/{id}', [PegawaiControler::class, 'edit']);
Route::get('/pegawai/update/{id}', [PegawaiController::class, 'update']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);


use App\Http\Controllers\BlogController;
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);


