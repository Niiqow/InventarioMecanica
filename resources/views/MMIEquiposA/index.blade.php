@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                    <div class="text-center">
                                 <a class="btn btn-primary" href="{{ route('ingMMI.index') }}">Volver</a>
                                 </div>
                              <h2 class="title text-center">Equipos por Plan de Estudio y año en que se requieren</h2>



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
                                              @foreach ($MMIEquiposA as $MMIEquipoA)
                                            <tr>
                                                <td>{{ $MMIEquipoA -> year}}</td>
                                                <td>{{ $MMIEquipoA -> equipo}}</td>
                                                <td>{{ $MMIEquipoA -> especificacion_tecnica}}</td>
                                                <td>{{ $MMIEquipoA -> cantidad}}</td>
                                                <td>{{ $MMIEquipoA -> valor_unitario}}</td>
                                                <td>{{ $MMIEquipoA -> valor_total}}</td>
                                                <td>{{ $MMIEquipoA -> valor_proyectado}}</td>




                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $MMIEquiposA -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
