<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function() {
    Route::get('/accounts/index', [AccountController::class, 'index']);
})->name('dashboard');

require __DIR__.'/auth.php';
