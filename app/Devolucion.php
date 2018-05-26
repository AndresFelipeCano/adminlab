<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    //
    protected $fillable = [
      'prestamo_id', 'carga_bateria', 'observaciones'
    ];

    public function prestamo()
    {
      // code...
      return $this->belongsTo(Prestamo::class);
    }
}
