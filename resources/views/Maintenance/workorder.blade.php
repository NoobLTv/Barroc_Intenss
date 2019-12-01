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
        <label class="pricelabel">Maintenancemedewerker:</label>
    </div>
    <div>
        <select name="maintenance_id">
            @foreach(\App\User::select('name', 'id')->where('role_id', '3')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="pricelabel">lease_id:</label>
    </div>
    <div>
        <select name="lease_id">
            @foreach(\App\lease::select('id')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->id }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="pricelabel">Storingsaanvragen:</label>
    </div>
    <div>
        <select name="malfunction_id">
            @foreach(\App\Malfunction::select('id')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->id }}</option>
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
        @foreach(\App\supplies::select('name', 'id')->get() as $name)
            <ul class="listsupplies">
                <li class="supplieslist"><input class="checkboxsupplies" type="checkbox" name="supply_id" value="{{ $name->id }}"> <label class="supplieslabel"> {{ $name->name }} </label> </li>
                <input class="amountinput" type="number" name="amount">
            </ul>
        @endforeach
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
        <input class="priceinput" type="date" name="dateworkorders">
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
        <input name="workorderbutton" class="workorderinput" type="submit" value="Verzenden">
    </div>
</form>

@endsection

</body>
</html>


