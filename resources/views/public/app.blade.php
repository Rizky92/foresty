<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>
        @yield('tab')
    </title>

    {{-- Bootstrap FontAwesome --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    {{-- Custom CSS Laravel bootstrap 4.5.0 --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- Material Design Icons --}}
    <link rel="stylesheet" href="css/material-icons.css">

    {{-- Bootstrap JS bundle --}}
    <script src="{{ asset('js/app.js')}}"></script>
    <style>
        .carousel-item {
            height: 100vh;
            min-height: 350px;
        }

        .img-header {
            height: 350px;
            object-fit: cover;
        }

        .carousel-item img {
            background: no-repeat center center scroll;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
        }

        .carousel-gallery img {
            background-size: contain;
        }

        .dropdown:hover>.dropdown-menu {
            display: block;
            margin: -0.125rem 0 0;
        }

        .unstyled {
            text-decoration: none;
        }

        .map-container {
            overflow:hidden;
            padding-bottom:56.25%;
            position:relative;
            height:0;
        }
        .map-container iframe {
            left:0;
            top:0;
            height:100%;
            width:100%;
            position:absolute;
        }

        .w-35 {
            width: 35% !important;
        }
    </style>
</head>
<body>
    <header>
        @include('public.header')
    </header>
    <div id="page-image">
        @yield('images')
    </div>
    <div id="page-content-wrapper">
        <div class="container-fluid pt-3">
            <div class="mx-4">
                @yield('title')
            </div>
            <div class="row px-4 pt-3">
                <div class="col-8">
                    @yield('page')
                </div>
                <div class="col-4">
                    @yield('side')
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="mt-5">
        @include('public.footer')
    </div>
</body>
</html>
