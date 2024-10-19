<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    // Método para mostrar el formulario de creación
    public function create()
    {
        return view('paquetes.crear'); // Retorna la vista para crear paquetes
    }

    // Método para almacenar el paquete
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'nombre_paquete' => 'required|string|max:255',
            'precio_paquete' => 'required|numeric',
            'imagen_paquete' => 'nullable|image',
        ]);

        // Lógica para almacenar el paquete en la base de datos
        // Asume que tienes un modelo Paquete ya definido
        // Paquete::create([
        //     'nombre_paquete' => $request->nombre_paquete,
        //     'precio_paquete' => $request->precio_paquete,
        //     'imagen_paquete' => $request->file('imagen_paquete')->store('imagenes'),
        // ]);

        return redirect()->route('paquetes.create')->with('success', 'Paquete creado exitosamente.');
    }
}
