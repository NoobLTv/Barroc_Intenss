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

    <div class="supplies-edit-first">
        <div class="container">
            <h1 class="text-center mb-4 mt-4">Supplies Edit</h1>
            <form action="{{ route('Supplies.update', $supplises->id) }}" method="post">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="">Name Product:</label>
                    <input name="name" type="text" value="{{$supplises->name}}">
                </div>

                <div class="form-group">
                    <label for="">Price Product:</label>
                    <input name="price" type="number" value="{{$supplises->price}}">
                </div>

                <div class="form-group">
                    <label for="">Units Product:</label>
                    <input name="units" type="number" value="{{$supplises->units}}">
                </div>

                <input type="submit" value="Edit product">

            </form>
        </div>
    </div>

</body>
</html>

@endsection
