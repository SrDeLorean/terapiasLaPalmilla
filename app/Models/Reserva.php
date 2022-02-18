<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reserva extends Model
{

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inicio', 'termino', 'nombre', 'telefono', 'email', 'estado', 'nota', 'tiporeserva', 'estadoreserva'
    ];

}
