@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                              <h2 class="title text-center">Módulo Inventario de Equipos</h2>
               

<div class="text-center">
                        <div class="team">
                              <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                 <td><b>Código de inventario</b></td>
                                                  <td><b>Código Blanco</b></td>
                                                <td><b>Equipo</b></td>
                                                <td><b>Lugar de Almacenamiento</b></td>
                                                <td><b>Especificación Técnica Detallada</b></td>
                                                <td><b>Cantidad Total existente en Sede</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($inventario as $inventarios)
                                            <tr>
                                                <td>{{ $inventarios -> codigo_inventario}}</td>
                                                <td>{{ $inventarios -> codigo_blanco}}</td>
                                               <td>{{ $inventarios -> equipo}}</td>
                                               <td>{{ $inventarios -> lugar_almacenamiento}}</td>
                                                <td>{{ $inventarios -> especificacion_detallada}}</td>
                                                <td>{{ $inventarios -> cantidad_sede}}</td>     
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $inventario -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
