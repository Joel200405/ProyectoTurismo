<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ReservasController extends Controller
{
    //
    public function index(){
        return view('reservas.indexReserva');
    }
}
