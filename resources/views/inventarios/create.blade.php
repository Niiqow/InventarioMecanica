@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-center">Nuevo Producto</h2>
        </div>
        <div class="pull-right mb-4 mt-4">
            <a class="btn btn-danger" href="{{ route('inventarios.index') }}">Volver</a>
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

<form action="{{ route('inventarios.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                        <input type="text" name="descripcion" class="form-control" placeholder="Descipcion">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
               <strong>Cantidad:</strong>
                        <input type="number" name="cantidad" class="form-control" placeholder="Cantidad">
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Codigo:</strong>
                      <input type="text" name="codigo" class="form-control" placeholder="Codigo">
          </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-danger">Agregar</button>
        </div>
    </div>

</form>
 </div>
@endsection
