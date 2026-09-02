@extends('layouts.base')

@section('title', 'Mission, Vision & Objectives')

@section('content')

<style>
    /* =========================================================
       Rwanda NCD Alliance
       Mission, Vision & Objectives
       Modern NGO / Institutional Design
    ========================================================= */

    #ncda-mvo {
        --ink: #172033;

        --blue: #5D89C8;
        --blue-dark: #3F679F;
        --blue-deep: #294B78;
        --blue-soft: #EAF1FA;

        --gold: #C99A3E;
        --gold-soft: #F2E5C9;

        --paper: #F5F7FA;
        --white: #FFFFFF;

        --muted: #667085;
        --border: #DDE4ED;
        --soft-border: rgba(93, 137, 200, 0.18);

        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        color: var(--ink);
        background: var(--paper);
        overflow: hidden;
    }

    #ncda-mvo *,
    #ncda-mvo *::before,
    #ncda-mvo *::after {
        box-sizing: border-box;
    }

    #ncda-mvo h1,
    #ncda-mvo h2,
    #ncda-mvo h3 {
        font-family: 'Newsreader', Georgia, serif;
        font-weight: 500;
        letter-spacing: -0.025em;
    }

    #ncda-mvo .container {
        width: min(1180px, calc(100% - 40px));
        margin: 0 auto;
    }

    /* =========================================================
       HERO
    ========================================================= */

    .ncda-mvo-hero {
        position: relative;
        min-height: 570px;
        display: flex;
        align-items: center;
        padding: 90px 0 100px;
        background:
            radial-gradient(
                circle at 80% 25%,
                rgba(93, 137, 200, 0.14),
                transparent 30%
            ),
            linear-gradient(
                135deg,
                #ffffff 0%,
                #f5f7fa 58%,
                #edf3fa 100%
            );
        border-bottom: 1px solid var(--border);
    }

    .ncda-mvo-hero::before {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        right: -220px;
        top: -190px;
        border: 1px solid rgba(93, 137, 200, 0.16);
        border-radius: 50%;
    }

    .ncda-mvo-hero::after {
        content: "";
        position: absolute;
        width: 330px;
        height: 330px;
        right: -100px;
        top: -100px;
        border: 1px solid rgba(201, 154, 62, 0.20);
        border-radius: 50%;
    }

    .ncda-mvo-hero-grid {
        position: relative;
        z-index: 2;

        display: grid;
        grid-template-columns: 1.05fr 0.95fr;
        gap: 70px;
        align-items: center;
    }

    .ncda-mvo-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;

        margin: 0 0 22px;

        color: var(--blue);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.16em;
        text-transform: uppercase;
    }

    .ncda-mvo-eyebrow::before {
        content: "";
        width: 34px;
        height: 2px;
        border-radius: 999px;
        background: var(--gold);
    }

    .ncda-mvo-hero h1 {
        max-width: 750px;
        margin: 0;

        color: var(--blue-deep);

        font-size: clamp(46px, 6.5vw, 78px);
        line-height: 0.98;
        letter-spacing: -0.045em;
    }

    .ncda-mvo-hero h1 span {
        color: var(--blue);
    }

    .ncda-mvo-intro {
        max-width: 650px;
        margin: 28px 0 0;

        color: var(--muted);
        font-size: 18px;
        line-height: 1.8;
    }

    /* =========================================================
       HERO VISUAL
    ========================================================= */

    .ncda-mvo-visual {
        position: relative;
        width: 370px;
        height: 370px;
        margin: 0 auto;
    }

    .ncda-mvo-ring {
        position: absolute;
        border: 1px solid rgba(93, 137, 200, 0.25);
        border-radius: 50%;
    }

    .ncda-mvo-ring.one {
        width: 370px;
        height: 370px;
        top: 0;
        left: 0;
    }

    .ncda-mvo-ring.two {
        width: 280px;
        height: 280px;
        top: 45px;
        left: 45px;
        border-color: rgba(201, 154, 62, 0.28);
    }

    .ncda-mvo-ring.three {
        width: 190px;
        height: 190px;
        top: 90px;
        left: 90px;
        border-color: rgba(93, 137, 200, 0.32);
    }

    .ncda-mvo-center {
        position: absolute;

        width: 135px;
        height: 135px;

        top: 117px;
        left: 117px;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 20px;

        border-radius: 50%;

        background: var(--blue);

        color: #fff;
        text-align: center;

        box-shadow:
            0 25px 65px rgba(41, 75, 120, 0.23);
    }

    .ncda-mvo-center strong {
        font-size: 17px;
        line-height: 1.25;
    }

    .ncda-mvo-dot {
        position: absolute;

        width: 13px;
        height: 13px;

        border-radius: 50%;

        background: var(--gold);

        box-shadow:
            0 0 0 7px rgba(201, 154, 62, 0.10);
    }

    .ncda-mvo-dot.one {
        right: 45px;
        top: 55px;
    }

    .ncda-mvo-dot.two {
        left: 42px;
        bottom: 50px;

        background: var(--blue);

        box-shadow:
            0 0 0 7px rgba(93, 137, 200, 0.10);
    }

    .ncda-mvo-dot.three {
        left: 5px;
        top: 165px;
    }

    /* =========================================================
       MISSION / VISION SECTION
    ========================================================= */

    .ncda-vm-section {
        padding: 100px 0;
        background: var(--white);
    }

    .ncda-vm-heading {
        max-width: 700px;
        margin-bottom: 55px;
    }

    .ncda-section-label {
        margin-bottom: 12px;

        color: var(--blue);

        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.15em;
        text-transform: uppercase;
    }

    .ncda-vm-heading h2 {
        margin: 0;

        color: var(--blue-deep);

        font-size: clamp(36px, 5vw, 54px);
        line-height: 1.05;
    }

    .ncda-vm-heading p {
        margin: 20px 0 0;

        color: var(--muted);
        font-size: 17px;
        line-height: 1.75;
    }

    .ncda-vm-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 24px;
    }

    /* =========================================================
       VISION / MISSION CARDS
    ========================================================= */

    .ncda-vm-card {
        position: relative;
        overflow: hidden;

        min-height: 370px;

        padding: 42px;

        border: 1px solid var(--border);
        border-radius: 26px;

        background: #fff;

        box-shadow:
            0 20px 60px rgba(23, 32, 51, 0.055);

        transition:
            transform 0.25s ease,
            box-shadow 0.25s ease,
            border-color 0.25s ease;
    }

    .ncda-vm-card:hover {
        transform: translateY(-5px);

        border-color: rgba(93, 137, 200, 0.35);

        box-shadow:
            0 28px 70px rgba(23, 32, 51, 0.09);
    }

    .ncda-vm-card::before {
        content: "";

        position: absolute;

        width: 180px;
        height: 180px;

        right: -75px;
        top: -75px;

        border: 1px solid rgba(93, 137, 200, 0.14);
        border-radius: 50%;
    }

    .ncda-vm-card::after {
        content: "";

        position: absolute;

        width: 120px;
        height: 120px;

        right: -45px;
        top: -45px;

        border: 1px solid rgba(201, 154, 62, 0.16);
        border-radius: 50%;
    }

    .ncda-vm-number {
        position: relative;
        z-index: 2;

        width: 54px;
        height: 54px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-bottom: 30px;

        border-radius: 16px;

        background: var(--blue-soft);

        color: var(--blue);

        font-size: 18px;
        font-weight: 800;
    }

    .ncda-vm-label {
        position: relative;
        z-index: 2;

        margin: 0 0 10px;

        color: var(--gold);

        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.14em;
        text-transform: uppercase;
    }

    .ncda-vm-card h3 {
        position: relative;
        z-index: 2;

        margin: 0 0 18px;

        color: var(--blue-deep);

        font-size: 34px;
        line-height: 1.1;
    }

    .ncda-vm-card p {
        position: relative;
        z-index: 2;

        max-width: 55ch;

        margin: 0;

        color: var(--muted);

        font-size: 16px;
        line-height: 1.8;
    }

    /* =========================================================
       OBJECTIVES
    ========================================================= */

    .ncda-objectives {
        position: relative;
        overflow: hidden;

        padding: 100px 0;

        background: var(--blue-deep);
    }

    .ncda-objectives::before {
        content: "";

        position: absolute;

        width: 520px;
        height: 520px;

        right: -250px;
        top: -220px;

        border: 1px solid rgba(255,255,255,0.10);
        border-radius: 50%;
    }

    .ncda-objectives::after {
        content: "";

        position: absolute;

        width: 340px;
        height: 340px;

        left: -180px;
        bottom: -190px;

        border: 1px solid rgba(201,154,62,0.20);
        border-radius: 50%;
    }

    .ncda-objectives-inner {
        position: relative;
        z-index: 2;
    }

    .ncda-objectives-heading {
        display: grid;

        grid-template-columns: 0.85fr 1.15fr;

        gap: 70px;

        align-items: end;

        margin-bottom: 50px;
    }

    .ncda-objectives-heading .label {
        color: #BFD3EB;

        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.15em;
        text-transform: uppercase;
    }

    .ncda-objectives-heading h2 {
        margin: 10px 0 0;

        color: #fff;

        font-size: clamp(38px, 5vw, 58px);
        line-height: 1;
    }

    .ncda-objectives-heading p {
        max-width: 600px;

        margin: 0;

        color: rgba(255,255,255,0.70);

        font-size: 17px;
        line-height: 1.75;
    }

    .ncda-objectives-list {
        display: grid;

        grid-template-columns: repeat(2, 1fr);

        gap: 0 55px;

        margin: 0;
        padding: 0;

        list-style: none;
    }

    .ncda-objective {
        display: flex;

        gap: 18px;

        padding: 25px 0;

        border-bottom: 1px solid rgba(255,255,255,0.12);

        color: rgba(255,255,255,0.82);

        font-size: 16px;
        line-height: 1.65;
    }

    .ncda-objective-icon {
        flex: 0 0 34px;

        width: 34px;
        height: 34px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin-top: 2px;

        border-radius: 50%;

        background: rgba(93,137,200,0.25);

        color: #fff;

        font-size: 13px;
    }

    .ncda-objective strong {
        color: #fff;
    }

    /* =========================================================
       OBJECTIVES CTA
    ========================================================= */

    .ncda-objectives-cta {
        margin-top: 50px;
    }

    .ncda-btn {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 10px;

        min-height: 54px;

        padding: 14px 27px;

        border-radius: 999px;

        background: var(--gold);

        color: var(--blue-deep);

        font-size: 14px;
        font-weight: 800;

        text-decoration: none;

        transition:
            transform 0.2s ease,
            background 0.2s ease,
            box-shadow 0.2s ease;
    }

    .ncda-btn:hover {
        background: #DCAF52;

        color: var(--blue-deep);

        transform: translateY(-2px);

        box-shadow:
            0 14px 30px rgba(0,0,0,0.16);
    }

    .ncda-btn-arrow {
        font-size: 18px;
    }

    /* =========================================================
       TEAM CTA
    ========================================================= */

    .ncda-team-section {
        padding: 100px 0;

        background: var(--paper);
    }

    .ncda-team-card {
        position: relative;
        overflow: hidden;

        display: grid;

        grid-template-columns: 1fr auto;

        align-items: center;

        gap: 50px;

        padding: 60px;

        border-radius: 30px;

        background: var(--blue);

        box-shadow:
            0 25px 70px rgba(41,75,120,0.18);
    }

    .ncda-team-card::before {
        content: "";

        position: absolute;

        width: 360px;
        height: 360px;

        right: -170px;
        top: -170px;

        border: 1px solid rgba(255,255,255,0.15);

        border-radius: 50%;
    }

    .ncda-team-card::after {
        content: "";

        position: absolute;

        width: 220px;
        height: 220px;

        left: -120px;
        bottom: -130px;

        border: 1px solid rgba(201,154,62,0.30);

        border-radius: 50%;
    }

    .ncda-team-content {
        position: relative;
        z-index: 2;
    }

    .ncda-team-label {
        margin-bottom: 12px;

        color: #DCE9F7;

        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.15em;
        text-transform: uppercase;
    }

    .ncda-team-card h2 {
        max-width: 650px;

        margin: 0;

        color: #fff;

        font-size: clamp(34px, 4vw, 50px);
        line-height: 1.05;
    }

    .ncda-team-card p {
        max-width: 620px;

        margin: 18px 0 0;

        color: rgba(255,255,255,0.74);

        font-size: 16px;
        line-height: 1.7;
    }

    .ncda-team-action {
        position: relative;
        z-index: 2;
    }

    .ncda-team-action .ncda-btn {
        background: #fff;

        color: var(--blue-deep);

        white-space: nowrap;
    }

    .ncda-team-action .ncda-btn:hover {
        background: #fff;

        color: var(--blue-deep);
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 992px) {

        .ncda-mvo-hero {
            min-height: auto;
        }

        .ncda-mvo-hero-grid {
            grid-template-columns: 1fr;

            gap: 65px;
        }

        .ncda-mvo-visual {
            transform: scale(0.9);
        }

        .ncda-objectives-heading {
            grid-template-columns: 1fr;

            gap: 20px;
        }

        .ncda-team-card {
            grid-template-columns: 1fr;
        }

    }

    @media (max-width: 768px) {

        #ncda-mvo .container {
            width: min(100% - 30px, 1180px);
        }

        .ncda-mvo-hero {
            padding: 65px 0 75px;
        }

        .ncda-mvo-hero h1 {
            font-size: clamp(43px, 12vw, 62px);
        }

        .ncda-mvo-intro {
            font-size: 16px;
        }

        .ncda-mvo-visual {
            transform: scale(0.78);
            margin-top: -15px;
            margin-bottom: -35px;
        }

        .ncda-vm-section {
            padding: 70px 0;
        }

        .ncda-vm-grid {
            grid-template-columns: 1fr;
        }

        .ncda-vm-card {
            min-height: auto;
            padding: 32px;
        }

        .ncda-vm-card h3 {
            font-size: 31px;
        }

        .ncda-objectives {
            padding: 70px 0;
        }

        .ncda-objectives-list {
            grid-template-columns: 1fr;
        }

        .ncda-team-section {
            padding: 70px 0;
        }

        .ncda-team-card {
            padding: 40px 30px;
            border-radius: 24px;
        }

        .ncda-team-action .ncda-btn {
            width: 100%;
        }
    }

    @media (max-width: 480px) {

        .ncda-mvo-visual {
            transform: scale(0.68);
            margin-left: -25px;
            margin-right: -25px;
        }

        .ncda-vm-card {
            padding: 28px 23px;
        }

        .ncda-objective {
            gap: 13px;
        }

        .ncda-team-card {
            padding: 35px 22px;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .ncda-vm-card,
        .ncda-btn {
            transition: none;
        }
    }
</style>


{{-- Google Fonts --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Newsreader:wght@400;500;600&display=swap"
    rel="stylesheet"
>


<div id="ncda-mvo">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="ncda-mvo-hero">

        <div class="container">

            <div class="ncda-mvo-hero-grid">

                <div>

                    <p class="ncda-mvo-eyebrow">
                        Get to know us
                    </p>

                    <h1>
                        Our mission,
                        <span>vision</span>
                        &amp; objectives
                    </h1>

                    <p class="ncda-mvo-intro">
                        Working together as an alliance provides a mutual
                        platform for collaboration and joint advocacy to
                        drive the NCD agenda forward and build a healthier Rwanda.
                    </p>

                </div>


                {{-- Decorative visual --}}

                <div class="ncda-mvo-visual">

                    <div class="ncda-mvo-ring one"></div>
                    <div class="ncda-mvo-ring two"></div>
                    <div class="ncda-mvo-ring three"></div>

                    <div class="ncda-mvo-dot one"></div>
                    <div class="ncda-mvo-dot two"></div>
                    <div class="ncda-mvo-dot three"></div>

                    <div class="ncda-mvo-center">
                        <strong>
                            One voice.<br>
                            Shared action.<br>
                            Better health.
                        </strong>
                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         VISION + MISSION
    ====================================================== --}}

    <section class="ncda-vm-section">

        <div class="container">

            <div class="ncda-vm-heading">

                <div class="ncda-section-label">
                    What drives us
                </div>

                <h2>
                    A shared direction for a healthier Rwanda.
                </h2>

                <p>
                    Our vision and mission guide our collective efforts to
                    prevent and control non-communicable diseases and improve
                    health and well-being across Rwanda.
                </p>

            </div>


            <div class="ncda-vm-grid">


                {{-- Vision --}}

                <article class="ncda-vm-card">

                    <div class="ncda-vm-number">
                        01
                    </div>

                    <p class="ncda-vm-label">
                        Vision
                    </p>

                    <h3>
                        A healthy Rwanda
                    </h3>

                    <p>
                        A healthy people in a nation free from preventable
                        suffering, disability, and deaths caused by
                        Non-Communicable Diseases.
                    </p>

                </article>


                {{-- Mission --}}

                <article class="ncda-vm-card">

                    <div class="ncda-vm-number">
                        02
                    </div>

                    <p class="ncda-vm-label">
                        Mission
                    </p>

                    <h3>
                        One voice for NCDs
                    </h3>

                    <p>
                        To unite the efforts and create a powerful voice for
                        NCD awareness raising, advocate for the prevention and
                        control of NCDs and their risk factors in Rwanda, by
                        promoting multisectoral partnerships, healthy lifestyle
                        education, early detection and responding to NCD
                        challenges to improve health and well-being.
                    </p>

                </article>

            </div>

        </div>

    </section>


    {{-- =====================================================
         OBJECTIVES
    ====================================================== --}}

    <section class="ncda-objectives">

        <div class="container">

            <div class="ncda-objectives-inner">


                <div class="ncda-objectives-heading">

                    <div>

                        <div class="label">
                            Our priorities
                        </div>

                        <h2>
                            Our objectives
                        </h2>

                    </div>

                    <p>
                        We bring members, communities and partners together
                        to strengthen NCD prevention, advocacy, policy and
                        access to quality care across Rwanda.
                    </p>

                </div>


                <ul class="ncda-objectives-list">


                    <li class="ncda-objective">

                        <span class="ncda-objective-icon">
                            <i class="fa-solid fa-check"></i>
                        </span>

                        <span>
                            <strong>
                                Building capacity
                            </strong>
                            and providing technical support to members.
                        </span>

                    </li>


                    <li class="ncda-objective">

                        <span class="ncda-objective-icon">
                            <i class="fa-solid fa-check"></i>
                        </span>

                        <span>
                            <strong>
                                Leading awareness
                            </strong>
                            and healthy lifestyle education for NCD prevention.
                        </span>

                    </li>


                    <li class="ncda-objective">

                        <span class="ncda-objective-icon">
                            <i class="fa-solid fa-check"></i>
                        </span>

                        <span>
                            <strong>
                                Empowering people living with NCDs
                            </strong>
                            and advocating for access to quality care.
                        </span>

                    </li>


                    <li class="ncda-objective">

                        <span class="ncda-objective-icon">
                            <i class="fa-solid fa-check"></i>
                        </span>

                        <span>
                            <strong>
                                Advocating for communities
                            </strong>
                            on the prevention and control of NCDs.
                        </span>

                    </li>


                    <li class="ncda-objective">

                        <span class="ncda-objective-icon">
                            <i class="fa-solid fa-check"></i>
                        </span>

                        <span>
                            <strong>
                                Contributing to evidence-based
                            </strong>
                            NCD policies and practices.
                        </span>

                    </li>


                </ul>


                <div class="ncda-objectives-cta">

                    <a
                        href="{{ URL::route('message') }}"
                        class="ncda-btn"
                    >
                        Let's collaborate

                        <span class="ncda-btn-arrow">
                            →
                        </span>
                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         TEAM CTA
    ====================================================== --}}

    <section class="ncda-team-section">

        <div class="container">

            <div class="ncda-team-card">

                <div class="ncda-team-content">

                    <div class="ncda-team-label">
                        Our people
                    </div>

                    <h2>
                        Meet the expert support workforce.
                    </h2>

                    <p>
                        Get to know our dedicated team members who are
                        committed to making a difference in the field of
                        non-communicable diseases.
                    </p>

                </div>


                <div class="ncda-team-action">

                    <a
                        href="{{ URL::route('team') }}"
                        class="ncda-btn"
                    >
                        Meet the workforce

                        <span class="ncda-btn-arrow">
                            →
                        </span>
                    </a>

                </div>

            </div>

        </div>

    </section>


</div>

@endsection