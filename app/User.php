<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','id_upb', 'apellido', 'cargo', 'telefono', 'carrera'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function prestamos()
    {
      // code...
      return $this->hasMany(Prestamo::class);
    }
    public function devolucions()
    {
      // code...
      return $this->hasMany(Devolucion::class);
    }
    public function equipos()
    {
      // code...
      return $this->hasMany(Equipo::class);
    }
}
