<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Aquí puedes manejar la lógica para guardar el mensaje o enviarlo por correo, etc.
        // Ejemplo: Validación básica
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Aquí puedes enviar un correo, almacenar en la base de datos, etc.

        return response()->json(['success' => '¡Tu mensaje ha sido enviado con éxito!']);
    }
}
