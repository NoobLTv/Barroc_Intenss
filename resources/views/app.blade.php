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

{{--            Supplies                  --}}
                            @if(Auth::user()->role_id == 1)
                                <li><a class="nav-link" href="{{route('Supplies.index')}}">Onderdelen</a></li>


{{--            Sales                    --}}
                            @elseif(Auth::user()->role_id == 2)
                                <li><a class="nav-link"href="{{route('register')}}">Registreer Klant</a></li>
                                <li><a class="nav-link"href="{{route('offer.create')}}">Prijsopgave aanmaken</a></li>
                                <li><a class="nav-link"href="{{route('offermail.create')}}">Offerte mailen naar de klant</a></li>

{{--            Maintenance                    --}}
                            @elseif(Auth::user()->role_id == 3)
                                <li><a class="nav-link" href="{{ route('workorder.create') }}">Werkbonnen invullen</a></li>
                                <li><a class="nav-link"href="{{route('MalfunctionView.index')}}">Storingen bekijken</a></li>
                                <li><a class="nav-link"href="{{route('workordermail.create')}}">Werkbonnen mailen naar de Hoofdmaintenance</a></li>

{{--            Finance                    --}}
                            @elseif(Auth::user()->role_id == 4)
                                <li><a class="nav-link" href="{{ route('offercheck.create') }}">Prijsopgave omzetten naar offerte</a></li>
                                <li><a class="nav-link" href="{{ route ('bkrcheck.create') }}">BKR Pagina</a></li>
                                <li><a class="nav-link" href="{{ route ('lease.create') }}">Contract aanmaken</a></li>
                                <li><a class="nav-link"href="{{route('lease.index')}}">Contract bekijken</a></li>
                                <li><a class="nav-link" href="https://www.bkr.nl/">BKR Documentatie</a></li>

{{--            CEO                    --}}
                            @elseif(Auth::user()->role_id == 5)
                                <li><a class="nav-link"href="{{route('Customerdetail.index')}}">Klantgegevens</a></li>
                                <li><a class="nav-link"href="{{route('Malfunction.index')}}">Storing melden?</a></li>


                            @elseif(Auth::user()->role_id == 6)
                                <li><a class="nav-link"href="">Inkoop aanvragen</a></li>
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

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6 class="white mt-2">Wie wij zijn</h6>
                    <p class="text-justify white">BarrocIntens.com <i>CODE WANTS TO BE SIMPLE </i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores dicta fuga laboriosam non recusandae reprehenderit. Animi enim eveniet facere iste nemo odio omnis optio perferendis reiciendis repellat reprehenderit, similique?.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6 class="white mt-2">Pagina's</h6>
                    <ul class="footer-links">
                        <li><a class="footerlink" href="#">Home</a></li>
                        <li><a class="footerlink" href="#">Sales</a></li>
                        <li><a class="footerlink" href="#">Maintenance</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6 class="white mt-2">Meer</h6>
                    <ul class="footer-links">
                        <li><a class="footerlink" href="#">Over ons</a></li>
                        <li><a class="footerlink" href="#">Contact</a></li>
                        <li><a class="footerlink" href="#">Bijdragen</a></li>
                        <li><a class="footerlink" href="#">Extra Info</a></li>
                        <li><a class="footerlink" href="#">Home Pagina</a></li>
                    </ul>
                </div>
            </div>
            <hr class="white-line">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text white">Copyright &copy; 2019 All Rights Reserved by
                        <a href="#">Barroc Intense</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
