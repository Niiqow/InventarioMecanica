@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
          <div class="section text-center">
   <h2 class="title">Editar Persona</h2>

     <a class="btn btn-primary" href="{{ route('personas.index') }}">Volver</a>
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
                   <input type="text" name="numero" value="{{ $persona->numero }}" class="form-control" placeholder="Número">
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                      <div class="col-1">
                           <strong>Rol:</strong>
                      </div>
                      <div class="text-danger ml-0">
                           <strong>*CONFIRMAR*</strong>
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
