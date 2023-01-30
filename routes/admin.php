<?php

use App\Http\Controllers\Admin\AfiliadoController;
use App\Http\Controllers\Admin\Cliente\AdelantoController;
use App\Http\Controllers\Admin\Cliente\CanadaController;
use App\Http\Controllers\Admin\Cliente\CitapasaporteController;
use App\Http\Controllers\Admin\Cliente\EstudianteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TramiteController;
use App\Http\Controllers\Admin\ClienteController;
use App\Http\Controllers\Admin\Cliente\PrioridadController;
use App\Http\Controllers\Admin\Cliente\RenovacionController;
use App\Http\Controllers\Admin\Cliente\SeguimientoController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('tramites', TramiteController::class)->names('tramites');
Route::resource('clientes', ClienteController::class)->names('clientes');
Route::resource('afiliados', AfiliadoController::class)->names('afiliados');
Route::resource('prioridad', PrioridadController::class)->names('prioridad');
Route::resource('seguimientos', SeguimientoController::class)->names('seguimientos');
Route::resource('renovaciones', RenovacionController::class)->names('renovaciones');
Route::resource('adelantos', AdelantoController::class)->names('adelantos');
Route::resource('canada', CanadaController::class)->names('canada');
Route::resource('estudiantes', EstudianteController::class)->names('estudiantes');
Route::resource('citapasaporte', CitapasaporteController::class)->names('citapasaporte');
// Route::get('clientes/prioridad', [ClienteController::class, 'prioridad'])->name('clientes.prioridad');
