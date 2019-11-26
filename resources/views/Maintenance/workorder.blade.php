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
        <h1 class="workordertext">Werkbonnen aanmaken</h1>
    </div>
</header>

<form class="offerform" action="{{ route('workorder.store') }}" method="POST">
    @csrf
    <div>
        <label class="pricelabel">Storingsaanvragen:</label>
    </div>
    <div>
        <select name="malfunction">
            @foreach(\App\User::select('name', 'id')->where('role_id', '5')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="pricelabel">Monteur:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="mechanic">
    </div>
    <div>
        <label class="productslabel">Producten:</label>
    </div>
    <div>
        <select name="products">
            @foreach(\App\User::select('name', 'id')->where('role_id', '5')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->name }} </option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="amountlabel">Aantal:</label>
    </div>
    <div>
        <input class="amountinput" type="text" name="amount">
    </div>
    <div>
        <input name="plusbutton" class="plusbutton" type="submit" value="+">
    </div>
    <div>
        <label class="pricelabel">Afspraak gemaakt met:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="agreements">
    </div>
    <div>
        <label class="pricelabel">Datum:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="dateworkorders">
    </div>
    <div>
        <label class="pricelabel">Storingadres:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="failureaddress">
    </div>
    <div>
        <label class="remarkslabel">Opmerkingen:</label>
    </div>
    <div>
        <textarea class="remarkstextarea" name="remarksworkorders"></textarea>
    </div>
    <div>
        <input name="workorders" class="workorderinput" type="submit" value="Verzenden">
    </div>
</form>

@endsection

</body>
</html>


