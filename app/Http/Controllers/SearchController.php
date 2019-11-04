<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;

class SearchController extends Controller
{
   public function show(Request $request){ //con request vamos a ingresar al texto de la consulta que a escrito el usuario
         $query = $request->input('query');
      //   dd($query);
         $inventarios = Inventario::where('nombre','like', "%$query%" )->get();
         return view('search.show')->with(compact('inventarios','query'));
         //Lo que aquí estamos diciendo es que el usuario lo que escriba formará parte de lo que va a encontrar

         //Los simbolos de porcentaje representan comodines en una consulta
   }
}
