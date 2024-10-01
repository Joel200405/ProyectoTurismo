<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar la lista de destinos
Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos.index');

// Ruta para mostrar los detalles de un destino específico
Route::get('/destinos/{id}', [DestinoController::class, 'show'])->name('destinos.show');


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');