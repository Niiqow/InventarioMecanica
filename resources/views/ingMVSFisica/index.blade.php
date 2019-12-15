@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                    <div class="text-center">
                                 <a class="btn btn-primary" href="{{ route('ingMVS.index') }}">Volver</a>
                                 </div>
                              <h2 class="title text-center">Equipos e insumos para la asignatura METEFM01 - Física Mecánica</h2>
<a class="btn btn-primary" href="{{ route('ingMVSFisica.create') }}">Nuevo Equipo</a>


                                          @if ($message = Session::get('success'))
                                              <div class="alert alert-success">
                                                  <p>{{ $message }}</p>
                                              </div>
                                          @endif

                                          </div>


<div class="text-center">
                        <div class="team">
                              <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td><b>Equipo</b></td>
                                                <td><b>Especificación Técnica</b></td>
                                                <td><b>Cantidad</b></td>
                                                <td><b>Valor Unitario</b></td>
                                                <td><b>Valor Total</b></td>
                                                <td><b>Cód PS</b></td>
                                                <td><b>Clasificación</b></td>
                                                <td><b>Observación</b></td>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($ingMVSFisica as $ingMVSFisicas)
                                            <tr>

                                                <td>{{ $ingMVSFisicas -> equipo}}</td>
                                                <td>{{ $ingMVSFisicas -> especificacion_tecnica}}</td>
                                                <td>{{ $ingMVSFisicas -> cantidad}}</td>
                                                <td>{{ $ingMVSFisicas -> valor_unitario}}</td>
                                                <td>{{ $ingMVSFisicas -> valor_total}}</td>
                                                <td>{{ $ingMVSFisicas -> cod}}</td>
                                                <td>{{ $ingMVSFisicas -> clasificacion}}</td>
                                                <td>{{ $ingMVSFisicas -> observacion}}</td>
                                              

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $ingMVSFisica -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
