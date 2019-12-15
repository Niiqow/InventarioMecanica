@extends('layouts.app')

@section('content')
<div class="container">
      <div class="section text-center">
      <h2 class="title">Nuevo Equipo</h2>

      <a class="btn btn-primary" href="{{ route('MMIEquipos.index') }}">Volver</a>
            </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Atención!</strong> Por favor Verifique que todos los campos que esten completados<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('MMIEquipos.store') }}" method="POST">
    @csrf
     <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Equipo</strong>
                <input type="text" name="equipo" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especificacion Tecnica</strong>
                <input type="text" name="especificacion_tecnica" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cantidad</strong>
                <input type="number" name="cantidad" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor Unitario</strong>
                <input type="number" step="0.01" name="valor_unitario" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor Total</strong>
                <input type="number" step="0.01" name="valor_total" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cód PS</strong>
                <input type="text" name="cod" class="form-control">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observacion</strong>
                <input type="text" name="observacion" class="form-control" value="-">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Valor Proyectado</strong>
                <input type="number" step="0.01" name="valor_proyectado" class="form-control">
            </div>
        </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</div>

          </div>
      </div>





</form>
 </div>
@endsection
