@extends('app')
@section('content')
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
<body>
<h1 class="headtextlease">Uw Leasecontractengegevens</h1>
{{--<p> Name: {{ $leases->id}} </p>--}}

<p class="leaseslabelcustomer"> Contractnummer: {{$leases->id}}</p>
<p class="leaseinfocustomer"> Contracttypennummer: {{$leases->lease_type_id}}</p>
<p class="leaseinfocustomer"> Klantnummer: {{$leases->customer_id}}</p>
<p class="leaseinfocustomer"> Financiënnummer: {{$leases->finance_id}}</p>
<p class="leaseinfocustomer"> Startdatum: {{$leases->startdate}}</p>
<p class="leaseinfocustomer"> Einddatum: {{$leases->enddate}}</p>
<p class="leaseinfocustomer"> Aansluitkosten: {{$leases->connectioncosts}}</p>
<p class="leaseinfocustomer"> Opzegtermijn: {{$leases->noticeperiod}}</p>

</body>
</html>

@endsection
