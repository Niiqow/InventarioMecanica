<?php

namespace App\Http\Controllers;

use App\ingMVSEquipos;
use Illuminate\Http\Request;

class ingMVSEquiposController extends Controller
{



public function __construct() {
          $this->middleware('auth');
     }


    public function index()
    {
          $ingMVSEquipos = ingMVSEquipos::latest()->paginate(5);
         return view('ingMVSEquipos.index',compact('ingMVSEquipos'))->with('i',(request()->input('page',1)-1)*5);
    }

    public function create()
    {
        return view('ingMVSEquipos.create');
    }

    public function store(Request $request)
    {
      $request->validate([
             'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','observacion','valor_proyectado'
      ]);

      ingMVSEquipos::create($request->all());

      return redirect()->route('ingMVSEquipos.index')
                       ->with('success','Equipo agregado exitosamente.');
    }


}
