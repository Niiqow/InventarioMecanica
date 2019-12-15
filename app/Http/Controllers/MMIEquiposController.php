<?php

namespace App\Http\Controllers;

use App\MMIEquipos;
use Illuminate\Http\Request;

class MMIEquiposController extends Controller
{
   
public function __construct() {
    $this->middleware('auth');
}


public function index()
{
    $MMIEquipos = MMIEquipos::latest()->paginate(5);
   return view('MMIEquipos.index',compact('MMIEquipos'))->with('i',(request()->input('page',1)-1)*5);
}

public function create()
{
  return view('MMIEquipos.create');
}

public function store(Request $request)
{
$request->validate([
       'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','observacion','valor_proyectado'
]);

MMIEquipos::create($request->all());

return redirect()->route('MMIEquipos.index')
                 ->with('success','Equipo agregado exitosamente.');
}

}
