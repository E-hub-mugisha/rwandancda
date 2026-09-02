@extends('layouts.base')

@section('title', 'Home')

@section('content')

<style>
    /* =========================================================
       RWANDA NCDA — PROFESSIONAL NGO HOMEPAGE
       ========================================================= */

    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Newsreader:opsz,wght@6..72,400;6..72,500;6..72,600&display=swap');

    #ncda-home {
        --blue: #0A599E;
        --blue-dark: #073F70;
        --blue-soft: #EAF4FB;

        --green: #16845C;
        --green-dark: #0E6043;
        --green-soft: #EAF7F1;

        --gold: #F2B84B;

        --ink: #16241F;
        --muted: #60716A;

        --paper: #F5F9FC;
        --sage: #EEF5F1;
        --white: #FFFFFF;

        --border: #DDE7E3;

        font-family: 'Inter', sans-serif;
        color: var(--ink);
        background: var(--white);
        overflow: hidden;
    }

    #ncda-home *,
    #ncda-home *::before,
    #ncda-home *::after {
        box-sizing: border-box;
    }

    #ncda-home h1,
    #ncda-home h2,
    #ncda-home h3,
    #ncda-home h4 {
        font-family: 'Newsreader', Georgia, serif;
        color: var(--blue-dark);
    }

    #ncda-home a {
        text-decoration: none;
    }

    /* =========================================================
       BUTTONS
       ========================================================= */

    #ncda-home .ncda-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        min-height: 50px;
        padding: 0 23px;
        border-radius: 8px;
        font-size: 13px;
        font-weight: 800;
        transition: all .25s ease;
    }

    #ncda-home .ncda-btn:hover {
        transform: translateY(-2px);
    }

    #ncda-home .btn-primary {
        color: #fff;
        background: var(--blue);
        box-shadow: 0 10px 25px rgba(10, 89, 158, .18);
    }

    #ncda-home .btn-primary:hover {
        color: #fff;
        background: var(--blue-dark);
    }

    #ncda-home .btn-green {
        color: #fff;
        background: var(--green);
    }

    #ncda-home .btn-green:hover {
        color: #fff;
        background: var(--green-dark);
    }

    #ncda-home .btn-outline {
        color: var(--blue-dark);
        background: #fff;
        border: 1px solid var(--border);
    }

    #ncda-home .btn-outline:hover {
        color: var(--blue);
        border-color: var(--blue);
    }

    #ncda-home .btn-white {
        color: var(--blue-dark);
        background: #fff;
    }

    #ncda-home .btn-white:hover {
        color: var(--blue-dark);
        background: var(--blue-soft);
    }

    /* =========================================================
       HERO
       ========================================================= */

    #ncda-home .hero {
        position: relative;
        min-height: 760px;
        display: flex;
        align-items: center;
        overflow: hidden;
        background: var(--blue-dark);
    }

    #ncda-home .hero-slide {
        position: absolute;
        inset: 0;
        background-position: center;
        background-size: cover;
        opacity: 0;
        transition: opacity 1s ease;
    }

    #ncda-home .hero-slide.active {
        opacity: 1;
    }

    #ncda-home .hero-slide::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(
                90deg,
                rgba(7, 63, 112, .94) 0%,
                rgba(7, 63, 112, .76) 45%,
                rgba(7, 63, 112, .22) 100%
            );
    }

    #ncda-home .hero-content {
        position: relative;
        z-index: 3;
        width: 100%;
        padding: 120px 0 100px;
    }

    #ncda-home .hero-inner {
        max-width: 780px;
    }

    #ncda-home .hero-label {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 24px;
        color: rgba(255,255,255,.9);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: .13em;
        text-transform: uppercase;
    }

    #ncda-home .hero-label::before {
        content: "";
        width: 32px;
        height: 2px;
        background: var(--gold);
    }

    #ncda-home .hero h1 {
        max-width: 820px;
        margin: 0 0 25px;
        color: #fff;
        font-size: clamp(45px, 6vw, 76px);
        font-weight: 500;
        line-height: .98;
        letter-spacing: -.035em;
    }

    #ncda-home .hero-description {
        max-width: 650px;
        margin: 0 0 34px;
        color: rgba(255,255,255,.82);
        font-size: 17px;
        line-height: 1.8;
    }

    #ncda-home .hero-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 13px;
    }

    #ncda-home .hero .btn-primary {
        background: var(--green);
    }

    #ncda-home .hero .btn-primary:hover {
        background: var(--green-dark);
    }

    #ncda-home .hero .btn-outline {
        color: #fff;
        background: transparent;
        border-color: rgba(255,255,255,.42);
    }

    #ncda-home .hero .btn-outline:hover {
        color: #fff;
        border-color: #fff;
        background: rgba(255,255,255,.08);
    }

    /* Hero navigation */

    #ncda-home .hero-controls {
        position: absolute;
        z-index: 5;
        bottom: 38px;
        right: 5%;
        display: flex;
        align-items: center;
        gap: 9px;
    }

    #ncda-home .hero-controls button {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(255,255,255,.35);
        border-radius: 50%;
        background: transparent;
        color: #fff;
        cursor: pointer;
        transition: .2s ease;
    }

    #ncda-home .hero-controls button:hover {
        background: var(--green);
        border-color: var(--green);
        color: #fff;
    }

    #ncda-home .hero-counter {
        position: absolute;
        z-index: 5;
        bottom: 50px;
        left: 5%;
        color: rgba(255,255,255,.6);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: .08em;
    }

    #ncda-home .hero-counter strong {
        color: #fff;
        font-size: 16px;
    }

    /* =========================================================
       INTRO / TRUST STRIP
       ========================================================= */

    #ncda-home .trust-strip {
        position: relative;
        z-index: 6;
        margin-top: -1px;
        background: #fff;
        border-bottom: 1px solid var(--border);
    }

    #ncda-home .trust-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    #ncda-home .trust-item {
        display: flex;
        align-items: center;
        gap: 18px;
        min-height: 125px;
        padding: 24px 32px;
        border-right: 1px solid var(--border);
    }

    #ncda-home .trust-item:last-child {
        border-right: 0;
    }

    #ncda-home .trust-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 14px;
        color: var(--blue);
        background: var(--blue-soft);
    }

    #ncda-home .trust-item strong {
        display: block;
        margin-bottom: 4px;
        color: var(--blue-dark);
        font-size: 14px;
    }

    #ncda-home .trust-item span {
        color: var(--muted);
        font-size: 12px;
        line-height: 1.5;
    }

    /* =========================================================
       GENERAL SECTIONS
       ========================================================= */

    #ncda-home .section {
        padding: 100px 0;
    }

    #ncda-home .section-soft {
        background: var(--paper);
    }

    #ncda-home .section-green {
        background: var(--green-dark);
    }

    #ncda-home .section-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 40px;
        margin-bottom: 48px;
    }

    #ncda-home .section-header-left {
        max-width: 650px;
    }

    #ncda-home .section-kicker {
        margin: 0 0 12px;
        color: var(--green-dark);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    #ncda-home .section-title {
        margin: 0;
        font-size: clamp(36px, 4vw, 52px);
        font-weight: 500;
        line-height: 1.05;
        letter-spacing: -.025em;
    }

    #ncda-home .section-description {
        max-width: 440px;
        margin: 0;
        color: var(--muted);
        font-size: 15px;
        line-height: 1.8;
    }

    /* =========================================================
       WHAT WE DO
       ========================================================= */

    #ncda-home .engagement-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    #ncda-home .engagement-card {
        position: relative;
        min-height: 330px;
        padding: 34px;
        border: 1px solid var(--border);
        border-radius: 18px;
        background: #fff;
        transition: all .25s ease;
    }

    #ncda-home .engagement-card:hover {
        transform: translateY(-6px);
        border-color: rgba(10,89,158,.22);
        box-shadow: 0 20px 45px rgba(7,63,112,.09);
    }

    #ncda-home .engagement-number {
        position: absolute;
        top: 28px;
        right: 30px;
        color: #E5EEF4;
        font-family: 'Newsreader', Georgia, serif;
        font-size: 50px;
        line-height: 1;
    }

    #ncda-home .engagement-icon {
        width: 55px;
        height: 55px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 30px;
        border-radius: 15px;
        background: var(--green-soft);
        color: var(--green-dark);
    }

    #ncda-home .engagement-card h3 {
        max-width: 270px;
        margin: 0 0 14px;
        font-size: 27px;
        font-weight: 500;
        line-height: 1.1;
    }

    #ncda-home .engagement-card p {
        margin: 0 0 25px;
        color: var(--muted);
        font-size: 14px;
        line-height: 1.7;
    }

    #ncda-home .card-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--blue);
        font-size: 13px;
        font-weight: 800;
    }

    #ncda-home .card-link:hover {
        color: var(--green-dark);
    }

    /* =========================================================
       ABOUT
       ========================================================= */

    #ncda-home .about-section {
        padding: 110px 0;
        background: var(--paper);
    }

    #ncda-home .about-content {
        max-width: 590px;
    }

    #ncda-home .about-content h2 {
        margin: 0 0 25px;
        font-size: clamp(38px, 4vw, 55px);
        font-weight: 500;
        line-height: 1.03;
    }

    #ncda-home .about-content p {
        margin: 0;
        color: var(--muted);
        font-size: 16px;
        line-height: 1.9;
    }

    #ncda-home .about-content a.text-link {
        color: var(--blue);
        font-weight: 700;
    }

    #ncda-home .about-actions {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-top: 30px;
    }

    #ncda-home .about-image {
        position: relative;
        padding-left: 25px;
    }

    #ncda-home .about-image img {
        display: block;
        width: 100%;
        min-height: 480px;
        object-fit: cover;
        border-radius: 20px;
    }

    #ncda-home .about-stat {
        position: absolute;
        left: -5px;
        bottom: 30px;
        min-width: 180px;
        padding: 24px;
        border-radius: 15px;
        background: var(--blue-dark);
        box-shadow: 0 18px 40px rgba(7,63,112,.22);
    }

    #ncda-home .about-stat strong {
        display: block;
        color: var(--gold);
        font-family: 'Newsreader', Georgia, serif;
        font-size: 46px;
        font-weight: 500;
        line-height: 1;
    }

    #ncda-home .about-stat span {
        display: block;
        margin-top: 7px;
        color: rgba(255,255,255,.72);
        font-size: 12px;
    }

    /* =========================================================
       MISSION / VISION
       ========================================================= */

    #ncda-home .mission-section {
        padding: 100px 0;
        background: var(--blue-dark);
    }

    #ncda-home .mission-header {
        max-width: 720px;
        margin-bottom: 55px;
    }

    #ncda-home .mission-header .section-kicker {
        color: var(--gold);
    }

    #ncda-home .mission-header h2 {
        margin: 0;
        color: #fff;
        font-size: clamp(38px, 4vw, 55px);
        font-weight: 500;
        line-height: 1.04;
    }

    #ncda-home .mission-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 1.25fr;
        gap: 1px;
        background: rgba(255,255,255,.15);
    }

    #ncda-home .mission-card {
        padding: 35px;
        background: var(--blue-dark);
    }

    #ncda-home .mission-card h3 {
        margin: 0 0 16px;
        color: #fff;
        font-size: 26px;
        font-weight: 500;
    }

    #ncda-home .mission-card p {
        margin: 0;
        color: rgba(255,255,255,.72);
        font-size: 14px;
        line-height: 1.8;
    }

    #ncda-home .objective-list {
        padding: 0;
        margin: 0;
        list-style: none;
    }

    #ncda-home .objective-list li {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        margin-bottom: 15px;
        color: rgba(255,255,255,.72);
        font-size: 13.5px;
        line-height: 1.6;
    }

    #ncda-home .objective-list li svg {
        flex-shrink: 0;
        margin-top: 4px;
        color: var(--green);
    }

    /* =========================================================
       HEALTH ASSESSMENT CTA
       ========================================================= */

    #ncda-home .assessment-section {
        padding: 80px 0;
        background: var(--green);
    }

    #ncda-home .assessment-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 50px;
    }

    #ncda-home .assessment-content {
        max-width: 720px;
    }

    #ncda-home .assessment-content .section-kicker {
        color: rgba(255,255,255,.75);
    }

    #ncda-home .assessment-content h2 {
        margin: 0 0 15px;
        color: #fff;
        font-size: clamp(35px, 4vw, 50px);
        font-weight: 500;
    }

    #ncda-home .assessment-content p {
        margin: 0;
        color: rgba(255,255,255,.8);
        font-size: 15px;
        line-height: 1.8;
    }

    /* =========================================================
       STORIES
       ========================================================= */

    #ncda-home .stories-section {
        background: var(--paper);
    }

    #ncda-home .story-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    #ncda-home .story-card {
        position: relative;
        min-height: 300px;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 30px;
        overflow: hidden;
        border-radius: 18px;
        background: var(--blue-dark);
    }

    #ncda-home .story-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background:
            linear-gradient(
                180deg,
                transparent 25%,
                rgba(7,63,112,.92) 100%
            );
    }

    #ncda-home .story-card-content {
        position: relative;
        z-index: 2;
    }

    #ncda-home .story-card h3 {
        margin: 0 0 9px;
        color: #fff;
        font-size: 28px;
        font-weight: 500;
    }

    #ncda-home .story-card p {
        margin: 0 0 18px;
        color: rgba(255,255,255,.74);
        font-size: 13.5px;
        line-height: 1.6;
    }

    #ncda-home .story-link {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: var(--gold);
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .06em;
    }

    /* =========================================================
       NEWS
       ========================================================= */

    #ncda-home .news-feature {
        overflow: hidden;
        height: 100%;
        border: 1px solid var(--border);
        border-radius: 18px;
        background: #fff;
    }

    #ncda-home .news-feature-image {
        display: block;
        width: 100%;
        height: 350px;
        object-fit: cover;
    }

    #ncda-home .news-feature-body {
        padding: 30px;
    }

    #ncda-home .news-meta {
        margin-bottom: 12px;
        color: var(--muted);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .07em;
        text-transform: uppercase;
    }

    #ncda-home .news-feature h3 {
        margin: 0 0 18px;
        font-size: 31px;
        font-weight: 500;
        line-height: 1.15;
    }

    #ncda-home .news-feature h3 a {
        color: var(--blue-dark);
    }

    #ncda-home .news-list {
        height: 100%;
        padding: 15px 30px;
        border-radius: 18px;
        background: var(--paper);
    }

    #ncda-home .news-list-title {
        padding: 15px 0;
        color: var(--blue-dark);
        font-size: 13px;
        font-weight: 800;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    #ncda-home .news-item {
        display: flex;
        gap: 15px;
        padding: 18px 0;
        border-bottom: 1px solid var(--border);
    }

    #ncda-home .news-item:last-child {
        border-bottom: 0;
    }

    #ncda-home .news-thumb {
        width: 75px;
        height: 75px;
        flex-shrink: 0;
        object-fit: cover;
        border-radius: 10px;
    }

    #ncda-home .news-item a {
        display: block;
        margin-bottom: 7px;
        color: var(--blue-dark);
        font-size: 14px;
        font-weight: 700;
        line-height: 1.45;
    }

    #ncda-home .news-item small {
        color: var(--muted);
        font-size: 11px;
    }

    /* =========================================================
       VIDEO / IMPACT
       ========================================================= */

    #ncda-home .video-section {
        position: relative;
        padding: 120px 0;
        overflow: hidden;
        background:
            linear-gradient(
                rgba(7,63,112,.9),
                rgba(7,63,112,.9)
            ),
            url('{{ asset('new/img/content/about-02.jpg') }}') center/cover;
    }

    #ncda-home .video-inner {
        max-width: 800px;
        margin: auto;
        text-align: center;
    }

    #ncda-home .video-play {
        width: 76px;
        height: 76px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 28px;
        border-radius: 50%;
        background: var(--green);
        color: #fff;
        transition: transform .25s ease;
    }

    #ncda-home .video-play:hover {
        color: #fff;
        transform: scale(1.08);
    }

    #ncda-home .video-inner h2 {
        margin: 0 0 18px;
        color: #fff;
        font-size: clamp(38px, 4vw, 55px);
        font-weight: 500;
    }

    #ncda-home .video-inner p {
        max-width: 620px;
        margin: auto;
        color: rgba(255,255,255,.75);
        font-size: 15px;
        line-height: 1.8;
    }

    /* =========================================================
       RESOURCES
       ========================================================= */

    #ncda-home .resource-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    #ncda-home .resource-card {
        min-height: 230px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 30px;
        border: 1px solid var(--border);
        border-radius: 18px;
        background: #fff;
        transition: .25s ease;
    }

    #ncda-home .resource-card:hover {
        transform: translateY(-4px);
        border-color: var(--blue);
        box-shadow: 0 15px 35px rgba(7,63,112,.07);
    }

    #ncda-home .resource-icon {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        border-radius: 12px;
        color: var(--blue);
        background: var(--blue-soft);
    }

    #ncda-home .resource-card h3 {
        margin: 0;
        font-size: 24px;
        font-weight: 500;
        line-height: 1.2;
    }

    #ncda-home .resource-card h3 a {
        color: var(--blue-dark);
    }

    /* =========================================================
       FINAL CTA
       ========================================================= */

    #ncda-home .final-cta {
        padding: 95px 0;
        background: var(--paper);
    }

    #ncda-home .final-cta-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 50px;
        padding: 50px;
        border-radius: 22px;
        background: var(--blue-dark);
    }

    #ncda-home .final-cta h2 {
        max-width: 650px;
        margin: 0 0 13px;
        color: #fff;
        font-size: clamp(35px, 4vw, 50px);
        font-weight: 500;
    }

    #ncda-home .final-cta p {
        max-width: 600px;
        margin: 0;
        color: rgba(255,255,255,.72);
        font-size: 14px;
        line-height: 1.7;
    }

    /* =========================================================
       MODALS
       ========================================================= */

    #ncda-home .modal-content {
        border: 0;
        border-radius: 18px;
        overflow: hidden;
    }

    #ncda-home .modal-body {
        padding: 40px;
    }

    #ncda-home .modal-body h3 {
        margin-bottom: 8px;
        font-size: 35px;
    }

    #ncda-home .modal-body p {
        color: var(--muted);
        line-height: 1.8;
    }

    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 991px) {

        #ncda-home .hero {
            min-height: 680px;
        }

        #ncda-home .trust-grid {
            grid-template-columns: 1fr;
        }

        #ncda-home .trust-item {
            border-right: 0;
            border-bottom: 1px solid var(--border);
        }

        #ncda-home .trust-item:last-child {
            border-bottom: 0;
        }

        #ncda-home .engagement-grid,
        #ncda-home .story-grid,
        #ncda-home .resource-grid {
            grid-template-columns: 1fr 1fr;
        }

        #ncda-home .mission-grid {
            grid-template-columns: 1fr;
        }

        #ncda-home .about-image {
            margin-top: 40px;
            padding-left: 0;
        }

        #ncda-home .about-stat {
            left: 20px;
        }

        #ncda-home .assessment-inner,
        #ncda-home .final-cta-inner {
            align-items: flex-start;
            flex-direction: column;
        }
    }

    @media (max-width: 767px) {

        #ncda-home .section,
        #ncda-home .about-section {
            padding: 75px 0;
        }

        #ncda-home .hero {
            min-height: 650px;
        }

        #ncda-home .hero-content {
            padding: 100px 0 90px;
        }

        #ncda-home .hero h1 {
            font-size: 46px;
        }

        #ncda-home .hero-description {
            font-size: 15px;
        }

        #ncda-home .section-header {
            align-items: flex-start;
            flex-direction: column;
            margin-bottom: 35px;
        }

        #ncda-home .engagement-grid,
        #ncda-home .story-grid,
        #ncda-home .resource-grid {
            grid-template-columns: 1fr;
        }

        #ncda-home .about-image img {
            min-height: 360px;
        }

        #ncda-home .final-cta-inner {
            padding: 35px 25px;
        }

        #ncda-home .hero-controls {
            right: 20px;
        }

        #ncda-home .hero-counter {
            left: 20px;
        }
    }

    @media (max-width: 575px) {

        #ncda-home .hero h1 {
            font-size: 40px;
        }

        #ncda-home .hero-actions {
            flex-direction: column;
        }

        #ncda-home .hero-actions .ncda-btn {
            width: 100%;
        }

        #ncda-home .news-feature-image {
            height: 250px;
        }

        #ncda-home .about-stat {
            position: static;
            margin-top: -25px;
            margin-left: 15px;
            display: inline-block;
        }

        #ncda-home .assessment-inner {
            gap: 30px;
        }

        #ncda-home .assessment-inner .ncda-btn {
            width: 100%;
        }
    }

    @media (prefers-reduced-motion: reduce) {

        #ncda-home .hero-slide {
            transition: none;
        }

        #ncda-home .engagement-card,
        #ncda-home .resource-card,
        #ncda-home .ncda-btn,
        #ncda-home .video-play {
            transition: none;
        }
    }
