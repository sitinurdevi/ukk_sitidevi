<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/eskul', function () {
    return view('eskul');
});

Route::get('/galeri', function () {
    return view('galeri');
});
