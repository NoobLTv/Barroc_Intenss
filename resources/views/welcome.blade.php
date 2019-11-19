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


    <div class="first-page masthead">
        <h1 class="text-center mt-em">WELCOME BY BARROC INTENSE</h1>
    </div>

    <div class="second-page">
        <div class="container">
            <div class="">
                <h3 class="flex-center mt-5">OVER ONS</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Alias, amet
                    architecto asperiores aspernatur consectetur cumque deserunt dolorem enim
                    exercitationem magnam maiores porro quam quos reprehenderit saepe sint, suscipit temporibus, voluptatibus!</p>
            </div>
        </div>
    </div>

    <div class="third-page">
        <div class="container">
            <h3>PRODUCTEN</h3>
        </div>
    </div>

    <div class="fourth-page">
        <div class="container">
            <h3>OFFERTEN</h3>
        </div>
    </div>

    <div class="five-page">
        <div class="container">
            <h3>CONTACT US</h3>
        </div>
    </div>


</body>
</html>

@endsection
