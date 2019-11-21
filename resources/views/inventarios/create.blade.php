@extends('layouts.app')

@section('content')
<div class="container">
      <div class="section text-center">
      <h2 class="title">Nuevo Equipo</h2>

      <a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>
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
                <strong>Código Inventario:</strong>
                <input type="text" name="codigo_inventario" class="form-control" placeholder="Ejemplo: 250000005953">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código Blanco:</strong>
                <input type="text" name="codigo_blanco" class="form-control" placeholder="Ejemplo: 25000000074666">
            </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Equipo:</strong>
              <input type="text" name="equipo" class="form-control" placeholder="Ejemplo: Medidor de potencia">
           </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Especificación Técnica Detalladar:</strong>
             <input type="text" name="especificacion_detallada" class="form-control" placeholder="Ejemplo: PCE / PCM1">
          </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Carrera(s) que Utiliza el Equipo:</strong>
            <input type="text" name="nombre_carrera" class="form-control" placeholder="Ejemplo: Mantenimiento Industrial">
         </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Código(s)-Nombre(s) de Asignatura(s):</strong>
           <input type="text" name="asignatura" class="form-control" placeholder="Ejemplo: Fundamentos de la Electricidad Industrial">
        </div>
   </div>

   <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
          <strong>Lugar de Almacenamiento:</strong>
          <input type="text" name="lugar_almacenamiento" class="form-control" placeholder="Ejemplo: Estante 2, nivel 2">
      </div>
 </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
       <div class="form-group">
           <strong>Cantidad Total Existente en la Sede:</strong>
           <input type="text" name="cantidad_sede" class="form-control" placeholder="Ejemplo: 1">
       </div>
  </div>

  <div class="col-xs-12 col-sm-12 col-md-12">
     <div class="form-group">
         <strong>Valor Unitario:</strong>
         <input type="text" name="valor_unitario" class="form-control" placeholder="Ejemplo: $189.900">
     </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
       <strong>Valor Total:</strong>
       <input type="text" name="valor_total" class="form-control" placeholder="Ejemplo: $226.909">
   </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
       <strong>Observaciones:</strong>
       <input type="text" name="observaciones" class="form-control" placeholder="Ejemplo: Valorizado BDO">
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
