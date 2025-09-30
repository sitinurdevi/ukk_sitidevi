<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/vimis', function () {
    return view('vimis');
});

Route::get('/eskul', function () {
    return view('eskul');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/berita', function () {
    return view('berita');
});


Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/eskul', [EskulController::class, 'index']);