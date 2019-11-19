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

<header>
    <div class="content">
        <div class="title m-b-md">
            <h2>Offerte aanmaken</h2>
        </div>
    </div>
</header>

        <form action="{{ route('offer.store') }}" method="POST">
            @csrf
            <div>
                <label class="pricelabel">Prijs:<input class="priceinput" type="text" name="price"></label>
            </div>
            <div>
                <label class="remarkslabel">Opmerkingen:</label>
            </div>
            <div>
                <textarea class="remarkstextarea" name="remarks"></textarea>
            </div>
            <div>
                <input class="offerinput" type="submit" value="Verzenden">
            </div>
        </form>

</body>
</html>
