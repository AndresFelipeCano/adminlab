<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    //
    protected $fillable = [
      'id_monitor', 'id_usuario', 'id_equipo', 'today', 'id_detalles'
    ];
}
