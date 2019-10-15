@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Editar Producto</h2>
            </div>
            <div class="pull-right mb-4 mt-4">
                <a class="btn btn-danger" href="{{ route('inventarios.index') }}">Volver</a>
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

    <form action="{{ route('inventarios.update',$inventario->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $inventario->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción:</strong>
                     <input type="text" name="descripcion" value="{{ $inventario->descripcion }}" class="form-control" placeholder="Descripción">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cantidad:</strong>
                     <input type="number" name="cantidad" value="{{ $inventario->cantidad }}" class="form-control" placeholder="Cantidad">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Código:</strong>
                   <input type="text" name="codigo" value="{{ $inventario->codigo }}" class="form-control" placeholder="Código">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-danger">Editar</button>
            </div>
        </div>

    </form>

    </div>
@endsection