</style>


<div id="ncda-home">

    <!-- =====================================================
         HERO
         ===================================================== -->

    <section class="hero" id="ncdaHero">

        <!-- Slide 1 -->
        <div
            class="hero-slide active"
            style="background-image:url('{{ asset('new/img/intro-carousel/banner.jpg') }}');"
        >
            <div class="container hero-content">
                <div class="hero-inner">

                    <div class="hero-label">
                        Rwanda NCD Alliance
                    </div>

                    <h1>
                        A stronger voice for a healthier Rwanda.
                    </h1>

                    <p class="hero-description">
                        We unite civil society, people living with NCDs,
                        health professionals, youth organizations and
                        partners to advance prevention, awareness and
                        better health outcomes across Rwanda.
                    </p>

                    <div class="hero-actions">

                        <a
                            href="{{ route('about_us') }}"
                            class="ncda-btn btn-primary"
                        >
                            Discover our work
                            <i class="bi-arrow-right"></i>
                        </a>

                        <a
                            href="{{ route('ncd_posts') }}"
                            class="ncda-btn btn-outline"
                        >
                            Latest updates
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <!-- Slide 2 -->
        <div
            class="hero-slide"
            style="background-image:url('{{ asset('new/img/intro-carousel/banner-2.jpg') }}');"
        >
            <div class="container hero-content">
                <div class="hero-inner">

                    <div class="hero-label">
                        Healthy communities
                    </div>

                    <h1>
                        Building healthier communities through action.
                    </h1>

                    <p class="hero-description">
                        From physical activity and awareness campaigns to
                        advocacy and community engagement, we work with
                        partners to make healthy choices more accessible.
                    </p>

                    <div class="hero-actions">

                        <a
                            href="{{ route('ncd_posts') }}"
                            class="ncda-btn btn-primary"
                        >
                            Explore our impact
                            <i class="bi-arrow-right"></i>
                        </a>

                        <a
                            href="{{ route('message') }}"
                            class="ncda-btn btn-outline"
                        >
                            Get in touch
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <!-- Slide 3 -->
        <div
            class="hero-slide"
            style="background-image:url('{{ asset('new/img/intro-carousel/forum.jpg') }}');"
        >
            <div class="container hero-content">
                <div class="hero-inner">

                    <div class="hero-label">
                        Global NCD Forum
                    </div>

                    <h1>
                        Bringing the global NCD community together in Kigali.
                    </h1>

                    <p class="hero-description">
                        The 4th Global NCDA Forum brought together advocates,
                        experts and partners to strengthen the global response
                        to non-communicable diseases.
                    </p>

                    <div class="hero-actions">

                        <a
                            href="https://forum.ncdalliance.org/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="ncda-btn btn-primary"
                        >
                            Learn about the forum
                            <i class="bi-arrow-up-right"></i>
                        </a>

                        <a
                            href="https://forum.ncdalliance.org/photos/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="ncda-btn btn-outline"
                        >
                            View highlights
                        </a>

                    </div>

                </div>
            </div>
        </div>


        <!-- Hero counter -->
        <div class="hero-counter">
            <strong id="ncdaHeroActive">01</strong>
            &nbsp;/&nbsp; 03
        </div>


        <!-- Hero controls -->
        <div class="hero-controls">

            <button
                type="button"
                id="ncdaHeroPrev"
                aria-label="Previous slide"
            >
                <i class="bi-arrow-left"></i>
            </button>

            <button
                type="button"
                id="ncdaHeroNext"
                aria-label="Next slide"
            >
                <i class="bi-arrow-right"></i>
            </button>

        </div>

    </section>


    <!-- =====================================================
         TRUST / ORGANIZATION INTRO
         ===================================================== -->

    <section class="trust-strip">

        <div class="container">

            <div class="trust-grid">

                <div class="trust-item">

                    <div class="trust-icon">
                        <i class="bi-people"></i>
                    </div>

                    <div>
                        <strong>25 member organizations</strong>
                        <span>
                            A growing civil society network working on NCDs.
                        </span>
                    </div>

                </div>


                <div class="trust-item">

                    <div class="trust-icon">
                        <i class="bi-calendar2-check"></i>
                    </div>

                    <div>
                        <strong>Established in 2016</strong>
                        <span>
                            Years of advocacy, partnership and community action.
                        </span>
                    </div>

                </div>


                <div class="trust-item">

                    <div class="trust-icon">
                        <i class="bi-globe2"></i>
                    </div>

                    <div>
                        <strong>National & global engagement</strong>
                        <span>
                            Connecting Rwanda's NCD response with wider networks.
                        </span>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         WHAT WE DO
         ===================================================== -->

    <section class="section">

        <div class="container">

            <div class="section-header">

                <div class="section-header-left">

                    <p class="section-kicker">
                        What we do
                    </p>

                    <h2 class="section-title">
                        Turning collaboration into meaningful health action.
                    </h2>

                </div>

                <p class="section-description">
                    Rwanda NCDA brings organizations and communities together
                    to strengthen awareness, prevention, advocacy and support
                    for people affected by non-communicable diseases.
                </p>

            </div>


            <div class="engagement-grid">

                @foreach($engagements as $key => $engagement)

                    <article class="engagement-card">

                        <span class="engagement-number">
                            {{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>

                        <div class="engagement-icon">
                            <i class="bi-heart-pulse"></i>
                        </div>

                        <h3>
                            {{ $engagement->title }}
                        </h3>

                        <p>
                            {{ $engagement->content }}
                        </p>

                        <a
                            href="{{ url('ncd_engagements', $engagement->title) }}"
                            class="card-link"
                        >
                            Explore
                            <i class="bi-arrow-right"></i>
                        </a>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    <!-- =====================================================
         ABOUT
         ===================================================== -->

    <section class="about-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <div class="about-content">

                        <p class="section-kicker">
                            Who we are
                        </p>

                        <h2>
                            One network. One voice. A healthier Rwanda.
                        </h2>

                        <p>
                            Rwanda Non-Communicable Disease Alliance is a unique
                            civil society network founded in 2016, bringing
                            together 25 organizations including people living
                            with NCDs, healthcare professionals, youth-led
                            organizations and private institutions.
                        </p>

                        <div class="about-actions">

                            <a
                                href="{{ route('about_us') }}"
                                class="ncda-btn btn-primary"
                            >
                                About Rwanda NCDA
                                <i class="bi-arrow-right"></i>
                            </a>

                            <a
                                href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="ncda-btn btn-outline"
                            >
                                Our beginnings
                            </a>

                        </div>

                    </div>

                </div>


                <div class="col-lg-6">

                    <div class="about-image">

                        <img
                            src="{{ asset('new/img/content/about-05.jpg') }}"
                            alt="Rwanda NCD Alliance community health outreach"
                        >

                        <div class="about-stat">

                            <strong>9+</strong>

                            <span>
                                Years of advocacy and collaboration
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         VISION / MISSION / OBJECTIVES
         ===================================================== -->

    <section class="mission-section">

        <div class="container">

            <div class="mission-header">

                <p class="section-kicker">
                    Our direction
                </p>

                <h2>
                    Working together toward a healthier future.
                </h2>

            </div>


            <div class="mission-grid">

                <div class="mission-card">

                    <h3>
                        Our vision
                    </h3>

                    <p>
                        A healthy people in a nation free from preventable
                        suffering, disability and deaths caused by
                        non-communicable diseases.
                    </p>

                </div>


                <div class="mission-card">

                    <h3>
                        Our mission
                    </h3>

                    <p>
                        To unite efforts and create a powerful voice for NCD
                        awareness, prevention and control while promoting
                        multisectoral partnerships, healthy living, early
                        detection and response.
                    </p>

                </div>


                <div class="mission-card">

                    <h3>
                        Our objectives
                    </h3>

                    <ul class="objective-list">

                        <li>
                            <i class="bi-check-circle-fill"></i>
                            Build capacity and provide technical support to members.
                        </li>

                        <li>
                            <i class="bi-check-circle-fill"></i>
                            Lead awareness and healthy-living education.
                        </li>

                        <li>
                            <i class="bi-check-circle-fill"></i>
                            Empower people living with NCDs and advocate for quality care.
                        </li>

                        <li>
                            <i class="bi-check-circle-fill"></i>
                            Advocate for NCD prevention and control within communities.
                        </li>

                        <li>
                            <i class="bi-check-circle-fill"></i>
                            Contribute to evidence-based NCD policies and practices.
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         HEALTH ASSESSMENT CTA
         ===================================================== -->

    <section class="assessment-section">

        <div class="container">

            <div class="assessment-inner">

                <div class="assessment-content">

                    <p class="section-kicker">
                        Know your risk
                    </p>

                    <h2>
                        Take a few minutes to understand your NCD risk.
                    </h2>

                    <p>
                        Use our health awareness assessment to learn more about
                        selected risk factors related to diabetes and
                        hypertension. The tool is designed for awareness and
                        does not replace professional medical advice.
                    </p>

                </div>


                <div>

                    <a
                        href="{{ route('assessments.create') }}"
                        class="ncda-btn btn-white"
                    >
                        Start assessment
                        <i class="bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         STORIES
         ===================================================== -->

    <section class="section stories-section">

        <div class="container">

            <div class="section-header">

                <div class="section-header-left">

                    <p class="section-kicker">
                        Voices from the community
                    </p>

                    <h2 class="section-title">
                        Real people. Real experiences.
                    </h2>

                </div>

                <a
                    href="{{ url('ncd_stories') }}"
                    class="ncda-btn btn-outline"
                >
                    View all stories
                    <i class="bi-arrow-right"></i>
                </a>

            </div>


            <div class="story-grid">

                @foreach($stories as $story)

                    <article class="story-card">

                        <div class="story-card-content">

                            <h3>
                                {{ $story->name }}
                            </h3>

                            <p>
                                {{ Str::limit($story->headline, 120) }}
                            </p>

                            <a
                                href="#"
                                data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop{{ $story->id }}"
                                class="story-link"
                            >
                                Read their story
                                <i class="bi-arrow-right"></i>
                            </a>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </section>


    <!-- =====================================================
         STORY MODALS
         ===================================================== -->

    @foreach($stories as $story)

        <div
            class="modal fade"
            id="staticBackdrop{{ $story->id }}"
            tabindex="-1"
            aria-labelledby="storyLabel{{ $story->id }}"
            aria-hidden="true"
        >

            <div class="modal-dialog modal-lg modal-dialog-centered">

                <div class="modal-content">

                    <div class="modal-body">

                        <div class="d-flex justify-content-between align-items-start gap-3 mb-4">

                            <div>

                                <p class="section-kicker mb-2">
                                    Community story
                                </p>

                                <h3 id="storyLabel{{ $story->id }}">
                                    {{ $story->name }}'s story
                                </h3>

                                <p class="mb-0">
                                    <strong>Condition:</strong>
                                    {{ $story->disease }}
                                </p>

                            </div>

                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>

                        </div>

                        <div>
                            {!! $story->content !!}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    @endforeach


    <!-- =====================================================
         NEWS
         ===================================================== -->

    <section class="section">

        <div class="container">

            <div class="section-header">

                <div class="section-header-left">

                    <p class="section-kicker">
                        News & insights
                    </p>

                    <h2 class="section-title">
                        What is happening across our network.
                    </h2>

                </div>

                <a
                    href="{{ route('ncd_posts') }}"
                    class="ncda-btn btn-outline"
                >
                    View all news
                    <i class="bi-arrow-right"></i>
                </a>

            </div>


            <div class="row g-4">

                <!-- Featured -->
                <div class="col-lg-6">

                    @if($featured)

                        <article class="news-feature">

                            <a href="{{ url('ncd_news', $featured->slug) }}">

                                <img
                                    class="news-feature-image"
                                    src="{{ asset('new/img/'.$featured->image) }}"
                                    alt="{{ Str::limit($featured->title, 80) }}"
                                >

                            </a>

                            <div class="news-feature-body">

                                <div class="news-meta">
                                    Featured story ·
                                    {{ $featured->created_at->format('F d, Y') }}
                                </div>

                                <h3>

                                    <a href="{{ url('ncd_news', $featured->slug) }}">
                                        {{ Str::limit($featured->title, 90) }}
                                    </a>

                                </h3>

                                <a
                                    href="{{ url('ncd_news', $featured->slug) }}"
                                    class="card-link"
                                >
                                    Read full story
                                    <i class="bi-arrow-right"></i>
                                </a>

                            </div>

                        </article>

                    @endif

                </div>


                <!-- News list -->
                <div class="col-lg-6">

                    <div class="news-list">

                        <div class="news-list-title">
                            Latest updates
                        </div>

                        @foreach($posts as $post)

                            <div class="news-item">

                                <a href="{{ url('ncd_news', $post->slug) }}">

                                    <img
                                        class="news-thumb"
                                        src="{{ asset('new/img/' . ($post->image ?: 'placeholder.png')) }}"
                                        alt="{{ Str::limit($post->title, 60) }}"
                                    >

                                </a>

                                <div>

                                    <a href="{{ url('ncd_news', $post->slug) }}">
                                        {{ Str::limit($post->title, 75) }}
                                    </a>

                                    <small>
                                        {{ $post->created_at->format('F d, Y') }}
                                    </small>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         VIDEO / IMPACT
         ===================================================== -->

    <section class="video-section">

        <div class="container">

            <div class="video-inner">

                <a
                    href="https://www.youtube.com/watch?v=G6DP05PcKhk"
                    class="video-play cs_video_open"
                    aria-label="Watch Life with NCDs video"
                >
                    <i class="bi-play-fill fs-3"></i>
                </a>

                <p class="section-kicker" style="color:var(--gold);">
                    Understanding the challenge
                </p>

                <h2>
                    Life with NCDs
                </h2>

                <p>
                    People living with non-communicable diseases can face
                    significant health, social and economic challenges.
                    Awareness, prevention, early action and access to care
                    remain essential to healthier communities.
                </p>

            </div>

        </div>

    </section>


    <!-- =====================================================
         RESOURCES
         ===================================================== -->

    <section class="section">

        <div class="container">

            <div class="section-header">

                <div class="section-header-left">

                    <p class="section-kicker">
                        Knowledge centre
                    </p>

                    <h2 class="section-title">
                        Publications & resources.
                    </h2>

                </div>

                <p class="section-description">
                    Explore resources that support awareness, advocacy,
                    knowledge sharing and Rwanda's response to
                    non-communicable diseases.
                </p>

            </div>


            <div class="resource-grid">

                @foreach($resources_data as $resource)

                    @php
                        $fileData = json_decode($resource->file);
                        $fileLink = $fileData[0]->download_link ?? null;
                    @endphp

                    @if($fileLink)

                        <article class="resource-card">

                            <div>

                                <div class="resource-icon">
                                    <i class="bi-file-earmark-text"></i>
                                </div>

                                <h3>

                                    <a
                                        href="{{ asset($fileLink) }}"
                                        target="_blank"
                                        rel="noopener noreferrer"
                                    >
                                        {{ Str::limit($resource->title, 70) }}
                                    </a>

                                </h3>

                            </div>

                            <a
                                href="{{ asset($fileLink) }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="card-link"
                            >
                                View resource
                                <i class="bi-arrow-up-right"></i>
                            </a>

                        </article>

                    @endif

                @endforeach

            </div>

        </div>

    </section>


    <!-- =====================================================
         FINAL CTA
         ===================================================== -->

    <section class="final-cta">

        <div class="container">

            <div class="final-cta-inner">

                <div>

                    <p class="section-kicker" style="color:var(--gold);">
                        Join the movement
                    </p>

                    <h2>
                        Together, we can build a healthier Rwanda.
                    </h2>

                    <p>
                        Whether you are an organization, health professional,
                        young advocate, community member or partner, there
                        are opportunities to contribute to the NCD response.
                    </p>

                </div>

                <div>

                    <a
                        href="{{ route('message') }}"
                        class="ncda-btn btn-white"
                    >
                        Connect with us
                        <i class="bi-arrow-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </section>

</div>


<!-- =========================================================
     HERO SLIDER SCRIPT
     ========================================================= -->

<script>
(function () {

    const hero = document.getElementById('ncdaHero');

    if (!hero) return;

    const slides = hero.querySelectorAll('.hero-slide');
    const counter = document.getElementById('ncdaHeroActive');

    const nextButton = document.getElementById('ncdaHeroNext');
    const prevButton = document.getElementById('ncdaHeroPrev');

    let current = 0;
    let timer = null;

    function showSlide(index) {

        slides[current].classList.remove('active');

        current = (index + slides.length) % slides.length;

        slides[current].classList.add('active');

        if (counter) {
            counter.textContent =
                String(current + 1).padStart(2, '0');
        }
    }

    function startAutoPlay() {

        stopAutoPlay();

        timer = setInterval(function () {
            showSlide(current + 1);
        }, 6500);
    }

    function stopAutoPlay() {

        if (timer) {
            clearInterval(timer);
            timer = null;
        }

    }

    if (nextButton) {

        nextButton.addEventListener('click', function () {

            showSlide(current + 1);

            startAutoPlay();

        });

    }

    if (prevButton) {

        prevButton.addEventListener('click', function () {

            showSlide(current - 1);

            startAutoPlay();

        });

    }

    hero.addEventListener('mouseenter', stopAutoPlay);

    hero.addEventListener('mouseleave', startAutoPlay);

    startAutoPlay();

})();
</script>

@endsection