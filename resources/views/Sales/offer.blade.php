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

<div class="container footer-fixes">
    <h2 class="offerlabel">Prijsopgave aanmaken</h2>
        <form class="offerform" action="{{ route('offer.store') }}" method="POST">
        @csrf
            <div>
            <label class="saleslabel">Salesmedewerker:</label>
            </div>

            <div>
                <select name="sales_id">
                    @foreach(\App\User::select('name' ,'id')->where('role_id', '2')->get() as $name)
                        <option value="{{ $name->id }}">{{ $name->name }}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <label class="customerlabel">Klant:</label>
            </div>

            <div>
                <select name="customer_id">
                    @foreach(\App\User::select('name', 'id')->where('role_id', '5')->get() as $name)
                        <option value="{{ $name->id }}">{{ $name->name }}</option>
                    @endforeach
                </select>
            </div>

                <label class="pricelabel">Prijs:</label>
                <input class="priceinput form-control" type="text" name="price">


                <label class="remarkslabel">Opmerkingen:</label>
                <textarea class=" form-control" name="remarks"></textarea>

            <div>
                <input class="offerinput btn btn-primary mt-3" type="submit" value="Verzenden">
            </div>
    </form>
</div>

@endsection

</body>
</html>
