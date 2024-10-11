<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'destino_id',
        'fecha',
        'personas',
        'comentarios',
        'user_id',
        'estado',
    ];

    // Relación con el modelo Destino
    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}