<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalonesDisponiblesController;
use App\Http\Controllers\ContactoController;

// Ruta para el home con un nombre asignado
Route::get("/home", [HomeController::class, "index"])->name("home");

// Ruta para salones_disponibles con un parámetro de zona que solo permite letras
Route::get("/salones_disponibles/{zona?}", [SalonesDisponiblesController::class, 'show'])
    ->where("zona", "[A-Za-z]+");

// Ruta para contacto que solo permite ingresar un número
Route::get("/contacto/{numero}", [ContactoController::class, 'show'])
    ->where("numero", "[0-9]+");
