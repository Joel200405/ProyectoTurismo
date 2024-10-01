<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ReservasController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar la lista de destinos
Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos.index');

// Ruta para mostrar los detalles de un destino específico
Route::get('/destinos/{id}', [DestinoController::class, 'show'])->name('destinos.show');


<<<<<<< HEAD

//Reservas
Route::controller(ReservasController::class)->group(function(){
    Route::get('reservas/create', 'createReserva')->name('reservas.create');
    Route::get('reservas/index', 'index')->name('reservas.index');
});
=======
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
>>>>>>> 560ee5ad52eebc22a956af5314d066cd4a37c5cf
