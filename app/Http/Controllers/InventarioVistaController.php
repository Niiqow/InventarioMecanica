<?php

namespace App\Http\Controllers;

use App\Inventario;
use Illuminate\Http\Request;

class InventarioVistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $inventario = Inventario::latest()->paginate(5);
            return view('inventarioVista.index',compact('inventario'))->with('i',(request()->input('page',1)-1)*5);
    }



}
