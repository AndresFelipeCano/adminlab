<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    //
    protected $fillable=[
      'categoria_id', 'estado', 'observaciones', 'numero_equipo', 'user_id'
    ];

    protected $hidden = ['id_monitor'];

    public function categoria()
    {
      // code...
      return $this->belongsTo(Categoria::class);
    }

    public function user()
    {
      // code...
      return $this->belongsTo(User::class);
    }
    public function prestamos()
    {
      // code...
      return $this->hasOne(Prestamo::class);
    }
}
