@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Editar Producto</h2>
            </div>
            <div class="pull-right mb-4 mt-4">
                <a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>
            </div>
        </div>
    </div>



    <form action="{{ route('inventarios.update',$inventario->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código de inventario:</strong>
                    <input type="text" name="codigo_inventario" value="{{ $inventario->codigo_inventario }}" class="form-control" placeholder="Código de inventario">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Codigo Blanco:</strong>
                     <input type="text" name="codigo_blanco" value="{{ $inventario->codigo_blanco }}" class="form-control" placeholder="Codigo Blanco">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Equipo:</strong>
                     <input type="text" name="equipo" value="{{ $inventario->equipo }}" class="form-control" placeholder="Equipo">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Especificación Técnica Detallada:</strong>
                   <input type="text" name="especificacion_detallada" value="{{ $inventario->especificacion_detallada }}" class="form-control" placeholder="Especificación Técnica Detallada">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Carrera(s) que Utiliza el Equipo:</strong>
                     <input type="text" name="nombre_carrera" value="{{ $inventario->nombre_carrera }}" class="form-control" placeholder="Carrera(s) que Utiliza el Equipo">
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código(s)-Nombre(s) de Asignatura(s):</strong>
                     <input type="text" name="asignatura" value="{{ $inventario->asignatura }}" class="form-control" placeholder="Código(s)-Nombre(s) de Asignatura(s)">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Lugar de Almacenamiento:</strong>
                     <input type="text" name="lugar_almacenamiento" value="{{ $inventario->lugar_almacenamiento }}" class="form-control" placeholder="Lugar de Almacenamiento">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cantidad Total Existente en la Sede:</strong>
                     <input type="text" name="cantidad_sede" value="{{ $inventario->cantidad_sede }}" class="form-control" placeholder="Cantidad Total Existente en la Sede">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Valor Unitario:</strong>
                     <input type="text" name="valor_unitario" value="{{ $inventario->valor_unitario }}" class="form-control" placeholder="Valor Unitario">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Valor Total:</strong>
                     <input type="text" name="valor_total" value="{{ $inventario->valor_total }}" class="form-control" placeholder="Valor Total">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Observaciones:</strong>
                     <input type="text" name="observaciones" value="{{ $inventario->observaciones }}" class="form-control" placeholder="Observaciones">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

    </form>

    </div>
@endsection
