@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

      <div class="section text-center">
<h2 class="title">Nueva Persona</h2>

 <a class="btn btn-primary" href="{{ route('personas.index') }}">Volver</a>
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

<form action="{{ route('personas.store') }}" method="POST">
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
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
               <strong>Correo:</strong>
                        <input type="text" name="correo" class="form-control" placeholder="Correo">
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Número:</strong>
                      <input type="number" name="numero" class="form-control" placeholder="Número">
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Rol:</strong>

             <select class="form-control" type="text" name="rol" class="form-control" placeholder="Rol">
  <option>Estudiante</option>
    <option>Docente</option>
</select>

      </div>



        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </div>

</form>
 </div>
@endsection
