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

Route::get('/tripulantes/show/{tripulantes}', [TripulantesController::class, 'show'])->name('tripulantes.show');

Route::get('/tripulantes/edit/{tripulantes}', [TripulantesController::class, 'edit'])->name('tripulantes.edit');

Route::put('/tripulantes/update/{tripulantes}', [TripulantesController::class, 'update'])->name('tripulantes.update');

Route::delete('/tripulantes/destroy/{tripulantes}', [TripulantesController::class, 'destroy'])->name('tripulantes.destroy');

Route::resource('tripulantes', TripulantesController::class);

require __DIR__.'/auth.php';
