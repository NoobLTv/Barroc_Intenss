<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barroc Intense</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>
<body class="offer">

@extends('app')
@section('content')

    <header>
        <div class="content">
            <div class="title m-b-md">
                <h1 class="errortext">De uitleg uw geen contract kan aanmaken voor deze klant.</h1>
            </div>
        </div>
    </header>

    <main class="leaseerrormain">
        <h2 class="infoerror">Deze klant moet nog bkr check krijgen voor zijn bedrijf of hij is niet goedgekeurd.</h2>
    </main>


@endsection

</body>
</html>
