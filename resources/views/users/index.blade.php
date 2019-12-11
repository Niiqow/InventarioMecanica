@extends('layouts.app')

@section('title', 'Sistema de Inventario')

@section('body-class', 'inventario-page')

@section('content')




      <div class="container">

            <div class="section text-left">
      <h2 class="title text-center">Módulo Gestión de usuarios</h2>
<a class="btn btn-primary" href="{{ route('register') }}">Nuevo Usuario</a>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        </div>

                  

<div class="text-center">
                        <div class="team">
                              <div class="row">





                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td><b>Nombres</b></td>
                                                <td><b>Apellidos</b></td>
                                                <td><b>Número de contacto</b></td>
                                                <td><b>Correo</b></td>
                                                <td><b>Acción</b></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                              @foreach ($users as $user)
                                            <tr>
                                                 <td>{{ $user->nombres }}</td>
                                                 <td>{{ $user->apellidos }}</td>
                                                 <td>{{ $user->numero }}</td>
                                                 <td>{{ $user->email }}</td>


                                                <td class="td-actions">

                                                      <form action="{{ route('users.destroy',$user->id) }}" method="POST">


                                                                <a class="btn btn-success btn-simple btn-xs"  rel="tooltip" title="Editar" href="{{ route('users.edit',$user->id) }}"> <i class="fa fa-edit"></i></a>

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs" > <i class="fa fa-times" onclick="return confirm('¿Estas seguro de ELIMINAR?')"></i></button>
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
