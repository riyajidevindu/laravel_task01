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

Route::prefix('/sclshipreceivers')->group(function(){
    Route::get('/', [SchoolershipController::class, "scholarshipReceivers"])->name("scholarshipRecieverList");
    Route::get('/{receiver_id}/delete',[SchoolershipController::class, "delete"])->name("scholarshipReciever.delete");
});




Route::prefix('/addreceiver')->group(function(){
    Route::get('/',[AddReceiverController::class, "addScholarshipReceiver"])->name("addReceiver");
    Route::post('/store',[AddReceiverController::class, "store"])->name("addReceiver.store");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
