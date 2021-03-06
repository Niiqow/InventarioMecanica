<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
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




        $inventarios = Inventario::latest()->paginate(5);
        return view('inventarios.index',compact('inventarios'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
     {
         return view('inventarios.create');
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
             'codigo_inventario',
             'codigo_blanco',
             'equipo',
             'especificacion_detallada',
             'nombre_carrera',
             'asignatura',
             'lugar_almacenamiento',
             'cantidad_sede',
             'valor_unitario',
             'valor_total',
             'observaciones',
             'users_id',
        ]);

        Inventario::create($request->all());

        return redirect()->route('inventarios.index')
                        ->with('success','Equipo agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
     public function show(Inventario $inventario)
    {
        return view('inventarios.show',compact('inventario'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventario $inventario)
    {
        return view('inventarios.edit',compact('inventario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventario $inventario)
    {
          $request->validate([
                'codigo_inventario',
                'codigo_blanco',
                'equipo',
                'especificacion_detallada',
                'nombre_carrera',
                'asignatura',
                'lugar_almacenamiento',
                'cantidad_sede',
                'valor_unitario',
                'valor_total',
                'observaciones',
          ]);

          $inventario->update($request->all());

          return redirect()->route('inventarios.index')
                          ->with('success','Equipo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario){
          $inventario->delete();

        return redirect()->route('inventarios.index')
                        ->with('success','Equipo eliminado exitosamente');
    }
}
