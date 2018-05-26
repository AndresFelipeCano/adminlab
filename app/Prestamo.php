<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    //
    protected $fillable = [
      'user_id', 'usuario_id', 'equipo_id', 'today', 'detalles_prestamo_id', 'estado'
    ];

    public function user()
    {
      // code...
      return $hits->belongsTo(User::class);
    }
    public function usuario()
    {
      // code...
      return $hits->belongsTo(Usuario::class);
    }
    public function equipo()
    {
      // code...
      return $hits->belongsTo(Equipo::class);
    }
    public function detalles_prestamo()
    {
      // code...
      return $hits->belongsTo(DetallesPrestamo::class);
    }
}
