@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container ">

                  <div class="section text-center">
                        <h2 class="title">Registrar nuevo producto</h2>
<a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>




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

                  <div class="col-sm-4">
                        <div class="form-group label-floating">
                  <label class="control-label">Nombre</label>
                  <input type="text" class="form-control" name="nombre">
                              </div>
                        </div>
                              </div>
<div class="row">

                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Descripción</label>
                                          <input type="text" class="form-control" name="descripcion">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Cantidad</label>
                                          <input type="text" class="form-control" name="cantidad">
                                    </div>
                              </div>
</div>
<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Código</label>
                                          <input type="text" class="form-control" name="codigo">
                                    </div>
                              </div>
</div>
<div class="row">
                              <button type="submit" class="btn btn-primary">Agregar</button>

                              </div>

                        </form>


                                    </div>
                              </div>


@endsection
