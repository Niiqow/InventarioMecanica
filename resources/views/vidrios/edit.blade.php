@extends('layouts.app')

@section('content')

<div class="container">


      <div class="section text-center">
      <h2 class="title">Editar Equipo</h2>

      <a class="btn btn-primary" href="{{ route('vidrios.index') }}">Volver</a>
            </div>

    <form action="{{ route('vidrios.update',$vidrio->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Material de Vidrio:</strong>
                    <input type="text" name="material" value="{{ $vidrio->material }}" class="form-control" placeholder="Material de Vidrio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Especificación Técnica Detallada:</strong>
                     <input type="text" name="especificacion" value="{{ $vidrio->especificacion }}" class="form-control" placeholder="Especificacion">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lugar de Almacenamiento:</strong>
                     <input type="text" name="lugar_almacenamiento" value="{{ $vidrio->lugar_almacenamiento }}" class="form-control" placeholder="Lugar de Almacenamiento">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cantidad Total Existente en el Laboratorio / Taller:</strong>
                   <input type="text" name="cantidad_total" value="{{ $vidrio->cantidad_total }}" class="form-control" placeholder="Cantidad Total Existente en el Laboratorio / Taller">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Observaciones:</strong>
                     <input type="text" name="observaciones" value="{{ $vidrio->observaciones }}" class="form-control" placeholder="Observaciones">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

    </form>

    </div>
@endsection
