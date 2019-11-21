@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-center">Nuevo Insumo</h2>
        </div>
        <div class="pull-right mb-4 mt-4">
            <a class="btn btn-primary" href="{{ route('insumos.index') }}">Volver</a>
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

<form action="{{ route('insumos.store') }}" method="POST">
    @csrf
     <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Insumo:</strong>
                <input type="text" name="insumo" class="form-control" placeholder="Ejemplo: Ogquaton Tubo de medición">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especificación Técnica Detallada:</strong>
                <input type="text" name="especificacion_tecnica" class="form-control" placeholder="Ejemplo: Capasidad 50ml (±1ml)">
            </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Lugar de Almacenamiento:</strong>
              <input type="text" name="lugar_almacenamiento" class="form-control" placeholder="Ejemplo: Estante 3, nivel 2">
           </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Cantidad Total Existente en el Laboratorio / Taller:</strong>
             <input type="text" name="cantidad_total" class="form-control" placeholder="Ejemplo: 1">
          </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Observaciones:</strong>
            <input type="text" name="observaciones" class="form-control" placeholder="Ejemplo: Revisar el estado del equipo">
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
