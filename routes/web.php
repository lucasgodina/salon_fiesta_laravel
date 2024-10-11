<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalonesDisponiblesController;
use App\Http\Controllers\ContactoController;

// Ruta para el home con un nombre asignado
Route::get("/", [HomeController::class, "index"])
    ->name("home");

// Ruta para salones_disponibles con un parámetro de zona que solo permite letras
Route::get("/salones_disponibles/{zona?}", [SalonesDisponiblesController::class, 'index'])
    ->where("zona", "[A-Za-z]+")
    ->name("salones_disponibles");

// Ruta para contacto que solo permite ingresar un número
Route::get("/contacto/{numero}", [ContactoController::class, 'show'])
    ->where("numero", "[0-9]+")
    ->name("contacto");

// Ruta para contacto store    
Route::post('/contacto', [ContactoController::class, 'store'])
    ->name('contacto.store');

// Ruta para contactos
Route::get('/contactos', [ContactoController::class, 'showAll'])
    ->name('contactos.index');
