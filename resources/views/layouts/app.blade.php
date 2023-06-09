<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ITSMT') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{'SS & RP'}}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">


                    <!-- Nav Item Dropdown Institución-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Institución</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('schedules.index') }}">Horario</a></li>
                                <li><a class="dropdown-item" href="{{ route('campuses.index') }}">Campus</a></li>
                                <li><a class="dropdown-item" href="{{ route('departments.index') }}">Departamento  </a></li>
                            </ul>
                    </li>

                     <!-- Nav Item Dropdown Usuarios-->
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Miembros</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('users.index') }}">Usuarios</a></li>
                                <li><a class="dropdown-item" href="{{ route('personal-informations.index') }}">Informacion personal</a></li>
                            </ul>
                    </li>


                    <!-- Nav Item Dropdown Actores-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Actores</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="">Alumnos</a></li>
                                <li><a class="dropdown-item" href="">Docentes</a></li>
                                <li><a class="dropdown-item" href="{{ route('administrators.index') }}">Administrativos</a></li>
                            </ul>
                    </li>


                    <!-- Nav Item Dropdown Oferta educativa-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Oferta Educativa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('modalities.index') }}">Modalidad</a></li>
                                <li><a class="dropdown-item" href="{{ route('careers.index') }}">Ingenierias</a></li>
                                <li><a class="dropdown-item" href="{{ route('semesters.index') }}">Semestres</a></li>
                            </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('questions.index') }}">Preguntas & Respuestas</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('documents.index') }}">Documentos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('periods.index') }}">Periodos</a>
                    </li>

                    
                    <!-- Nav Item Dropdown Oferta educativa-->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estudiante</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('vistasocial.index') }}">Servicio Social</a></li> 
                                <li><a class="dropdown-item" href="{{ route('vistarecidencia.index') }}">Residencias Profesionales</a></li>
                            </ul>
                    </li>
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
