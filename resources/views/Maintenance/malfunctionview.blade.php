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
        <h1 class="maintenance">Storings aanvragen bekijken</h1>

        <ul>
        @foreach($malfunctions as $malfunction)

                <li><a class="malfunctionlabel" href="{{route('MalfunctionView.show', $malfunction ->id)}}"> {{$malfunction->name}}</a> </li>
        @endforeach
        </ul>
    </div>
</header>

<main>


</main>

</body>
</html>
<br>
<br>
<br>
<br>
<br>


@endsection
