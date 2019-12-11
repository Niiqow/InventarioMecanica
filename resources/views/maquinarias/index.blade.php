@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


<div class="container">

                              <div class="section text-left">

                        <h2 class="title text-center">Equipos por asignatura del Plan de Estudio</h2>
                        <h2 class="title text-center">O1-O10-3 Ingeniería en Maquinaria, Vehículos Automotrices y Sistemas Electrónicos</h2>
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
                                                <td><b>Nombre de Asignatura</b></td>
                                                <td><b>Nombre</b></td>
                                                <td><b>Especificación Técnica</b></td>
                                                <td><b>Cantidad</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                   @foreach ($maquinarias as $maquinaria)
                                            <tr>
                                                 <td>{{ $maquinaria->codigo }}</td>
                                                 <td>{{ $maquinaria->semestre }}</td>
                                                 <td>{{ $maquinaria->asignatura }}</td>
                                                 <td>{{ $maquinaria->nombre }}</td>
                                                 <td>{{ $maquinaria->especificacion_tecnica }}</td>
                                                <td>{{ $maquinaria->cantidad }}</td>


                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
 {!! $maquinarias->links() !!}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
