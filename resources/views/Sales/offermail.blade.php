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
        <h2 class="offerlabel text-center">Offertes mailen naar de klanten</h2>

        <form class="offerform" action="{{ route('offermail.store') }}" method="POST">
            @csrf
            <div>
                <label class="saleslabel"> De offertes die goedgekeurd zijn.</label>
            </div>
            <div>
                <select name="quotation_id">
                    @foreach(\App\Quotation::select('id')->where('must_still_approve','1')->where('approved', '1')->get() as $quotation)
                        <option value="{{ $quotation->id }}"> {{ $quotation->id }} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <input class="offerinput" type="submit" value="Verzenden">
            </div>
        </form>
        <form class="offerform" action="{{ route('offermail.store') }}" method="POST">
            @csrf
            <div>
                <label class="saleslabel"> De offertes die afgekeurd zijn.</label>
            </div>
            <div>
                <select name="quotation_id">
                    @foreach(\App\Quotation::select('id')->where('must_still_approve','1')->where('approved', '0')->get() as $quotation)
                        <option value="{{ $quotation->id }}"> {{ $quotation->id }} </option>
                    @endforeach
                </select>
            </div>
            <div>
                <input class="offerinput" type="submit" value="Verzenden">
            </div>
        </form>
    </div>

@endsection

</body>
</html>
