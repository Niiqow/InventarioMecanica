<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
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
          $personas = Persona::latest()->paginate(5);
          return view('personas.index',compact('personas'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
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
            'numero' => 'required',
            'rol' => 'required',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')
                        ->with('success','Producto agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
      return view('personas.show',compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
      return view('personas.edit',compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
          $request->validate([
                'rut' => 'required',
                'nombre' => 'required',
                'correo' => 'required',
                'numero' => 'required',
                 'rol' => 'required',
          ]);

          $persona->update($request->all());

          return redirect()->route('personas.index')
                          ->with('success','Producto actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
          $persona->delete();

       return redirect()->route('personas.index')
                        ->with('success','Producto eliminado exitosamente');
    }
}
