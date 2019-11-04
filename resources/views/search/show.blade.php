@extends('layouts.app')

@section('title', 'Resultados de búsqueda')

@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left  mb-4 mt-4">
                <h2 class="text-center">Resultados de búsqueda</h2>
            </div>
            <div class="pull-right mb-5 mt-4">
                <a class="btn btn-danger" href="{{ route('inventarios.index') }}">Volver</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <p>
                      Se encontratron {{ $inventarios->count() }} resultados para el término {{  $query }}.
                </p>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad:</strong>
                {{ $inventarios->cantidad }}
            </div>
        </div>
    </div>

    </div>
@endsection
