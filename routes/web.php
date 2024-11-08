<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\DestinosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReservasController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\UserController;

//Rutas del login
Route::get('/login', [loginController::class, 'index'])->name('login.index');
Route::post('/login', [loginController::class, 'validateLogin'])->name('login.validate');

//Rutas del home
Route::get('/home', [homeController::class, 'index'])->name('home.index');
Route::get('/admin', [homeController::class, 'admin'])->name('admin.index');

//Destinos
Route::controller(DestinosController::class)->group(function() {
    Route::get('/destinos', 'index')->name('destinos.index');
    Route::get('/destinos/{id}', 'show')->name('destinos.show');
    Route::get('/contact', 'submit')->name('contact.submit');

    Route::get('/dest', 'indexS')->name('destinos.admin');
});



//Ruta de contacto
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

//Reservas
Route::controller(ReservasController::class)->group(function(){
    Route::get('/reservas/crear/{destino}', 'create')->name('reservas.create');
    Route::post('/reservas', 'store')->name('reservas.store');
    Route::get('/reservas/index', 'index')->name('reservas.index');

    Route::get('/reservas/dashboard', 'indexSecond')->name('reservas.admin');
    
});

//Rutas para registro de usuarios login
Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

//Para user admin
Route::get('/registerAdmin', [RegisterController::class, 'indexAd'])->name('register.adminindex');
Route::post('/registerAdmin', [RegisterController::class, 'storeAd'])->name('register.adminstore');

//Para ver los usuarios en el administrador
Route::get('/users', [RegisterController::class, 'users'])->name('user.admin');

//Eliminar usuario
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('user.destroy');
//editar usuario
Route::get('user/{user}', [UserController::class, 'edit'])->name('user.edit');
Route::put('user/{user}', [UserController::class, 'update'])->name('user.update');


// Rutas para Paquetes
Route::get('/paquetes/crear', [PaqueteController::class, 'create'])->name('paquetes.create');
Route::post('/paquetes', [PaqueteController::class, 'store'])->name('paquetes.store');