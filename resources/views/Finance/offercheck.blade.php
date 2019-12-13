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
            <h2 class="bkrchecktext">Een prijsopgave omzetten naar een offerte</h2>
        </div>
    </div>
</header>

<form action="{{ route('offercheck.store') }}" method="POST">
    @csrf
    <div>
        <label class="offerchecklabel">Salesmedewerker:</label>
    </div>
    <div>
        <select class="salesselect" name="sales_id">
            @foreach(\App\User::select('name' ,'id')->where('role_id', '2')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="offerchecklabel">Klant:</label>
    </div>
    <div>
        <select class="salesselect" name="customer_id">
            @foreach(\App\User::select('name' ,'id')->where('role_id', '5')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="offerchecklabel">Prijsopgave:</label>
    </div>
    <div>
        <select class="offerselect" name="qutations">
            @foreach(\App\Quotation::select('price', 'id', 'remarks')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->id }}, € {{ $name->price }} en {{ $name->remarks }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="offerchecklabel">Prijs van de prijsopgave:</label>
    </div>
    <div>
        <select class="offerselect" name="price">
            @foreach(\App\Quotation::select('price', 'id')->get() as $name)
                <option value="{{ $name->price }}"> € {{ $name->price }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="offerchecklabel">Omschrijving van de prijsopgave:</label>
    </div>
    <div>
        <select class="remarkselect" name="remarks">
            @foreach(\App\Quotation::select('remarks', 'id')->get() as $name)
                <option value="{{ $name->id }}"> {{ $name->remarks }}</option>
            @endforeach
        </select>
    </div>
    <div class="approved">
        <div class="approvedbuttons">
            <label class="approvedlabel"><input class="checkboxapproved" type="checkbox" name="approvedcheckbox">Goedkeuren</label>
            <label class="disapprovedlabel"><input class="checkboxdisapproved" type="checkbox" name="disapprovedcheckbox">Afkeuren</label>
        </div>
    </div>
    <div>
        <input name="bkrbutton" class="bkrinput" type="submit" value="Verzenden">
    </div>
</form>
<br>
@endsection

</body>
</html>
