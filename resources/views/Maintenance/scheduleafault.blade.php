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
<body class="workorder">

@extends('app')
@section('content')

    <header>
        <div>
            <h1 class="workordertext">Storingsaanvragen inplannen</h1>
        </div>
    </header>

    <form class="offerform" action="{{ route('scheduleafault.store') }}" method="POST">
        @csrf
        <div>
            <label class="pricelabel">Storingsaanvragen:</label>
        </div>
        <div>
            <select name="malfunction">
                @foreach(\App\Malfunction::select('name', 'id')->where('role_id', '5')->get() as $name)
                    <option value="{{ $name->id }}">{{ $name->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="pricelabel">Dag:</label>
        </div>
        <div>
            <input class="priceinput" type="text" name="day">
        </div>
        <div>
            <label class="productslabel">Maand:</label>
        </div>
        <div>
            <input class="amountinput" type="text" name="month">
        </div>
        <div>
            <label class="pricelabel">Jaar:</label>
        </div>
        <div>
            <input class="priceinput" type="text" name="year">
        </div>
        <div>
            <input name="workorders" class="workorderinput" type="submit" value="Verzenden">
        </div>
    </form>

@endsection

</body>
</html>


