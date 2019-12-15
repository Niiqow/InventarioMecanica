<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MMIInsumos;
class MMIInsumosController extends Controller
{
    
        public function __construct() {
            $this->middleware('auth');
       }
    
    
      public function index()
      {
            $MMIInsumos = MMIInsumos::latest()->paginate(5);
           return view('MMIInsumos.index',compact('MMIInsumos'))->with('i',(request()->input('page',1)-1)*5);
      }
    
      public function create()
      {
          return view('MMIInsumos.create');
      }
    
      public function store(Request $request)
      {
        $request->validate([
            'equipo', 'especificacion_tecnica','cantidad','valor_unitario','valor_total','cod','observacion'
        ]);
    
        MMIInsumos::create($request->all());
    
        return redirect()->route('MMIInsumos.index')
                         ->with('success','Equipo agregado exitosamente.');
      }
    }
    

