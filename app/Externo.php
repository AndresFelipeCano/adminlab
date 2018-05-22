<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Externo extends Model
{
    //
    protected $fillable=[
      'nombre', 'apellido', 'cargo', 'observaciones', 'correo'
    ];
}
