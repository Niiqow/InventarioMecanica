<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
      protected $fillable = [
             'nombre', 'descripcion','cantidad','codigo'
           ];
}
