@extends('app')
@section('content')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>Barroc Intense</title>
    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
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
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<h1>Storing melden</h1>

<h2>Onze excuses dat u problemen ondervindt met ons product, onderstaand kan u uw contact informatie en klachtomschrijving invullen en wij zullen zo snel mogelijk de aanvraag verwerken.</h2>

    <div class="container">

        <h3 class="flex-center mt-5 black">CONTACT US</h3>

        <div class="form-group">
            <form method="post" action="{{ route('malfunction-submit') }}">
                @csrf
                <label class="black"for="name">Naam</label>
                <input class="form-control" type="text" name="name" required>

                <label class="black"for="email">E-mail</label>
                <input class="form-control" type="email" name="email" required>

                <label class="black" for="companyname">Bedrijfsnaam</label>
                <input class="form-control" type="text" name="description" required>

                <label class="black" for="">Klachtomschrijving</label>
                <textarea class="form-control" required></textarea>

                <input required class="btn btn-primary mt-3" required type="submit" value="Verstuur">

            </form>
        </div>

    </div>


</body>
</html>

@endsection
