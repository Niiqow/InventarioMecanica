<?php

namespace App\Http\Controllers;

use App\ingMVSFisica;
use Illuminate\Http\Request;

class ingMVSFisicaController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }


  public function index()
  {
        $ingMVSFisica = ingMVSFisica::latest()->paginate(5);
       return view('ingMVSFisica.index',compact('ingMVSFisica'))->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
      return view('ingMVSFisica.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','clasificacion','observacion'
    ]);

    ingMVSFisica::create($request->all());

    return redirect()->route('ingMVSFisica.index')
                     ->with('success','Equipo por Asignatura agregado exitosamente.');
  }
}