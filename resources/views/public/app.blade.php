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
            height: 300px;
        }

        .carousel-item img {
            position: absolute;
            top: 0;
            left: 0;
            min-height: 300px;
        }

        .dropdown:hover>.dropdown-menu {
            display: block;
            margin: -0.125rem 0 0;
        }

        #page-content-wrapper img {
            height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <header>
        @include('public.header')
    </header>
    <div id="page-content-wrapper">
        @yield('page')
    </div>
</body>
</html>
