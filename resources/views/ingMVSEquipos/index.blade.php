@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                               <div class="text-center">
                               <a class="btn btn-primary" href="{{ route('ingMVS.index') }}">Volver</a>
                               </div>
                                   
                              <h2 class="title text-center">Equipos por Plan de Estudio</h2>
<a class="btn btn-primary" href="{{ route('ingMVSEquipos.create') }}">Nuevo Equipo</a>


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
                                                <td><b>Valor Unitario - uf (c/iva)</b></td>
                                                <td><b>Valor Total - uf (c/iva)</b></td>
                                                <td><b>Cód PS</b></td>
                                                <td><b>Observación</b></td>
                                                <td><b>Valor Total Proyectado</b></td>
                                       
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($ingMVSEquipos as $ingMVSEquipo)
                                            <tr>
                                                <td>{{ $ingMVSEquipo -> equipo}}</td>
                                                <td>{{ $ingMVSEquipo -> especificacion_tecnica}}</td>
                                               <td>{{ $ingMVSEquipo -> cantidad}}</td>
                                                <td>{{ $ingMVSEquipo -> valor_unitario}}</td>
                                                <td>{{ $ingMVSEquipo -> valor_total}}</td>
                                                <td>{{ $ingMVSEquipo -> cod}}</td>
                                               <td>{{ $ingMVSEquipo -> observacion}}</td>
                                                     <td>{{ $ingMVSEquipo -> valor_proyectado}}</td>

                                                    


                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $ingMVSEquipos -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
