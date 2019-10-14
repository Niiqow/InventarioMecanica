
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

          <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000000f;
            "Nunito", sans-serif;
                font-weight: 400;
                height: 1.6;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #000000;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
             margin-top: 200px;
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>



          <div id="app">
             <nav class="navbar navbar-expand-lg navbar-light bg-light">

                 <div class="container">
                     <a class="navbar-brand" href="{{ url('/') }}">
                       Sistema de Inventario
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                         <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <!-- Left Side Of Navbar -->
                         <ul class="navbar-nav mr-auto">

                         </ul>

                         <!-- Right Side Of Navbar -->
                         <ul class="navbar-nav ml-auto">
                             <!-- Authentication Links -->
                             @guest
                                 <li class="nav-item">
                                     <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                 </li>
                                 @if (Route::has('register'))
                                     <li class="nav-item">
                                         <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                     </li>
                                 @endif
                             @else
                                 <li class="nav-item dropdown">
                                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                         {{ Auth::user()->name }} <span class="caret"></span>
                                     </a>

                                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                             {{ __('Cerrar sesión') }}
                                         </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                         </form>
                                     </div>
                                 </li>
                             @endguest
                         </ul>
                     </div>
                 </div>
             </nav>

             <main class="py-4">
                 @yield('content')
             </main>


            <div class="content">
                <div class="title m-b-md">
                      Sistema de inventario
                </div>

                <div class="links">
                    <a href="inventarios">Ingresar a Módulo de Inventario</a>

                </div>
<br />
                <div class="links">
                    <a href="prestaciones">Ingresar a Módulo de Prestaciones</a>

                </div>
            </div>
        </div>
    </body>
</html>
