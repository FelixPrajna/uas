<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// routes/web.php
// Route untuk menampilkan form login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route untuk proses login
Route::post('/login', [AuthController::class, 'login'])->name('login.process');
Route::get('/register', function () {
    return view('auth.register'); // Pastikan view register.blade.php sudah dibuat
})->name('register');

Route::post('/register', [AuthController::class, 'register'])->name('register.process');



Route::get('/', function () {
    return view('index');
})->name('index');

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