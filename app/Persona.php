<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
      protected $fillable = [
           'rut', 'nombre','correo','numero','rol'
          ];
}
