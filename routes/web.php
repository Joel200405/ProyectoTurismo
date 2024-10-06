<?php


use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\homeController;
=======
use App\Http\Controllers\DestinosController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\loginController;
>>>>>>> f9a42b6386954a804c74518d999799111c403e3c
use App\Http\Controllers\ReservasController;


Route::get('/login', [loginController::class, 'index'])->name('login.index');
Route::post('/login', [loginController::class, 'validateLogin'])->name('login.validate');

Route::get('/home', [homeController::class, 'index'])->name('home.index');

//Destinos
Route::controller(DestinosController::class)->group(function() {
    Route::get('/destinos', 'index')->name('destinos.index');
    Route::get('/destinos/{id}', 'show')->name('destinos.show');
    Route::get('/contact', 'submit')->name('contact.submit');
});

<<<<<<< HEAD
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

=======
//Reservas
>>>>>>> f9a42b6386954a804c74518d999799111c403e3c
Route::controller(ReservasController::class)->group(function(){
    Route::get('reservas/create', 'createReserva')->name('reservas.create');
    Route::get('reservas/index', 'index')->name('reservas.index');
});