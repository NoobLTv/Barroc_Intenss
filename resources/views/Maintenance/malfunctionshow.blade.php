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

    </header>

        <p class="malfunctionlabelshowzero">Naam: {{$malfunctions->name}}</p>
        <p class="malfunctionlabelshowfirst">Bedrijf: {{$malfunctions->company_name}}</p>
        <p class="malfunctionlabelshowtwo">Beschrijving: {{$malfunctions->description}}</p>


    <main>


    </main>

</body>
</html>




@endsection
