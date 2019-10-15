@extends('layouts.app')

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar persona</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-danger" href="{{ route('prestaciones.index') }}"> Volver</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error</strong> Hubo algunos problemas al agregar información.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('prestaciones.update',$prestacion->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rut:</strong>
                    <input type="text" name="rut" value="{{ $prestacion->rut }}" class="form-control" placeholder="Rut">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $prestacion->nombre }}" class="form-control" placeholder="Nombre">
               </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong>Correo:</strong>
                    <input type="text" name="correo" value="{{ $prestacion->correo }}" class="form-control" placeholder="Correo">
               </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="form-group">
                    <strong>Numero:</strong>
                    <input type="number" name="numero" value="{{ $prestacion->numero }}" class="form-control" placeholder="Numero">
               </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rol:</strong>
                    <input type="text" name="rol" value="{{ $prestacion->rol }}" class="form-control" placeholder="Rol">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-danger">Editar</button>
            </div>
        </div>

    </form>
@endsection
