<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function formularioRegistro()
    {
        return view('registro');
    }

    public function guardarUsuario(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:8|confirmed',
            'aceptar_terminos' => 'accepted',
        ]);

        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->email = $request->email;
        $usuario->password = bcrypt($request->password); // Asegúrate de usar un hash seguro para la contraseña
        $usuario->save();

        return redirect()->route('inicio'); // Cambia 'inicio' por la ruta a la siguiente página después del registro
    }

}