@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Editar Usuario</h2>
            </div>
            <div class="pull-right mb-4 mt-4">
                <a class="btn btn-primary" href="{{ route('users.index') }}">Volver</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Atención!</strong> Verifique que esten todos los campos <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombres:</strong>
                    <input type="text" name="nombres" value="{{ $user->nombres }}" class="form-control" placeholder="Nombres">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellidos:</strong>
                     <input type="text" name="apellidos" value="{{ $user->apellidos }}" class="form-control" placeholder="Apellidos">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Numero de contacto:</strong>
                     <input type="text" name="numero" value="{{ $user->numero }}" class="form-control" placeholder="Número">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Correo:</strong>

                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus placeholder="Email">

                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </div>

    </form>

    </div>
@endsection
