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

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="supplies-first">
        <div class="container">
            <h1 class="indexsupplieslabel">Supplies</h1>

            <form action="{{route('supplies.filter')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" name="name">
                    <input class="searchbutton" type="submit" name="submitbtn" value="search">
                    <input class="searchbutton" type="submit" name="submitbtn" value="clear">
                </div>

                <div class="form-group">
                    <input type="radio" value="enough" name="enough"> Beschikbaar
                    <input type="radio" value="to-little" name="enough"> Niet Beschikbaar
                </div>

                <div class="form-group">
                </div>

            </form>

            <table class="table">
                <thead>
                    <tr class="tablesupplies">
                        <th scope="col">#</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Prijs</th>
                        <th scope="col">Voorraad</th>
                        <th scope="col">Beschikbaar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($supplies as $supply)
                    <tr class="tablesupplies">
                        <th scope="row">{{$supply->id}}</th>
                        <td><a href="{{route('Supplies.edit', $supply->id)}}">{{$supply->name}}</a></td>
                        <td>{{$supply->price}}</td>
                        <td>{{$supply->units}}
                        </td>
                        <td>
                            @if($supply->available === 1)
                                beschikbaar
                             @else
                                niet beschikbaar
                             @endif
                        </td>
                    </tr>
                @endforeach

                </tbody>
                </table>
        </div>
    </div>


</body>
</html>

@endsection
