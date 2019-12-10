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
<body class="offershow">

<header class="offershowheader">
    <img class="offershowlogo" src="{{ asset('storage/img/barroc_logo.png') }}" alt="logo_klein">
</header>

<main>
    <h1 class="infodetail">Dit is een werkbongegevens</h1>
    <p class="offerlabelshow"> werkbonnennummer: {{ $workorder->id }} </p>
    <p class="infopricelabel"> Maintenancemedewerker: {{ $workorder->maintenance_id }} </p>
    <p class="infopricelabel"> Factuurnummer: {{ $workorder->lease_id}} </p>
    <p class="infopricelabel"> Monteur: {{ $workorder->mechanic}} </p>
    <p class="infopricelabel"> Afspraak gemaakt met: {{ $workorder->agreements}} </p>
    <p class="infopricelabel"> Datum: {{ $workorder->dateworkorders}} </p>
    <p class="infopricelabel"> Storingadres: {{ $workorder->failureaddress}} </p>
    <p class="infopricelabel"> Opmerkingen: {{ $workorder->remarksworkorders}} </p>
    <p class="infopricelabel"> Storingadres: {{ $workorder->failureaddress}} </p>
    <p class="infopricelabel"> Opmerkingen: {{ $workorder->remarksworkorders}} </p>

    <h2 class="infodetail">Dit is een werkbonproducten met de aantal</h2>
    @foreach(\App\workproduct::select('supply_id', 'amount')->get() as $workproduct)
    <p class="infopricelabel"> Productnummer: {{ $workproduct->supply_id}} </p>
    <p class="infopricelabel"> Aantal: {{ $workproduct->amount}} </p>
        @endforeach
</main>

</body>
</html>
