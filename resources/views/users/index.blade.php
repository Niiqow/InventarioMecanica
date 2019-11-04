@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')




      <div class="container">

                  <div class="section text-left">
      <h2 class="title">Módulo Gestion de Personas</h2>

  <a class="btn btn-danger" href="{{ route('users.create') }}">Nueva Persona</a>

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
                                                <td><b>Correo</b></td>
                                                <td><b>Contraseña</b></td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($users as $user)
                                            <tr>
                                                 <td>{{ $user->name }}</td>
                                                 <td>{{ $user->email }}</td>
                                                 <td>{{ $user->password }}</td>


                                                <td class="td-actions">

                                                      <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                                                <a class="btn btn-info btn-simple btn-xs"  rel="tooltip" title="Ver"href="{{ route('users.show',$user->id) }}">   <i class="fa fa-user"></i></a>

                                                                <a class="btn btn-success btn-simple btn-xs"  rel="tooltip" title="Editar" href="{{ route('users.edit',$user->id) }}"> <i class="fa fa-edit"></i></a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" > <i class="fa fa-times"></i></button>
                                                            </form>



                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
 {!! $users->links() !!}
                              </div>

                        </div>

                  </div>

                              </div>






@endsection
