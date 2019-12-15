<?php

namespace App\Http\Controllers;

use App\MMIFisica;
use Illuminate\Http\Request;

class MMIFisicaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }


  public function index()
  {
        $MMIFisica = MMIFisica::latest()->paginate(5);
       return view('MMIFisica.index',compact('MMIFisica'))->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
      return view('MMIFisica.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','clasificacion','observacion'
    ]);

    MMIFisica::create($request->all());

    return redirect()->route('MMIFisica.index')
                     ->with('success','Equipo por Asignatura agregado exitosamente.');
  }
}
