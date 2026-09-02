@extends('layouts.base')
@section('title', 'About Us')

@section('content')

<style>
    /* =========================================================
       Rwanda NCD Alliance — Professional About Page
       Scoped to #rncda-about-page to avoid layout conflicts
    ========================================================= */

    #rncda-about-page {
        --rncda-blue: #0A599E;
        --rncda-blue-dark: #073F70;
        --rncda-green: #16845C;
        --rncda-green-dark: #0E6043;
        --rncda-gold: #F2B84B;

        --rncda-ink: #15232D;
        --rncda-muted: #60707A;
        --rncda-light: #F5F9FC;
        --rncda-border: #E3EAF0;
        --rncda-white: #FFFFFF;

        --rncda-radius: 16px;

        font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        color: var(--rncda-ink);
        background: #fff;
        overflow: hidden;
    }

    #rncda-about-page *,
    #rncda-about-page *::before,
    #rncda-about-page *::after {
        box-sizing: border-box;
    }

    #rncda-about-page h1,
    #rncda-about-page h2,
    #rncda-about-page h3 {
        font-family: 'Newsreader', Georgia, serif;
        font-weight: 500;
        letter-spacing: -0.02em;
    }

    #rncda-about-page a {
        transition:
            color .2s ease,
            background-color .2s ease,
            border-color .2s ease,
            transform .2s ease,
            box-shadow .2s ease;
    }

    /* =========================================================
       HERO
    ========================================================= */

    .rncda-about-hero {
        position: relative;
        background:
            linear-gradient(
                120deg,
                rgba(7, 63, 112, .98) 0%,
                rgba(10, 89, 158, .94) 58%,
                rgba(22, 132, 92, .90) 100%
            );
        color: #fff;
        padding: 105px 0 110px;
        isolation: isolate;
    }

    .rncda-about-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        z-index: -1;
        opacity: .13;
        background-image:
            radial-gradient(circle at 15% 20%, #fff 0 1px, transparent 1.5px),
            radial-gradient(circle at 80% 75%, #fff 0 1px, transparent 1.5px);
        background-size: 42px 42px, 58px 58px;
    }

    .rncda-about-hero::after {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        border: 1px solid rgba(255,255,255,.14);
        border-radius: 50%;
        right: -160px;
        top: -170px;
        z-index: -1;
    }

    .rncda-hero-inner {
        position: relative;
        z-index: 2;
    }

    .rncda-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 20px;
        color: #DFF2FF;
        font-size: .82rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    .rncda-eyebrow::before {
        content: "";
        width: 30px;
        height: 2px;
        background: var(--rncda-gold);
        border-radius: 2px;
    }

    .rncda-hero-title {
        max-width: 820px;
        margin: 0 0 25px;
        font-size: clamp(2.8rem, 5.5vw, 5rem);
        line-height: 1.02;
        color: #fff;
    }

    .rncda-hero-title span {
        color: #D8F0E6;
    }

    .rncda-hero-description {
        max-width: 720px;
        margin: 0;
        color: rgba(255,255,255,.86);
        font-size: 1.1rem;
        line-height: 1.8;
    }

    .rncda-hero-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 34px;
    }

    .rncda-meta-pill {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 10px 15px;
        border: 1px solid rgba(255,255,255,.2);
        border-radius: 999px;
        background: rgba(255,255,255,.08);
        color: #fff;
        font-size: .88rem;
        font-weight: 600;
        backdrop-filter: blur(8px);
    }

    .rncda-meta-pill svg {
        width: 17px;
        height: 17px;
        flex: 0 0 auto;
    }

    /* =========================================================
       INTRODUCTION
    ========================================================= */

    .rncda-intro {
        padding: 105px 0;
        background: #fff;
    }

    .rncda-section-label {
        margin: 0 0 14px;
        color: var(--rncda-blue);
        font-size: .82rem;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    .rncda-section-title {
        margin: 0 0 25px;
        color: var(--rncda-blue-dark);
        font-size: clamp(2.2rem, 4vw, 3.4rem);
        line-height: 1.1;
    }

    .rncda-section-title em {
        color: var(--rncda-green);
        font-style: normal;
    }

    .rncda-intro-copy {
        max-width: 680px;
        color: var(--rncda-muted);
        font-size: 1.08rem;
        line-height: 1.85;
        margin: 0;
    }

    .rncda-intro-copy a {
        color: var(--rncda-blue);
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px solid rgba(10,89,158,.25);
    }

    .rncda-intro-copy a:hover {
        color: var(--rncda-green);
        border-color: var(--rncda-green);
    }

    /* =========================================================
       STAT CARDS
    ========================================================= */

    .rncda-stat-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
        margin-top: 42px;
    }

    .rncda-stat-card {
        position: relative;
        padding: 28px;
        border: 1px solid var(--rncda-border);
        border-radius: var(--rncda-radius);
        background: var(--rncda-light);
        overflow: hidden;
    }

    .rncda-stat-card::after {
        content: "";
        position: absolute;
        width: 100px;
        height: 100px;
        right: -45px;
        bottom: -45px;
        border-radius: 50%;
        background: rgba(22,132,92,.08);
    }

    .rncda-stat-number {
        display: block;
        margin-bottom: 7px;
        color: var(--rncda-blue);
        font-family: 'Newsreader', Georgia, serif;
        font-size: 3.25rem;
        line-height: 1;
    }

    .rncda-stat-label {
        display: block;
        color: var(--rncda-muted);
        font-size: .92rem;
        line-height: 1.5;
    }

    /* =========================================================
       SIDE HIGHLIGHT
    ========================================================= */

    .rncda-highlight {
        position: relative;
        min-height: 430px;
        border-radius: 22px;
        overflow: hidden;
        background:
            linear-gradient(
                145deg,
                rgba(7,63,112,.05),
                rgba(22,132,92,.12)
            );
        border: 1px solid var(--rncda-border);
    }

    .rncda-highlight-inner {
        position: absolute;
        inset: 0;
        padding: 38px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        background:
            linear-gradient(
                to top,
                rgba(7,63,112,.94) 0%,
                rgba(7,63,112,.45) 42%,
                rgba(7,63,112,.03) 80%
            ),
            url("{{ asset('new/img/content/about-05.jpg') }}")
            center / cover no-repeat;
    }

    .rncda-highlight-badge {
        display: inline-flex;
        align-items: center;
        align-self: flex-start;
        margin-bottom: 15px;
        padding: 9px 14px;
        border-radius: 999px;
        background: var(--rncda-gold);
        color: #173044;
        font-size: .8rem;
        font-weight: 700;
    }

    .rncda-highlight-title {
        margin: 0;
        color: #fff;
        font-size: 2rem;
        line-height: 1.15;
    }

    .rncda-highlight-text {
        margin: 10px 0 0;
        max-width: 430px;
        color: rgba(255,255,255,.82);
        line-height: 1.6;
        font-size: .94rem;
    }

    /* =========================================================
       VALUES / MISSION
    ========================================================= */

    .rncda-purpose {
        padding: 105px 0;
        background: var(--rncda-light);
    }

    .rncda-purpose-header {
        max-width: 720px;
        margin-bottom: 55px;
    }

    .rncda-purpose-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 55px;
    }

    .rncda-purpose-card {
        padding: 38px;
        border-radius: var(--rncda-radius);
        background: #fff;
        border: 1px solid var(--rncda-border);
        box-shadow: 0 8px 30px rgba(7,63,112,.04);
    }

    .rncda-purpose-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 48px;
        height: 48px;
        margin-bottom: 24px;
        border-radius: 14px;
        background: rgba(10,89,158,.09);
        color: var(--rncda-blue);
    }

    .rncda-purpose-icon.green {
        background: rgba(22,132,92,.1);
        color: var(--rncda-green);
    }

    .rncda-purpose-icon svg {
        width: 24px;
        height: 24px;
    }

    .rncda-purpose-card h3 {
        margin: 0 0 13px;
        color: var(--rncda-blue-dark);
        font-size: 1.8rem;
    }

    .rncda-purpose-card p {
        margin: 0;
        color: var(--rncda-muted);
        line-height: 1.75;
    }

    /* Objectives */

    .rncda-objectives {
        padding: 42px;
        border-radius: 20px;
        background: var(--rncda-blue-dark);
        color: #fff;
    }

    .rncda-objectives h3 {
        margin: 0 0 28px;
        color: #fff;
        font-size: 2rem;
    }

    .rncda-objectives-list {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 17px 45px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .rncda-objectives-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        color: rgba(255,255,255,.82);
        line-height: 1.6;
        font-size: .95rem;
    }

    .rncda-check {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        flex: 0 0 22px;
        margin-top: 1px;
        border-radius: 50%;
        background: rgba(242,184,75,.15);
        color: var(--rncda-gold);
    }

    .rncda-check svg {
        width: 13px;
        height: 13px;
    }

    /* =========================================================
       GLOBAL COLLABORATION CTA
    ========================================================= */

    .rncda-cta-section {
        padding: 105px 0;
        background: #fff;
    }

    .rncda-cta {
        position: relative;
        display: grid;
        grid-template-columns: 1.1fr .9fr;
        min-height: 420px;
        overflow: hidden;
        border-radius: 22px;
        background: var(--rncda-green-dark);
        box-shadow: 0 20px 55px rgba(14,96,67,.16);
    }

    .rncda-cta-copy {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 65px;
    }

    .rncda-cta-copy .rncda-section-label {
        color: #AEE3CC;
    }

    .rncda-cta-copy h2 {
        max-width: 540px;
        margin: 0 0 20px;
        color: #fff;
        font-size: clamp(2.2rem, 4vw, 3.25rem);
        line-height: 1.1;
    }

    .rncda-cta-copy p {
        max-width: 600px;
        margin: 0 0 32px;
        color: rgba(255,255,255,.78);
        font-size: 1rem;
        line-height: 1.8;
    }

    .rncda-cta-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        align-self: flex-start;
        padding: 14px 23px;
        border-radius: 8px;
        background: var(--rncda-gold);
        color: #173044;
        font-weight: 700;
        font-size: .95rem;
        text-decoration: none;
    }

    .rncda-cta-btn:hover {
        transform: translateY(-2px);
        background: #FFD06D;
        color: #173044;
        box-shadow: 0 8px 20px rgba(0,0,0,.15);
    }

    .rncda-cta-btn svg {
        width: 18px;
        height: 18px;
    }

    .rncda-cta-image {
        min-height: 420px;
        background:
            linear-gradient(
                120deg,
                rgba(14,96,67,.15),
                rgba(7,63,112,.28)
            ),
            url("{{ asset('assets/img/card_bg_2.png') }}")
            center / cover no-repeat;
    }

    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 991px) {
        .rncda-about-hero {
            padding: 80px 0 85px;
        }

        .rncda-intro,
        .rncda-purpose,
        .rncda-cta-section {
            padding: 80px 0;
        }

        .rncda-highlight {
            margin-top: 50px;
        }

        .rncda-cta {
            grid-template-columns: 1fr;
        }

        .rncda-cta-image {
            min-height: 300px;
            order: -1;
        }
    }

    @media (max-width: 767px) {
        .rncda-about-hero {
            padding: 65px 0 70px;
        }

        .rncda-hero-title {
            font-size: clamp(2.5rem, 12vw, 3.6rem);
        }

        .rncda-hero-description {
            font-size: 1rem;
        }

        .rncda-intro,
        .rncda-purpose,
        .rncda-cta-section {
            padding: 65px 0;
        }

        .rncda-section-title {
            font-size: 2.45rem;
        }

        .rncda-stat-grid {
            grid-template-columns: 1fr;
        }

        .rncda-highlight {
            min-height: 380px;
        }

        .rncda-purpose-grid {
            grid-template-columns: 1fr;
        }

        .rncda-purpose-card,
        .rncda-objectives {
            padding: 30px 25px;
        }

        .rncda-objectives-list {
            grid-template-columns: 1fr;
            gap: 17px;
        }

        .rncda-cta-copy {
            padding: 42px 28px;
        }

        .rncda-cta-image {
            min-height: 250px;
        }
    }

    @media (max-width: 480px) {
        .rncda-meta-pill {
            width: 100%;
        }

        .rncda-highlight-inner {
            padding: 25px;
        }

        .rncda-stat-card {
            padding: 24px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #rncda-about-page *,
        #rncda-about-page *::before,
        #rncda-about-page *::after {
            scroll-behavior: auto !important;
            transition: none !important;
        }
    }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Newsreader:opsz,wght@6..72,400;6..72,500;6..72,600&display=swap" rel="stylesheet">


