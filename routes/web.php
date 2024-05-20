<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolershipController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\AddReceiverController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/receivers')->group(function(){
        Route::get('/', [SchoolershipController::class, "scholarshipReceivers"])->name("scholarshipRecieverList");
        Route::get('/edit/{receiver_id}', [SchoolershipController::class, "edit"])->name("scholarshipReciever.edit");
        Route::get('/{receiver_id}/delete',[SchoolershipController::class, "delete"])->name("scholarshipReciever.delete");
        Route::post('/update',[SchoolershipController::class, "update"])->name("updateReceiver.store");
    });

    Route::prefix('/addreceiver')->group(function(){
        Route::get('/',[AddReceiverController::class, "addScholarshipReceiver"])->name("addReceiver");
        Route::post('/store',[AddReceiverController::class, "store"])->name("addReceiver.store");
    });

    Route::prefix('/donor')->group(function(){
        Route::get('/',[DonorController::class, "index"])->name("donor.list");
        Route::get('/adddonor',[DonorController::class, "create"])->name("donor.addpage");
        Route::post('/store',[DonorController::class, "store"])->name("donor.store");
        Route::get('{donor_id}/delete',[DonorController::class, "destroy"])->name("donor.delete");

    });

});



require __DIR__.'/auth.php';
