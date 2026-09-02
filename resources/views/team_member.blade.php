@extends('layouts.base')

@section('title', 'Our Team')

@section('description', 'Meet our Board, Workforce, Advisory and Volunteers Team Members. Get to know the dedicated people working to make a difference in the fight against non-communicable diseases.')

@section('content')

<style>
    /* =========================================================
       MODERN NGO TEAM PAGE
       Rwanda NCD Alliance
       ========================================================= */

    #ncda-team {
        --primary: #0A599E;
        --primary-dark: #073F70;
        --green: #16845C;
        --green-dark: #0E6043;
        --accent: #F2B84B;

        --ink: #172B3A;
        --muted: #667784;

        --background: #F5F9FC;
        --surface: #FFFFFF;
        --border: #E2EAF0;

        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        color: var(--ink);
        background: var(--background);
    }

    #ncda-team h1,
    #ncda-team h2,
    #ncda-team h3,
    #ncda-team h4 {
        font-family: 'Newsreader', Georgia, serif;
    }


    /* =========================================================
       HERO
       ========================================================= */

    .ncda-team-hero {
        position: relative;
        overflow: hidden;
        background:
            linear-gradient(
                135deg,
                #F2F8FC 0%,
                #FFFFFF 55%,
                #EFF8F4 100%
            );
        padding: 110px 0 90px;
    }

    .ncda-team-hero::before {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: rgba(10, 89, 158, 0.05);
        top: -260px;
        right: -120px;
    }

    .ncda-team-hero::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        border-radius: 50%;
        background: rgba(22, 132, 92, 0.05);
        bottom: -170px;
        left: -100px;
    }

    .ncda-team-hero-inner {
        position: relative;
        z-index: 2;
    }

    .ncda-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;

        color: var(--primary);
        font-size: 13px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: 1.2px;

        margin-bottom: 18px;
    }

    .ncda-eyebrow::before {
        content: "";
        width: 28px;
        height: 3px;
        border-radius: 5px;
        background: var(--green);
    }

    .ncda-team-hero h1 {
        max-width: 850px;

        font-size: clamp(42px, 6vw, 72px);
        line-height: 1.02;
        font-weight: 600;

        color: var(--primary-dark);

        margin: 0 0 25px;
    }

    .ncda-team-hero h1 span {
        color: var(--green);
    }

    .ncda-team-hero-description {
        max-width: 700px;

        font-size: 17px;
        line-height: 1.8;

        color: var(--muted);

        margin: 0;
    }

    .ncda-team-hero-stat {
        display: inline-flex;
        align-items: center;
        gap: 12px;

        margin-top: 35px;
        padding: 12px 18px;

        background: rgba(255,255,255,.75);
        border: 1px solid var(--border);

        border-radius: 50px;

        font-size: 13px;
        font-weight: 600;

        color: var(--primary-dark);

        box-shadow: 0 8px 30px rgba(10, 50, 80, .06);
    }

    .ncda-team-hero-stat-icon {
        width: 32px;
        height: 32px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #E8F5EF;
        color: var(--green);
    }


    /* =========================================================
       SECTION HEADERS
       ========================================================= */

    .ncda-team-section {
        padding: 90px 0;
    }

    .ncda-team-section--white {
        background: #FFFFFF;
    }

    .ncda-section-heading {
        display: flex;
        justify-content: space-between;
        align-items: end;
        gap: 30px;

        margin-bottom: 42px;
    }

    .ncda-section-heading-content {
        max-width: 650px;
    }

    .ncda-section-heading h2 {
        font-size: clamp(30px, 4vw, 44px);
        line-height: 1.15;

        color: var(--primary-dark);

        margin: 0 0 12px;
    }

    .ncda-section-heading p {
        font-size: 15px;
        line-height: 1.7;

        color: var(--muted);

        margin: 0;
    }

    .ncda-section-number {
        color: #C8D8E4;

        font-family: 'Newsreader', Georgia, serif;
        font-size: 48px;
        font-weight: 500;
    }


    /* =========================================================
       TEAM GRID
       ========================================================= */

    .ncda-team-grid {
        display: grid;
        gap: 25px;
    }

    .ncda-team-grid--4 {
        grid-template-columns: repeat(4, 1fr);
    }

    .ncda-team-grid--3 {
        grid-template-columns: repeat(3, 1fr);
    }

    @media (max-width: 1100px) {
        .ncda-team-grid--4 {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 850px) {
        .ncda-team-grid--4,
        .ncda-team-grid--3 {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 575px) {
        .ncda-team-grid--4,
        .ncda-team-grid--3 {
            grid-template-columns: 1fr;
        }
    }


    /* =========================================================
       TEAM CARD
       ========================================================= */

    .ncda-person-card {
        background: var(--surface);

        border: 1px solid var(--border);
        border-radius: 18px;

        overflow: hidden;

        transition:
            transform .25s ease,
            box-shadow .25s ease,
            border-color .25s ease;
    }

    .ncda-person-card:hover {
        transform: translateY(-7px);

        border-color: rgba(10, 89, 158, .18);

        box-shadow:
            0 18px 45px rgba(20, 55, 80, .12);
    }


    /* PHOTO */

    .ncda-person-photo {
        position: relative;

        aspect-ratio: 4 / 4.6;

        overflow: hidden;

        background:
            linear-gradient(
                145deg,
                #DCEAF3,
                #E8F3EE
            );
    }

    .ncda-person-photo img {
        width: 100%;
        height: 100%;

        object-fit: cover;

        display: block;

        transition: transform .45s ease;
    }

    .ncda-person-card:hover .ncda-person-photo img {
        transform: scale(1.045);
    }


    /* PHOTO OVERLAY */

    .ncda-person-overlay {
        position: absolute;
        inset: 0;

        display: flex;
        align-items: flex-end;
        justify-content: center;

        padding: 20px;

        background:
            linear-gradient(
                to top,
                rgba(7, 63, 112, .78),
                rgba(7, 63, 112, 0)
                60%
            );

        opacity: 0;

        transition: opacity .25s ease;
    }

    .ncda-person-card:hover .ncda-person-overlay {
        opacity: 1;
    }


    /* SOCIAL */

    .ncda-person-social {
        display: flex;
        gap: 8px;
    }

    .ncda-person-social a {
        width: 36px;
        height: 36px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: rgba(255,255,255,.95);

        color: var(--primary);

        text-decoration: none;

        font-size: 13px;

        transition: all .2s ease;
    }

    .ncda-person-social a:hover {
        background: var(--accent);
        color: var(--primary-dark);

        transform: translateY(-2px);
    }


    /* PERSON INFORMATION */

    .ncda-person-info {
        padding: 22px 22px 24px;
    }

    .ncda-person-name {
        font-size: 22px;
        line-height: 1.2;

        color: var(--primary-dark);

        margin: 0 0 6px;
    }

    .ncda-person-name a {
        color: inherit;
        text-decoration: none;
    }

    .ncda-person-role {
        color: var(--green);

        font-size: 13px;
        font-weight: 700;

        line-height: 1.5;

        margin: 0 0 18px;
    }

    .ncda-person-more {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        padding: 0;

        border: none;
        background: transparent;

        color: var(--primary);

        font-size: 13px;
        font-weight: 700;

        cursor: pointer;
    }

    .ncda-person-more span {
        width: 27px;
        height: 27px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 50%;

        background: #EDF5FA;

        transition: all .2s ease;
    }

    .ncda-person-more:hover span {
        background: var(--primary);
        color: #fff;

        transform: translateX(3px);
    }


    /* =========================================================
       VOLUNTEER / TECHNICAL SECTION
       ========================================================= */

    .ncda-workforce-section {
        position: relative;

        padding: 100px 0;

        background: var(--primary-dark);

        overflow: hidden;
    }

    .ncda-workforce-section::before {
        content: "";

        position: absolute;

        width: 450px;
        height: 450px;

        border-radius: 50%;

        border: 1px solid rgba(255,255,255,.08);

        top: -250px;
        right: -100px;
    }

    .ncda-workforce-section::after {
        content: "";

        position: absolute;

        width: 300px;
        height: 300px;

        border-radius: 50%;

        border: 1px solid rgba(255,255,255,.06);

        bottom: -190px;
        left: -100px;
    }

    .ncda-workforce-inner {
        position: relative;
        z-index: 2;
    }

    .ncda-workforce-heading {
        max-width: 680px;

        margin-bottom: 45px;
    }

    .ncda-workforce-heading .ncda-eyebrow {
        color: #9FD6BE;
    }

    .ncda-workforce-heading h2 {
        color: #fff;

        font-size: clamp(34px, 4vw, 48px);

        line-height: 1.15;

        margin: 0 0 15px;
    }

    .ncda-workforce-heading p {
        color: #B9CBD8;

        font-size: 16px;
        line-height: 1.7;

        margin: 0;
    }


    /* WORKFORCE CARDS */

    .ncda-workforce-grid {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 24px;
    }

    .ncda-workforce-card {
        position: relative;

        min-height: 360px;

        padding: 38px;

        display: flex;
        flex-direction: column;
        justify-content: flex-end;

        overflow: hidden;

        border-radius: 20px;

        background-size: cover;
        background-position: center;

        border: 1px solid rgba(255,255,255,.1);
    }

    .ncda-workforce-card::before {
        content: "";

        position: absolute;
        inset: 0;

        background:
            linear-gradient(
                to top,
                rgba(3, 27, 20, .97) 0%,
                rgba(3, 27, 20, .65) 50%,
                rgba(3, 27, 20, .1) 100%
            );
    }

    .ncda-workforce-card > * {
        position: relative;
        z-index: 2;
    }

    .ncda-workforce-icon {
        position: absolute;

        top: 30px;
        left: 30px;

        width: 50px;
        height: 50px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 14px;

        background: rgba(255,255,255,.12);

        color: #fff;

        font-size: 20px;

        backdrop-filter: blur(10px);
    }

    .ncda-workforce-card h3 {
        color: #fff;

        font-size: 30px;

        margin: 0 0 12px;
    }

    .ncda-workforce-card p {
        color: #D0DDD7;

        font-size: 14px;
        line-height: 1.75;

        margin: 0;
    }

    @media (max-width: 767px) {
        .ncda-workforce-grid {
            grid-template-columns: 1fr;
        }

        .ncda-workforce-card {
            min-height: 330px;
            padding: 28px;
        }
    }


    /* =========================================================
       MODAL
       ========================================================= */

    #ncda-team .modal-content {
        border: none;

        border-radius: 22px;

        overflow: hidden;

        background: #fff;

        box-shadow:
            0 30px 100px rgba(0,0,0,.2);
    }

    #ncda-team .modal-header {
        padding: 22px 28px;

        border-bottom: 1px solid var(--border);
    }

    #ncda-team .modal-header .modal-title {
        color: var(--primary-dark);

        font-family: 'Inter', sans-serif;

        font-size: 13px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: .7px;
    }

    #ncda-team .modal-body {
        padding: 0;
    }

    .ncda-modal-photo {
        height: 100%;
        min-height: 450px;

        overflow: hidden;

        background: #EAF1F5;
    }

    .ncda-modal-photo img {
        width: 100%;
        height: 100%;

        object-fit: cover;

        display: block;
    }

    .ncda-modal-info {
        padding: 45px;
    }

    .ncda-modal-name {
        color: var(--primary-dark);

        font-size: clamp(32px, 4vw, 45px);

        line-height: 1.1;

        margin: 0 0 8px;
    }

    .ncda-modal-role {
        color: var(--green);

        font-size: 14px;
        font-weight: 700;

        margin: 0 0 30px;
    }

    .ncda-modal-contact {
        list-style: none;

        padding: 0;
        margin: 0 0 28px;

        border-top: 1px solid var(--border);
    }

    .ncda-modal-contact li {
        padding: 13px 0;

        border-bottom: 1px solid var(--border);

        font-size: 14px;

        color: var(--muted);
    }

    .ncda-modal-contact a {
        color: var(--primary);

        text-decoration: none;
    }

    .ncda-modal-contact a:hover {
        text-decoration: underline;
    }

    .ncda-modal-description {
        color: var(--muted);

        font-size: 15px;

        line-height: 1.8;

        margin: 0;
    }

    .ncda-modal-close {
        border: none;

        background: var(--primary);

        color: #fff;

        padding: 10px 20px;

        border-radius: 50px;

        font-size: 13px;
        font-weight: 700;
    }

    .ncda-modal-close:hover {
        background: var(--primary-dark);
    }

    @media (max-width: 767px) {

        .ncda-modal-photo {
            min-height: 350px;
            height: 350px;
        }

        .ncda-modal-info {
            padding: 30px 25px;
        }
    }


    /* =========================================================
       REDUCED MOTION
       ========================================================= */

    @media (prefers-reduced-motion: reduce) {
        .ncda-person-card,
        .ncda-person-photo img,
        .ncda-person-overlay,
        .ncda-person-more span {
            transition: none;
        }
    }
