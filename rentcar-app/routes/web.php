<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view ('layout.master');
// });
Route::get('/dashboard', [HomeController::class, 'index']);
