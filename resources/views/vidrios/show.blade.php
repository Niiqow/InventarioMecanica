@extends('layouts.app')
@section('content')
<div class="container">


      <div class="section text-center">
      <h2 class="title">Ver Equipo</h2>

      <a class="btn btn-primary" href="{{ route('vidrios.index') }}">Volver</a>
            </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Material de Vidrio:</strong>
                {{ $vidrio->material }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Especificación Técnica Detallada:</strong>
                {{ $vidrio->especificacion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Lugar de Almacenamiento:</strong>
               {{ $vidrio->lugar_almacenamiento }}
           </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Cantidad Total Existente en el Laboratorio / Taller:</strong>
             {{ $vidrio->cantidad_total }}
          </div>
     </div>

     

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
          <strong>Observaciones:</strong>
          {{ $vidrio->observaciones }}
         </div>
     </div>


     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Creado en:</strong>
            {{ $vidrio->created_at }}
         </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Ultima actualización:</strong>
           {{ $vidrio->updated_at }}
        </div>
  </div>
    </div>

    </div>
@endsection
