@extends('layouts.app')
@section('content')


      <div class="container">

                        <div class="section text-center">
                  <h2 class="title">Ver Insumo</h2>

                    <a class="btn btn-primary" href="{{ route('insumos.index') }}">Volver</a>
                              </div>




        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de creacion:</strong>
                {{ $insumo->created_at }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ultima vez modificado:</strong>
                             {{ $insumo->updated_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Insumo:</strong>
                             {{ $insumo->insumo }}
            </div>
        </div>


                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                       <strong>Especificación Técnica Detallada:</strong>
                                    {{ $insumo->especificacion_tecnica }}
                    </div>
                </div>


                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                         <strong>Lugar de Almacenamiento:</strong>
                                          {{ $insumo->lugar_almacenamiento }}
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                   <strong>Cantidad Total Existente en el Laboratorio / Taller:</strong>
                                    {{ $insumo->cantidad_total }}
                                    </div>
                                </div>




                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                                <strong>Observaciones:</strong>
                                                {{ $insumo->observaciones }}
                                    </div>
                                </div>

    </div>

    <div class="section">

    </div>
@endsection
