@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

                  <div class="section text-left">
      <h2 class="title">Módulo Gestion de Inventario</h2>

<a class="btn btn-danger" href="{{ route('inventarios.create') }}">Nuevo Producto</a>

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
                                                <td><b>Nombre</b></td>
                                                <td><b>Descripción</b></td>
                                                <td><b>Cantidad</b></td>
                                                <td><b>Código</b></td>
                                                <td><b>Opción</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($inventarios as $inventario)
                                            <tr>
                                                <td>{{ $inventario -> nombre}}</td>
                                                <td>{{ $inventario -> descripcion}}</td>
                                               <td>{{ $inventario -> cantidad}}</td>
                                                <td>{{ $inventario -> codigo}}</td>


                                                <td class="td-actions">

                                                      <form  action="{{ route('inventarios.destroy',$inventario->id) }}" method="POST">

                                                                <a class="btn btn-info btn-simple btn-xs"  rel="tooltip" title="Ver"href="{{ route('inventarios.show',$inventario->id) }}">   <i class="fa fa-user"></i></a>

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
