<?php

use App\Http\Controllers\VuelosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoAsientosController;
use App\Http\Controllers\VuelosAsientosController;

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

Route::get('/', [VuelosController::class,'inicio'])->name('vuelo.principal');

Route::get('/tiposAsientos', [TipoAsientosController::class,'tiposAsientos'])->name('tipoAsientos.principal');

Route::get('/vuelos', [VuelosController::class,'vuelos'])->name('vuelos.principal');

Route::get('/tiposAsientos/agregarTipoAsientos', [TipoAsientosController::class,'agregar'])->name('tipoAsientos.agregar');

Route::post('/guardarTiposAsientos', [TipoAsientosController::class,'guardar'])->name('tipoAsientos.guardar');

Route::get('/agregarNuevoVuelo', [VuelosController::class,'agregar'])->name('vuelos.agregar');

Route::post('/guardarVuelo', [VuelosController::class,'guardar'])->name('vuelos.guardar');

Route::get('/vuelos/editar/{codigo}', [VuelosController::class,'editarVuelo'])->name('vuelos.editar');

Route::put('/vuelos/editar/guardar', [VuelosController::class,'guardarEditado'])->name('vuelos.guardarEditado');

Route::get('/vuelos/eliminar/{codigo}', [VuelosController::class,'eliminar'])->name('vuelos.eliminar');

//Route::get('/vuelos/agregarAsiento', [VuelosController::class,'eliminar'])->name('vuelos.eliminar');
