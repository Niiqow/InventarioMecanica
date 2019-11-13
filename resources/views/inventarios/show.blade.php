@extends('layouts.app')
@section('content')
<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left  mb-4 mt-4">
                <h2 class="text-center">Ver Producto</h2>
            </div>
            <div class="pull-right mb-5 mt-4">
                <a class="btn btn-danger" href="{{ route('inventarios.index') }}">Volver</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $inventario->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descripcion:</strong>
                {{ $inventario->descripcion }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
           <div class="form-group">
               <strong>Cantidad:</strong>
               {{ $inventario->cantidad }}
           </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
             <strong>Codigo:</strong>
             {{ $inventario->codigo }}
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
