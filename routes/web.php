<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SesionController;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/registro', [UsuarioController::class, 'formularioRegistro'])->name('registro');
Route::post('/registro', [UsuarioController::class, 'guardarUsuario']);
Route::get('/inicio-sesion', [SesionController::class, 'formularioInicioSesion'])->name('inicio_sesion');
Route::post('/inicio-sesion', [SesionController::class, 'inicioSesion'])->name('inicio_sesion.post');
