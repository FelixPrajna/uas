<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class ReservationController extends BaseController
{
    public function store(Request $request)
{
    try {
        // Cek apakah user sudah login
        $user = session('user');
        if (!$user) {
            return back()->with('error', 'You must be logged in to schedule reservation.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'person' => 'required|integer',
            'address' => 'required|string|max:255',
            'schedule' => 'required|date',
            'restaurant' => 'required|string',
            'phone_number' => 'required|string',
            'description' => 'nullable|string',
        ]);

        // Tambahkan informasi user ke dalam data reservasi
        $validatedData['user_id'] = $user->_id;  // Menggunakan notasi objek
        $validatedData['username'] = $user->username;  // Menggunakan notasi objek

        // Simpan data reservasi ke database
        Reservation::createReservation($validatedData);

        // Redirect ke halaman utama dengan pesan sukses
        return redirect('/')->with('success', 'Reservation scheduled successfully!');
    } catch (\Exception $e) {
        // Tangani error jika terjadi exception
        \Log::error('Error during reservation creation: ' . $e->getMessage());
        return back()->with('error', 'Failed to schedule reservation. Please try again.');
    }
}

}