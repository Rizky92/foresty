<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Beranda</title>

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
            height: 250px;
            object-fit: cover;
        }

        .carousel-item img {
            background: no-repeat center center scroll;
            background-size: cover;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
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
            <div class="row px-4">
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
