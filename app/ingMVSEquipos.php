<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingMVSEquipos extends Model
{
      protected $fillable = [
          'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','observacion','valor_proyectado'
          ];
}
