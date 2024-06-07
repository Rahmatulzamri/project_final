<?php

   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\BookcarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\merekController;
use App\Http\Controllers\pelangganController;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/bookcar', [BookcarController::class, 'index'])->name('bookcar');
Route::get('/booking', [BookingController::class, 'index'])->name('booking');
Route::get('/reservasi', [ReservasiController::class, 'index'])->name('reservasi');
Route::resource('/merek', merekController::class);


Route::get('/login', function () {
    return view ('login.login');
});

Route::get('/register', function () {
    return view ('login.register');
});

Route::resource('/pelanggan', pelangganController::class );
Route::get('/pelanggan/{id}/edit', [pelangganController::class, 'edit'])->name('pelanggan.edit');
Route::get('/pelanggan/{id}/show', [pelangganController::class, 'show'])->name('pelanggan.show');


