<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
      protected $fillable = [
           'codigo_inventario', 'codigo_blanco','equipo','especificacion_detallada','nombre_carrera','asignatura',
           'lugar_almacenamiento','cantidad_sede','valor_unitario','valor_total','observaciones','created_at','update_at',
          ];
}
