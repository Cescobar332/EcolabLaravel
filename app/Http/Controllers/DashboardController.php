<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Usuario;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function store(Request $request)
    {
        // Aquí maneja la lógica de inicio de sesión
        
    }
}
