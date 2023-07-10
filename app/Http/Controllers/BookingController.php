<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        Booking::create($validated);

        return redirect('/home')->with('success', 'Your booking has been submitted!');
    }
}

