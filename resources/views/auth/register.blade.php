<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

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
        {{ config('app.name', 'Rwanda NCD Alliance') }} | Create Account
    </title>


    <!-- Google Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Newsreader:wght@400;500;600&display=swap"
        rel="stylesheet"
    >


    <!-- Font Awesome -->

    <link
        rel="stylesheet"
        href="{{ URL::asset('admin/plugins/fontawesome-free/css/all.min.css') }}"
    >


    <style>

        /* =====================================================
           RWANDA NCD ALLIANCE
           REGISTER PAGE
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
           PAGE
        ===================================================== */

        .ncda-register-page {

            position: relative;

            min-height: 100vh;

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px 20px;

            background:

                radial-gradient(
                    circle at 15% 20%,
                    rgba(93,137,200,0.12),
                    transparent 28%
                ),

                radial-gradient(
                    circle at 85% 80%,
                    rgba(201,154,62,0.08),
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
           DECORATIVE CIRCLES
        ===================================================== */

        .ncda-register-page::before {

            content: "";

            position: absolute;

            width: 600px;
            height: 600px;

            right: -280px;
            top: -260px;

            border:
                1px solid
                rgba(93,137,200,0.16);

            border-radius: 50%;
        }


        .ncda-register-page::after {

            content: "";

            position: absolute;

            width: 420px;
            height: 420px;

            left: -220px;
            bottom: -210px;

            border:
                1px solid
                rgba(201,154,62,0.18);

            border-radius: 50%;
        }


        /* =====================================================
           MAIN CONTAINER
        ===================================================== */

        .ncda-register-container {

            position: relative;

            z-index: 5;

            width: 100%;

            max-width: 1100px;

            display: grid;

            grid-template-columns: 0.9fr 1.1fr;

            min-height: 650px;

            background: var(--white);

            border:
                1px solid
                var(--border);

            border-radius: 30px;

            overflow: hidden;

            box-shadow:
                0 35px 90px
                rgba(23,32,51,0.12);
        }


        /* =====================================================
           LEFT BRAND PANEL
        ===================================================== */

        .ncda-register-brand {

            position: relative;

            overflow: hidden;

            display: flex;

            flex-direction: column;

            justify-content: space-between;

            padding: 55px 48px;

            background: var(--blue-deep);

            color: #fff;
        }


        .ncda-register-brand::before {

            content: "";

            position: absolute;

            width: 440px;
            height: 440px;

            right: -250px;
            top: -170px;

            border:
                1px solid
                rgba(255,255,255,0.12);

            border-radius: 50%;
        }


        .ncda-register-brand::after {

            content: "";

            position: absolute;

            width: 300px;
            height: 300px;

            left: -190px;
            bottom: -160px;

            border:
                1px solid
                rgba(201,154,62,0.25);

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
                0 15px 35px
                rgba(0,0,0,0.15);
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

            font-size:
                clamp(36px, 4vw, 53px);

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

            color:
                rgba(255,255,255,0.70);

            font-size: 15px;

            line-height: 1.75;
        }


        /* =====================================================
           BENEFITS
        ===================================================== */

        .ncda-benefits {

            position: relative;

            z-index: 2;

            display: grid;

            gap: 13px;

            margin-top: 30px;
        }


        .ncda-benefit {

            display: flex;

            align-items: center;

            gap: 12px;

            color:
                rgba(255,255,255,0.75);

            font-size: 12px;
        }


        .ncda-benefit-icon {

            width: 27px;
            height: 27px;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 50%;

            background:
                rgba(255,255,255,0.09);

            color: #C8DCF3;

            font-size: 11px;
        }


        /* =====================================================
           FOOTER
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

            color:
                rgba(255,255,255,0.60);

            font-size: 12px;

            line-height: 1.6;
        }


        /* =====================================================
           RIGHT FORM PANEL
        ===================================================== */

        .ncda-register-form-panel {

            display: flex;

            align-items: center;

            padding: 55px;
            
            background: #fff;
        }


        .ncda-register-form-wrapper {

            width: 100%;

            max-width: 470px;

            margin: 0 auto;
        }


        /* =====================================================
           TOP LOGIN LINK
        ===================================================== */

        .ncda-top-login {

            margin-bottom: 28px;

            text-align: right;

            color: var(--muted);

            font-size: 13px;
        }


        .ncda-top-login a {

            color: var(--blue);

            font-weight: 700;

            text-decoration: none;
        }


        .ncda-top-login a:hover {

            color: var(--blue-dark);
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


        .ncda-register-title {

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


        .ncda-register-subtitle {

            margin: 14px 0 30px;

            color: var(--muted);

            font-size: 14px;

            line-height: 1.7;
        }


        /* =====================================================
           FORM ROW
        ===================================================== */

        .ncda-form-row {

            display: grid;

            grid-template-columns:
                1fr 1fr;

            gap: 15px;
        }


        /* =====================================================
           FORM GROUP
        ===================================================== */

        .ncda-form-group {

            margin-bottom: 18px;
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

            transform:
                translateY(-50%);

            color: #98A2B3;

            font-size: 14px;

            pointer-events: none;

            transition:
                color 0.2s ease;
        }


        .ncda-form-control {

            width: 100%;

            height: 54px;

            padding:
                13px 16px 13px 46px;

            border:
                1px solid
                var(--border);

            border-radius: 14px;

            outline: none;

            background: #FBFCFD;

            color: var(--ink);

            font-family: inherit;

            font-size: 14px;

            transition:
                border-color .2s ease,
                background .2s ease,
                box-shadow .2s ease;
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
                0 0 0 4px
                rgba(93,137,200,0.12);
        }


        .ncda-input-wrapper:focus-within
        .ncda-input-icon {

            color: var(--blue);
        }


        /* =====================================================
           PASSWORD
        ===================================================== */

        .ncda-password-toggle {

            position: absolute;

            right: 15px;
            top: 50%;

            transform:
                translateY(-50%);

            border: 0;

            background: transparent;

            color: #98A2B3;

            cursor: pointer;

            padding: 5px;
        }


        .ncda-password-toggle:hover {

            color: var(--blue);
        }


        /* =====================================================
           PASSWORD HINT
        ===================================================== */

        .ncda-password-hint {

            margin-top: 6px;

            color: #98A2B3;

            font-size: 11px;
        }


        /* =====================================================
           TERMS
        ===================================================== */

        .ncda-terms {

            display: flex;

            align-items: flex-start;

            gap: 9px;

            margin:
                4px 0 23px;

            color: var(--muted);

            font-size: 12px;

            line-height: 1.6;
        }


        .ncda-terms input {

            width: 16px;
            height: 16px;

            margin-top: 2px;

            accent-color: var(--blue);

            cursor: pointer;

            flex-shrink: 0;
        }


        .ncda-terms a {

            color: var(--blue);

            font-weight: 600;

            text-decoration: none;
        }


        .ncda-terms a:hover {

            color: var(--blue-dark);
        }


        /* =====================================================
           ERROR
        ===================================================== */

        .ncda-error {

            margin-bottom: 20px;

            padding: 13px 15px;

            border:
                1px solid
                #F5C2C7;

            border-radius: 13px;

            background: #FFF5F5;

            color: #842029;

            font-size: 12px;

            line-height: 1.5;
        }


        .ncda-error strong {

            display: block;

            margin-bottom: 3px;
        }


        /* =====================================================
           REGISTER BUTTON
        ===================================================== */

        .ncda-register-button {

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
                0 12px 25px
                rgba(93,137,200,0.18);

            transition:
                background .2s ease,
                transform .2s ease,
                box-shadow .2s ease;
        }


        .ncda-register-button:hover {

            background: var(--blue-dark);

            color: #fff;

            transform: translateY(-2px);

            box-shadow:
                0 16px 32px
                rgba(93,137,200,0.25);
        }


        .ncda-register-button:active {

            transform: translateY(0);
        }


        /* =====================================================
           SIGN IN
        ===================================================== */

        .ncda-login {

            margin: 25px 0 0;

            padding-top: 23px;

            border-top:
                1px solid #EDF0F4;

            text-align: center;

            color: var(--muted);

            font-size: 13px;
        }


        .ncda-login a {

            color: var(--blue);

            font-weight: 700;

            text-decoration: none;
        }


        .ncda-login a:hover {

            color: var(--blue-dark);
        }


        /* =====================================================
           RESPONSIVE
        ===================================================== */

        @media (max-width: 900px) {

            .ncda-register-container {

                max-width: 650px;

                grid-template-columns: 1fr;

                min-height: auto;
            }


            .ncda-register-brand {

                min-height: 350px;

                padding: 40px;
            }


            .ncda-brand-footer {

                display: none;
            }


            .ncda-register-form-panel {

                padding: 45px 40px;
            }

        }


        @media (max-width: 600px) {

            .ncda-register-page {

                padding: 20px 15px;

                align-items: flex-start;
            }


            .ncda-register-container {

                margin: 15px 0;

                border-radius: 23px;
            }


            .ncda-register-brand {

                min-height: 330px;

                padding: 30px 25px;
            }


            .ncda-brand-title {

                font-size: 39px;
            }


            .ncda-brand-description {

                font-size: 14px;
            }


            .ncda-register-form-panel {

                padding: 35px 25px 40px;
            }


            .ncda-register-title {

                font-size: 37px;
            }


            .ncda-form-row {

                grid-template-columns: 1fr;

                gap: 0;
            }


            .ncda-top-login {

                display: none;
            }

        }


        @media (max-width: 380px) {

            .ncda-register-page {

                padding: 10px;
            }


            .ncda-register-brand {

                padding: 25px 20px;
            }


            .ncda-register-form-panel {

                padding: 30px 20px;
            }


            .ncda-brand-title {

                font-size: 35px;
            }

        }


        @media (prefers-reduced-motion: reduce) {

            .ncda-register-button,
            .ncda-form-control,
            .ncda-password-toggle {

                transition: none;
            }

        }

    </style>

</head>


<body>


<div class="ncda-register-page">


    <div class="ncda-register-container">


        {{-- =====================================================
             BRAND PANEL
        ====================================================== --}}

        <div class="ncda-register-brand">


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


                {{-- Eyebrow --}}

                <p class="ncda-brand-eyebrow">
                    Rwanda NCD Alliance
                </p>


                {{-- Heading --}}

                <h1 class="ncda-brand-title">

                    Join the
                    <span>movement.</span>

                </h1>


                <p class="ncda-brand-description">

                    Become part of a growing community working
                    together to prevent and control non-communicable
                    diseases and create a healthier Rwanda.

                </p>


                {{-- Benefits --}}

                <div class="ncda-benefits">


                    <div class="ncda-benefit">

                        <div class="ncda-benefit-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <span>
                            Connect with our community
                        </span>

                    </div>


                    <div class="ncda-benefit">

                        <div class="ncda-benefit-icon">
                            <i class="fas fa-book-open"></i>
                        </div>

                        <span>
                            Access health resources
                        </span>

                    </div>


                    <div class="ncda-benefit">

                        <div class="ncda-benefit-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>

                        <span>
                            Participate in initiatives
                        </span>

                    </div>


                </div>

            </div>


            {{-- Footer --}}

            <div class="ncda-brand-footer">

                <div class="ncda-brand-footer-line"></div>

                <p>
                    Together for a healthier Rwanda.
                </p>

            </div>


        </div>



        {{-- =====================================================
             REGISTER FORM
        ====================================================== --}}

        <div class="ncda-register-form-panel">


            <div class="ncda-register-form-wrapper">


                {{-- Login link --}}

                <div class="ncda-top-login">

                    Already have an account?

                    <a href="{{ route('login') }}">
                        Sign in
                    </a>

                </div>


                {{-- Header --}}

                <p class="ncda-form-eyebrow">
                    Membership
                </p>


                <h2 class="ncda-register-title">
                    Create your account.
                </h2>


                <p class="ncda-register-subtitle">

                    Register to connect with our community,
                    access resources and participate in
                    our initiatives.

                </p>


                {{-- Errors --}}

                @if ($errors->any())

                    <div class="ncda-error">

                        <strong>
                            Please check your information
                        </strong>

                        {{ $errors->first() }}

                    </div>

                @endif


                {{-- Form --}}

                <form
                    method="POST"
                    action="{{ route('register') }}"
                >

                    @csrf


                    {{-- Name + Email --}}

                    <div class="ncda-form-row">


                        <div class="ncda-form-group">

                            <label
                                for="name"
                                class="ncda-form-label"
                            >
                                Full name
                            </label>


                            <div class="ncda-input-wrapper">

                                <i
                                    class="fas fa-user ncda-input-icon"
                                ></i>


                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="ncda-form-control"
                                    value="{{ old('name') }}"
                                    placeholder="Your full name"
                                    autocomplete="name"
                                    required
                                    autofocus
                                >

                            </div>

                        </div>



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
                                >

                            </div>

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
                                placeholder="Create a secure password"
                                autocomplete="new-password"
                                required
                                style="padding-right:48px;"
                            >


                            <button
                                type="button"
                                class="ncda-password-toggle"
                                data-target="password"
                                aria-label="Show password"
                            >

                                <i class="fas fa-eye"></i>

                            </button>

                        </div>


                        <div class="ncda-password-hint">

                            Use at least 8 characters with
                            letters, numbers and symbols.

                        </div>

                    </div>



                    {{-- Confirm Password --}}

                    <div class="ncda-form-group">

                        <label
                            for="password_confirmation"
                            class="ncda-form-label"
                        >
                            Confirm password
                        </label>


                        <div class="ncda-input-wrapper">

                            <i
                                class="fas fa-shield-alt ncda-input-icon"
                            ></i>


                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                class="ncda-form-control"
                                placeholder="Confirm your password"
                                autocomplete="new-password"
                                required
                                style="padding-right:48px;"
                            >


                            <button
                                type="button"
                                class="ncda-password-toggle"
                                data-target="password_confirmation"
                                aria-label="Show password"
                            >

                                <i class="fas fa-eye"></i>

                            </button>

                        </div>

                    </div>



                    {{-- Terms --}}

                    <div class="ncda-terms">

                        <input
                            type="checkbox"
                            id="terms"
                            required
                        >

                        <label for="terms">

                            I agree to the organization's

                            <a href="#">
                                Terms of Use
                            </a>

                            and

                            <a href="#">
                                Privacy Policy
                            </a>.

                        </label>

                    </div>



                    {{-- Submit --}}

                    <button
                        type="submit"
                        class="ncda-register-button"
                    >

                        <span>
                            Create account
                        </span>

                        <i class="fas fa-arrow-right"></i>

                    </button>


                </form>



                {{-- Login --}}

                <p class="ncda-login">

                    Already registered?

                    <a href="{{ route('login') }}">
                        Sign in to your account
                    </a>

                </p>


            </div>

        </div>


    </div>

</div>



<script>

    /* =====================================================
       PASSWORD TOGGLE
    ===================================================== */

    document.addEventListener(
        'DOMContentLoaded',
        function () {

            const toggles =
                document.querySelectorAll(
                    '.ncda-password-toggle'
                );


            toggles.forEach(function (toggle) {

                toggle.addEventListener(
                    'click',
                    function () {

                        const targetId =
                            this.getAttribute(
                                'data-target'
                            );

                        const input =
                            document.getElementById(
                                targetId
                            );

                        const icon =
                            this.querySelector('i');


                        if (
                            !input ||
                            !icon
                        ) {
                            return;
                        }


                        const isPassword =
                            input.type === 'password';


                        input.type =
                            isPassword
                                ? 'text'
                                : 'password';


                        icon.classList.toggle(
                            'fa-eye',
                            !isPassword
                        );


                        icon.classList.toggle(
                            'fa-eye-slash',
                            isPassword
                        );


                        this.setAttribute(
                            'aria-label',
                            isPassword
                                ? 'Hide password'
                                : 'Show password'
                        );

                    }
                );

            });

        }
    );

</script>


</body>

</html>