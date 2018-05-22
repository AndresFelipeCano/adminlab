<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesPrestamo extends Model
{
    //
    protected $fillable = ['id_prestamo', 'id_externo', 'detalles'];
}
