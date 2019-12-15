@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                    <div class="text-center">
                                 <a class="btn btn-primary" href="{{ route('ingMVS.index') }}">Volver</a>
                                 </div>
                              <h2 class="title text-center">Insumos por Plan de Estudio</h2>
<a class="btn btn-primary" href="{{ route('ingMVSInsumos.create') }}">Nuevo Insumo</a>


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
                                              @foreach ($ingMVSInsumos as $ingMVSInsumo)
                                            <tr>
                                                <td>{{ $ingMVSInsumo -> equipo}}</td>
                                                <td>{{ $ingMVSInsumo -> especificacion_tecnica}}</td>
                                                <td>{{ $ingMVSInsumo -> cantidad}}</td>
                                                <td>{{ $ingMVSInsumo -> valor_unitario}}</td>
                                                <td>{{ $ingMVSInsumo -> valor_total}}</td>
                                                <td>{{ $ingMVSInsumo -> cod}}</td>
                                                <td>{{ $ingMVSInsumo -> observacion}}</td>




                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $ingMVSInsumos -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
