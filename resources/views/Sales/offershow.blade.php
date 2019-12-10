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
        <p class="infodetail">Dit is de detail page</p>
        <h1> Quotations_id: {{ $quotations->id }} </h1>
        <p class="infopricelabel"> Sales_id: {{ $quotations->sales_id }} </p>
        <p> customer_id: {{ $quotations->customer_id}} </p>
        <p> price: {{ $quotations->price}} </p>
        <p> remarks: {{ $quotations->remarks}} </p>
        <p> must_still_approve: {{ $quotations->must_still_approve}} </p>
        <p> approved: {{ $quotations->approved}} </p>
    </div>

@endsection

</body>
</html>
