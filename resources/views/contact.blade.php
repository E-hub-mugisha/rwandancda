@extends('layouts.base')

@section('title', 'Contact Us')

@section('content')

<style>
    /* =========================================================
       Rwanda NCD Alliance — Contact Page
       Modern NGO / Institutional Design
       Primary Brand: #5D89C8
    ========================================================= */

    #ncda-contact {
        --ink: #172033;
        --blue: #5D89C8;
        --blue-dark: #3F679F;
        --blue-deep: #294B78;
        --blue-soft: #EAF1FA;

        --gold: #C99A3E;
        --gold-soft: #F2E5C9;

        --paper: #F5F7FA;
        --white: #FFFFFF;

        --sage: #E1E8F0;
        --muted: #667085;
        --border: #DDE4ED;

        --radius-lg: 30px;
        --radius-md: 20px;
        --radius-sm: 14px;

        background: var(--paper);
        color: var(--ink);
        overflow: hidden;
    }

    #ncda-contact *,
    #ncda-contact *::before,
    #ncda-contact *::after {
        box-sizing: border-box;
    }

    /* =========================================================
       GLOBAL
    ========================================================= */

    #ncda-contact a {
        text-decoration: none;
    }

    #ncda-contact .container {
        width: min(1180px, calc(100% - 40px));
        margin: 0 auto;
    }

    /* =========================================================
       HERO
    ========================================================= */

    .ncda-contact-hero {
        position: relative;
        min-height: 560px;
        display: flex;
        align-items: center;
        padding: 90px 0 100px;
        background:
            radial-gradient(
                circle at 85% 20%,
                rgba(93, 137, 200, 0.12),
                transparent 28%
            ),
            linear-gradient(
                135deg,
                #ffffff 0%,
                #f5f7fa 55%,
                #edf3fa 100%
            );
        border-bottom: 1px solid var(--border);
    }

    .ncda-contact-hero::before {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        border: 1px solid rgba(93, 137, 200, 0.18);
        border-radius: 50%;
        right: -170px;
        top: -130px;
    }

    .ncda-contact-hero::after {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        border: 1px solid rgba(201, 154, 62, 0.18);
        border-radius: 50%;
        right: -80px;
        top: -50px;
    }

    .ncda-contact-hero-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 70px;
        align-items: center;
        position: relative;
        z-index: 2;
    }

    .ncda-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 22px;
        color: var(--blue);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.16em;
        text-transform: uppercase;
    }

    .ncda-eyebrow::before {
        content: "";
        width: 34px;
        height: 2px;
        background: var(--gold);
        border-radius: 999px;
    }

    .ncda-contact-title {
        margin: 0;
        max-width: 760px;
        color: var(--blue-deep);
        font-size: clamp(44px, 6vw, 76px);
        line-height: 0.98;
        letter-spacing: -0.045em;
        font-weight: 800;
    }

    .ncda-contact-title span {
        color: var(--blue);
    }

    .ncda-contact-intro {
        max-width: 650px;
        margin: 28px 0 0;
        color: var(--muted);
        font-size: 18px;
        line-height: 1.8;
    }

    /* =========================================================
       HERO VISUAL
    ========================================================= */

    .ncda-contact-orbit {
        position: relative;
        width: 360px;
        height: 360px;
        margin: 0 auto;
    }

    .ncda-orbit-circle {
        position: absolute;
        border: 1px solid rgba(93, 137, 200, 0.25);
        border-radius: 50%;
    }

    .ncda-orbit-circle.one {
        width: 360px;
        height: 360px;
        top: 0;
        left: 0;
    }

    .ncda-orbit-circle.two {
        width: 270px;
        height: 270px;
        top: 45px;
        left: 45px;
        border-color: rgba(201, 154, 62, 0.28);
    }

    .ncda-orbit-circle.three {
        width: 180px;
        height: 180px;
        top: 90px;
        left: 90px;
        border-color: rgba(93, 137, 200, 0.32);
    }

    .ncda-orbit-center {
        position: absolute;
        width: 130px;
        height: 130px;
        top: 115px;
        left: 115px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        padding: 20px;
        border-radius: 50%;
        background: var(--blue);
        color: #fff;
        box-shadow: 0 25px 60px rgba(41, 75, 120, 0.22);
    }

    .ncda-orbit-center strong {
        font-size: 17px;
        line-height: 1.25;
    }

    .ncda-orbit-dot {
        position: absolute;
        width: 13px;
        height: 13px;
        border-radius: 50%;
        background: var(--gold);
        box-shadow: 0 0 0 7px rgba(201, 154, 62, 0.10);
    }

    .ncda-orbit-dot.dot-one {
        top: 55px;
        right: 42px;
    }

    .ncda-orbit-dot.dot-two {
        bottom: 45px;
        left: 52px;
        background: var(--blue);
        box-shadow: 0 0 0 7px rgba(93, 137, 200, 0.10);
    }

    .ncda-orbit-dot.dot-three {
        top: 160px;
        left: 4px;
    }

    /* =========================================================
       CONTACT SECTION
    ========================================================= */

    .ncda-contact-section {
        padding: 100px 0;
        background: var(--white);
    }

    .ncda-contact-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 32px;
        align-items: stretch;
    }

    /* =========================================================
       FORM CARD
    ========================================================= */

    .ncda-form-card {
        padding: 44px;
        border: 1px solid var(--border);
        border-radius: var(--radius-lg);
        background: #fff;
        box-shadow: 0 25px 70px rgba(23, 32, 51, 0.06);
    }

    .ncda-section-label {
        margin-bottom: 10px;
        color: var(--blue);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.14em;
        text-transform: uppercase;
    }

    .ncda-form-title {
        margin: 0 0 12px;
        color: var(--blue-deep);
        font-size: 36px;
        line-height: 1.1;
        letter-spacing: -0.03em;
    }

    .ncda-form-description {
        margin: 0 0 34px;
        color: var(--muted);
        line-height: 1.7;
    }

    /* =========================================================
       VALIDATION
    ========================================================= */

    .ncda-alert {
        margin-bottom: 25px;
        padding: 17px 20px;
        border-radius: 14px;
        font-size: 14px;
    }

    .ncda-alert-danger {
        color: #842029;
        background: #f8d7da;
        border: 1px solid #f5c2c7;
    }

    .ncda-alert-success {
        color: #0f5132;
        background: #d1e7dd;
        border: 1px solid #badbcc;
    }

    .ncda-alert ul {
        margin: 0;
        padding-left: 18px;
    }

    /* =========================================================
       FORM
    ========================================================= */

    .ncda-form-row {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .ncda-form-group {
        margin-bottom: 21px;
    }

    .ncda-form-label {
        display: block;
        margin-bottom: 8px;
        color: var(--ink);
        font-size: 13px;
        font-weight: 700;
    }

    .ncda-form-control {
        width: 100%;
        min-height: 54px;
        padding: 14px 16px;
        border: 1px solid var(--border);
        border-radius: var(--radius-sm);
        outline: none;
        background: #fbfcfd;
        color: var(--ink);
        font-family: inherit;
        font-size: 15px;
        transition:
            border-color 0.2s ease,
            box-shadow 0.2s ease,
            background 0.2s ease;
    }

    .ncda-form-control:hover {
        border-color: #c7d2df;
        background: #fff;
    }

    .ncda-form-control:focus {
        border-color: var(--blue);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(93, 137, 200, 0.12);
    }

    textarea.ncda-form-control {
        min-height: 150px;
        resize: vertical;
    }

    .ncda-submit {
        width: 100%;
        min-height: 56px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        margin-top: 5px;
        padding: 15px 22px;
        border: 0;
        border-radius: 999px;
        background: var(--blue);
        color: #fff;
        font-family: inherit;
        font-size: 14px;
        font-weight: 800;
        cursor: pointer;
        transition:
            transform 0.2s ease,
            background 0.2s ease,
            box-shadow 0.2s ease;
    }

    .ncda-submit:hover {
        background: var(--blue-dark);
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(93, 137, 200, 0.25);
    }

    .ncda-submit-arrow {
        font-size: 18px;
        line-height: 1;
    }

    /* =========================================================
       CONTACT INFORMATION CARD
    ========================================================= */

    .ncda-info-card {
        position: relative;
        min-height: 100%;
        overflow: hidden;
        padding: 44px;
        border-radius: var(--radius-lg);
        background: var(--blue-deep);
        color: #fff;
        box-shadow: 0 25px 70px rgba(41, 75, 120, 0.18);
    }

    .ncda-info-card::before {
        content: "";
        position: absolute;
        width: 320px;
        height: 320px;
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-radius: 50%;
        right: -150px;
        top: -130px;
    }

    .ncda-info-card::after {
        content: "";
        position: absolute;
        width: 220px;
        height: 220px;
        border: 1px solid rgba(201, 154, 62, 0.25);
        border-radius: 50%;
        left: -120px;
        bottom: -100px;
    }

    .ncda-info-content {
        position: relative;
        z-index: 2;
    }

    .ncda-info-label {
        color: #bcd1eb;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.14em;
        text-transform: uppercase;
    }

    .ncda-info-title {
        margin: 13px 0 15px;
        color: #fff;
        font-size: 36px;
        line-height: 1.1;
        letter-spacing: -0.03em;
    }

    .ncda-info-description {
        margin: 0 0 35px;
        color: rgba(255, 255, 255, 0.72);
        line-height: 1.75;
    }

    .ncda-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 27px;
    }

    .ncda-contact-icon {
        flex: 0 0 45px;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.12);
        color: #fff;
        font-size: 18px;
    }

    .ncda-contact-item h4 {
        margin: 0 0 5px;
        color: #fff;
        font-size: 14px;
        font-weight: 800;
    }

    .ncda-contact-item p {
        margin: 0;
        color: rgba(255, 255, 255, 0.70);
        font-size: 14px;
        line-height: 1.65;
    }

    .ncda-contact-item a {
        color: rgba(255, 255, 255, 0.78);
        transition: color 0.2s ease;
    }

    .ncda-contact-item a:hover {
        color: #fff;
    }

    /* =========================================================
       MAP
    ========================================================= */

    .ncda-map-section {
        padding: 0 0 100px;
        background: var(--white);
    }

    .ncda-map-wrapper {
        overflow: hidden;
        min-height: 430px;
        border-radius: var(--radius-lg);
        border: 1px solid var(--border);
        background: #e9eef5;
        box-shadow: 0 20px 60px rgba(23, 32, 51, 0.06);
    }

    .ncda-map-wrapper iframe {
        display: block;
        width: 100%;
        height: 430px;
        border: 0;
    }

    /* =========================================================
       CTA
    ========================================================= */

    .ncda-contact-cta {
        padding: 0 0 100px;
        background: var(--white);
    }

    .ncda-cta-card {
        position: relative;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px;
        padding: 55px 60px;
        border-radius: var(--radius-lg);
        background: var(--blue);
        color: #fff;
    }

    .ncda-cta-card::before {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        border: 1px solid rgba(255, 255, 255, 0.16);
        border-radius: 50%;
        right: -100px;
        top: -130px;
    }

    .ncda-cta-card::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        border: 1px solid rgba(201, 154, 62, 0.35);
        border-radius: 50%;
        left: -80px;
        bottom: -100px;
    }

    .ncda-cta-content {
        position: relative;
        z-index: 2;
    }

    .ncda-cta-label {
        margin-bottom: 12px;
        color: #dce9f7;
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.14em;
        text-transform: uppercase;
    }

    .ncda-cta-title {
        max-width: 650px;
        margin: 0;
        color: #fff;
        font-size: clamp(30px, 4vw, 48px);
        line-height: 1.05;
        letter-spacing: -0.035em;
    }

    .ncda-cta-text {
        max-width: 620px;
        margin: 17px 0 0;
        color: rgba(255, 255, 255, 0.75);
        line-height: 1.7;
    }

    .ncda-cta-button {
        position: relative;
        z-index: 2;
        flex: 0 0 auto;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-height: 54px;
        padding: 15px 27px;
        border-radius: 999px;
        background: #fff;
        color: var(--blue-deep);
        font-size: 14px;
        font-weight: 800;
        transition:
            transform 0.2s ease,
            box-shadow 0.2s ease;
    }

    .ncda-cta-button:hover {
        color: var(--blue-deep);
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.14);
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 992px) {

        .ncda-contact-hero {
            min-height: auto;
            padding: 75px 0;
        }

        .ncda-contact-hero-grid {
            grid-template-columns: 1fr;
            gap: 55px;
        }

        .ncda-contact-orbit {
            width: 300px;
            height: 300px;
        }

        .ncda-orbit-circle.one {
            width: 300px;
            height: 300px;
        }

        .ncda-orbit-circle.two {
            width: 225px;
            height: 225px;
            top: 37px;
            left: 37px;
        }

        .ncda-orbit-circle.three {
            width: 150px;
            height: 150px;
            top: 75px;
            left: 75px;
        }

        .ncda-orbit-center {
            width: 110px;
            height: 110px;
            top: 95px;
            left: 95px;
        }

        .ncda-contact-grid {
            grid-template-columns: 1fr;
        }

        .ncda-cta-card {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    @media (max-width: 768px) {

        #ncda-contact .container {
            width: min(100% - 30px, 1180px);
        }

        .ncda-contact-hero {
            padding: 60px 0 70px;
        }

        .ncda-contact-title {
            font-size: clamp(40px, 12vw, 58px);
        }

        .ncda-contact-intro {
            font-size: 16px;
            line-height: 1.7;
        }

        .ncda-contact-section {
            padding: 65px 0;
        }

        .ncda-form-card,
        .ncda-info-card {
            padding: 30px;
            border-radius: 23px;
        }

        .ncda-form-title,
        .ncda-info-title {
            font-size: 30px;
        }

        .ncda-form-row {
            grid-template-columns: 1fr;
            gap: 0;
        }

        .ncda-map-section {
            padding-bottom: 65px;
        }

        .ncda-map-wrapper,
        .ncda-map-wrapper iframe {
            min-height: 330px;
            height: 330px;
        }

        .ncda-contact-cta {
            padding-bottom: 65px;
        }

        .ncda-cta-card {
            padding: 38px 30px;
            border-radius: 23px;
        }

        .ncda-cta-title {
            font-size: 34px;
        }
    }

    @media (max-width: 480px) {

        .ncda-contact-orbit {
            transform: scale(0.85);
            margin: -20px auto;
        }

        .ncda-form-card,
        .ncda-info-card {
            padding: 25px 20px;
        }

        .ncda-contact-item {
            gap: 12px;
        }

        .ncda-contact-icon {
            flex-basis: 40px;
            width: 40px;
            height: 40px;
        }

        .ncda-cta-card {
            padding: 32px 22px;
        }

        .ncda-cta-button {
            width: 100%;
        }
    }
</style>


<div id="ncda-contact">

    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="ncda-contact-hero">

        <div class="container">

            <div class="ncda-contact-hero-grid">

                <div>

                    <div class="ncda-eyebrow">
                        Contact Rwanda NCD Alliance
                    </div>

                    <h1 class="ncda-contact-title">
                        Let’s work together
                        <span>for a healthier Rwanda.</span>
                    </h1>

                    <p class="ncda-contact-intro">
                        Whether you want to collaborate, support our work,
                        share an idea, or learn more about non-communicable
                        disease prevention in Rwanda, we would love to hear
                        from you.
                    </p>

                </div>


                {{-- Decorative visual --}}

                <div class="ncda-contact-orbit">

                    <div class="ncda-orbit-circle one"></div>
                    <div class="ncda-orbit-circle two"></div>
                    <div class="ncda-orbit-circle three"></div>

                    <div class="ncda-orbit-dot dot-one"></div>
                    <div class="ncda-orbit-dot dot-two"></div>
                    <div class="ncda-orbit-dot dot-three"></div>

                    <div class="ncda-orbit-center">
                        <strong>
                            Connect.<br>
                            Collaborate.<br>
                            Impact.
                        </strong>
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CONTACT FORM + INFORMATION
    ====================================================== --}}

    <section class="ncda-contact-section">

        <div class="container">

            <div class="ncda-contact-grid">


                {{-- =========================
                     FORM
                ========================== --}}

                <div class="ncda-form-card">

                    <div class="ncda-section-label">
                        Send us a message
                    </div>

                    <h2 class="ncda-form-title">
                        How can we help?
                    </h2>

                    <p class="ncda-form-description">
                        Complete the form below and our team will get back
                        to you as soon as possible.
                    </p>


                    {{-- Validation errors --}}

                    @if ($errors->any())

                        <div class="ncda-alert ncda-alert-danger">

                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>

                        </div>

                    @endif


                    {{-- Success message --}}

                    @if (session('success'))

                        <div class="ncda-alert ncda-alert-success">
                            {{ session('success') }}
                        </div>

                    @endif


                    <form
                        action="{{ route('contact.send') }}"
                        method="POST"
                    >

                        @csrf


                        {{-- First + Last Name --}}

                        <div class="ncda-form-row">

                            <div class="ncda-form-group">

                                <label
                                    for="fname"
                                    class="ncda-form-label"
                                >
                                    First Name
                                </label>

                                <input
                                    type="text"
                                    id="fname"
                                    name="fname"
                                    class="ncda-form-control"
                                    value="{{ old('fname') }}"
                                    placeholder="Enter your first name"
                                    required
                                >

                            </div>


                            <div class="ncda-form-group">

                                <label
                                    for="lname"
                                    class="ncda-form-label"
                                >
                                    Last Name
                                </label>

                                <input
                                    type="text"
                                    id="lname"
                                    name="lname"
                                    class="ncda-form-control"
                                    value="{{ old('lname') }}"
                                    placeholder="Enter your last name"
                                    required
                                >

                            </div>

                        </div>


                        {{-- Email + Phone --}}

                        <div class="ncda-form-row">

                            <div class="ncda-form-group">

                                <label
                                    for="email"
                                    class="ncda-form-label"
                                >
                                    Email Address
                                </label>

                                <input
                                    type="email"
                                    id="email"
                                    name="email"
                                    class="ncda-form-control"
                                    value="{{ old('email') }}"
                                    placeholder="you@example.com"
                                    required
                                >

                            </div>


                            <div class="ncda-form-group">

                                <label
                                    for="phone"
                                    class="ncda-form-label"
                                >
                                    Phone Number
                                </label>

                                <input
                                    type="text"
                                    id="phone"
                                    name="phone"
                                    class="ncda-form-control"
                                    value="{{ old('phone') }}"
                                    placeholder="+250 7XX XXX XXX"
                                >

                            </div>

                        </div>


                        {{-- Subject --}}

                        <div class="ncda-form-group">

                            <label
                                for="subject"
                                class="ncda-form-label"
                            >
                                Subject
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                class="ncda-form-control"
                                value="{{ old('subject') }}"
                                placeholder="What would you like to discuss?"
                                required
                            >

                        </div>


                        {{-- Message --}}

                        <div class="ncda-form-group">

                            <label
                                for="message"
                                class="ncda-form-label"
                            >
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                class="ncda-form-control"
                                placeholder="Tell us how we can help..."
                                required
                            >{{ old('message') }}</textarea>

                        </div>


                        {{-- Submit --}}

                        <button
                            type="submit"
                            class="ncda-submit"
                        >

                            Send Message

                            <span class="ncda-submit-arrow">
                                →
                            </span>

                        </button>

                    </form>

                </div>


                {{-- =========================
                     CONTACT INFORMATION
                ========================== --}}

                <div class="ncda-info-card">

                    <div class="ncda-info-content">

                        <div class="ncda-info-label">
                            Get in touch
                        </div>

                        <h2 class="ncda-info-title">
                            We’re here to connect.
                        </h2>

                        <p class="ncda-info-description">
                            Reach out to the Rwanda NCD Alliance team.
                            We welcome partnerships, collaboration,
                            questions and opportunities to advance
                            NCD prevention and control.
                        </p>


                        {{-- Address --}}

                        <div class="ncda-contact-item">

                            <div class="ncda-contact-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>

                            <div>

                                <h4>
                                    Our Office
                                </h4>

                                <p>
                                    Kigali, Rwanda
                                </p>

                            </div>

                        </div>


                        {{-- Email --}}

                        <div class="ncda-contact-item">

                            <div class="ncda-contact-icon">
                                <i class="bi bi-envelope"></i>
                            </div>

                            <div>

                                <h4>
                                    Email
                                </h4>

                                <p>
                                    <a href="mailto:info@rwandancda.org">
                                        info@rwandancda.org
                                    </a>
                                </p>

                            </div>

                        </div>


                        {{-- Phone --}}

                        <div class="ncda-contact-item">

                            <div class="ncda-contact-icon">
                                <i class="bi bi-telephone"></i>
                            </div>

                            <div>

                                <h4>
                                    Phone
                                </h4>

                                <p>
                                    <a href="tel:+250000000000">
                                        +250 XXX XXX XXX
                                    </a>
                                </p>

                            </div>

                        </div>


                        {{-- Website --}}

                        <div class="ncda-contact-item">

                            <div class="ncda-contact-icon">
                                <i class="bi bi-globe2"></i>
                            </div>

                            <div>

                                <h4>
                                    Website
                                </h4>

                                <p>
                                    <a
                                        href="{{ url('/') }}"
                                    >
                                        Rwanda NCD Alliance
                                    </a>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         MAP
    ====================================================== --}}

    <section class="ncda-map-section">

        <div class="container">

            <div class="ncda-map-wrapper">

                <iframe
                    src="https://www.google.com/maps?q=Kigali%2C%20Rwanda&output=embed"
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    allowfullscreen>
                </iframe>

            </div>

        </div>

    </section>


    {{-- =====================================================
         CTA
    ====================================================== --}}

    <section class="ncda-contact-cta">

        <div class="container">

            <div class="ncda-cta-card">

                <div class="ncda-cta-content">

                    <div class="ncda-cta-label">
                        Join the movement
                    </div>

                    <h2 class="ncda-cta-title">
                        Together, we can build a healthier Rwanda.
                    </h2>

                    <p class="ncda-cta-text">
                        Strong partnerships and collective action are
                        essential to preventing and controlling
                        non-communicable diseases.
                    </p>

                </div>


                <a
                    href="{{ url('/about-us') }}"
                    class="ncda-cta-button"
                >
                    Learn More
                    <span style="margin-left:8px;">→</span>
                </a>

            </div>

        </div>

    </section>

</div>

@endsection