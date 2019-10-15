
@extends('layouts.app')



@section('content')

<div class="container">



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-danger" href="{{ route('personas.create') }}">Nueva Persona</a>
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

            <th>RUT</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Número</th>
            <th>Rol</th>
            <th width="250px">Acción</th>
        </tr>
        @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->rut }}</td>
            <td>{{ $persona->nombre }}</td>
            <td>{{ $persona->correo }}</td>
            <td>{{ $persona->numero }}</td>
            <td>{{ $persona->rol }}</td>
            <td>
                <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('personas.show',$persona->id) }}">Ver</a>

                    <a class="btn btn-primary" href="{{ route('personas.edit',$persona->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $personas->links() !!}
</div>
@endsection
