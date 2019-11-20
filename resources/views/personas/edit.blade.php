@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Editar Persona</h2>
            </div>
            <div class="pull-right mb-4 mt-4">
                <a class="btn btn-primary" href="{{ route('personas.index') }}">Volver</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Atención!</strong> Verifique que esten todos los campos <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('personas.update',$persona->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RUT:</strong>
                    <input type="text" name="rut" value="{{ $persona->rut }}" class="form-control" placeholder="RUT">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                     <input type="text" name="nombre" value="{{ $persona->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo:</strong>
                     <input type="text" name="correo" value="{{ $persona->correo }}" class="form-control" placeholder="Correo">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Número:</strong>
                   <input type="number" name="numero" value="{{ $persona->numero }}" class="form-control" placeholder="Número">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <div class="row">

                  <div class="col-1">
                        <strong>Rol:</strong>
                  </div>
                  <div class="text-danger ml-0">
                        <strong>*CONFIRMAR*</strong>
                  </div>
                  </div>
                    <select class="form-control" type="text" name="rol" class="form-control" placeholder="Rol">
         <option>Estudiante</option>
          <option>Docente</option>
      </select>
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

    </form>

    </div>
@endsection
