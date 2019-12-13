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
            <h2 class="bkrchecktext">De bkr pagina</h2>
        </div>
    </div>
</header>

<form action="{{ route('bkrcheck.store') }}" method="POST">
    @csrf
    <div>
        <label class="customerbkrchecklabel">Klant:</label>
    </div>
    <div>
        <select class="customerselect" name="user_id">
            @foreach(\App\User::select('name', 'id')->where('role_id', '5')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="offerchecklabel">Bedrijven:</label>
    </div>
    <div>
        <select class="companynameselect" name="companyname">
            @foreach(\App\CustomerDetail::select('companyname', 'id')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->companyname }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="offerchecklabel">De bedrijven goedkeuren of afkeuren:</label>
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
    <br>
@endsection

</body>
</html>
