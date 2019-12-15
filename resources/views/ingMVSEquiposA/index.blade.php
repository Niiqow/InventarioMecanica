@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                    <div class="text-center">
                                 <a class="btn btn-primary" href="{{ route('ingMVS.index') }}">Volver</a>
                                 </div>
                              <h2 class="title text-center">Equipos por Plan de Estudio y año en que se requieren</h2>
<a class="btn btn-primary" href="{{ route('ingMVSEquiposA.create') }}">Nuevo Equipo</a>


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
                                                <td><b>Año</b></td>
                                                <td><b>Equipo</b></td>
                                                <td><b>Especificación Técnica</b></td>
                                                <td><b>Cantidad</b></td>
                                                <td><b>Valor Unitario - uf (c/iva)</b></td>
                                                <td><b>Valor Total - uf (c/iva)</b></td>
                                                <td><b>Valor Total Proyectado</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($ingMVSEquiposA as $ingMVSEquipoA)
                                            <tr>
                                                <td>{{ $ingMVSEquipoA -> year}}</td>
                                                <td>{{ $ingMVSEquipoA -> equipo}}</td>
                                                <td>{{ $ingMVSEquipoA -> especificacion_tecnica}}</td>
                                                <td>{{ $ingMVSEquipoA -> cantidad}}</td>
                                                <td>{{ $ingMVSEquipoA -> valor_unitario}}</td>
                                                <td>{{ $ingMVSEquipoA -> valor_total}}</td>
                                                <td>{{ $ingMVSEquipoA -> valor_proyectado}}</td>




                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $ingMVSEquiposA -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
