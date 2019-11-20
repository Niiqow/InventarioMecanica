@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                              <h2 class="title">Módulo Gestion de Personas</h2>

                                          @if ($message = Session::get('success'))
                                              <div class="alert alert-success">
                                                  <p>{{ $message }}</p>
                                              </div>
                                          @endif

                                          </div>


<a class="btn btn-primary" href="{{ route('inventarios.create') }}">Nuevo Producto</a>


                        <div class="text-center">
<form class="form-inline" method="get" action="{{('/search')}}">
      <input type="text" placeholder="Buscar Producto" class="form-control" name="query">
      <button class="btn btn-primary btn-just-icon" type="submit">
            <i class="material-icons">search</i>
      </button>
</form>

</div>

<div class="text-center">
                        <div class="team">
                              <div class="row">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                 <td><b>Código de inventario</b></td>
                                                  <td><b>Código Blanco</b></td>
                                                <td><b>Equipo</b></td>
                                                <td><b>Especificación Técnica Detallada</b></td>
                                                <td><b>Cantidad Total existente en Sede</b></td>
                                                <td><b>Acción</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($inventarios as $inventario)
                                            <tr>
                                                <td>{{ $inventario -> codigo_inventario}}</td>
                                                <td>{{ $inventario -> codigo_blanco}}</td>
                                               <td>{{ $inventario -> equipo}}</td>
                                                <td>{{ $inventario -> especificacion_detallada}}</td>
                                                      <td>{{ $inventario -> cantidad_sede}}</td>

                                                <td class="td-actions">

                                                      <form  action="{{ route('inventarios.destroy',$inventario->id) }}" method="POST">

                                                                <a class="btn btn-info btn-simple btn-xs"  rel="tooltip" title="Ver"href="{{ route('inventarios.show',$inventario->id) }}"> <i class="material-icons">visibility</i></a>

                                                                <a class="btn btn-success btn-simple btn-xs"  rel="tooltip" title="Editar" href="{{ route('inventarios.edit',$inventario->id) }}"> <i class="fa fa-edit"></i></a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" > <i class="fa fa-times"></i></button>
                                                            </form>



                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $inventarios -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
