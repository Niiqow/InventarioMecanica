@extends('inventarios.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Nuevo Producto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>
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
                <strong>Cantidad:</strong>
                <textarea class="form-control" style="height:280px" name="cantidad" placeholder="Cantidad"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
               <strong>Lugar:</strong>
               <textarea class="form-control" style="height:280px" name="lugar" placeholder="Lugar"></textarea>
          </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Tipo:</strong>
             <textarea class="form-control" style="height:280px" name="tipo" placeholder="Tipo"></textarea>
          </div>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </div>

</form>
@endsection
