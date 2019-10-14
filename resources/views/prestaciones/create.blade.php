@extends('layouts.app')

@section('content')
<div class="container">


<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nueva Persona</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('prestaciones.index') }}">Volver</a>
        </div>
    </div>
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

<form action="{{ route('prestaciones.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>RUT:</strong>
                <input type="text" name="rut" class="form-control" placeholder="RUT">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <textarea class="form-control" style="height:280px" name="nombre" placeholder="Nombre"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
               <strong>Correo:</strong>
               <textarea class="form-control" style="height:280px" name="correo" placeholder="Correo"></textarea>
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Rol:</strong>
             <textarea class="form-control" style="height:280px" name="rol" placeholder="Rol"></textarea>
          </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </div>

</form>
</div>
@endsection
