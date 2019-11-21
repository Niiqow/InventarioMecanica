@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


<div class="container">

                              <div class="section text-left">
<div class="text-center">
      <a class="btn btn-primary" href="{{ route('inventarios.index') }}">Volver</a>
</div>
                        <h2 class="title text-center">Módulo Gestión Inventario de Insumos</h2>

                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                    @endif

                                    </div>

  <a class="btn btn-primary" href="{{ route('insumos.create') }}">Nuevo Insumo</a>


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
                                                <td><b>Insumo</b></td>
                                                <td><b>Especificación Técnica Detallada</b></td>
                                                <td><b>Lugar de Almacenamiento</b></td>
                                                <td><b>Cantidad Total en Laboratorio / Taller</b></td>
                                                <td><b>Observaciones</b></td>
                                                <td><b>Acción</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($insumos as $insumo)
                                            <tr>
                                                 <td>{{ $insumo->insumo }}</td>
                                                 <td>{{ $insumo->especificacion_tecnica }}</td>
                                                 <td>{{ $insumo->lugar_almacenamiento }}</td>
                                                 <td>{{ $insumo->cantidad_total }}</td>
                                                 <td>{{ $insumo->observaciones }}</td>


                                                <td class="td-actions">

                                                      <form action="{{ route('insumos.destroy',$insumo->id) }}" method="POST">

                                                                <a class="btn btn-info btn-simple btn-xs"  rel="tooltip" title="Ver"href="{{ route('insumos.show',$insumo->id) }}">   <i class="fa fa-user"></i></a>

                                                                <a class="btn btn-success btn-simple btn-xs"  rel="tooltip" title="Editar" href="{{ route('insumos.edit',$insumo->id) }}"> <i class="fa fa-edit"></i></a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" > <i class="fa fa-times"></i></button>
                                                            </form>



                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
 {!! $insumos->links() !!}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
