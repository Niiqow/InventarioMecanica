@extends('layouts.app')
@section('body-class', 'signup-page')
@section('content')
<div class="header header-filter" style="background-image: url(' {{ asset('img/city.jpg') }} '); background-size: cover; background-position: top center;">
      <div class="container">
            <div class="row">
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                              <form class="form" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="header header-primary text-center">
                                          <h4>Registrarse</h4>

                                    </div>
                                    <p class="text-divider">Completa tus datos</p>
                                    <div class="content">


                                          <div class="input-group">
                                                <span class="input-group-addon">
                                                      <i class="material-icons">person</i>
                                                </span>
                                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
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
