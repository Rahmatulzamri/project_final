<?php

   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\BookcarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\merekController;
use App\Http\Controllers\pelangganController;
use App\Http\Controllers\penggunaController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/bookcar', [BookcarController::class, 'index'])->name('bookcar');
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
// Route::resource('/book', BookController::class);

// Route::get('/book', [BookController::class, 'index'])->name('book.index');
// Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
// Route::post('/book', [BookController::class, 'store'])->name('book.store');
// Route::put('/book/{id}/edit', [BookController::class, 'edit'])->name('book.edit');
// Route::put('/book/{id}', [BookController::class, 'update'])->name('book.update');
// Route::put('/book/{id}', [BookController::class, 'destroy'])->name('book.destroy');

Route::resource('/booking', BookingController::class );

Route::resource('/pengguna', penggunaController::class );

// admin
Route::resource('/administrator', AdminController::class);



