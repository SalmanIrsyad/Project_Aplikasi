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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//==================== User =========================
//HALAMAN BERANDA
Route::get('/beranda', function () {
    return view('Front-end.beranda');
});

//HALAMAN TOKO
Route::get('/toko', function () {
    return view('Front-end.toko');
});

//HALAMAN PRODUK
Route::get('/produk', function () {
    return view('Front-end.detail_produk.produk');
});

//HALAMAN TRANSAKSI
Route::get('/transaksi', function () {
    return view('Front-end.transaksi');
});

//HALAMAN PROFIL
Route::get('/profil', function () {
    return view('Front-end.pengaturan.profil');
});

//HALAMAN AKUN
Route::get('/akun', function () {
    return view('Front-end.pengaturan.akun');
});

//====================== Admin ==========================

//HALAMAN AKUN
Route::get('/beranda_admin', function () {
    return view('Front-end.admin.beranda');
});

Route::get('/toko_admin', function () {
    return view('Front-end.admin.toko');
});

Route::get('/edit_admin', function () {
    return view('Front-end.admin.edit');
});

Route::get('/tambah_admin', function () {
    return view('Front-end.admin.tambah');
});

Route::get('/produk_admin', function () {
    return view('Front-end.admin.detail_produk.produk');
});

Route::get('/pesanan_admin', function () {
    return view('Front-end.admin.pesanan');
});

Route::get('/status_admin', function () {
    return view('Front-end.admin.status');
});

Route::get('/riwayat_admin', function () {
    return view('Front-end.admin.riwayat');
});

Route::get('/akun_admin', function () {
    return view('Front-end.admin.pengaturan.akun');
});