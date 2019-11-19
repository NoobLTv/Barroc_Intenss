<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barroc Intense</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <style>
        .remarkslabel {
            font-size: 20px;
        }

        .pricelabel {
            font-size: 20px;
        }

        .priceinput {
            margin-bottom: 20px;
            margin-left: 20px;
            padding-right: 100px;
        }

        .offerinput {
            margin-top: 20px;
        }

        .remarkstextarea {
            margin-top: 10px;
            width: 330px;
            height: 100px;
        }

    </style>

</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h2>Offerte aanmaken</h2>
        </div>

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
    </div>
</div>

</body>
</html>
