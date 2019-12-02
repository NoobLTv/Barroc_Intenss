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
            <h2 class="bkrchecktext">De bkr pagina</h2>
        </div>
    </div>
</header>

<form action="" method="POST">
    @csrf
    <div>
        <label class="offerchecklabel">Bedrijven:</label>
    </div>
    <div>
        <select class="companynameselect" name="companyname">
            @foreach(\App\Companyname::select('companyname', 'id')->get() as $name)
                <option value="{{ $name->id }}">{{ $name->name }}</option>
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
</form>

</body>
</html>
