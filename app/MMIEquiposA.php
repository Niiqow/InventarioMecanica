<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MMIEquiposA extends Model
{
    protected $fillable = [
        'year', 'equipo','especificacion_tecnica','cantidad','valor_unitario','valor_total','valor_proyectado'
        ];
}
