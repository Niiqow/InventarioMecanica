<?php

namespace App\Http\Controllers;

use App\ingMVSEquiposA;
use Illuminate\Http\Request;

class ingMVSEquiposAController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }


  public function index()
  {
        $ingMVSEquiposA = ingMVSEquiposA::latest()->paginate(5);
       return view('ingMVSEquiposA.index',compact('ingMVSEquiposA'))->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
      return view('ingMVSEquiposA.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'year', 'equipo','especificacion_tecnica','cantidad','valor_unitario','valor_total','valor_proyectado'
    ]);

    ingMVSEquiposA::create($request->all());

    return redirect()->route('ingMVSEquiposA.index')
                     ->with('success','Equipo agregado exitosamente.');
  }


}