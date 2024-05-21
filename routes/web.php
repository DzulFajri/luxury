<?php

use App\Http\Controllers\LuxuryController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LuxuryController::class, 'index'])->name('luxury.index');

Route::get('/about', [LuxuryController::class, 'index1'])->name('luxury.partials.index');
Route::get('/contact', [LuxuryController::class, 'index2'])->name('luxury.partials.contact');
Route::get('/booknow', [LuxuryController::class, 'index3'])->name('luxury.partials.booknow');
