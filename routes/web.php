<?php

use Illuminate\Support\Facades\Route;

Route::get('/index', function () {
    return view('index');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/unable', function () {
    return view('unable');
});

Route::get('/website', function () {
    return view('website');
});