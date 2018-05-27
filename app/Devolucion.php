<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devolucion extends Model
{
    //
    protected $fillable = [
      'prestamo_id', 'carga_bateria', 'observaciones', 'estado', 'user_id'
    ];

    public function prestamo()
    {
      // code...
      return $this->belongsTo(Prestamo::class);
    }
    public function user()
    {
      // code...
      return $this->belongsTo(User::class);
    }
}
