<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolershipController;
use App\Http\Controllers\AddReceiverController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/sclshipreceivers', [SchoolershipController::class, "scholarshipReceivers"])->name("scholarshipRecieverList");

Route::get('/addreceiver',[AddReceiverController::class, "addScholarshipReceiver"])->name("addReceiver");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
