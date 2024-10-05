<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destino;

class DestinosController extends Controller
{
    // Método para mostrar la lista de destinos
    public function index()
    {
        // Obtiene todos los destinos de la base de datos
        $destinos = Destino::all();
        return view('destinos.index', compact('destinos')); // Asegúrate de que esta vista exista
    }

    // Método para mostrar los detalles de un destino específico
    public function show($id)
    {
        // Busca el destino por ID
        $destino = Destino::findOrFail($id);
        return view('destinos.show', compact('destino')); // Asegúrate de que esta vista exista
    }
}
