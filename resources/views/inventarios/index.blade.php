
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 5.7 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('prestaciones.create') }}"> Create New Product</a>
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
            <th>No</th>
            <th>Rut</th>
            <th>Nombre</th>
            <th>Correo</th>
                  <th>Numero</th>
                        <th>Rol</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($prestaciones as $prestacion)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $prestacion->rut }}</td>
            <td>{{ $prestacion->nombre }}</td>
                  <td>{{ $prestacion->correo }}</td>
                        <td>{{ $prestacion->numero }}</td>
                                    <td>{{ $prestacion->rol }}</td>
            <td>
                <form action="{{ route('prestaciones.destroy',$prestacion->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('prestaciones.show',$prestacion->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('prestaciones.edit',$prestacion->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $prestaciones->links() !!}

@endsection
