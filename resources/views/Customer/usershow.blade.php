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
<h1 class="headtextlease">Uw persoongegevens</h1>
{{--<p> Name: {{ $leases->id}} </p>--}}

<p class="leaseslabelcustomer"> Klantnummer: {{$customerdetails->id}}</p>
<p class="leaseinfocustomer"> Naam: {{$customerdetails->contactperson_name}}</p>
<p class="leaseinfocustomer"> Email: {{$customerdetails->contactperson_email}}</p>
<p class="leaseinfocustomer"> Persoonlijke telefoonnummer: {{$customerdetails->contactperson_number}}</p>
<p class="leaseinfocustomer"> Bedrijfsnaam: {{$customerdetails->companyname}}</p>
<p class="leaseinfocustomer"> Bedrijfsemail: {{$customerdetails->companyemail}}</p>
<p class="leaseinfocustomer"> Bedrijf telefoonnummer: {{$customerdetails->companynumber}}</p>
<p class="leaseinfocustomer"> Bedrijfsadres: {{$customerdetails->adres}}</p>
<p class="leaseinfocustomer"> Bedrijfspostcode: {{$customerdetails->postalcode}}</p>
<p class="leaseinfocustomer"> Bedrijfsplaats: {{$customerdetails->city}}</p>

</body>
</html>

@endsection
