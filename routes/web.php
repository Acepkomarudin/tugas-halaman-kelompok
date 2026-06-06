<?php

use Illuminate\Support\Facades\Route;

<<<<<<< HEAD
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
=======
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
>>>>>>> 9841157 (update website)
});