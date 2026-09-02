<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <meta
        name="theme-color"
        content="#5D89C8"
    >

    <!-- Favicons -->
    <link
        href="{{ asset('img/logo2.jpeg') }}"
        rel="icon"
    >

    <link
        href="{{ asset('img/logo2.jpeg') }}"
        rel="apple-touch-icon"
    >

    <title>
        {{ config('app.name', 'Rwanda NCD Alliance') }} | Sign In
    </title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Newsreader:wght@400;500;500;600&display=swap"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="{{ URL::asset('admin/plugins/fontawesome-free/css/all.min.css') }}"
    >

    <!-- Bootstrap -->
    <link
        rel="stylesheet"
        href="{{ URL::asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}"
    >

    <!-- AdminLTE -->
    <link
        rel="stylesheet"
        href="{{ URL::asset('admin/dist/css/adminlte.min.css') }}"
    >


    <style>

        /* =====================================================
           Rwanda NCD Alliance
           Login Page
           Brand: #5D89C8
        ===================================================== */

        :root {

            --blue: #5D89C8;
            --blue-dark: #3F679F;
            --blue-deep: #294B78;
            --blue-soft: #EAF1FA;

            --gold: #C99A3E;
            --gold-soft: #F2E5C9;

            --ink: #172033;
            --muted: #667085;

            --paper: #F5F7FA;
            --white: #FFFFFF;

            --border: #DDE4ED;
        }


        * {
            box-sizing: border-box;
        }


        html,
        body {
            min-height: 100%;
        }


        body {
            margin: 0;

            font-family:
                'Inter',
                -apple-system,
                BlinkMacSystemFont,
                'Segoe UI',
                sans-serif;

            background: var(--paper);

            color: var(--ink);

            overflow-x: hidden;
        }


        /* =====================================================
           PAGE WRAPPER
        ===================================================== */

        .ncda-login-page {

            position: relative;

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px 20px;

            background:

                radial-gradient(
                    circle at 15% 20%,
                    rgba(93, 137, 200, 0.12),
                    transparent 28%
                ),

                radial-gradient(
                    circle at 85% 80%,
                    rgba(201, 154, 62, 0.08),
                    transparent 25%
                ),

                linear-gradient(
                    135deg,
                    #ffffff 0%,
                    #F5F7FA 55%,
                    #EDF3FA 100%
                );

            overflow: hidden;
        }


        /* =====================================================
           DECORATIVE BACKGROUND
        ===================================================== */

        .ncda-login-page::before {

            content: "";

            position: absolute;

            width: 600px;
            height: 600px;

            right: -280px;
            top: -260px;

            border: 1px solid rgba(93, 137, 200, 0.16);

            border-radius: 50%;
        }


        .ncda-login-page::after {

            content: "";

            position: absolute;

            width: 420px;
            height: 420px;

            left: -220px;
            bottom: -210px;

            border: 1px solid rgba(201, 154, 62, 0.18);

            border-radius: 50%;
        }


        /* =====================================================
           MAIN LOGIN CONTAINER
        ===================================================== */

        .ncda-login-container {

            position: relative;

            z-index: 5;

            width: 100%;

            max-width: 1050px;

            display: grid;

            grid-template-columns: 0.9fr 1.1fr;

            min-height: 600px;

            background: var(--white);

            border: 1px solid var(--border);

            border-radius: 30px;

            overflow: hidden;

            box-shadow:
                0 35px 90px rgba(23, 32, 51, 0.12);
        }


        /* =====================================================
           LEFT BRAND PANEL
        ===================================================== */

        .ncda-login-brand {

            position: relative;

            overflow: hidden;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            padding: 55px 48px;

            background: var(--blue-deep);

            color: #fff;
        }


        .ncda-login-brand::before {

            content: "";

            position: absolute;

            width: 440px;
            height: 440px;

            right: -250px;
            top: -170px;

            border: 1px solid rgba(255,255,255,0.12);

            border-radius: 50%;
        }


        .ncda-login-brand::after {

            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            left: -190px;
            bottom: -160px;

            border: 1px solid rgba(201,154,62,0.25);

            border-radius: 50%;
        }


        .ncda-brand-content {

            position: relative;

            z-index: 2;
        }


        /* =====================================================
           LOGO
        ===================================================== */

        .ncda-logo-wrapper {

            display: inline-flex;

            align-items: center;

            justify-content: center;

            width: 82px;
            height: 82px;

            padding: 8px;

            margin-bottom: 55px;

            background: #fff;

            border-radius: 20px;

            box-shadow:
                0 15px 35px rgba(0,0,0,0.15);
        }


        .ncda-logo {

            display: block;

            width: 100%;
            height: 100%;

            object-fit: contain;

            border-radius: 12px;
        }


        /* =====================================================
           BRAND TEXT
        ===================================================== */

        .ncda-brand-eyebrow {

            display: inline-flex;

            align-items: center;

            gap: 9px;

            margin: 0 0 16px;

            color: #C8DCF3;

            font-size: 11px;

            font-weight: 800;

            letter-spacing: 0.16em;

            text-transform: uppercase;
        }


        .ncda-brand-eyebrow::before {

            content: "";

            width: 28px;
            height: 2px;

            background: var(--gold);

            border-radius: 999px;
        }


        .ncda-brand-title {

            margin: 0;

            color: #fff;

            font-family:
                'Newsreader',
                Georgia,
                serif;

            font-size: clamp(36px, 4vw, 53px);

            line-height: 1.03;

            letter-spacing: -0.04em;

            font-weight: 500;
        }


        .ncda-brand-title span {

            color: #8FB2DF;
        }


        .ncda-brand-description {

            max-width: 390px;

            margin: 23px 0 0;

            color: rgba(255,255,255,0.70);

            font-size: 15px;

            line-height: 1.75;
        }


        /* =====================================================
           BRAND FOOTER
        ===================================================== */

        .ncda-brand-footer {

            position: relative;

            z-index: 2;
        }


        .ncda-brand-footer-line {

            width: 55px;

            height: 2px;

            margin-bottom: 15px;

            background: var(--gold);
        }


        .ncda-brand-footer p {

            margin: 0;

            color: rgba(255,255,255,0.60);

            font-size: 12px;

            line-height: 1.6;
        }


        /* =====================================================
           RIGHT LOGIN PANEL
        ===================================================== */

        .ncda-login-form-panel {

            display: flex;

            align-items: center;

            padding: 55px;

            background: #fff;
        }


        .ncda-login-form-wrapper {

            width: 100%;

            max-width: 440px;

            margin: 0 auto;
        }


        /* =====================================================
           FORM HEADER
        ===================================================== */

        .ncda-form-eyebrow {

            margin: 0 0 10px;

            color: var(--blue);

            font-size: 11px;

            font-weight: 800;

            letter-spacing: 0.15em;

            text-transform: uppercase;
        }


        .ncda-login-title {

            margin: 0;

            color: var(--blue-deep);

            font-family:
                'Newsreader',
                Georgia,
                serif;

            font-size: 42px;

            line-height: 1.05;

            letter-spacing: -0.035em;

            font-weight: 500;
        }


        .ncda-login-subtitle {

            margin: 14px 0 35px;

            color: var(--muted);

            font-size: 14px;

            line-height: 1.7;
        }


        /* =====================================================
           FORM GROUP
        ===================================================== */

        .ncda-form-group {

            margin-bottom: 22px;
        }


        .ncda-form-label {

            display: block;

            margin-bottom: 8px;

            color: var(--ink);

            font-size: 13px;

            font-weight: 700;
        }


        .ncda-input-wrapper {

            position: relative;
        }


        .ncda-input-icon {

            position: absolute;

            left: 17px;
            top: 50%;

            transform: translateY(-50%);

            color: #98A2B3;

            font-size: 14px;

            pointer-events: none;

            transition: color 0.2s ease;
        }


        .ncda-form-control {

            width: 100%;

            height: 54px;

            padding: 13px 16px 13px 46px;

            border: 1px solid var(--border);

            border-radius: 14px;

            outline: none;

            background: #FBFCFD;

            color: var(--ink);

            font-family: inherit;

            font-size: 14px;

            transition:
                border-color 0.2s ease,
                background 0.2s ease,
                box-shadow 0.2s ease;
        }


        .ncda-form-control::placeholder {

            color: #98A2B3;
        }


        .ncda-form-control:hover {

            border-color: #C8D3E0;

            background: #fff;
        }


        .ncda-form-control:focus {

            border-color: var(--blue);

            background: #fff;

            box-shadow:
                0 0 0 4px rgba(93,137,200,0.12);
        }


        .ncda-input-wrapper:focus-within .ncda-input-icon {

            color: var(--blue);
        }


        /* =====================================================
           PASSWORD TOGGLE
        ===================================================== */

        .ncda-password-toggle {

            position: absolute;

            right: 16px;
            top: 50%;

            transform: translateY(-50%);

            border: 0;

            background: transparent;

            color: #98A2B3;

            cursor: pointer;

            padding: 5px;

            transition: color 0.2s ease;
        }


        .ncda-password-toggle:hover {

            color: var(--blue);
        }


        /* =====================================================
           REMEMBER / FORGOT
        ===================================================== */

        .ncda-form-options {

            display: flex;

            align-items: center;

            justify-content: space-between;

            gap: 15px;

            margin: 5px 0 25px;
        }


        .ncda-remember {

            display: flex;

            align-items: center;

            gap: 8px;

            margin: 0;

            color: var(--muted);

            font-size: 13px;

            cursor: pointer;
        }


        .ncda-remember input {

            width: 16px;
            height: 16px;

            accent-color: var(--blue);

            cursor: pointer;
        }


        .ncda-forgot {

            color: var(--blue);

            font-size: 13px;

            font-weight: 600;

            text-decoration: none;

            transition: color 0.2s ease;
        }


        .ncda-forgot:hover {

            color: var(--blue-dark);

            text-decoration: none;
        }


        /* =====================================================
           LOGIN BUTTON
        ===================================================== */

        .ncda-login-button {

            width: 100%;

            height: 55px;

            display: flex;

            align-items: center;

            justify-content: center;

            gap: 10px;

            border: 0;

            border-radius: 999px;

            background: var(--blue);

            color: #fff;

            font-family: inherit;

            font-size: 14px;

            font-weight: 800;

            cursor: pointer;

            box-shadow:
                0 12px 25px rgba(93,137,200,0.18);

            transition:
                background 0.2s ease,
                transform 0.2s ease,
                box-shadow 0.2s ease;
        }


        .ncda-login-button:hover {

            background: var(--blue-dark);

            color: #fff;

            transform: translateY(-2px);

            box-shadow:
                0 16px 32px rgba(93,137,200,0.25);
        }


        .ncda-login-button:active {

            transform: translateY(0);
        }


        .ncda-login-button i {

            font-size: 13px;
        }


        /* =====================================================
           REGISTER
        ===================================================== */

        .ncda-register {

            margin: 28px 0 0;

            text-align: center;

            color: var(--muted);

            font-size: 13px;
        }


        .ncda-register a {

            color: var(--blue);

            font-weight: 700;

            text-decoration: none;
        }


        .ncda-register a:hover {

            color: var(--blue-dark);
        }


        /* =====================================================
           ERROR MESSAGE
        ===================================================== */

        .ncda-error {

            margin-bottom: 22px;

            padding: 14px 16px;

            border: 1px solid #F5C2C7;

            border-radius: 13px;

            background: #FFF5F5;

            color: #842029;

            font-size: 13px;

            line-height: 1.55;
        }


        .ncda-error strong {

            display: block;

            margin-bottom: 4px;
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .ncda-login-container {

                max-width: 650px;

                grid-template-columns: 1fr;

                min-height: auto;
            }


            .ncda-login-brand {

                min-height: 330px;

                padding: 40px;
            }


            .ncda-logo-wrapper {

                width: 70px;
                height: 70px;

                margin-bottom: 35px;
            }


            .ncda-brand-footer {

                display: none;
            }


            .ncda-login-form-panel {

                padding: 45px 40px;
            }

        }


        @media (max-width: 600px) {

            .ncda-login-page {

                padding: 20px 15px;

                align-items: flex-start;
            }


            .ncda-login-container {

                margin: 15px 0;

                border-radius: 23px;
            }


            .ncda-login-brand {

                min-height: 300px;

                padding: 30px 25px;
            }


            .ncda-brand-title {

                font-size: 39px;
            }


            .ncda-brand-description {

                font-size: 14px;
            }


            .ncda-login-form-panel {

                padding: 35px 25px 40px;
            }


            .ncda-login-title {

                font-size: 37px;
            }


            .ncda-form-options {

                align-items: flex-start;

                flex-direction: column;

                gap: 13px;
            }

        }


        @media (max-width: 380px) {

            .ncda-login-page {

                padding: 10px;
            }


            .ncda-login-brand {

                padding: 25px 20px;
            }


            .ncda-login-form-panel {

                padding: 30px 20px;
            }


            .ncda-brand-title {

                font-size: 35px;
            }

        }


        @media (prefers-reduced-motion: reduce) {

            .ncda-login-button,
            .ncda-form-control,
            .ncda-password-toggle,
            .ncda-forgot {

                transition: none;
            }

        }

    </style>