</style>


{{-- GOOGLE FONTS --}}
<link rel="preconnect" href="https://fonts.googleapis.com">

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Newsreader:wght@400;500;600&display=swap"
    rel="stylesheet"
>


<div id="ncda-team">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="ncda-team-hero">

        <div class="container ncda-team-hero-inner">

            <div class="ncda-eyebrow">
                People behind the mission
            </div>

            <h1>
                Together, we are building
                <span>a healthier Rwanda.</span>
            </h1>

            <p class="ncda-team-hero-description">
                Meet the people who bring our mission to life.
                Our board, staff, volunteers and partners work together
                to strengthen the prevention and control of
                non-communicable diseases across Rwanda.
            </p>

            <div class="ncda-team-hero-stat">

                <span class="ncda-team-hero-stat-icon">
                    <i class="fa-solid fa-users"></i>
                </span>

                One mission. One team. Healthier communities.

            </div>

        </div>

    </section>


    {{-- =====================================================
         BOARD
    ====================================================== --}}

    <section class="ncda-team-section">

        <div class="container">

            <div class="ncda-section-heading">

                <div class="ncda-section-heading-content">

                    <div class="ncda-eyebrow">
                        Leadership
                    </div>

                    <h2>
                        Meet our Board
                    </h2>

                    <p>
                        Our board provides strategic leadership and
                        governance, helping guide the organisation toward
                        stronger health outcomes for communities across Rwanda.
                    </p>

                </div>

                <div class="ncda-section-number">
                    01
                </div>

            </div>


            <div class="ncda-team-grid ncda-team-grid--4">

                @foreach($workers->where('department', 'BOARD MEMBERS') as $worker)

                    <article class="ncda-person-card">

                        <div class="ncda-person-photo">

                            <img
                                src="{{ asset('new/img') }}/{{ $worker->photo }}"
                                alt="{{ $worker->name }}"
                                loading="lazy"
                            >

                            <div class="ncda-person-overlay">

                                <div class="ncda-person-social">

                                    <a href="#" aria-label="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>

                                    <a href="#" aria-label="X">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>

                                    <a href="#" aria-label="LinkedIn">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>

                                </div>

                            </div>

                        </div>


                        <div class="ncda-person-info">

                            <h3 class="ncda-person-name">

                                <a href="#">
                                    {{ $worker->name }}
                                </a>

                            </h3>

                            <p class="ncda-person-role">
                                {{ $worker->title }}
                            </p>

                            <button
                                type="button"
                                class="ncda-person-more"
                                data-bs-toggle="modal"
                                data-bs-target="#workerModal{{ $worker->id }}"
                            >

                                View profile

                                <span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>

                            </button>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =====================================================
         STAFF
    ====================================================== --}}

    <section class="ncda-team-section ncda-team-section--white">

        <div class="container">

            <div class="ncda-section-heading">

                <div class="ncda-section-heading-content">

                    <div class="ncda-eyebrow">
                        Our people
                    </div>

                    <h2>
                        The team behind the work
                    </h2>

                    <p>
                        Our dedicated workforce brings together expertise,
                        passion and community experience to turn our mission
                        into meaningful action.
                    </p>

                </div>

                <div class="ncda-section-number">
                    02
                </div>

            </div>


            <div class="ncda-team-grid ncda-team-grid--3">

                @foreach($workers->where('department', 'WORKFORCE') as $worker)

                    <article class="ncda-person-card">

                        <div class="ncda-person-photo">

                            <img
                                src="{{ asset('new/img') }}/{{ $worker->photo }}"
                                alt="{{ $worker->name }}"
                                loading="lazy"
                            >

                            <div class="ncda-person-overlay">

                                <div class="ncda-person-social">

                                    <a href="#" aria-label="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>

                                    <a href="#" aria-label="X">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>

                                    <a href="#" aria-label="LinkedIn">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>

                                </div>

                            </div>

                        </div>


                        <div class="ncda-person-info">

                            <h3 class="ncda-person-name">

                                <a href="#">
                                    {{ $worker->name }}
                                </a>

                            </h3>

                            <p class="ncda-person-role">
                                {{ $worker->title }}
                            </p>

                            <button
                                type="button"
                                class="ncda-person-more"
                                data-bs-toggle="modal"
                                data-bs-target="#workerModal{{ $worker->id }}"
                            >

                                View profile

                                <span>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>

                            </button>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    {{-- =====================================================
         VOLUNTEERS & TECHNICAL WORKGROUP
    ====================================================== --}}

    <section class="ncda-workforce-section">

        <div class="container ncda-workforce-inner">

            <div class="ncda-workforce-heading">

                <div class="ncda-eyebrow">
                    Beyond our core team
                </div>

                <h2>
                    A movement powered by people
                </h2>

                <p>
                    Lasting change requires collaboration. Our volunteers
                    and technical partners extend our reach and strengthen
                    the national response to non-communicable diseases.
                </p>

            </div>


            <div class="ncda-workforce-grid">


                {{-- VOLUNTEERS --}}

                <div
                    class="ncda-workforce-card"
                    style="background-image: url('{{ asset('assets/img/card_bg_1.png') }}');"
                >

                    <div class="ncda-workforce-icon">
                        <i class="fa-solid fa-hands-helping"></i>
                    </div>

                    <h3>
                        Our volunteers
                    </h3>

                    <p>
                        More than 50 volunteers are affiliated with RNCDA.
                        They come from health backgrounds, including recent
                        graduates and university students, bringing their
                        knowledge, energy and commitment back to communities.
                    </p>

                </div>


                {{-- TECHNICAL WORKGROUP --}}

                <div
                    class="ncda-workforce-card"
                    style="background-image: url('{{ asset('assets/img/card_bg_2.png') }}');"
                >

                    <div class="ncda-workforce-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </div>

                    <h3>
                        Technical work group
                    </h3>

                    <p>
                        The National NCD Technical Working Group brings
                        together government, civil society, academia and
                        development partners to coordinate Rwanda's national
                        NCD response, with Rwanda NCDA serving as secretary.
                    </p>

                </div>


            </div>

        </div>

    </section>


    {{-- =====================================================
         PROFILE MODALS
    ====================================================== --}}

    @foreach($workers as $worker)

        <div
            class="modal fade"
            id="workerModal{{ $worker->id }}"
            tabindex="-1"
            aria-labelledby="workerModalLabel{{ $worker->id }}"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-xl modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-header">

                        <span
                            class="modal-title"
                            id="workerModalLabel{{ $worker->id }}"
                        >
                            Team member profile
                        </span>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                        ></button>

                    </div>


                    <div class="modal-body">

                        <div class="row g-0">

                            {{-- PHOTO --}}

                            <div class="col-md-5">

                                <div class="ncda-modal-photo">

                                    <img
                                        src="{{ asset('new/img') }}/{{ $worker->photo }}"
                                        alt="{{ $worker->name }}"
                                    >

                                </div>

                            </div>


                            {{-- INFORMATION --}}

                            <div class="col-md-7">

                                <div class="ncda-modal-info">

                                    <h2 class="ncda-modal-name">
                                        {{ $worker->name }}
                                    </h2>

                                    <p class="ncda-modal-role">
                                        {{ $worker->title }}
                                    </p>


                                    <ul class="ncda-modal-contact">

                                        @if($worker->email)

                                            <li>
                                                <i class="fa-regular fa-envelope me-2"></i>

                                                <a href="mailto:{{ $worker->email }}">
                                                    {{ $worker->email }}
                                                </a>
                                            </li>

                                        @endif


                                        @if($worker->phone)

                                            <li>
                                                <i class="fa-solid fa-phone me-2"></i>

                                                <a href="tel:{{ $worker->phone }}">
                                                    {{ $worker->phone }}
                                                </a>
                                            </li>

                                        @endif

                                    </ul>


                                    <p class="ncda-modal-description">

                                        {{ $worker->description ?? 'No additional information provided.' }}

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    @endforeach


</div>

@endsection