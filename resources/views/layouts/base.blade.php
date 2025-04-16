<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="Website Design Templates" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="Rwanda non-communicable disease alliance" />
    <meta name="description" content="RWANDANCDA - Rwanda non-communicable disease alliance" />

    <!-- title  -->
    <title>@yield('title') | {{ config('app.name', 'RWANDANCDA') }}</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('new/img/logos/logo2.png')}}" />
    <link rel="apple-touch-icon" href="{{ asset('new/img/logos/logo2.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('new/img/logos/logo2.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="i{{ asset('new/mg/logos/logo2.png')}}" />

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/light-gallerr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="stretched">

    <!-- PAGE LOADING
    ================================================== -->
    <!--<div id="preloader"></div>-->

    <!-- MAIN WRAPPER
    ================================================== -->
    <div id="wrapper">

        @include('includes.header')

        @yield('content')

        @include('includes.footer')
    </div>

    <!-- Script -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.js') }}"></script>
    <script src="{{ asset('assets/js/light-gallery.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-timepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/js/ripples.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>