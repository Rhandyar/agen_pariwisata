<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DaftarPaketController;
use App\Http\Controllers\Karyawancontroller;
use App\Http\Controllers\PaketWisataController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\userController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/registrasi', [AuthController::class, 'registrasi'])->name('register');
Route::post('/authentication', [AuthController::class, 'authenticate'])->name('login.authentication');

Route::middleware('auth')->group(function () {
    Route::get('/users', [userController::class, 'index'])->name('users');
    Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi.index');
    Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
    Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
    Route::get('/daftarpaket', [DaftarPaketController::class, 'index'])->name('daftar-paket.index');
    Route::get('/paketwisata', [PaketWisataController::class, 'index'])->name('paket-wisata.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
