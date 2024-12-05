<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return response()->json(['message' => 'Login successful'], 200);
    }

    return response()->json(['message' => 'Invalid credentials'], 401);
});

Route::post('/login', [AuthController::class, 'login']);

Route::get('/users', [AuthController::class, 'getCurrentUser']);

Route::post('/register', [AuthController::class, 'register']);

Route::get('/reservations', function () {
    try {
        $reservations = \App\Models\Reservation::getAllReservations();
        \Log::info('Reservations data:', ['data' => $reservations]); // Untuk debugging
        return response()->json($reservations);
    } catch (\Exception $e) {
        \Log::error('Error fetching reservations: ' . $e->getMessage());
        return response()->json(['error' => $e->getMessage()], 500);
    }
});

Route::post('/reservations', [ReservationController::class, 'store']);