<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tour;
use App\Models\Guide;
use App\Models\Booking;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Dashboard
Route::get('/', function() {
    $tours = Tour::count();
    $bookings = Booking::count();
    $guides = Guide::count();
    return view('dashboard', compact('tours', 'bookings', 'guides'));
});
// Tour Routes
Route::prefix('tours')->group(function () {
    Route::get('/', [TourController::class, 'index'])->name('tours.index');
    Route::get('/create', [TourController::class, 'create'])->name('tours.create');
    Route::post('/store', [TourController::class, 'store'])->name('tours.store');
    Route::get('/edit/{id}', [TourController::class, 'edit'])->name('tours.edit');
    Route::post('/update/{id}', [TourController::class, 'update'])->name('tours.update');
    Route::get('/delete/{id}', [TourController::class, 'destroy'])->name('tours.destroy');
    Route::get('/search', [TourController::class, 'search'])->name('tours.search');
});

// Booking Routes
Route::prefix('book')->group(function () {
    Route::get('/{tour_id}', [BookingController::class, 'create'])->name('book.create');
    Route::post('/store', [BookingController::class, 'store'])->name('book.store');
});

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/booki
ng/status/{id}', [BookingController::class, 'status'])->name('booking.status');