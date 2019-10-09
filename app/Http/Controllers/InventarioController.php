<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
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
            'nombre' => 'required',
            'cantidad' => 'required',
            'lugar' => 'required',
            'tipo' => 'required',
        ]);

        Inventario::create($request->all());

        return redirect()->route('inventarios.index')
                        ->with('success','Producto agregado exitosamente.');
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
              'nombre' => 'required',
              'cantidad' => 'required',
                'lugar' => 'required',
                  'tipo' => 'required',
          ]);

          $inventario->update($request->all());

          return redirect()->route('inventarios.index')
                          ->with('success','Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
          $inventario->delete();

        return redirect()->route('inventarios.index')
                        ->with('success','Producto eliminado exitosamente');
    }
}