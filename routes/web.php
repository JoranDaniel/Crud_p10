<?php

use App\Http\Controllers\MerchController;
use Illuminate\Support\Facades\Route;

// Your existing routes...

Route::middleware(['auth'])->group(function () {
    Route::view('dashboard', 'dashboard')->middleware('verified')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');

    Route::get('merch', [MerchController::class, 'index'])->name('merch.index');
    Route::get('merch/create', [MerchController::class, 'create'])->name('merch.create');
    Route::post('merch', [MerchController::class, 'store'])->name('merch.store');

    Route::view('leaderbord', 'leaderbord')->name('leaderbord');
});

require __DIR__.'/auth.php';
