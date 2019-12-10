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

<form action="{{ route('vidrios.store') }}" method="POST">
    @csrf
     <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material de Vidrios:</strong>
                <input type="text" name="material" class="form-control" placeholder="Ejemplo: Vaso presipitado">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especificación Técnica Detallada:</strong>
                <input type="text" name="especificacion" class="form-control" placeholder="Ejemplo: Cristal templado ">
            </div>
       </div>

       <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
              <strong>Lugar de Almacenamiento:</strong>
              <input type="text" name="lugar_almacenamiento" class="form-control" placeholder="Ejemplo: 3--2">
           </div>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Cantidad Total Existente en el Laboratorio / Taller:</strong>
             <input type="text" name="cantidad_total" class="form-control" placeholder="Ejemplo: 10">
          </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Observaciones:</strong>
            <input type="text" name="observaciones" class="form-control" placeholder="Ejemplo: Cristales de seguridad">
         </div>
    </div>


{{ auth()->user()->name }}
auth()->user()
auth()->id();
<input type="text" name="users_id" class="form-control" placeholder="Ejemplo: Cristales de seguridad">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">



            <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</div>

          </div>
      </div>





</form>
 </div>
@endsection
