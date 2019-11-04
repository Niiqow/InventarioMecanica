@extends('layouts.app')
@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left  mb-4 mt-4">
                <h2 class="text-center">Ver Persona</h2>
            </div>
            <div class="pull-right mb-5 mt-4">
                <a class="btn btn-danger" href="{{ route('personas.index') }}">Volver</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $persona->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Correo:</strong>
                {{ $persona->correo }}
            </div>
        </div>
    </div>

    </div>
@endsection
