@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                    <div class="text-center">
                                 <a class="btn btn-primary" href="{{ route('ingMMI.index') }}">Volver</a>
                                 </div>
                              <h2 class="title text-center">Equipos por asignatura del Plan de Estudio</h2>
<a class="btn btn-primary" href="{{ route('MMIRelacion.create') }}">Nuevo Equipo</a>


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
                                                <td><b>Código</b></td>
                                                <td><b>Semestre</b></td>
                                                <td><b>Nombre Asignatura</b></td>
                                                <td><b>Nombre Equipo</b></td>
                                                <td><b>Especificación Tecnica</b></td>
                                                <td><b>Cantidad</b></td>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($MMIRelacion as $MMIRelacions)
                                            <tr>

                                                <td>{{ $MMIRelacions -> codigo}}</td>
                                                <td>{{ $MMIRelacions -> semestre}}</td>
                                                <td>{{ $MMIRelacions -> asignatura}}</td>
                                                <td>{{ $MMIRelacions -> nombre}}</td>
                                                <td>{{ $MMIRelacions -> especificacion_tecnica}}</td>
                                                <td>{{ $MMIRelacions -> cantidad}}</td>



                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $MMIRelacion -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
