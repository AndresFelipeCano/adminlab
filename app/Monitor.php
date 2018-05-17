<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    //
    protected $fillable = ['id_upb','nombre', 'apellido', 'correo', 'numero_celular'];
}
