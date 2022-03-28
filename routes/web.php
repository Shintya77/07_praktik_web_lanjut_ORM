<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\MahasiswaController;

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
Route::get('/home',[PageController::class, 'home']);
Route::get('/barang',[BarangController::class, 'barang']);
Route::get('/pelanggan',[PelangganController::class, 'pelanggan']);
Route::get('/pelanggan1',[PelangganController::class, 'pelanggan1']);
Route::get('/pegawai',[PegawaiController::class, 'pegawai']);
Route::get('/supplier',[SupplierController::class, 'supplier']);
Route::get('/supplier1',[SupplierController::class, 'supplier1']);
Route::resource('mahasiswas',MahasiswaController::class);