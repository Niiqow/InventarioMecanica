<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestacion extends Model
{
      protected $fillable = ['rut', 'nombre', 'correo','rol'];
}
