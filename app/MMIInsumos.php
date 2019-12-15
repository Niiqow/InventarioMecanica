<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MMIInsumos extends Model
{
    protected $fillable = [
        'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','observacion'
        ];
}
