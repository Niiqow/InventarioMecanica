<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vidrio extends Model
{
    protected $fillable = [
           'material', 'especificacion','lugar_almacenamiento','cantidad_total','observaciones'
          ];
}
