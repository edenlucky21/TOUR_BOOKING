<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Tour;

class BookingController extends Controller
{
    public function index() {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    public function create($tour_id) {
        $tour = Tour::findOrFail($tour_id);
        return view('bookings.create', compact('tour'));
    }

    public function store(Request $request) {
        Booking::create($request->all());
        return redirect()->route('bookings.index');
    }
}