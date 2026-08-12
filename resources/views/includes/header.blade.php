<!-- Start Header Section -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --ncd-teal-900: #5D89C8;
        --ncd-teal-800: #5D89C8;
        --ncd-teal-700: #2E4A73;
        --ncd-teal-600: #3E6098;
        --ncd-teal-500: #5D89C8;
        --ncd-teal-100: #EAF0F9;
        --ncd-teal-50: #F5F8FD;
        --ncd-amber: #F2A93B;
        --ncd-amber-dark: #D98F1F;
        --ncd-ink: #12232E;
        --ncd-mist: #F8FAFC;
        --ncd-white: #FFFFFF;
        --ncd-border: rgba(46, 74, 115, .14);
        --ncd-border-strong: rgba(46, 74, 115, .22);
        --ncd-font-body: 'Inter', system-ui, -apple-system, sans-serif;
        --ncd-font-display: 'Fraunces', Georgia, serif;
        --ncd-radius: 12px;
        --ncd-shadow-sm: 0 2px 8px -2px rgba(18, 35, 46, .08);
        --ncd-shadow-md: 0 12px 28px -10px rgba(18, 35, 46, .18);
        --ncd-shadow-lg: 0 24px 60px -20px rgba(18, 35, 46, .28);
    }

    /* ============================================================
       HEADER SHELL
       ============================================================ */
    .cs_site_header {
        font-family: var(--ncd-font-body);
        background: var(--ncd-white);
        position: relative;
        z-index: 1000;
        box-shadow: var(--ncd-shadow-sm);
    }

    /* ---------- Top utility bar ---------- */
    .ncd-topbar {
        background: linear-gradient(90deg, var(--ncd-teal-900) 0%, var(--ncd-teal-800) 100%);
        color: var(--ncd-white);
        font-size: 12.5px;
        border-bottom: 1px solid rgba(255, 255, 255, .06);
    }

    .ncd-topbar-in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 14px;
        padding: 7px 16px;
        min-height: 38px;
    }

    .ncd-topbar-left {
        display: flex;
        align-items: center;
        gap: 18px;
        flex-wrap: wrap;
    }

    .ncd-topbar-item {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        color: rgba(255, 255, 255, .86);
        text-decoration: none;
        font-weight: 500;
        transition: color .2s ease;
    }

    .ncd-topbar-item:hover {
        color: var(--ncd-amber);
    }

    .ncd-topbar-item i {
        font-size: 12px;
        color: var(--ncd-amber);
    }

    .ncd-topbar-divider {
        width: 1px;
        height: 14px;
        background: rgba(255, 255, 255, .18);
    }

    .ncd-topbar-right {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .ncd-topbar-social {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .ncd-topbar-social a {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: rgba(255, 255, 255, .8);
        text-decoration: none;
        font-size: 12px;
        transition: .2s ease;
    }

    .ncd-topbar-social a:hover {
        background: var(--ncd-amber);
        color: var(--ncd-teal-900);
        transform: translateY(-1px);
    }

    /* ---------- Main header bar ---------- */
    .cs_main_header {
        background: var(--ncd-white);
        border-bottom: 1px solid var(--ncd-border);
        position: relative;
    }

    .cs_main_header_in {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
        padding: 14px 16px;
    }

    /* ---------- Branding ---------- */
    .ncd-brand {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        flex-shrink: 0;
        padding: 4px 6px;
        border-radius: 10px;
        transition: transform .2s ease;
    }

    .ncd-brand:hover {
        transform: translateY(-1px);
    }

    .ncd-brand img {
        display: block;
        height: 46px;
        width: auto;
    }

    .ncd-brand-text {
        display: flex;
        flex-direction: column;
        line-height: 1.12;
    }

    .ncd-brand-text strong {
        font-family: var(--ncd-font-display);
        font-weight: 600;
        font-size: 18px;
        color: var(--ncd-teal-900);
        letter-spacing: .005em;
    }

    .ncd-brand-text span {
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: .14em;
        text-transform: uppercase;
        color: var(--ncd-amber-dark);
        margin-top: 2px;
    }

    /* ---------- Primary nav ---------- */
    .cs_nav {
        flex: 1 1 auto;
        /* Allows nav to take available space and center */
        display: flex;
        justify-content: center;
    }

    .cs_nav_list_wrap {
        display: flex;
        justify-content: center;
    }

    .cs_nav_list {
        list-style: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 2px;
        margin: 0;
        padding: 0;
    }

    .cs_nav_list>li {
        position: relative;
    }

    .cs_nav_list>li>a {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 11px 14px;
        font-size: 14.5px;
        font-weight: 600;
        color: var(--ncd-teal-900);
        text-decoration: none;
        border-radius: 8px;
        transition: .2s ease;
        position: relative;
    }

    .cs_nav_list>li>a::after {
        content: "";
        position: absolute;
        left: 14px;
        right: 14px;
        bottom: 5px;
        height: 2px;
        background: var(--ncd-amber);
        border-radius: 2px;
        transform: scaleX(0);
        transform-origin: left;
        transition: transform .25s ease;
    }

    .cs_nav_list>li>a:hover,
    .cs_nav_list>li.ncd-open>a {
        color: var(--ncd-teal-700);
        background: var(--ncd-teal-50);
    }

    .cs_nav_list>li>a:hover::after,
    .cs_nav_list>li.ncd-open>a::after {
        transform: scaleX(1);
    }

    .cs_nav_list>li.menu-item-has-children>a::before {
        content: "";
        width: 6px;
        height: 6px;
        border-right: 1.5px solid currentColor;
        border-bottom: 1.5px solid currentColor;
        transform: rotate(45deg);
        margin-top: -3px;
        margin-left: 2px;
        transition: transform .2s ease;
        opacity: .6;
        order: 2;
    }

    .cs_nav_list>li.ncd-open>a::before {
        transform: rotate(-135deg);
        margin-top: 2px;
    }

    /* ---------- Dropdown (used by every menu item, including Resources & Media) ---------- */
    .cs_nav_list ul {
        list-style: none;
        margin: 0;
        padding: 8px;
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        min-width: 260px;
        background: var(--ncd-white);
        border: 1px solid var(--ncd-border);
        border-radius: var(--ncd-radius);
        box-shadow: var(--ncd-shadow-md);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(8px);
        transition: .2s ease;
        z-index: 1001;
    }

    .cs_nav_list ul::before {
        content: "";
        position: absolute;
        top: -6px;
        left: 24px;
        width: 12px;
        height: 12px;
        background: var(--ncd-white);
        border-left: 1px solid var(--ncd-border);
        border-top: 1px solid var(--ncd-border);
        transform: rotate(45deg);
    }

    .cs_nav_list li.menu-item-has-children:hover>ul,
    .cs_nav_list li.ncd-open>ul {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0);
    }

    .cs_nav_list ul li a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 11px;
        font-size: 13.8px;
        font-weight: 500;
        color: var(--ncd-ink);
        border-radius: 7px;
        text-decoration: none;
        transition: .15s ease;
    }

    .cs_nav_list ul li a i {
        color: var(--ncd-teal-500);
        font-size: 13px;
        width: 18px;
        text-align: center;
        flex-shrink: 0;
    }

    .cs_nav_list ul li a:hover {
        background: var(--ncd-teal-100);
        color: var(--ncd-teal-900);
        padding-left: 15px;
    }

    .cs_nav_list ul li a:hover i {
        color: var(--ncd-teal-900);
    }

    /* Non-clickable group headers inside a dropdown, used to keep Resources & Media
       organized now that it's a plain single-column list instead of a mega panel. */
    .cs_nav_list ul li.ncd-dropdown-label {
        font-family: var(--ncd-font-display);
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: .08em;
        text-transform: uppercase;
        color: var(--ncd-amber-dark);
        padding: 10px 11px 4px;
        margin-top: 4px;
        border-top: 1px solid var(--ncd-border);
        pointer-events: none;
    }

    .cs_nav_list ul li.ncd-dropdown-label:first-child {
        margin-top: 0;
        padding-top: 6px;
        border-top: none;
    }

    /* ---------- Right side actions ---------- */
    .cs_main_header_right {
        display: flex;
        align-items: center;
        gap: 12px;
        flex-shrink: 0;
    }

    .cs_search_toggle_btn {
        width: 40px;
        height: 40px;
        border: 1px solid var(--ncd-border-strong);
        border-radius: 50%;
        background: var(--ncd-white);
        color: var(--ncd-teal-900);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .2s ease;
        flex-shrink: 0;
    }

    .cs_search_toggle_btn svg {
        width: 18px;
        height: 18px;
    }

    .cs_search_toggle_btn:hover {
        background: var(--ncd-teal-900);
        color: var(--ncd-white);
        border-color: var(--ncd-teal-900);
    }

    /* ---------- AI Assistant button ---------- */
    .ncd-ai-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 9px 16px;
        border-radius: 999px;
        background: linear-gradient(135deg, var(--ncd-teal-700) 0%, var(--ncd-teal-900) 100%);
        color: var(--ncd-white);
        font-size: 13.5px;
        font-weight: 700;
        letter-spacing: .01em;
        text-decoration: none;
        white-space: nowrap;
        border: 1px solid rgba(255, 255, 255, .15);
        box-shadow: 0 6px 16px -6px rgba(46, 74, 115, .5);
        position: relative;
        overflow: hidden;
        transition: .25s ease;
        flex-shrink: 0;
    }

    .ncd-ai-btn::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg, var(--ncd-amber) 0%, var(--ncd-amber-dark) 100%);
        opacity: 0;
        transition: opacity .25s ease;
    }

    .ncd-ai-btn span,
    .ncd-ai-btn i {
        position: relative;
        z-index: 1;
    }

    .ncd-ai-btn i {
        font-size: 14px;
        color: var(--ncd-amber);
        animation: ncd-ai-pulse 2.4s ease-in-out infinite;
    }

    .ncd-ai-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 10px 22px -8px rgba(217, 143, 31, .55);
    }

    .ncd-ai-btn:hover::before {
        opacity: 1;
    }

    .ncd-ai-btn:hover i {
        color: var(--ncd-white);
    }

    @keyframes ncd-ai-pulse {

        0%,
        100% {
            transform: scale(1);
            opacity: 1;
        }

        50% {
            transform: scale(1.18);
            opacity: .85;
        }
    }

    @media (prefers-reduced-motion:reduce) {
        .ncd-ai-btn i {
            animation: none;
        }
    }

    /* ---------- CTA ---------- */
    .ncd-cta {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 11px 22px;
        border-radius: 999px;
        background: var(--ncd-amber);
        color: var(--ncd-teal-900);
        font-size: 14px;
        font-weight: 700;
        text-decoration: none;
        white-space: nowrap;
        box-shadow: 0 6px 14px -6px rgba(242, 169, 59, .6);
        transition: .2s ease;
        flex-shrink: 0;
    }

    .ncd-cta:hover {
        background: var(--ncd-amber-dark);
        color: var(--ncd-white);
        transform: translateY(-1px);
        box-shadow: 0 10px 20px -8px rgba(217, 143, 31, .6);
    }

    /* ---------- Mobile toggle ---------- */
    .ncd-menu-toggle {
        width: 42px;
        height: 42px;
        border: 1px solid var(--ncd-border-strong);
        border-radius: 10px;
        background: var(--ncd-white);
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex-shrink: 0;
    }

    .ncd-menu-toggle span {
        display: block;
        width: 20px;
        height: 2px;
        background: var(--ncd-teal-900);
        position: relative;
        transition: .25s ease;
    }

    .ncd-menu-toggle span::before,
    .ncd-menu-toggle span::after {
        content: "";
        position: absolute;
        left: 0;
        width: 20px;
        height: 2px;
        background: var(--ncd-teal-900);
        transition: .25s ease;
    }

    .ncd-menu-toggle span::before {
        top: -6px;
    }

    .ncd-menu-toggle span::after {
        top: 6px;
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle span {
        background: transparent;
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle span::before {
        transform: rotate(45deg);
        top: 0;
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle span::after {
        transform: rotate(-45deg);
        top: 0;
    }

    /* ---------- Mobile backdrop ---------- */
    .ncd-nav-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(18, 35, 46, .5);
        backdrop-filter: blur(3px);
        -webkit-backdrop-filter: blur(3px);
        opacity: 0;
        visibility: hidden;
        transition: .25s ease;
        z-index: 998;
    }

    .cs_site_header.ncd-menu-active .ncd-nav-backdrop {
        opacity: 1;
        visibility: visible;
    }

    /* ---------- Pulse line ---------- */
    .ncd-pulse-line {
        height: 5px;
        width: 100%;
        overflow: hidden;
        background: var(--ncd-white);
        line-height: 0;
    }

    .ncd-pulse-line svg {
        width: 200%;
        height: 5px;
        stroke: var(--ncd-amber);
        animation: ncd-pulse-scroll 9s linear infinite;
    }

    @keyframes ncd-pulse-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    @media (prefers-reduced-motion:reduce) {
        .ncd-pulse-line svg {
            animation: none;
        }
    }

    /* ---------- Focus visibility ---------- */
    .cs_site_header *:focus-visible {
        outline: 2px solid var(--ncd-amber);
        outline-offset: 2px;
        border-radius: 6px;
    }

    /* ============================================================
       RESPONSIVE
       ============================================================ */
    @media (max-width:1199.98px) {
        .cs_nav_list>li>a {
            padding: 11px 10px;
            font-size: 14px;
        }

        .ncd-ai-btn .ncd-ai-label {
            display: none;
        }

        .ncd-ai-btn {
            padding: 9px 12px;
        }
    }

    @media (max-width:991.98px) {
        .ncd-topbar-in {
            padding: 6px 14px;
        }

        .ncd-topbar-left .ncd-topbar-item:nth-child(n+2) {
            display: none;
        }

        .cs_main_header_in {
            padding: 12px 14px;
            gap: 10px;
        }

        .ncd-menu-toggle {
            display: inline-flex;
        }

        .cs_nav {
            position: fixed;
            top: 0;
            right: -340px;
            width: 330px;
            max-width: 88vw;
            height: 100vh;
            background: var(--ncd-white);
            box-shadow: var(--ncd-shadow-lg);
            overflow-y: auto;
            padding: 78px 18px 32px;
            transition: right .3s ease;
            z-index: 999;
            display: block !important;
            justify-content: initial;
        }

        .cs_site_header.ncd-menu-active .cs_nav {
            right: 0;
        }

        .cs_nav_list_wrap {
            display: block;
        }

        .cs_nav_list {
            flex-direction: column;
            align-items: stretch;
            gap: 2px;
        }

        .cs_nav_list>li {
            width: 100%;
        }

        .cs_nav_list>li>a {
            justify-content: space-between;
            width: 100%;
            padding: 13px 12px;
            font-size: 15px;
            color: var(--ncd-teal-900);
            border-radius: 8px;
        }

        .cs_nav_list>li>a::after {
            display: none;
        }

        .cs_nav_list>li.menu-item-has-children>a::before {
            margin-left: auto;
            order: 2;
            transform: rotate(45deg);
        }

        .cs_nav_list>li.ncd-open>a::before {
            transform: rotate(-135deg);
        }

        .cs_nav_list>li>a:hover,
        .cs_nav_list>li.ncd-open>a {
            background: var(--ncd-teal-50);
        }

        .cs_nav_list ul {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            border: none;
            display: none;
            width: 100%;
            margin: 4px 0 8px;
            padding: 6px 0 6px 12px;
            background: transparent;
            min-width: 0;
            pointer-events: auto;
        }

        .cs_nav_list ul::before {
            display: none;
        }

        .cs_nav_list li.ncd-open>ul {
            display: block;
        }

        .cs_nav_list ul li a {
            padding: 10px 10px;
            font-size: 14px;
        }

        .cs_nav_list ul li.ncd-dropdown-label {
            color: var(--ncd-teal-700);
        }

        .cs_main_header_right {
            gap: 8px;
        }

        .ncd-cta {
            padding: 10px 16px;
            font-size: 13px;
        }

        .ncd-brand-text strong {
            font-size: 16px;
        }
    }

    @media (max-width:575.98px) {
        .ncd-topbar-left {
            display: none;
        }

        .ncd-topbar-in {
            justify-content: center;
            padding: 6px 12px;
        }

        .ncd-brand img {
            height: 40px;
        }

        .ncd-brand-text {
            display: none !important;
        }

        .ncd-cta {
            display: none;
        }

        .ncd-ai-btn {
            padding: 9px 12px;
        }

        .ncd-ai-btn .ncd-ai-label {
            display: none;
        }
    }
</style>

<header class="cs_site_header cs_style_1 cs_sticky_header cs_heading_font cs_heading_color">

    <!-- ===== Top utility bar ===== -->
    <div class="ncd-topbar">
        <div class="container-fluid">
            <div class="ncd-topbar-in">
                <div class="ncd-topbar-left">
                    <a href="mailto:info@ncdarwanda.org" class="ncd-topbar-item">
                        <i class="bi-envelope-fill"></i><span>info@ncdarwanda.org</span>
                    </a>
                    <span class="ncd-topbar-divider d-none d-md-inline-block"></span>
                    <a href="tel:+250788000000" class="ncd-topbar-item d-none d-md-inline-flex">
                        <i class="bi-telephone-fill"></i><span>+250 788 000 000</span>
                    </a>
                </div>

                <div class="ncd-topbar-right">
                    <span class="ncd-topbar-item d-none d-sm-inline-flex" style="opacity:.75;">
                        <i class="bi-geo-alt-fill"></i><span>Kigali, Rwanda</span>
                    </span>
                    <span class="ncd-topbar-divider d-none d-sm-inline-block"></span>
                    <div class="ncd-topbar-social">
                        <a href="https://www.facebook.com/RwandaNCDA" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/RwandaNCDA" target="_blank" rel="noopener" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="http://www.youtube.com/@rwandancda" target="_blank" rel="noopener" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/65703122/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== Main bar ===== -->
    <div class="cs_main_header">
        <div class="container-fluid">
            <div class="cs_main_header_in">

                <!-- Brand -->
                <a class="ncd-brand" href="{{ URL::route('home') }}">
                    <img src="{{ asset('new/img/logos/logo.png')}}" alt="NCD Alliance Rwanda logo" height="46" width="92">
                </a>


                <!-- Navigation -->
                <nav class="cs_nav cs_fs_18 cs_semibold" aria-label="Primary">
                    <div class="cs_nav_list_wrap">
                        <ul class="cs_nav_list">

                            <li class="menu-item-has-children">
                                <a href="#">Who We Are</a>
                                <ul>
                                    <li><a href="{{ URL::route('about_us') }}"><i class="bi-info-circle"></i>About Us</a></li>
                                    <li><a href="{{ URL::route('Mission.Vision.Objectives') }}"><i class="bi-bullseye"></i>Mission, Vision &amp; Objectives</a></li>
                                    <li><a href="{{ URL::route('our_impact') }}"><i class="bi-graph-up-arrow"></i>Our Impact</a></li>
                                    <li><a href="{{ URL::route('team')}}"><i class="bi-people"></i>Workforces</a></li>
                                    <li><a href="{{ URL::route('partnerships') }}"><i class="bi-diagram-3"></i>Partnerships &amp; Members</a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Engagements</a>
                                <ul>
                                    @if($engagements->count() > 1 )
                                    @foreach($engagements as $engagement)
                                    <li>
                                        <a href="{{ url('ncd_engagements', $engagement->title) }}">
                                            <i class="bi-clipboard2-pulse"></i>{{ $engagement->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>

                            <li class="menu-item-has-children">
                                <a href="#">Resources</a>
                                <ul>
                                    <li><a href="{{ URL::route('ncd_resources') }}"><i class="bi-asterisk"></i>Publications</a></li>
                                    <li><a href="{{ URL::route('add_newsletter') }}"><i class="bi-calendar"></i>Newsletter</a></li>
                                    <li><a href="{{ url('ncd_stories') }}"><i class="bi-question-circle"></i>NCD Stories</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">News &amp; Events</a>
                                <ul>
                                    <li><a href="{{ URL::route('ncd_posts') }}"><i class="bi-newspaper"></i>Regular News</a></li>
                                    <li><a href="{{ URL::route('ncd_covid_posts') }}"><i class="bi-virus"></i>NCDs &amp; COVID-19</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Showcase</a>
                                <ul>
                                    <li><a href="{{ url('gallery') }}"><i class="bi-images"></i>Gallery</a></li>
                                    <li><a href="{{ url('video-gallery') }}"><i class="bi-camera-reels"></i>Videos</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Assessment Tools</a>
                                <ul>
                                    <li><a href="{{ URL::route('know_your_numbers') }}"><i class="bi-heart-pulse"></i>Know Your Numbers (BMI)</a></li>
                                    <li><a href="{{ URL::route('assessments.create') }}"><i class="bi-clipboard2-check"></i>Diabetes Assessment</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Right actions -->
                <div class="cs_main_header_right">
                    <button type="button" class="cs_search_toggle_btn" aria-label="Search">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.3337 27.9998C22.3293 27.9998 28.0003 22.3288 28.0003 15.3332C28.0003 8.33756 22.3293 2.6665 15.3337 2.6665C8.33805 2.6665 2.66699 8.33756 2.66699 15.3332C2.66699 22.3288 8.33805 27.9998 15.3337 27.9998Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M29.3337 29.3332L26.667 26.6665" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- AI Assistant -->
                    <a href="{{ url('ai-assistant') }}" class="ncd-ai-btn" aria-label="Ask AI Assistant">
                        <i class="bi-stars"></i>
                        <span class="ncd-ai-label">Ask AI Assistant</span>
                    </a>

                    <a href="{{ URL::route('message') }}" class="ncd-cta">
                        <i class="bi-chat-dots-fill d-none d-sm-inline"></i>
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Backdrop for mobile nav -->
    <div class="ncd-nav-backdrop" aria-hidden="true"></div>
</header>
<!-- End Header Section -->

<script>
    (function() {
        var header = document.querySelector('.cs_site_header');
        var toggle = header.querySelector('.ncd-menu-toggle');
        var backdrop = header.querySelector('.ncd-nav-backdrop');
        var navWrap = header.querySelector('.cs_nav');

        function closeMenu() {
            header.classList.remove('ncd-menu-active');
            toggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }

        function openMenu() {
            header.classList.add('ncd-menu-active');
            toggle.setAttribute('aria-expanded', 'true');
            if (window.innerWidth < 992) {
                document.body.style.overflow = 'hidden';
            }
        }

        toggle.addEventListener('click', function() {
            if (header.classList.contains('ncd-menu-active')) closeMenu();
            else openMenu();
        });

        backdrop.addEventListener('click', closeMenu);

        // ESC closes mobile menu
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && header.classList.contains('ncd-menu-active')) {
                closeMenu();
            }
        });

        // Accordion dropdowns on mobile
        var dropdownParents = header.querySelectorAll('.menu-item-has-children');
        dropdownParents.forEach(function(li) {
            var trigger = li.querySelector(':scope > a');
            trigger.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    var isOpen = li.classList.contains('ncd-open');
                    // collapse siblings at the same level
                    li.parentElement.querySelectorAll(':scope > .menu-item-has-children').forEach(function(sib) {
                        if (sib !== li) sib.classList.remove('ncd-open');
                    });
                    li.classList.toggle('ncd-open', !isOpen);
                }
            });
        });

        // Reset on resize
        var resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if (window.innerWidth >= 992) {
                    closeMenu();
                    dropdownParents.forEach(function(li) {
                        li.classList.remove('ncd-open');
                    });
                }
            }, 120);
        });
    })();
</script>