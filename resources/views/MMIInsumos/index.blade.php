@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                    <div class="text-center">
                                 <a class="btn btn-primary" href="{{ route('ingMMI.index') }}">Volver</a>
                                 </div>
                              <h2 class="title text-center">Insumos por Plan de Estudio</h2>


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
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($MMIInsumos as $MMIInsumo)
                                            <tr>
                                                <td>{{ $MMIInsumo -> equipo}}</td>
                                                <td>{{ $MMIInsumo -> especificacion_tecnica}}</td>
                                                <td>{{ $MMIInsumo -> cantidad}}</td>
                                                <td>{{ $MMIInsumo -> valor_unitario}}</td>
                                                <td>{{ $MMIInsumo -> valor_total}}</td>
                                                <td>{{ $MMIInsumo -> cod}}</td>
                                                <td>{{ $MMIInsumo -> observacion}}</td>




                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $MMIInsumos -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
