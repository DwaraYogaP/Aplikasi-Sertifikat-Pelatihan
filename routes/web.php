<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DataPelatihanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\UserController;
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

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/postLogin', [LoginController::class, 'login'])->name('postLogin');


Route::group(['middleware' => ['auth', 'cekrole:admin']], function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    // Beranda
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
    Route::post('/tambahUser', [BerandaController::class, 'tambahUser'])->name('tambah-user');

    // Pelatihan
    Route::get('/pelatihan', [PelatihanController::class, 'index']);
    Route::post('/tambahPelatihan', [PelatihanController::class, 'tambah'])->name('tambah-pelatihan');
    Route::put('/editPelatihan/{id}', [PelatihanController::class, 'edit'])->name('edit-pelatihan');
    Route::delete('/hapusPelatihan/{id}', [PelatihanController::class, 'hapus'])->name('hapus-pelatihan');
    
    
    // Data Pelatihan
    Route::get('/pelatihan/detailPelatihan', [DataPelatihanController::class, 'index']);
    Route::post('/pelatihan/detailPelatihan', [DataPelatihanController::class, 'tambah'])->name('tambah-data-pelatihan');
    Route::put('/editDataPelatihan/{id}', [DataPelatihanController::class, 'edit'])->name('edit-data-pelatihan');
    Route::delete('/hapusDataPelatihan/{id}', [DataPelatihanController::class, 'hapus'])->name('hapus-data-pelatihan');

    // Peserta
    Route::get('/pelatihan/detailPelatihan/{id}/dataPeserta', [PesertaController::class, 'index']);
    Route::post('/tambahPeserta', [PesertaController::class, 'tambah'])->name('tambah-peserta');
    Route::delete('/hapusPeserta/{id}', [PesertaController::class, 'hapus'])->name('hapus-peserta');


    Route::get('pelatihan/detailDataPelatihan', [DataPelatihanController::class, 'detail']);

    // Sertifikat
    Route::get('/sertifikat', [SertifikatController::class, 'index']);
    Route::post('/sertifikat', [SertifikatController::class, 'tambah'])->name('tambah-sertifikat');
    Route::put('/editSertifikat/{id_sertifikat}', [SertifikatController::class, 'edit'])->name('edit-sertifikat');
    Route::delete('/hapusSertifikat/{id_sertifikat}', [SertifikatController::class, 'hapus'])->name('hapus-pelatihan');


    Route::get('/sertifikat/detailSertifikat', [SertifikatController::class, 'detail']);
    Route::get('/sertifikat/detailSertifikat/{id_sertifikat}/{id_peserta}', [SertifikatController::class, 'sertifikat']);

});

Route::group(['middleware' => ['auth', 'cekrole:user']], function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/berandaUser', [UserController::class, 'index']);
    Route::get('/pelatihanUser', [UserController::class, 'pelatihan']);
    Route::get('/detailPelatihanUser', [UserController::class, 'detailPelatihan']);

    Route::get('/sertifikatUser', [UserController::class, 'sertifikat']);
});