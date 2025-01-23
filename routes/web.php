<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripulantesController;
use App\Http\Controllers\BidaiakController;
use App\Http\Controllers\MedikuakController;

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
});

// Tripulante

Route::get('/tripulantes', [TripulantesController::class, 'index'])->name('tripulantes.index');

Route::get('/tripulantes/form', [TripulantesController::class, 'form'])->name('tripulantes.formulario');

Route::post('/tripulantes/store', [TripulantesController::class, 'store'])->name('tripulantes.store');

Route::get('/tripulantes/show/{tripulantes}', [TripulantesController::class, 'show'])->name('tripulantes.show');

Route::get('/tripulantes/{tripulantes}/edit', [TripulantesController::class, 'edit'])->name('tripulantes.edit');

Route::put('/tripulantes/update/{tripulantes}', [TripulantesController::class, 'update'])->name('tripulantes.update');

Route::delete('/tripulantes/destroy/{tripulantes}', [TripulantesController::class, 'destroy'])->name('tripulantes.destroy');

// Route::resource('tripulantes', TripulantesController::class);

// Bidaiak

Route::get('/bidaiak', [BidaiakController::class, 'index'])->name('bidaiak.index');

Route::get('/bidaiak/form', [BidaiakController::class, 'form'])->name('bidaiak.formulario');

Route::post('/bidaiak/store', [BidaiakController::class, 'store'])->name('bidaiak.store');

Route::get('/bidaiak/show/{bidaiak}', [BidaiakController::class, 'show'])->name('bidaiak.show');

Route::get('/bidaiak/{bidaiak}/edit', [BidaiakController::class, 'edit'])->name('bidaiak.edit');

Route::put('/bidaiak/update/{bidaiak}', [BidaiakController::class, 'update'])->name('bidaiak.update');

Route::delete('/bidaiak/destroy/{bidaiak}', [BidaiakController::class, 'destroy'])->name('bidaiak.destroy');

Route::resource('bidaiak', BidaiakController::class);

// Medikuak

Route::get('/medikuak', [MedikuakController::class, 'index'])->name('medikuak.index');

Route::get('/medikuak/form', [MedikuakController::class, 'form'])->name('medikuak.formulario');

Route::post('/medikuak/store', [MedikuakController::class, 'store'])->name('medikuak.store');

Route::get('/medikuak/show/{medikuak}', [MedikuakController::class, 'show'])->name('medikuak.show');

Route::get('/medikuak/{medikuak}/edit', [MedikuakController::class, 'edit'])->name('medikuak.edit');

Route::put('/medikuak/update/{medikuak}', [MedikuakController::class, 'update'])->name('medikuak.update');

Route::delete('/medikuak/destroy/{medikuak}', [MedikuakController::class, 'destroy'])->name('medikuak.destroy');

Route::resource('medikuak', MedikuakController::class);

require __DIR__ . '/auth.php';
