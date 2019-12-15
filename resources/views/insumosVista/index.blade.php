@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


<div class="container">

                              <div class="section text-left">
                        <h2 class="title text-center">Módulo Inventario de Insumos</h2>

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
                                                <td><b>Insumo</b></td>
                                                <td><b>Especificación Técnica Detallada</b></td>
                                                <td><b>Lugar de Almacenamiento</b></td>
                                                <td><b>Cantidad Total en Laboratorio / Taller</b></td>
                                                <td><b>Observaciones</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($insumos as $insumo)
                                            <tr>
                                                 <td>{{ $insumo->insumo }}</td>
                                                 <td>{{ $insumo->especificacion_tecnica }}</td>
                                                 <td>{{ $insumo->lugar_almacenamiento }}</td>
                                                 <td>{{ $insumo->cantidad_total }}</td>
                                                 <td>{{ $insumo->observaciones }}</td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
 {!! $insumos->links() !!}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
