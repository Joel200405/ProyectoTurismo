<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;
use App\Models\Reserva;
use Illuminate\Support\Facades\Auth;

class ReservasController extends Controller
{
    //
    public function index(Request $request){
        $destinos = Destino::all();
        $destinoSeleccionado = null;

        // Si hay un destino seleccionado en el combo box, cargar los detalles de ese destino
        if ($request->has('destino_id')) {
            $destinoSeleccionado = Destino::find($request->input('destino_id'));
        }
        
        return view('reservas.indexReserva', compact('destinos', 'destinoSeleccionado'));
        //return view('reservas.indexReserva');
    }

    public function create($destinoID){
        //obtener todos los destinos para mostrar en el formulario
        //$destinos = Destino::all();
        $destino = Destino::findOrFail($destinoID);
        return view('reservas.createReserva', compact('destino'));
    }

    public function store(Request $request){
        //Validar los campos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|string|max:20',
            'destino_id' => 'required|exists:destinos,id',
            'fecha' => 'required|date',
            'personas' => 'required|integer|min:1',
            'comentarios' => 'nullable|string',
        ]);

        $userId = Auth::id();
        // Verifica que el usuario está autenticado antes de continuar
        if (!$userId) {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para hacer una reserva.');
        }

        //Crear la reserva
        Reserva::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'destino_id' => $request->destino_id,
            'fecha' => $request->fecha,
            'personas' => $request->personas,
            'comentarios' => $request->comentarios,
            'user_id' => $userId,
        ]);

        // Redireccionar a una página de éxito o a la lista de reservas
        return redirect()->route('reservas.create', $request->destino_id)->with('success', 'Reserva creada exitosamente');
        
    }

    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    //para el dashboard
    public function indexSecond(){
        $reservas = Reserva::paginate(20);
        return view('reservas.indexAdmin', compact('reservas'));
    }
}