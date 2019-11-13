@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
      <div class="container">
            <div class="row">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                              <form class="form" method="POST" action="{{ route('users.store') }}">
                                    @csrf

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <strong>Atención!</strong> Por favor Verifique que todos los campos que esten completados<br><br>
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <div class="header header-primary text-center">
                                          <h4>Registrarse</h4>

                                    </div>
                                    <p class="text-divider">Completa tus datos</p>
                                    <div class="content">


                                          <div class="input-group">
                                                <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                                </span>
                                     <input id="nombres" type="text" class="form-control @error('nombres') is-invalid @enderror" name="nombres" value="{{ old('nombres') }}" required autocomplete="nombres" autofocus placeholder="Nombres">
                                          </div>

                                          <div class="input-group">
                                                <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                                </span>
                                     <input id="apellidos" type="text" class="form-control @error('apellidos') is-invalid @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus placeholder="Apellidos">
                                          </div>

                                          <div class="input-group">
                                                <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                                </span>
                                     <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus placeholder="Numero">
                                          </div>

                                          <div class="input-group">
                                                <span class="input-group-addon">
                                                      <i class="material-icons">email</i>
                                                </span>
                                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                          </div>

                                          <div class="input-group">
                                                <span class="input-group-addon">
                                                      <i class="material-icons">lock_outline</i>
                                                </span>

                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Contraseña">
                                          </div>

                                          <div class="input-group">
                                                <span class="input-group-addon">
                                                      <i class="material-icons">lock_outline</i>
                                                </span>

                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar contraseña">
                                          </div>
                                    </div>
                                    <div class="footer text-center">


                                          <button type="submit" class="btn btn-simple btn-primary btn-lg">
                                              {{ __('Registrarse') }}
                                          </button>
                                    </div>



                               </div>
                            </div>
                              </form>
                        </div>
                  </div>
            </div>
      </div>



</div>

@endsection
