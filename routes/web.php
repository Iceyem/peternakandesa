<?php

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
    return view('beranda');
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak"
    ]);
});

Route::get('/layanan_kurban', function () {
    return view('layanan_kurban', [
        "title" => "Layanan_Kurban"
    ]);
});

Route::get('/layanan_puyuh', function () {
    return view('layanan_puyuh', [
        "title" => "Layanan_Puyuh"
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});

Route::get('/tentang_kurban', function () {
    return view('tentang_kurban', [
        "title" => "Tentang_Kurban"
    ]);
});

Route::get('/tentang_puyuh', function () {
    return view('tentang_puyuh', [
        "title" => "Tentang_Puyuh"
    ]);
});

Route::get('/database', function () {
    return response()->file(public_path('legacy/database.php'));
});

Route::get('/readkambingdomba', function () {
    return response()->file(public_path('legacy/readkambingdomba.php'));
});

Route::get('/readsapibali', function () {
    return response()->file(public_path('legacy/sapibali.php'));
});

Route::get('/readtelurpuyuh', function () {
    return response()->file(public_path('legacy/readtelurpuyuh.php'));
});