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

</head>
<body>

<header>
    <div>
        <h1 class="maintenance">Maintenance</h1>
    </div>
</header>

<main>
    <a class="offercheckpage" href="{{ route('workorder.create') }}">Werkbonnen invullen</a>
<<<<<<< HEAD
    <a class="offercheckpage" href="{{ route('scheduleafault.create') }}">Storingsaanvragen inplannen</a>
    <a class="offercheckpage" href="{{ route('scheduleafaultshow.index') }}">Ingeplande storingsaanvragen bekijken</a>
=======
    <a class="offercheckpage" href="{{ route('Maintenance.show') }}">Storing aanvragen bekijken</a>
>>>>>>> master
</main>

</body>
</html>

@endsection
