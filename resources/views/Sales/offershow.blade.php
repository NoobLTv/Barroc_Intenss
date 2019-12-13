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
        <h1 class="infodetail">Dit uw offertegegevens</h1>
        <p class="offerlabelshow"> Offertenummer: {{ $quotation->id }} </p>
        <p class="infopricelabel"> Salesmedewerker: {{ $quotation->sales_id }} </p>
        <p class="infopricelabel"> Klantnummer: {{ $quotation->customer_id}} </p>
        <p class="infopricelabel"> Prijs: {{ $quotation->price}} </p>
        <p class="infopricelabel"> Opmerkingen: {{ $quotation->remarks}} </p>
        <p class="infopricelabel"> Is die goedgekeurd of niet(Als er een 1 staat is die goedgekeurd en als er een 0 staat is die afgekeurd.): {{ $quotation->approved}} </p>
    </main>

</body>
</html>
