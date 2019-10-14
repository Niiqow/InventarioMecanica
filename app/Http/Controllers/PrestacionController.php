<?php

namespace App\Http\Controllers;
use App\Prestacion;
use Illuminate\Http\Request;

class PrestacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $prestaciones = Prestacion::latest()->paginate(5);
         return view('prestaciones.index',compact('prestaciones'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('prestaciones.create');
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
             'rut' => 'required',
             'nombre' => 'required',
             'correo' => 'required',
             'rol' => 'required',
          ]);

          Prestacion::create($request->all());

          return redirect()->route('prestaciones.index')
                          ->with('success','Producto agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         return view('prestaciones.show',compact('prestacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('prestaciones.edit',compact('prestacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $request->validate([
              'rut' => 'required',
              'nombre' => 'required',
              'correo' => 'required',
              'rol' => 'required',
         ]);

         $prestacion->update($request->all());

         return redirect()->route('prestaciones.index')
                        ->with('success','Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $prestacion->delete();

       return redirect()->route('prestaciones.index')
                       ->with('success','Producto eliminado exitosamente');
    }
}
