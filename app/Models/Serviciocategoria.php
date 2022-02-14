<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Serviciocategoria extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'idServicio', 'idCategoria'
    ];

}