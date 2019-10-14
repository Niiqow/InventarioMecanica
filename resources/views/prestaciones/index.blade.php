@extends('layouts.app')



@section('content')




<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-danger" href="{{ route('prestaciones.create') }}">Nueva Persona</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>

            <th>Rut</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Rol</th>
            <th width="250px">Acción</th>
        </tr>
        @foreach ($prestaciones as $prestacion)
        <tr>
            <td>{{ $prestacion->rut }}</td>
            <td>{{ $prestacion->nombre }}</td>
            <td>{{ $prestacion->correo }}</td>
            <td>{{ $prestacion->rol }}</td>
            <td>
                <form action="{{ route('prestaciones.destroy',$prestacion->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('prestaciones.show',$prestacion->id) }}">Ver</a>

                    <a class="btn btn-primary" href="{{ route('prestaciones.edit',$prestacion->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $prestaciones->links() !!}
</div>
@endsection
