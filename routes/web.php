<?php

use Illuminate\Support\Facades\Route;

Route::get('/website', function () {
    return view('website');
});
Route::get('/contoh', function () {
    return view('contoh');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/unable', function () {
    return view('unable');
});