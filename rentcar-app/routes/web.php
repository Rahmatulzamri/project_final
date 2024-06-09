<?php

   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\BookcarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\merekController;
use App\Http\Controllers\MobilController;
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
Route::resource('/booking', BookingController::class );
Route::resource('/mobil', MobilController::class );
Route::resource('/pengguna', penggunaController::class );
Route::resource('/administrator', AdminController::class);
Route::get('/dtpelanggan', function () {
    return view ('layout.pelanggan.index');
});

Route::get('/cars', function () {
    return view ('user.cars');
});

Route::get('/pelangganbos', function () {
    return view ('layout.pelanggan.buatuser');
});

Route::get('/homeuser', function () {
    return view ('user.halusermaster');
});


Route::get('/contact', function () {
    return view ('user.contact');
});


Route::get('/about', function () {
    return view ('user.about');
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
