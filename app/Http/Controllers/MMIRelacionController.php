<?php

namespace App\Http\Controllers;

use App\MMIRelacion;
use Illuminate\Http\Request;

class MMIRelacionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }


  public function index()
  {
        $MMIRelacion = MMIRelacion::latest()->paginate(5);
       return view('MMIRelacion.index',compact('MMIRelacion'))->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
      return view('MMIRelacion.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'codigo', 'semestre','asignatura','nombre','especificacion_tecnica','cantidad'
    ]);

    MMIRelacion::create($request->all());

    return redirect()->route('MMIRelacion.index')
                     ->with('success','Equipo por Asignatura agregado exitosamente.');
  }
}
