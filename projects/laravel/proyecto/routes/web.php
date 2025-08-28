<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Definir una ruta con el método GET e indicando la solicitud a la página /home
Route::get('/home', function () {
    // Función a ejecutar
    return view('home');
});
