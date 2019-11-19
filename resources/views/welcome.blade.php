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
                <h3 class="flex-center mt-5 mb-5">OVER ONS</h3>
                <img class="logo-overons" src="storage/img/logo1_groot.png" alt="">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur lorem adipisicing
                    elit. Alias, amet
                    architecto asperiores aspernatur consectetur cumque deserunt dolorem enim
                    exercitationem magnam maiores porro quam quos reprehenderit saepe sint, suscipit temporibus, voluptatibus!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab doloribus, eos. Animi iste neque officiis.
                    Deleniti dignissimos ea eum explicabo Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio eum odit quisquam. Alias aspernatur atque aut cumque earum eius incidunt nemo velit? Hic laudantium nostrum odit? Fugiat non quod tempore?
                    illum, maxime minus quisquam quo sint ullam unde ut, vitae!</p>
            </div>
        </div>
    </div>

    <div class="third-page">
        <div class="container">
            <h3 class="flex-center">PRODUCTEN</h3>
            <div class="left-color-home"></div>
            <img class="img-home" src="storage/img/bit-deluxe.png" alt="">
            <div class="right-color-home"></div>
            <img class="img-home" src="storage/img/bit-light.png" alt="">
        </div>
    </div>

    <div class="fourth-page">
        <div class="container">
            <h3 class="flex-center mt-5">CONTACT US</h3>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>Wie wij zijn</h6>
                    <p class="text-justify">BarrocIntens.com <i>CODE WANTS TO BE SIMPLE </i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab asperiores dicta fuga laboriosam non recusandae reprehenderit. Animi enim eveniet facere iste nemo odio omnis optio perferendis reiciendis repellat reprehenderit, similique?.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Pagina's</h6>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sales</a></li>
                        <li><a href="#">Maintenance</a></li>
                        <li><a href="#">..</a></li>
                        <li><a href="#">..</a></li>
                        <li><a href="#">..</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Meer</h6>
                    <ul class="footer-links">
                        <li><a href="#">Over ons</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Bijdragen</a></li>
                        <li><a href="#">Extra Info</a></li>
                        <li><a href="#">Home Pagina</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2019 All Rights Reserved by
                        <a href="#">Barroc Intense</a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

@endsection
