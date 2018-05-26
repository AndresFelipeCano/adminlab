<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallesPrestamo extends Model
{
    //
    protected $fillable = [
     'id_externo', 'detalles', 'prestamo_id'
    ];
    public function prestamo()
    {
      // code...
      return $this->hasOne(User::class);
    }
}
