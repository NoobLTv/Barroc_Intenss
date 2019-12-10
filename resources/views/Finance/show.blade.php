<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <title>Lavavelwebshop</title>
</head>
<body>

@extends('app')
@section('content')

    <div>
        <p class="infodetail">Dit is uw offertegegevens</p>
        <h1> Offernummer: {{ $quotations->id }} </h1>
        <p class="infopricelabel"> Salesmedewerker: {{ $quotations->sales_id }} </p>
        <p> klantnummer: {{ $quotations->customer_id}} </p>
        <p> Prijs: {{ $quotations->price}} </p>
        <p> Opmerkingen: {{ $quotations->remarks}} </p>
        <p> Is die goedgekeuren of niet(1 is goedgekeuren en 0 is afgekeuren.): {{ $quotations->approved}} </p>
    </div>

@endsection



</body>
</html>
