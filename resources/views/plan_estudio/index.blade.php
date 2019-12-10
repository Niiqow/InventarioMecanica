@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


<div class="container">

                              <div class="section text-left">

                        <h2 class="title text-center">Plan de Estudios y de su Estándar de Equipamiento</h2>

                  </div>
<div class="text-center">

<h3>Ingeniería en Maquinaria, Vehículos Automotrices y Sistemas Electrónicos</h3>
<a class="btn btn-primary" href="{{ route('ingMVS.index') }}">Ingresar</a>
</div>

<div class="section">
</div>

<div class="text-center">
      <h3>Ingeniería Mecánica en Mantenimiento Industrial</h3>
      <a class="btn btn-primary" href="{{ route('maquinarias.index') }}">Ingresar</a>
</div>

<div>

      <div class="section">

</div>
                              </div>






@endsection
