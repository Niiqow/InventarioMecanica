<?php

namespace App\Http\Controllers;

use App\Vidrio;
use Illuminate\Http\Request;

class VidrioController extends Controller
{

    public function __construct()
      {
          $this->middleware('auth');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vidrios = Vidrio::latest()->paginate(5);
        return view('vidrios.index',compact('vidrios'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vidrios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
             'material', 
             'especificacion',
             'lugar_almacenamiento',
             'cantidad_total',
             'observaciones',
        ]);

        Vidrio::create($request->all());

        return redirect()->route('vidrios.index')
                        ->with('success','Equipo agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vidrio  $vidrio
     * @return \Illuminate\Http\Response
     */
    public function show(Vidrio $vidrio)
    {
        return view('vidrios.show',compact('vidrio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vidrio  $vidrio
     * @return \Illuminate\Http\Response
     */
    public function edit(Vidrio $vidrio)
    {
        return view('vidrios.edit',compact('vidrio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vidrio  $vidrio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vidrio $vidrio)
    {
        $request->validate([
             'material', 
             'especificacion',
             'lugar_almacenamiento',
             'cantidad_total',
             'observaciones',
        ]);

        $vidrio->update($request->all());

          return redirect()->route('vidrios.index')
                          ->with('success','Equipo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vidrio  $vidrio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vidrio $vidrio)
    {
        $vidrio->delete();

        return redirect()->route('vidrios.index')
                        ->with('success','Equipo eliminado exitosamente');
    }
}
