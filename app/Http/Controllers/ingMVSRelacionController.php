<?php

namespace App\Http\Controllers;

use App\ingMVSRelacion;
use Illuminate\Http\Request;

class ingMVSRelacionController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }


  public function index()
  {
        $ingMVSRelacion = ingMVSRelacion::latest()->paginate(5);
       return view('ingMVSRelacion.index',compact('ingMVSRelacion'))->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
      return view('ingMVSRelacion.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'codigo', 'semestre','asignatura','nombre','especificacion_tecnica','cantidad'
    ]);

    ingMVSRelacion::create($request->all());

    return redirect()->route('ingMVSRelacion.index')
                     ->with('success','Equipo por Asignatura agregado exitosamente.');
  }
}