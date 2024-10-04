<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\ReservasController;


Route::get('/login', [loginController::class, 'indexLogin']);
Route::get('/home', [homeController::class, 'index']);


Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos.index');

Route::get('/destinos/{id}', [DestinoController::class, 'show'])->name('destinos.show');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

//Reservas
Route::controller(ReservasController::class)->group(function(){
    Route::get('reservas/create', 'createReserva')->name('reservas.create');
    Route::get('reservas/index', 'index')->name('reservas.index');
});

