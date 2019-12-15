@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                    <div class="text-center">
                                 <a class="btn btn-primary" href="{{ route('ingMMI.index') }}">Volver</a>
                                 </div>
                              <h2 class="title text-center">Equipos e insumos para la asignatura METEFM01 - Física Mecánica</h2>
<a class="btn btn-primary" href="{{ route('MMIFisica.create') }}">Nuevo Equipo</a>


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
                                              @foreach ($MMIFisica as $MMIFisicas)
                                            <tr>

                                                <td>{{ $MMIFisicas -> equipo}}</td>
                                                <td>{{ $MMIFisicas -> especificacion_tecnica}}</td>
                                                <td>{{ $MMIFisicas -> cantidad}}</td>
                                                <td>{{ $MMIFisicas -> valor_unitario}}</td>
                                                <td>{{ $MMIFisicas -> valor_total}}</td>
                                                <td>{{ $MMIFisicas -> cod}}</td>
                                                <td>{{ $MMIFisicas -> clasificacion}}</td>
                                                <td>{{ $MMIFisicas -> observacion}}</td>
                                              

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $MMIFisica -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
