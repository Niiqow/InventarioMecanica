<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
      protected $fillable = [
           'insumo', 'especificacion_tecnica','lugar_almacenamiento','cantidad_total','observaciones','created_at','updated_at',
          ];
}
