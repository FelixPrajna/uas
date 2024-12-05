<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationListController extends Controller
{
    public function index()
    {
        try {
            $reservations = Reservation::getAllReservations();
            return view('reservation-list', compact('reservations'));
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to load reservations: ' . $e->getMessage());
        }
    }

    public function getReservations()
    {
        try {
            $reservations = Reservation::getAllReservations();
            return response()->json($reservations);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}