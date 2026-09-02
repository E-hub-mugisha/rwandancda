<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ URL::asset('img/logo2.png') }}" rel="icon">
    <link href="{{ URL::asset('img/logo2.png') }}" rel="apple-touch-icon">

    <title>{{ config('app.name', 'Rwanda NCD Alliance') }}</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Newsreader:opsz,wght@6..72,400;6..72,500;6..72,600&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="{{ URL::asset('admin/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="{{ URL::asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- AdminLTE -->
    <link rel="stylesheet"
        href="{{ URL::asset('admin/dist/css/adminlte.min.css') }}">

    <style>
        :root {
            --blue: #5D89C8;
            --blue-dark: #3F679F;
            --blue-deep: #294B78;
            --blue-soft: #EEF4FC;
            --gold: #C99A3E;

            --ink: #17263A;
            --muted: #718096;
            --paper: #F6F8FB;
            --white: #FFFFFF;
            --border: #E4EAF1;

            --sidebar-width: 270px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--paper);
            color: var(--ink);
            font-size: 14px;
        }

        /* =========================================
           GLOBAL
        ========================================= */

        a {
            transition: all .2s ease;
        }

        .wrapper {
            background: var(--paper);
        }

        .content-wrapper {
            background: var(--paper) !important;
            min-height: calc(100vh - 57px) !important;
        }

        /* =========================================
           NAVBAR
        ========================================= */

        .main-header {
            height: 70px;
            border: 0 !important;
            background: rgba(255, 255, 255, .96) !important;
            box-shadow: 0 1px 0 rgba(41, 75, 120, .08),
                        0 8px 30px rgba(41, 75, 120, .04);
            display: flex;
            align-items: center;
            padding: 0 22px;
        }

        .main-header .nav-link {
            color: var(--ink) !important;
        }

        .main-header .nav-link:hover {
            color: var(--blue-dark) !important;
        }

        .sidebar-toggle {
            width: 42px;
            height: 42px;
            display: flex !important;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            margin-right: 12px;
        }

        .sidebar-toggle:hover {
            background: var(--blue-soft);
        }

        /* =========================================
           USER PROFILE
        ========================================= */

        .user-menu-link {
            display: flex !important;
            align-items: center;
            gap: 10px;
            padding: 7px 12px !important;
            border-radius: 14px;
        }

        .user-menu-link:hover {
            background: var(--blue-soft);
        }

        .user-avatar {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: linear-gradient(
                135deg,
                var(--blue),
                var(--blue-deep)
            );
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            box-shadow: 0 5px 15px rgba(63, 103, 159, .22);
        }

        .user-name {
            font-size: 13px;
            font-weight: 600;
            color: var(--ink);
        }

        .user-role {
            display: block;
            font-size: 10px;
            color: var(--muted);
            margin-top: -2px;
        }

        .user-dropdown {
            border: 0;
            border-radius: 16px;
            padding: 8px;
            margin-top: 8px;
            box-shadow: 0 15px 40px rgba(41, 75, 120, .15);
            min-width: 210px;
        }

        .user-dropdown .dropdown-item {
            border-radius: 10px;
            padding: 10px 12px;
            font-size: 13px;
        }

        .user-dropdown .dropdown-item:hover {
            background: var(--blue-soft);
            color: var(--blue-deep);
        }

        /* =========================================
           SIDEBAR
        ========================================= */

        .main-sidebar {
            background: var(--blue-deep) !important;
            width: var(--sidebar-width) !important;
            box-shadow: 8px 0 30px rgba(41, 75, 120, .12) !important;
        }

        .main-sidebar::before {
            background: var(--blue-deep) !important;
        }

        .brand-link {
            height: 92px;
            border-bottom: 1px solid rgba(255, 255, 255, .10) !important;
            display: flex !important;
            align-items: center;
            padding: 15px 22px !important;
            background: rgba(0, 0, 0, .08);
        }

        .brand-logo {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 14px;
            background: white;
            padding: 4px;
            margin-right: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, .15);
        }

        .brand-content {
            display: flex;
            flex-direction: column;
        }

        .brand-name {
            color: #fff;
            font-weight: 800;
            font-size: 14px;
            line-height: 1.2;
        }

        .brand-subtitle {
            color: rgba(255,255,255,.62);
            font-size: 10px;
            margin-top: 3px;
        }

        .sidebar {
            padding: 18px 12px;
        }

        .nav-sidebar > .nav-item {
            margin-bottom: 5px;
        }

        .nav-sidebar .nav-link {
            border-radius: 12px !important;
            color: rgba(255,255,255,.72) !important;
            padding: 12px 14px !important;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            transition: all .2s ease;
        }

        .nav-sidebar .nav-link .nav-icon {
            width: 24px;
            margin-right: 10px;
            font-size: 15px;
            text-align: center;
            color: rgba(255,255,255,.58);
        }

        .nav-sidebar .nav-link:hover {
            background: rgba(255,255,255,.09) !important;
            color: #fff !important;
            transform: translateX(2px);
        }

        .nav-sidebar .nav-link:hover .nav-icon {
            color: #fff;
        }

        .nav-sidebar .nav-link.active {
            background: linear-gradient(
                135deg,
                var(--blue),
                var(--blue-dark)
            ) !important;
            color: #fff !important;
            box-shadow: 0 8px 20px rgba(0,0,0,.14);
        }

        .nav-sidebar .nav-link.active .nav-icon {
            color: #fff;
        }

        /* =========================================
           SECTION LABEL
        ========================================= */

        .sidebar-section {
            color: rgba(255,255,255,.38);
            font-size: 9px;
            font-weight: 700;
            letter-spacing: 1.4px;
            text-transform: uppercase;
            padding: 14px 14px 7px;
        }

        /* =========================================
           CONTENT
        ========================================= */

        .content-header {
            padding: 28px 30px 12px;
        }

        .content-header h1 {
            font-size: 25px;
            font-weight: 800;
            color: var(--blue-deep);
            margin: 0;
        }

        .content-header .breadcrumb {
            background: transparent;
            padding: 8px 0;
            margin: 0;
            font-size: 12px;
        }

        .content {
            padding: 0 30px 30px;
        }

        /* =========================================
           CARDS
        ========================================= */

        .card {
            border: 1px solid var(--border) !important;
            border-radius: 18px !important;
            box-shadow: 0 8px 30px rgba(41, 75, 120, .055) !important;
            overflow: hidden;
        }

        .card-header {
            background: #fff !important;
            border-bottom: 1px solid var(--border) !important;
            padding: 18px 22px;
        }

        .card-title {
            font-weight: 700;
            color: var(--blue-deep);
        }

        .card-body {
            background: #fff;
        }

        /* =========================================
           BUTTONS
        ========================================= */

        .btn-primary {
            background: var(--blue) !important;
            border-color: var(--blue) !important;
            border-radius: 10px !important;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(93,137,200,.22);
        }

        .btn-primary:hover {
            background: var(--blue-dark) !important;
            border-color: var(--blue-dark) !important;
            transform: translateY(-1px);
        }

        .btn-gold {
            background: var(--gold);
            border-color: var(--gold);
            color: white;
        }

        .btn-gold:hover {
            background: #AE8230;
            color: white;
        }

        /* =========================================
           TABLES
        ========================================= */

        .table {
            color: var(--ink);
        }

        .table thead th {
            background: var(--blue-soft);
            color: var(--blue-deep);
            border: 0;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: .5px;
            font-weight: 700;
            padding: 14px;
        }

        .table td {
            vertical-align: middle;
            border-color: var(--border);
            padding: 14px;
        }

        .table tbody tr:hover {
            background: #FAFCFF;
        }

        /* =========================================
           BADGES
        ========================================= */

        .badge-primary {
            background: var(--blue) !important;
        }

        .badge-warning {
            background: var(--gold) !important;
            color: white !important;
        }

        /* =========================================
           FOOTER
        ========================================= */

        .main-footer {
            background: #fff !important;
            border-top: 1px solid var(--border) !important;
            color: var(--muted);
            font-size: 12px;
            padding: 18px 30px;
        }

        .main-footer a {
            color: var(--blue-dark);
            font-weight: 600;
        }

        /* =========================================
           MOBILE
        ========================================= */

        @media (max-width: 767px) {

            .main-sidebar {
                width: 270px !important;
            }

            .main-header {
                padding: 0 12px;
            }

            .user-name,
            .user-role {
                display: none;
            }

            .content-header {
                padding: 20px 16px 8px;
            }

            .content {
                padding: 0 16px 20px;
            }

            .content-header h1 {
                font-size: 21px;
            }

            .main-footer {
                padding: 15px;
            }
        }
    </style>

    @stack('styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    @include('layouts.navigation')

    <main class="content-wrapper">
        @yield('content')
    </main>

    <footer class="main-footer">
        <strong>
            © {{ date('Y') }}
            <a href="/">
                {{ config('app.name', 'Rwanda NCD Alliance') }}
            </a>
        </strong>

        <span class="ml-2">
            All rights reserved.
        </span>

        <div class="float-right d-none d-sm-inline-block">
            <span>Admin Portal</span>
        </div>
    </footer>

</div>

<!-- jQuery -->
<script src="{{ URL::asset('admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ URL::asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ URL::asset('admin/dist/js/adminlte.js') }}"></script>

@stack('scripts')

</body>
</html>