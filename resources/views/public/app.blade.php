<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Beranda</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/material-icons.css">
    <script src="{{ asset('js/app.js')}}"></script>

    <style>
        .carousel-item {
            height: 576px;
        }

        .carousel-item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 576px;
        }

        .dropdown:hover>.dropdown-menu {
            display: block;
            margin: -0.125rem 0 0;
        }

        #page-image img {
            height: 200px;
            object-fit: cover;
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
</head>
<body>
    <header>
        @include('public.header')
    </header>
    <div id="page-image">
        @yield('images')
    </div>
    <div id="page-content-wrapper">
        <div class="container-fluid pt-2 pl-3">
            <div class="col-8">
                @yield('page')
            </div>
            <div class="col-4">
                @yield('side')
            </div>
        </div>
    </div>
    <footer>
        @include('public.footer')
    </footer>
</body>
</html>
