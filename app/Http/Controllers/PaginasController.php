<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function formularioInicioSesion()
    {
        return view('inicio_sesion');
    }
    public function recuperarContrasena()
    {
        return view('recuperar_contrasena');
    }
    public function formularioRegistro()
    {
        return view('registro');
    }
}
