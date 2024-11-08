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

    public function show($id)
    {
        // Busca el destino por su ID
        $destino = Destino::findOrFail($id);

        // Retorna la vista con los detalles del destino
        return view('destinos.show', compact('destino'));
    }

    public function indexS(){
        $destinos = Destino::paginate(20);
        return view('destinos.indexAd', compact('destinos'));
    }
}