<div id="rncda-about-page">

    {{-- =====================================================
         HERO
    ====================================================== --}}
    <section class="rncda-about-hero">
        <div class="container">
            <div class="rncda-hero-inner">

                <p class="rncda-eyebrow">About Rwanda NCD Alliance</p>

                <h1 class="rncda-hero-title">
                    A stronger, <span>unified voice</span> against NCDs in Rwanda
                </h1>

                <p class="rncda-hero-description">
                    Bringing together civil society organizations, people living with
                    non-communicable diseases, health professionals, youth-led groups
                    and private institutions to advance healthier communities across Rwanda.
                </p>

                <div class="rncda-hero-meta">

                    <span class="rncda-meta-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2"/>
                            <path d="M16 2v4M8 2v4M3 10h18"/>
                        </svg>
                        Founded in 2016
                    </span>

                    <span class="rncda-meta-pill">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        25 member organizations
                    </span>

                </div>

            </div>
        </div>
    </section>


    {{-- =====================================================
         WHO WE ARE
    ====================================================== --}}
    <section class="rncda-intro">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-7">

                    <p class="rncda-section-label">Who we are</p>

                    <h2 class="rncda-section-title">
                        Connecting people and organizations for a
                        <em>healthier Rwanda.</em>
                    </h2>

                    <p class="rncda-intro-copy">
                        Rwanda Non-Communicable Diseases Alliance is a unique civil society
                        network,
                        <a
                            href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            founded in 2016
                        </a>,
                        and uniting 25 organizations — including NCD patients,
                        health care professionals, youth-led organizations and private
                        institutions — working on NCDs in Rwanda.
                    </p>

                    <div class="rncda-stat-grid">

                        <div class="rncda-stat-card">
                            <span class="rncda-stat-number">2016</span>
                            <span class="rncda-stat-label">
                                Year the Alliance was founded
                            </span>
                        </div>

                        <div class="rncda-stat-card">
                            <span class="rncda-stat-number">25</span>
                            <span class="rncda-stat-label">
                                Member organizations working across Rwanda
                            </span>
                        </div>

                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="rncda-highlight">

                        <div class="rncda-highlight-inner">

                            <span class="rncda-highlight-badge">
                                9+ years of collective action
                            </span>

                            <h3 class="rncda-highlight-title">
                                One alliance. Many voices. Shared impact.
                            </h3>

                            <p class="rncda-highlight-text">
                                We bring diverse perspectives together to strengthen
                                advocacy, awareness, collaboration and action against
                                non-communicable diseases.
                            </p>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>


    {{-- =====================================================
         VISION & MISSION
    ====================================================== --}}
    <section class="rncda-purpose">
        <div class="container">

            <div class="rncda-purpose-header">

                <p class="rncda-section-label">Our purpose</p>

                <h2 class="rncda-section-title">
                    Working together to <em>change the NCD story.</em>
                </h2>

                <p class="rncda-intro-copy">
                    Our work is rooted in collaboration, advocacy and empowering
                    communities to prevent and better respond to non-communicable diseases.
                </p>

            </div>


            <div class="rncda-purpose-grid">

                {{-- Vision --}}
                <article class="rncda-purpose-card">

                    <div class="rncda-purpose-icon">

                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8">
                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12Z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>

                    </div>

                    <h3>Our Vision</h3>

                    <p>
                        A Rwanda where people are empowered to prevent NCDs,
                        live healthier lives and have access to quality care
                        and support when living with non-communicable diseases.
                    </p>

                </article>


                {{-- Mission --}}
                <article class="rncda-purpose-card">

                    <div class="rncda-purpose-icon green">

                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="1.8">
                            <path d="M12 3v18"/>
                            <path d="M3 12h18"/>
                            <path d="M5.5 5.5l13 13"/>
                            <path d="M18.5 5.5l-13 13"/>
                        </svg>

                    </div>

                    <h3>Our Mission</h3>

                    <p>
                        To unite civil society and other stakeholders in
                        advocating for effective NCD prevention, control,
                        treatment and support while amplifying the voices
                        of communities affected by NCDs.
                    </p>

                </article>

            </div>


            {{-- Objectives --}}
            <div class="rncda-objectives">

                <h3>What we aim to achieve</h3>

                <ul class="rncda-objectives-list">

                    <li>
                        <span class="rncda-check">
                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="3">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        Build capacity and provide technical support to members.
                    </li>

                    <li>
                        <span class="rncda-check">
                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="3">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        Lead awareness and healthy-living education for NCD prevention.
                    </li>

                    <li>
                        <span class="rncda-check">
                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="3">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        Empower people living with NCDs and advocate for access to quality care.
                    </li>

                    <li>
                        <span class="rncda-check">
                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="3">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        Advocate to communities on NCD prevention and control.
                    </li>

                    <li>
                        <span class="rncda-check">
                            <svg viewBox="0 0 24 24" fill="none"
                                 stroke="currentColor" stroke-width="3">
                                <path d="m5 12 4 4L19 6"/>
                            </svg>
                        </span>
                        Contribute to evidence-based NCD policies and practices.
                    </li>

                </ul>

            </div>

        </div>
    </section>


    {{-- =====================================================
         COLLABORATION CTA
    ====================================================== --}}
    <section class="rncda-cta-section">

        <div class="container">

            <div class="rncda-cta">

                <div class="rncda-cta-copy">

                    <p class="rncda-section-label">
                        Collaboration & partnership
                    </p>

                    <h2>
                        Working together as an alliance
                    </h2>

                    <p>
                        Addressing NCDs requires wide, multi-sector collaboration.
                        Rwanda NCD Alliance provides a platform for organizations
                        to connect, share knowledge, strengthen advocacy and
                        work together to move the NCD agenda forward.
                    </p>

                    <a
                        href="{{ route('partnerships') }}"
                        class="rncda-cta-btn"
                    >
                        Meet our members

                        <svg viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"/>
                            <path d="m13 6 6 6-6 6"/>
                        </svg>
                    </a>

                </div>

                <div
                    class="rncda-cta-image"
                    role="img"
                    aria-label="Alliance members collaborating"
                ></div>

            </div>

        </div>

    </section>

</div>

@endsection