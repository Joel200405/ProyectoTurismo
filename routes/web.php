<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
<<<<<<< HEAD
use App\Http\Controllers\homeController;
=======
use App\Http\Controllers\ContactController;
>>>>>>> 89a2b677c3aba8e8234e385e6c41e273efe31c29
use App\Http\Controllers\ReservasController;


Route::get('/home', [homeController::class, 'index']);

Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos.index');

Route::get('/destinos/{id}', [DestinoController::class, 'show'])->name('destinos.show');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

<<<<<<< HEAD
//Reservas
=======
>>>>>>> 89a2b677c3aba8e8234e385e6c41e273efe31c29
Route::controller(ReservasController::class)->group(function(){
    Route::get('reservas/create', 'createReserva')->name('reservas.create');
    Route::get('reservas/index', 'index')->name('reservas.index');
});

