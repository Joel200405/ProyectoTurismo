<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinoController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/destinos', [DestinoController::class, 'index'])->name('destinos.index');

Route::get('/destinos/{id}', [DestinoController::class, 'show'])->name('destinos.show');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');