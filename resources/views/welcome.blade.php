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
        <h1 class="text-center mt-em">WELKOM BIJ BARROC INTENSE</h1>
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

            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <img class="img-home" src="storage/img/bit-deluxe.png" alt="">
                </div>
                <div class="col-xs-6 col-md-6 margin-top-product mp-em">
                    <h6 class=" mt-2">Koffie Machine delux</h6>
                    <p class="mp-text">Lorem ipsum dolor
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae dicta dignissimos, doloribus exercitationem in
                        nam neque officia reprehenderit similique tenetur. Accusantium cum eum, fugit laudantium nam numquam officiis perspiciatis veritatis?
                        sit amet, consectetur adipisicing elit. At atque aut, consequuntur deleniti distinctio dolore eius enim explicabo harum libero modi numquam o
                        dio officiis optio perspiciatis porro quia quibusdam quidem..</p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 margin-top-product mp-em">
                    <h6 class=" mt-2">Koffie Machine Light</h6>
                    <p class="mp-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aut dolorem, ea harum illum ipsum iusto laborum nisi officia
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam architecto dicta dolorem dolores doloribus, impedit ipsum magnam, molestias nostrum, obcaecati officiis placeat quaerat quisquam similique sit vel voluptas? Eos, facere!
                        placeat, quam suscipit ullam. Deserunt eaque eveniet excepturi porro quibusdam sit.</p>
                </div>
                <div class="col-xs-6 col-md-3">
                    <img class="img-home" src="storage/img/bit-light.png" alt="">
                </div>
            </div>

    </div>

    <div class="fourth-page mt-3">
        <div class="container">

            <h3 class="flex-center mt-5 white">CONTACT US</h3>

            <div class="form-group">
                <form method="post" action="{{ route('contact-form-submit') }}">
                    @csrf
                    <label class="white"for="name">Name</label>
                    <input class="form-control" type="text" name="name" required>

                    <label class="white"for="email">Email</label>
                    <input class="form-control" type="email" name="email" required>

                    <label class="white" for="companyname">Company name</label>
                    <input class="form-control" type="text" name="description" required>

                    <label class="white" for="">description</label>
                    <textarea class="form-control" required></textarea>

                    <input required class="btn btn-primary mt-3" required type="submit" value="Verstuur">

                </form>
            </div>

        </div>
    </div>

</body>
</html>
@endsection
