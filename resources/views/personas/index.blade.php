@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')


      <div class="container">

            <div class="section text-left">
      <h2 class="title text-center">Módulo Gestión de Personas</h2>
<a class="btn btn-primary" href="{{ route('personas.create') }}">Nueva Persona</a>

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
                                                <td><b>RUT</b></td>
                                                <td><b>Nombre</b></td>
                                                <td><b>Correo</b></td>
                                                <td><b>Número</b></td>
                                                <td><b>Rol</b></td>
                                                <td><b>Acción</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($personas as $persona)
                                            <tr>
                                                 <td>{{ $persona->rut }}</td>
                                                 <td>{{ $persona->nombre }}</td>
                                                 <td>{{ $persona->correo }}</td>
                                                 <td>{{ $persona->numero }}</td>
                                                 <td>{{ $persona->rol }}</td>


                                                <td class="td-actions">

                                                      <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">

                                                                <a class="btn btn-info btn-simple btn-xs"  rel="tooltip" title="Ver"href="{{ route('personas.show',$persona->id) }}">   <i class="fa fa-user"></i></a>

                                                                <a class="btn btn-success btn-simple btn-xs"  rel="tooltip" title="Editar" href="{{ route('personas.edit',$persona->id) }}"> <i class="fa fa-edit"></i></a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" > <i class="fa fa-times" onclick="return confirm('¿Estas seguro de ELIMINAR?')"></></i></button>
                                                            </form>



                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
 {!! $personas->links() !!}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
