@extends('inventarios.layout')


@section('content')



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inventario</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('inventarios.create') }}">Nuevo Producto</a>
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

            <th>Nombre</th>
            <th>Descripcion</th>
            <th>cantidad</th>
            <th>codigo</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($inventarios as $inventario)
        <tr>
            <td>{{ $inventario->nombre }}</td>
            <td>{{ $inventario->descripcion }}</td>
            <td>{{ $inventario->cantidad }}</td>
            <td>{{ $inventario->codigo }}</td>
            <td>
                <form action="{{ route('inventarios.destroy',$inventario->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('inventarios.show',$inventario->id) }}">Ver</a>

                    <a class="btn btn-primary" href="{{ route('inventarios.edit',$inventario->id) }}">Editar</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $inventarios->links() !!}

@endsection
