<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insumo;

class InsumosVistaController extends Controller
{
    public function index()
    {
        $insumos = Insumo::latest()->paginate(5);
        return view('insumosVista.index',compact('insumos'))->with('i',(request()->input('page',1)-1)*5);
    }
}
