<?php

namespace App\Http\Controllers;

use App\ingMVSInsumos;
use Illuminate\Http\Request;

class ingMVSInsumosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
   }


  public function index()
  {
        $ingMVSInsumos = ingMVSInsumos::latest()->paginate(5);
       return view('ingMVSInsumos.index',compact('ingMVSInsumos'))->with('i',(request()->input('page',1)-1)*5);
  }

  public function create()
  {
      return view('ingMVSInsumos.create');
  }

  public function store(Request $request)
  {
    $request->validate([
        'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','observacion'
    ]);

    ingMVSInsumos::create($request->all());

    return redirect()->route('ingMVSInsumos.index')
                     ->with('success','Equipo agregado exitosamente.');
  }

}
