<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('beranda');
});

Route::get('/profil', function () {
    return view('profil');
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

Route::get('/sambutan', function () {
    return view('sambutan');
});

Route::get('/berita1', function () {
    return view('Berita.berita1');
});

Route::get('/berita2', function () {
    return view('Berita.berita2');
});

Route::get('/berita3', function () {
    return view('Berita.berita3');
});

Route::get('/berita4', function () {
    return view('Berita.berita4');
});

Route::get('/berita5', function () {
    return view('Berita.berita5');
});


Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/eskul', [EskulController::class, 'index']);