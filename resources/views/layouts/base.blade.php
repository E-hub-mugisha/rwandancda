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

    <!-- plugins -->
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">

    <!-- search css -->
    <link rel="stylesheet" href="{{ asset('css/font-icons.css')}}">

    <!-- quform css -->
    <link rel="stylesheet" href="{{ asset('css/swiper.css')}}">

    <!-- theme core css -->
    <link href="{{ asset('new/css/styles.css')}}" rel="stylesheet">
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

    <!-- SCROLL TO TOP
    ================================================== -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- all js include start -->

    <!-- jQuery -->
    <script src="{{ asset('js/plugins.min.js') }}"></script>

    <!-- popper js -->
    <script src="{{ asset('js/functions.bundle.js') }}"></script>

</body>

</html>