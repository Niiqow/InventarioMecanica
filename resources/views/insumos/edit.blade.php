@extends('layouts.app')

@section('content')

<div class="container">


      <div class="section text-center">
      <h2 class="title">Editar Insumo</h2>

      <a class="btn btn-primary" href="{{ route('insumos.index') }}">Volver</a>
            </div>

    <form action="{{ route('insumos.update',$insumo->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Insumo:</strong>
                    <input type="text" name="insumo" value="{{ $insumo->insumo }}" class="form-control">
                </div>
            </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Especificación Técnica Detallada:</strong>
                       <input type="text" name="especificacion_tecnica" value="{{ $insumo->especificacion_tecnica }}" class="form-control">
                   </div>
               </div>


               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Lugar de Almacenamiento:</strong>
                       <input type="text" name="lugar_almacenamiento" value="{{ $insumo->lugar_almacenamiento }}" class="form-control">
                   </div>
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Cantidad Total Existente en el Laboratorio / Taller:</strong>
                       <input type="text" name="cantidad_total" value="{{ $insumo->cantidad_total }}" class="form-control">
                   </div>
               </div>

               <div class="col-xs-12 col-sm-12 col-md-12">
                   <div class="form-group">
                       <strong>Observaciones:</strong>
                       <input type="text" name="observaciones" value="{{ $insumo->observaciones }}" class="form-control">
                   </div>
               </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

    </form>

    </div>
@endsection
