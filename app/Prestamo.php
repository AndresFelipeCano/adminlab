<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    //
    protected $fillable = [
      'user_id', 'usuario_id', 'numero_equipo', 'today', 'estado'
    ];

    public function user()
    {
      // code...
      return $this->belongsTo(User::class);
    }
    public function usuario()
    {
      // code...
      return $this->belongsTo(Usuario::class);
    }
    public function equipo()
    {
      // code...
      return $this->belongsTo(Equipo::class);
    }
    public function detalles_prestamo()
    {
      // code...
      return $this->hasOne(DetallesPrestamo::class);
    }
}
