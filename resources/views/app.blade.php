<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Barroc Intense') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        @include('cookieConsent::index')



        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="main-logo" src="{{ asset('storage/img/barroc_logo.png') }}" alt="logo_klein">
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
                        @auth()
                            @if(Auth::user()->role_id == 1)
                                <li><a class="nav-link" href="{{route('Supplies.index')}}">Onderdelen</a></li>


                            @elseif(Auth::user()->role_id == 2)
                                <li><a class="nav-link"href="{{route('Sales.index')}}">Sales</a></li>
                                <li><a class="nav-link"href="">Klantgegevens</a></li>
                                <li><a class="nav-link"href="{{route('register')}}">Registreer Klant</a></li>
                                <li><a class="nav-link"href="{{route('offer.create')}}">Prijsopgave aanmaken</a></li>


                            @elseif(Auth::user()->role_id == 3)
                                <li><a class="nav-link"href="{{route('Maintenance.index')}}">Maintenance</a></li>
                                <li><a class="nav-link"href="">Storingen bekijken</a></li>


                            @elseif(Auth::user()->role_id == 4)
                                <li><a class="nav-link"href="{{route('Finance.index')}}">Financien</a></li>


                            @elseif(Auth::user()->role_id == 5)
                                <li><a class="nav-link"href="{{route('Customer.index')}}">Klant</a></li>
                                <li><a class="nav-link"href="{{route('Malfunction.index')}}">Storing melden?</a></li>


                            @elseif(Auth::user()->role_id == 6)
                                <li><a class="nav-link"href="{{route('Supplies.index')}}">Onderdelen</a></li>
                                <li><a class="nav-link"href="{{route('Sales.index')}}">Sales</a></li>
                                <li><a class="nav-link"href="{{route('Maintenance.index')}}">Maintenance</a></li>
                                <li><a class="nav-link"href="{{route('Finance.index')}}">Financien</a></li>
                                <li><a class="nav-link"href="{{route('Customer.index')}}">Klant</a></li>
                                <li><a class="nav-link"href="{{route('register')}}">Registreer Medewerker</a></li>
                            @endif
                        @endauth



                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
    </div>
    @yield('content')
</body>
</html>
