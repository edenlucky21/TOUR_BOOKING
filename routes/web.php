<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tour;
use App\Models\Guide;
use App\Models\Booking;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;

// Dashboard
Route::get('/', function() {
    $tours = Tour::count();
    $bookings = Booking::count();
    $guides = Guide::count();
    return view('dashboard', compact('tours','bookings','guides'));
});


// Tour routes
Route::get('/tours', [TourController::class,'index']);
Route::get('/tours/create', [TourController::class,'create']);
Route::post('/tours/store', [TourController::class,'store']);
Route::get('/tours/edit/{id}', [TourController::class,'edit']);
Route::post('/tours/update/{id}', [TourController::class,'update']);
Route::get('/tours/delete/{id}', [TourController::class,'destroy']);
Route::get('/tours/search', [TourController::class,'search']);

// Booking routes
Route::get('/book/{tour_id}', [BookingController::class,'create']);
Route::post('/book/store', [BookingController::class,'store']);
Route::get('/bookings', [BookingController::class,'index']);
Route::get('/booking/status/{id}', [BookingController::class,'status']);

// Home redirect
Route::get('/dashboard', function() {
    return redirect('/dashboard');
});

// Dashboard
Route::get('/', function() {
    $tours = Tour::count();
    $bookings = Booking::count();
    $guides = Guide::count();
    return view('dashboard', compact('tours','bookings','guides'));
});
