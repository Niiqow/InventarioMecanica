@extends('layouts.app')
@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left  mb-4 mt-4">
                <h2 class="text-center">Ver Producto</h2>
            </div>
            <div class="pull-right mb-5 mt-4">
                <a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código Inventario:</strong>
                {{ $inventario->codigo_inventario }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Código Blanco:</strong>
                {{ $inventario->codigo_blanco }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Equipo:</strong>
               {{ $inventario->equipo }}
           </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Especificación Técnica Detallada:</strong>
             {{ $inventario->especificacion_detallada }}
          </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
           <strong>Carrera(s) que Utiliza el Equipo:</strong>
           {{ $inventario->nombre_carrera }}
         </div>
     </div>


     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
           <strong>Código(s)-Nombre(s) de Asignatura(s):</strong>
           {{ $inventario->asignatura }}
         </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
           <strong>Lugar de Almacenamiento:</strong>
           {{ $inventario->lugar_almacenamiento }}
         </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
           <strong>Cantidad Total Existente en la Sede:</strong>
           {{ $inventario->cantidad_sede }}
         </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
           <strong>Valor Unitario:</strong>
           {{ $inventario->valor_unitario }}
         </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
          <strong>Valor Total:</strong>
          {{ $inventario->valor_total }}
         </div>
     </div>

     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
          <strong>Observaciones:</strong>
          {{ $inventario->observaciones }}
         </div>
     </div>


     <div class="col-xs-12 col-sm-12 col-md-12">
         <div class="form-group">
            <strong>Creado en:</strong>
            {{ $inventario->created_at }}
         </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
           <strong>Ultima actualización:</strong>
           {{ $inventario->updated_at }}
        </div>
  </div>
    </div>

    </div>
@endsection
