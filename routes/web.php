<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorksheetController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/worksheet_input', [WorksheetController::class, 'index']);

Route::get('search-worker', [WorksheetController::class, 'searchWorker']);
Route::get('search-customer', [WorksheetController::class, 'searchCustomer']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
