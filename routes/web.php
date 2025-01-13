<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripulantesController;

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

Route::get('/tripulantes', [TripulantesController::class, 'index'])->name('tripulantes.index');

Route::get('/tripulantes/form', [TripulantesController::class, 'form'])->name('tripulantes.formulario');

Route::post('/tripulantes/store', [TripulantesController::class, 'store'])->name('tripulantes.store');

Route::get('/tripulantes/show/{tripulante}', [TripulantesController::class, 'show'])->name('tripulantes.show');

require __DIR__.'/auth.php';
