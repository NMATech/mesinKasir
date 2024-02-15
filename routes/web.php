<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controllerPages;

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
    return view('login');
});

Route::get('/pageAdmin', function () {
    return view('pages.homeAdmin');
});

// Route::get('/pagePegawai', function () {
//     return view('pages.');
// });

Route::get('/daftar', [controllerPages::class, 'toDaftar']);
Route::get('/tambah-barang', [controllerPages::class, 'toTambahBarang']);
Route::get('/liat-barang', [controllerPages::class, 'toLiatBarang']);
Route::get('/data-pembelian', [controllerPages::class, 'toDataPembelian']);
Route::get('/liat-pegawai', [controllerPages::class, 'toLiatPegawai']);
Route::get('/pesan-barang', [controllerPages::class, 'toPesanBarang']);