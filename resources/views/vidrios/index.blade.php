@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                                    <div class="section text-left">
                                          <div class="text-center">
                                                <a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>
                                          </div>

                              <h2 class="title text-center">Módulo Gestión Inventario de Material de Vidrio</h2>

<a class="btn btn-primary" href="{{ route('vidrios.create') }}">Nuevo Producto</a>


                                          @if ($message = Session::get('success'))
                                              <div class="alert alert-success">
                                                  <p>{{ $message }}</p>
                                              </div>
                                          @endif

                                          </div>




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
                                                 <td><b>Material de Vidrio</b></td>
                                                  <td><b>Especificación Técnica Detallada</b></td>
                                                <td><b>Lugar de Almacenamiento</b></td>
                                                <td><b>Cantidad Total Existente en el Laboratorio / Taller</b></td>
                                                <td><b>Observaciones</b></td>
                                                <td><b>Acción</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($vidrios as $vidrio)
                                            <tr>
                                                <td>{{ $vidrio -> material}}</td>
                                                <td>{{ $vidrio -> especificacion}}</td>
                                               <td>{{ $vidrio -> lugar_almacenamiento}}</td>
                                                <td>{{ $vidrio -> cantidad_total}}</td>
                                                <td>{{ $vidrio -> observaciones}}</td>

                                                <td class="td-actions">

                                                      <form  action="{{ route('vidrios.destroy',$vidrio->id) }}" method="POST">

                                                                <a class="btn btn-info btn-simple btn-xs"  rel="tooltip" title="Ver"href="{{ route('vidrios.show',$vidrio->id) }}"> <i class="material-icons">visibility</i></a>

                                                                <a class="btn btn-success btn-simple btn-xs"  rel="tooltip" title="Editar" href="{{ route('vidrios.edit',$vidrio->id) }}"> <i class="fa fa-edit"></i></a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" onclick="return confirm('¿Estas seguro de ELIMINAR este material de vidrio?')"> <i class="fa fa-times"></i></button>
                                                            </form>



                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
{{ $vidrios -> links() }}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
