<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinosController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\loginController;
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

//Reservas
Route::controller(ReservasController::class)->group(function(){
    Route::get('reservas/create', 'createReserva')->name('reservas.create');
    Route::get('reservas/index', 'index')->name('reservas.index');
});