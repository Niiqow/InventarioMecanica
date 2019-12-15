<?php

namespace App\Http\Controllers;

use App\MMIEquiposA;
use Illuminate\Http\Request;

class MMIEquiposAController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }


  public function index()
  {
        $MMIEquiposA = MMIEquiposA::latest()->paginate(5);
       return view('MMIEquiposA.index',compact('MMIEquiposA'))->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
      return view('MMIEquiposA.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'year', 'equipo','especificacion_tecnica','cantidad','valor_unitario','valor_total','valor_proyectado'
    ]);

    MMIEquiposA::create($request->all());

    return redirect()->route('MMIEquiposA.index')
                     ->with('success','Equipo agregado exitosamente.');
  }

}
