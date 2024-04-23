<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\DashboardController;


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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/dashboard/action', [DashboardController::class, 'store'])->name('dashboard.store');
Route::get('/recuperar-contrasena', [SesionController::class, 'recuperarContrasena'])->name('recuperar_contrasena');
Route::post('/recuperar-contrasena', [SesionController::class, 'recContra'])->name('recuperar_contrasena.post');