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
            <h2 class="bkrchecktext">De bkr check</h2>
        </div>
    </div>
</header>

<form action="{{ route('offercheck.store') }}" method="POST">
    @csrf
    <div>
        <label class="offerchecklabel">Offertes:</label>
    </div>
    <div>
        @foreach($quotations as $quotation)
            {{ $quotation->id }}: {{ $quotation->price }} <form>

                <input type="submit">
            </form>
        @endforeach

    </div>

    <div>
        <ul>
            @foreach($quotations as $quotation)


                <li> <a href="{{ route('offercheck.show', $quotation->id ) }}"> </a> {{ $quotation->id }} </li>
            @endforeach
        </ul>
    </div>
    <div>
        <label class="offerchecklabel">Offertes goedkeuren of afkeuren:</label>
    </div>
    <div>
        <select class="selectquotations" name="quotations_id">
            @foreach($quotations as $quotation)
                <option value="{{ $quotation->id }}"> </option>
            @endforeach
        </select>
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