</head>


<body>


<div class="ncda-login-page">


    <div class="ncda-login-container">


        {{-- =====================================================
             BRAND PANEL
        ====================================================== --}}

        <div class="ncda-login-brand">


            <div class="ncda-brand-content">


                {{-- Logo --}}

                <a
                    href="{{ url('/') }}"
                    class="ncda-logo-wrapper"
                    aria-label="Rwanda NCD Alliance"
                >

                    <img
                        src="{{ asset('img/logo2.jpeg') }}"
                        alt="Rwanda NCD Alliance"
                        class="ncda-logo"
                    >

                </a>


                {{-- Text --}}

                <p class="ncda-brand-eyebrow">
                    Rwanda NCD Alliance
                </p>


                <h1 class="ncda-brand-title">

                    One voice for
                    <span>NCDs.</span>

                </h1>


                <p class="ncda-brand-description">

                    Bringing people, organisations and partners together
                    to prevent and control non-communicable diseases
                    and build a healthier Rwanda.

                </p>

            </div>


            {{-- Brand footer --}}

            <div class="ncda-brand-footer">

                <div class="ncda-brand-footer-line"></div>

                <p>
                    Together for a healthier Rwanda.
                </p>

            </div>


        </div>



        {{-- =====================================================
             LOGIN FORM
        ====================================================== --}}

        <div class="ncda-login-form-panel">


            <div class="ncda-login-form-wrapper">


                {{-- Header --}}

                <p class="ncda-form-eyebrow">
                    Member portal
                </p>


                <h2 class="ncda-login-title">
                    Welcome back.
                </h2>


                <p class="ncda-login-subtitle">
                    Sign in to access your Rwanda NCD Alliance account
                    and continue your work.
                </p>


                {{-- Validation error --}}

                @if ($errors->any())

                    <div class="ncda-error">

                        <strong>
                            Unable to sign in
                        </strong>

                        {{ $errors->first() }}

                    </div>

                @endif


                {{-- Login form --}}

                <form
                    method="POST"
                    action="{{ route('login') }}"
                >

                    @csrf


                    {{-- Email --}}

                    <div class="ncda-form-group">

                        <label
                            for="email"
                            class="ncda-form-label"
                        >
                            Email address
                        </label>


                        <div class="ncda-input-wrapper">

                            <i
                                class="fas fa-envelope ncda-input-icon"
                            ></i>


                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="ncda-form-control"
                                value="{{ old('email') }}"
                                placeholder="you@example.com"
                                autocomplete="email"
                                required
                                autofocus
                            >

                        </div>

                    </div>



                    {{-- Password --}}

                    <div class="ncda-form-group">

                        <label
                            for="password"
                            class="ncda-form-label"
                        >
                            Password
                        </label>


                        <div class="ncda-input-wrapper">

                            <i
                                class="fas fa-lock ncda-input-icon"
                            ></i>


                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="ncda-form-control"
                                placeholder="Enter your password"
                                autocomplete="current-password"
                                required
                                style="padding-right: 48px;"
                            >


                            <button
                                type="button"
                                class="ncda-password-toggle"
                                id="togglePassword"
                                aria-label="Show password"
                            >

                                <i class="fas fa-eye"></i>

                            </button>

                        </div>

                    </div>



                    {{-- Remember + Forgot --}}

                    <div class="ncda-form-options">


                        <label
                            for="remember_me"
                            class="ncda-remember"
                        >

                            <input
                                type="checkbox"
                                id="remember_me"
                                name="remember"
                            >

                            <span>
                                Remember me
                            </span>

                        </label>


                        @if (Route::has('password.request'))

                            <a
                                href="{{ route('password.request') }}"
                                class="ncda-forgot"
                            >
                                Forgot password?
                            </a>

                        @endif


                    </div>



                    {{-- Submit --}}

                    <button
                        type="submit"
                        class="ncda-login-button"
                    >

                        <span>
                            Sign In
                        </span>

                        <i class="fas fa-arrow-right"></i>

                    </button>


                </form>


                {{-- Register --}}

                @if (Route::has('register'))

                    <p class="ncda-register">

                        Don't have an account?

                        <a href="{{ route('register') }}">
                            Create an account
                        </a>

                    </p>

                @endif


            </div>

        </div>


    </div>

</div>


<!-- jQuery -->
<script src="{{ URL::asset('admin/plugins/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ URL::asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- AdminLTE -->
<script src="{{ URL::asset('admin/dist/js/adminlte.min.js') }}"></script>


<script>

    /* =========================================================
       Password visibility toggle
    ========================================================= */

    document.addEventListener('DOMContentLoaded', function () {

        const password =
            document.getElementById('password');

        const toggle =
            document.getElementById('togglePassword');


        if (password && toggle) {

            toggle.addEventListener('click', function () {

                const isPassword =
                    password.type === 'password';


                password.type =
                    isPassword
                        ? 'text'
                        : 'password';


                const icon =
                    toggle.querySelector('i');


                if (icon) {

                    icon.classList.toggle(
                        'fa-eye',
                        !isPassword
                    );

                    icon.classList.toggle(
                        'fa-eye-slash',
                        isPassword
                    );

                }


                toggle.setAttribute(
                    'aria-label',
                    isPassword
                        ? 'Hide password'
                        : 'Show password'
                );

            });

        }

    });

</script>


</body>

</html>