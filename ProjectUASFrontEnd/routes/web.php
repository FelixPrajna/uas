<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/altitude', function () {
    return view('altitude');
});

Route::get('/isshin', function () {
    return view('isshin');
});

Route::get('/ojju', function () {
    return view('ojju');
});

Route::get('/pierre', function () {
    return view('pierre');
});