<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingMVSRelacion extends Model
{
      protected $fillable = [
          'codigo', 'semestre','asignatura','nombre','especificacion_tecnica','cantidad'
          ];
}
