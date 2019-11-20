@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container ">

                  <div class="section text-center">
                        <h2 class="title">Registrar nuevo producto</h2>
<a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>





                        <form action="{{ route('inventarios.store') }}" method="POST">
                              @csrf

                              <div class="row">

                  <div class="col-sm-4">
                        <div class="form-group label-floating">
                  <label class="control-label">Código Inventario:</label>
                  <input type="text" class="form-control" name="codigo_inventario">
                              </div>
                        </div>
                              </div>
<div class="row">

                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Código Blanco:</label>
                                          <input type="text" class="form-control" name="codigo_blanco">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Equipo:</label>
                                          <input type="text" class="form-control" name="equipo">
                                    </div>
                              </div>
</div>
<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Especificación Técnica Detallada:</label>
                                          <input type="text" class="form-control" name="especificacion_detallada">
                                    </div>
                              </div>
</div>


<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Carrera(s) que Utiliza el Equipo:</label>
                                          <input type="text" class="form-control" name="nombre_carrera">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Código(s)-Nombre(s) de Asignatura(s):</label>
                                          <input type="text" class="form-control" name="asignatura">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Lugar de Almacenamiento:</label>
                                          <input type="text" class="form-control" name="lugar_almacenamiento">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Cantidad Total Existente en la Sede:</label>
                                          <input type="text" class="form-control" name="cantidad_sede">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Valor Unitario:</label>
                                          <input type="text" class="form-control" name="valor_unitario">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Valor Total:</label>
                                          <input type="text" class="form-control" name="valor_total">
                                    </div>
                              </div>
</div>

<div class="row">
                              <div class="col-sm-4">
                                    <div class="form-group label-floating">
                                          <label class="control-label">Observaciones:</label>
                                          <input type="text" class="form-control" name="observaciones">
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
