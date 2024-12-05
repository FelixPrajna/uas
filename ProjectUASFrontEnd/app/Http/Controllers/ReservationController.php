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
            $user = session('user');
            if (!$user) {
                return back()->with('error', 'You must be logged in to schedule reservation.');
            }

            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'person' => 'required|integer',
                'address' => 'required|string|max:255',
                'schedule' => 'required|date',
                'restaurants' => 'required|string',
                'symptoms' => 'required|string',
                'description' => 'nullable|string',
            ]);

            $validatedData['user_id'] = $user['_id'];
            $validatedData['username'] = $user['username']; 

            Reservation::createReservation($validatedData);

            return redirect('/')->with('success', 'Reservation scheduled successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to schedule reservation. Please try again.');
        }
    }

    
}