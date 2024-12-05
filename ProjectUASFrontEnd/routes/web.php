<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ReservationListController;
use Illuminate\Support\Facades\Auth;

// Tambahkan rute baru untuk menghapus akun
Route::post('/delete-account', [UserController::class, 'deleteAccount'])->name('delete-account');

Route::post('/change-password', [UserController::class, 'changePassword'])->name('change-password');

Route::post('/change-email', [UserController::class, 'changeEmail'])->name('change-email');

Route::post('/change-username', [UserController::class, 'changeUsername'])->name('change-username');

Route::post('/change-profile-image', [UserController::class, 'changeProfileImage'])->name('change-profile-image');

Route::post('/remove-profile-image', [UserController::class, 'removeProfileImage'])->name('remove-profile-image');

Route::middleware(['auth.user'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
});

Route::view('/register', 'register');
Route::post('/api/register', [AuthController::class, 'register']);

// Route untuk tampilan login
Route::get('/login', function () {
    return view('login');
});

// Route untuk login dengan metode POST
Route::post('/login', [AuthController::class, 'login']);

// Setelah login berhasil, arahkan ke halaman index
Route::get('/', function () {
    return view('/');  // atau sesuai dengan tampilan utama kamu
})->name('home');

Route::get('/api/users', function () {
    return response()->json([
        'username' => session('username', null),
    ]);
});

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/reservation-list', [ReservationListController::class, 'index'])->name('reservation.list');
Route::get('/api/reservations', [ReservationListController::class, 'getReservations']);
Route::get('/reservation', function () {
    return view('reservation');
});

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