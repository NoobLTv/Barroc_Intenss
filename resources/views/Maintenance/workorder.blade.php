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
<body class="workorder">

<header>
    <div>
        <h1 class="workordertext">Werkbonnen aanmaken</h1>
    </div>
</header>

<form class="offerform" action="{{ route('workorder.store') }}" method="POST">
    @csrf
    <div>
        <label class="pricelabel">Bonnummer:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="bonnumber">
    </div>
    <div>
        <label class="pricelabel">Project:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="project">
    </div>
    <div>
        <label class="pricelabel">Monteur:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="mechanic">
    </div>
    <div>
        <label class="pricelabel">Afspraak gemaakt met:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="agreements">
    </div>
    <div>
        <label class="pricelabel">Datum:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="dateworkorders">
    </div>
    <div>
        <label class="pricelabel">Storingadres:</label>
    </div>
    <div>
        <input class="priceinput" type="text" name="failureaddress">
    </div>
    <div>
        <label class="remarkslabel">Opmerkingen:</label>
    </div>
    <div>
        <textarea class="remarkstextarea" name="remarksworkorders"></textarea>
    </div>
    <div>
        <input class="offerinput" type="submit" value="Verzenden">
    </div>
</form>

</body>
</html>


</body>
</html>

