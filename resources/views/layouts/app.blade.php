<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

      <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="/web_resources/themes/portal/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>INACAP</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->

	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('/css/material-kit.css') }}" rel="stylesheet" />
      <link rel="shortcut icon" href="{{{ asset('img/favicon.jpg') }}}"> 
</head>




<body>

      <body class="@yield('body-class')">
      	<nav class="navbar navbar-transparent navbar-absolute">
      		<div class="container">
      			<!-- Brand and toggle get grouped for better mobile display -->
      			<div class="navbar-header">
      				<a class="navbar-brand" href="{{ url('/inventarios') }}">
      					<img class="img" src="../../img/inacap_logoblanco.png" style="height: 50px">
      				</a>
      			</div>

      			<div class="collapse navbar-collapse" id="navigation-example">
      				<ul class="nav navbar-nav navbar-right">
                                    @guest
                                        <li class="nav-item">
                                           <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                                        </li>
                                 
                                    @else

      						 	<li class="dropdown">

                                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                        Bienvenido!   {{ Auth::user()->nombres }}  {{ Auth::user()->apellidos }}<span class="caret"></span>
                                                                           </a>

      						         			<ul class="dropdown-menu">

      		@if(auth()->user()->admin)
      		 <li><a href="{{ url('/personas') }}">Gestionar Personas</a></li>
      		<li><a href="{{ url('/inventarios') }}">Gestionar Inventario</a></li>
                  <li><a href="{{ url('/users') }}">Gestionar Usuarios</a></li>
                  <li><a href="{{ url('/plan_estudio') }}">Estándar de Equipamiento</a></li>

                  @else

                  <li><a href="{{ url('/inventarioVista') }}">Inventario de Equipos</a></li>
                  <li><a href="{{ url('/insumosVista') }}">Inventario de Insumos</a></li>
      	@endif
      	  <li class="divider"></li>
       <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar sesión') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                  </form>
      												    </li>

      												    </ul>

      			            		</li>
      			        		</ul>
      			        	</div>
                                        </li>
                                    @endguest

      				</ul>
      			</div>
      		</div>
      	</nav>


        <div class="wrapper">

                    @yield('content')

              </div>

              <footer class="footer">
                 <div class="container">
                     <nav class="pull-left">
                          <ul>
                                      <li>
                                            <a class="navbar-brand" href="{{ url('/') }}">
                                                  <img class="img" src="../../img/logo-negro.png" style="height: 80px">
                                            </a>
                                      </li>

                          </ul>
                     </nav>

                 </div>
              </footer>
</body>


<script src="{{ asset('js/jquery.min.js ' ) }}" type="text/javascript"></script>
      <script src="{{ asset('js/bootstrap.min.js ' ) }}" type="text/javascript"></script>
      <script src="{{ asset('js/material.min.js ') }}"></script>

       <!-- Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="{{ asset('js/nouislider.min.js ' ) }}" type="text/javascript"></script>

      <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
      <script src="{{ asset('js/bootstrap-datepicker.js ' ) }}" type="text/javascript"></script>

      <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
      <script src="{{ asset('js/material-kit.js ' ) }}" type="text/javascript"></script>



</html>
