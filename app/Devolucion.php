<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    //
    protected $fillable = [
      'id_prestamo', 'carga_bateria'
    ];
}
