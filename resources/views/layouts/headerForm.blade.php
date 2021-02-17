@section('header')


<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('main') }}">
                Pagina Principal
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Menu para el control de alumnos, acceso solo a secretaria y subdirector -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alumnos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/alumno/create') }}">Alta</a></li>
                            <li><a class="dropdown-item" href="{{ route('baja') }}">Baja</a></li>
                            <li><a class="dropdown-item" href="{{ route('editar') }}">Modificacion</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ url('/constancia') }}">Constancias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cuentas
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ url('/root') }}">Nueva cuenta</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- Menu para el control de cuentas, acceso solo a subdirector -->
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                    </li>

                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesion') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-3 header">
        <div class="col-3">
            <img src="{{ asset('images/sep-logo.png') }}" alt="Logo SEP">
        </div>
        <div class="col-6">
            <h2>Sistema Educativo Nacional</h2>
            <h2>Escuela Secundaria 5 de mayo</h2>
            <h3>Clave 30DPTV0160D</h3>
        </div>
        <div class="col-3">
            <img src="{{ asset('images/estado-logo.png') }}" alt="Logo Estado">
        </div>

        <hr>
  </div>  
</div>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#bdbdbd;">

  <a class="navbar-brand" href="#">Reportes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav" style="color:black;">

      <li class="nav-item">
        <a class="nav-link" href="{{ route('total.alumnos') }}">Total de Alumnos<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('total.alumnosgrupo')}}">Total de Alumnos Grupo</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Calificaciones(Materia-Grado)
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('reporte.lengua')}}">Lengua Materna(Español)</a>
          <a class="dropdown-item" href="{{ route('reporte.mate')}}">Matemáticas</a>
          <a class="dropdown-item" href="{{ route('reporte.ingles')}}">Lengua Extranjera (Inglés)</a>
          <a class="dropdown-item" href="{{route('reporte.ciencias')}}">Ciencias</a>
          <a class="dropdown-item" href="{{ route('reporte.historia')}}">Historia</a>
          <a class="dropdown-item" href="{{ route('reporte.geo')}}">Geografia</a>
          <a class="dropdown-item" href="{{route('reporte.civica')}}">Formación Cívica y Ética</a>
          <a class="dropdown-item" href="{{ route('reporte.tecno')}}">Tecnologia</a>
          <a class="dropdown-item" href="{{route('reporte.edu')}}">Educación Física</a>
          <a class="dropdown-item" href="{{ route('reporte.artes')}}">Artes</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Calificaciones(Materia-Grupo
        </a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('grupo.lengua')}}">Lengua Materna(Español)</a>
          <a class="dropdown-item" href="{{ route('grupo.mate')}}">Matemáticas</a>
          <a class="dropdown-item" href="{{ route('grupo.ingles')}}">Lengua Extranjera (Inglés)</a>
          <a class="dropdown-item" href="{{route('grupo.ciencias')}}">Ciencias</a>
          <a class="dropdown-item" href="{{ route('grupo.historia')}}">Historia</a>
          <a class="dropdown-item" href="{{ route('grupo.geo')}}">Geografia</a>
          <a class="dropdown-item" href="{{route('grupo.civica')}}">Formación Cívica y Ética</a>
          <a class="dropdown-item" href="{{ route('grupo.tecno')}}">Tecnologia</a>
          <a class="dropdown-item" href="{{route('grupo.edu')}}">Educación Física</a>
          <a class="dropdown-item" href="{{ route('grupo.artes')}}">Artes</a>
        </div>
      </li>

    </ul>
  </div>



</nav>

   
@endsection