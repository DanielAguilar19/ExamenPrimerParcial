<?php

use App\Http\Controllers\contactoController;
use App\Http\Controllers\directorioController;
use App\Models\contacto;
use App\Models\directorio;
use Illuminate\Support\Facades\Route;

Route::get('/',[directorioController::class, 'mostrarTodos']);


Route::get('/agregarContacto/', 
        [contactoController::class, 'agregarContacto']);

Route::post('/salvarContacto/',
        [contactoController::class, 'salvarContacto'])->name('guardarContacto');

Route::get('/verContacto/',
        [contactoController::class, 'verContacto']);

Route::get('/verInfo/',
        [contactoController::class, 'verInfo']);

Route::get('/agregarDirectorio/',
        [directorioController::class, 'agregarDirectorio']);

Route::post('/salvarDirectorio/',
        [directorioController::class, 'salvarDirectorio'])->name('guardarEntrada');

Route::get('/eliminarContacto/{$id}',[contactoController::class, 'eliminarContacto']);

Route::delete('/confEliminar/{$id}',[contactoController::class,'confirmarEliminarContact'])->name('eliminarContacto');

Route::get('/buscarCorreo/{$correo}',[directorioController::class,'buscarCorreo;']);

