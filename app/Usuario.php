<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable = [
      'id_upb', 'nombre', 'apellido', 'correo', 'cargo', 'telefono', 'carrera'
    ];
    public function prestamos()
    {
      // code...
      return $this->hasMany(Prestamo::class);
    }

}
