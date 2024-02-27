<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VueloController;
use App\Http\Controllers\TipoAsientoController;
use App\Http\Controllers\VuelosAsientoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [VueloController::class, 'inicio'])->name('vuelo.inicio');

Route::get('/tiposAsiento', [TipoAsientoController::class, 'tipo'])->name('vuelo.tipoAsiento');

Route::get('/vuelos', [VueloController::class, 'ver'])->name('vuelo.ver');

Route::get('/vuelos/agregarNuevo', [TipoAsientoController::class, 'nuevo'])->name('tipoAsiento.nuevo');

Route::post('/tipoAsiento/guardar', [TipoAsientoController::class, 'guardar'])->name('tipoAsiento.guardar');

Route::put('/cambiar/{id}', [TipoAsientoController::class, 'eliminar'])->name('tipoAsiento.eliminar');

Route::get('/tipoAsiento/editar/{id}', [TipoAsientoController::class, 'editar'])->name('tipoAsiento.editar');




