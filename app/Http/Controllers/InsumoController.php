<?php

namespace App\Http\Controllers;

use App\Insumo;
use Illuminate\Http\Request;

class InsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()
    {
          $insumos = Insumo::latest()->paginate(5);
          return view('insumos.index',compact('insumos'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insumos.create');
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
         'insumo',
          'especificacion_tecnica',
         'lugar_almacenamiento',
         'cantidad_total',
         'observaciones',
          ]);

          Insumo::create($request->all());

          return redirect()->route('insumos.index')
                          ->with('success','Insumo agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function show(Insumo $insumo)
    {
              return view('insumos.show',compact('insumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function edit(Insumo $insumo)
    {
       return view('insumos.edit',compact('insumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Insumo $insumo)
    {
          $request->validate([
         'insumo',
          'especificacion_tecnica',
         'lugar_almacenamiento',
         'cantidad_total',
         'observaciones',
          ]);

         $insumo->update($request->all());

         return redirect()->route('insumos.index')
                         ->with('success','Insumo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Insumo  $insumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Insumo $insumo)
    {
          $insumo->delete();

       return redirect()->route('insumos.index')
                       ->with('success','Insumo eliminado exitosamente');
    }
}
