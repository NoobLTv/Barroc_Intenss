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
            <h1 class="workordertext">Contract aanmaken</h1>
        </div>
    </header>

    <form class="offerform" action="{{ route('lease.store') }}" method="POST">
        @csrf
        <div>
            <label class="pricelabel">Klant:</label>
        </div>
        <div>
            <select name="customer_id">
                @foreach(\App\User::select('name', 'id')->where('role_id', '5')->get() as $name)
                    <option value="{{ $name->id }}">{{ $name->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="pricelabel">Product:</label>
        </div>
        <div>
            <select name="supply_id">
                @foreach(\App\Supplies::select('name', 'id')->get() as $name)
                    <option value="{{ $name->id }}">{{ $name->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="pricelabel">Contract type:(maandelijks of periodieke)</label>
        </div>
        <div>
            <select name="lease_type_id">
                @foreach(\App\LeaseType::select('leasetype', 'id')->get() as $name)
                    <option value="{{ $name->id }}">{{ $name->leasetype }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label class="pricelabel">Startdatum:</label>
        </div>
        <div>
            <input class="priceinput" type="date" name="startdate">
        </div>
        <div>
            <label class="pricelabel">einddatum:</label>
        </div>
        <div>
            <input class="priceinput" type="date" name="enddate">
        </div>
        <div>
            <label class="pricelabel">Aansluitkosten:</label>
        </div>
        <div>
            <input class="priceinput" type="number" step=".01" name="connectioncosts">
        </div>
        <div>
            <label class="pricelabel">Opzegtermijn:</label>
        </div>
        <div>
            <input class="priceinput" type="text" name="noticeperiod">
        </div>
        <div>
            <input name="leasebutton" class="workorderinput" type="submit" value="Verzenden">
        </div>
    </form>

@endsection

</body>
</html>

