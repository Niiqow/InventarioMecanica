<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanEstudioController extends Controller
{
      public function index()
      {
          return view('plan_estudio.index');
      }
}
