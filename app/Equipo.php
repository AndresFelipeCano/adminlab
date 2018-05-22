<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $fillable=['id_categoria', 'estado', 'observaciones', 'numero_equipo'];
}
