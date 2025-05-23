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

    <div class="cs_modal_search cs_center">
      <div class="cs_search_overlay cs_header_overlay"></div>
      <form action="{{ route('search') }}" method="GET" class="cs_modal_search_form">
        <button class="cs_search_close" type="button">
          <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M26.4233 14.7567L21.18 20L26.4233 25.2433C26.7483 25.5683 26.7483 26.0967 26.4233 26.4217C26.26 26.585 26.0467 26.665 25.8333 26.665C25.62 26.665 25.4067 26.5833 25.2433 26.4217L20 21.1783L14.7567 26.4217C14.5933 26.585 14.38 26.665 14.1667 26.665C13.9533 26.665 13.74 26.5833 13.5767 26.4217C13.2517 26.0967 13.2517 25.5683 13.5767 25.2433L18.82 20L13.5767 14.7567C13.2517 14.4317 13.2517 13.9033 13.5767 13.5783C13.9017 13.2533 14.43 13.2533 14.755 13.5783L19.9983 18.8217L25.2417 13.5783C25.5667 13.2533 26.095 13.2533 26.42 13.5783C26.745 13.9033 26.745 14.4317 26.42 14.7567H26.4233ZM40 20C40 31.0283 31.0283 40 20 40C8.97167 40 0 31.0283 0 20C0 8.97167 8.97167 0 20 0C31.0283 0 40 8.97167 40 20ZM38.3333 20C38.3333 9.89167 30.1083 1.66667 20 1.66667C9.89167 1.66667 1.66667 9.89167 1.66667 20C1.66667 30.1083 9.89167 38.3333 20 38.3333C30.1083 38.3333 38.3333 30.1083 38.3333 20Z" fill="currentColor"></path>
          </svg>
        </button>
        <input type="text" name="query" placeholder="Type to search..." class="cs_fs_32 cs_modal_search_input">
      </form>
    </div>
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