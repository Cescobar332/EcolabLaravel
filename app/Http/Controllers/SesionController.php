<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class SesionController extends Controller
{
    public function formularioInicioSesion()
    {
        return view('inicio_sesion');
    }
    public function inicioSesion(Request $request)
    {
        // Aquí maneja la lógica de inicio de sesión
        
    }
    public function recuperarContrasena()
    {
        return view('recuperar_contrasena');
    }
    public function recContra(Request $request)
    {
        // Aquí maneja la lógica de recuperar contraseña
        
    }

}
