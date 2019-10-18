
@extends('layouts.app')



@section('content')

<div class="container">



    <div class="row">
        <div class="col-lg-12 margin-tb text-right">
            <div class="pull-left">
            </div>
            <div class="pull-right mb-4">
                <a class="btn btn-danger" href="{{ route('inventarios.create') }}">Nuevo Producto</a>
            </div>

        </div>

        <div class="col-5">
                      <input type="text" placeholder="Buscar producto" class="form-control" name="query">
                      <button type="submit" class="btn btn-danger mt-3">Buscar</button>

        </div>

</div>




    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-4">
        <tr>

            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Cantidad</th>
            <th>Código</th>
            <th width="250px">Acción</th>
        </tr>
        @foreach ($inventarios as $inventario)
        <tr>
            <td>{{ $inventario->nombre }}</td>
            <td>{{ $inventario->descripcion }}</td>
            <td>{{ $inventario->cantidad }}</td>
            <td>{{ $inventario->codigo }}</td>
            <td>
                <form action="{{ route('inventarios.destroy',$inventario->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('inventarios.show',$inventario->id) }}">Ver</a>

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
</div>
@endsection

@section('scripts')
<script src="{{ asset('/js/typeahead.bundle.min.js') }}"></script>
@endsection
