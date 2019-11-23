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
            <h2 class="offerlabel">Offerte aanmaken</h2>
        </div>
    </div>
</header>

        <form class="offerform" action="{{ route('offer.store') }}" method="POST">
            @csrf
            <div>
                <label class="pricelabel">Salesmedewerker:</label>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                        <select name="sales_id">
                            @foreach(\App\User::select('name' ,'id')->where('role_id', '2')->get() as $name)
                                <option value="{{ $name->id }}">{{ $name->name }}</option>
                            @endforeach
                        </select>
                    </select>
                </div>
            </div>
            <div>
                <label class="pricelabel">Klant:</label>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <select name="customer_id">
                        @foreach(\App\User::select('name', 'id')->where('role_id', '5')->get() as $name)
                            <option value="{{ $name->id }}">{{ $name->name }}</option>
                        @endforeach
                        </select>
                </div>
            </div>
            <div>
                <label class="pricelabel">Prijs:</label>
            </div>
            <div>
                <input class="priceinput" type="text" name="price">
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
