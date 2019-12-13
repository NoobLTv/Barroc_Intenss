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
        <div>
            <h2 class="offerlabel">Offertes mailen naar de klanten</h2>
        </div>
    </header>

    <form class="offerform" action="{{ route('offermail.store') }}" method="POST">
        @csrf
        <div>
            <label class="saleslabel">Offertes:</label>
        </div>
        <div>
            <select name="quotation_id">
                @foreach(\App\Quotation::select('id')->get() as $name)
                    <option value="{{ $name->id }}">{{ $name->id }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <input class="offerinput" type="submit" value="Verzenden">
        </div>
    </form>

@endsection

</body>
</html>
