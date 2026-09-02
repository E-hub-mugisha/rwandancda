@php
    $engagements = App\Models\Engagement::all();
    $engagementCount = $engagements->count();
@endphp

<!-- =========================
     RNCDA PROFESSIONAL HEADER
========================= -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --rncda-primary: #0A599E;
        --rncda-primary-dark: #073F70;
        --rncda-primary-light: #EAF3FA;

        --rncda-green: #16845C;
        --rncda-green-dark: #0E6043;
        --rncda-green-light: #EAF7F1;

        --rncda-navy: #102A43;
        --rncda-ink: #172B3A;
        --rncda-muted: #607486;

        --rncda-border: #E3EAF0;
        --rncda-bg: #F7FAFC;
        --rncda-white: #FFFFFF;

        --rncda-gold: #D9A441;

        --rncda-shadow-sm: 0 3px 14px rgba(16, 42, 67, .07);
        --rncda-shadow-md: 0 18px 45px rgba(16, 42, 67, .14);
        --rncda-shadow-lg: 0 28px 70px rgba(16, 42, 67, .20);

        --rncda-font-body: 'Inter', sans-serif;
        --rncda-font-display: 'Fraunces', Georgia, serif;
    }

    /* =========================
       HEADER
    ========================= */

    .rncda-header {
        font-family: var(--rncda-font-body);
        position: relative;
        z-index: 1000;
        background: var(--rncda-white);
    }

    /* Top contact bar */
    .rncda-topbar {
        background: var(--rncda-navy);
        color: rgba(255,255,255,.82);
        font-size: 12.5px;
    }

    .rncda-topbar-inner {
        min-height: 38px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 6px 24px;
    }

    .rncda-topbar-left,
    .rncda-topbar-right {
        display: flex;
        align-items: center;
        gap: 18px;
    }

    .rncda-top-link {
        color: rgba(255,255,255,.82);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        transition: .2s ease;
    }

    .rncda-top-link:hover {
        color: #fff;
    }

    .rncda-top-link svg {
        color: #7ED6AD;
    }

    .rncda-top-divider {
        width: 1px;
        height: 14px;
        background: rgba(255,255,255,.18);
    }

    /* Social */
    .rncda-social {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .rncda-social a {
        width: 27px;
        height: 27px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: rgba(255,255,255,.75);
        text-decoration: none;
        transition: .2s ease;
    }

    .rncda-social a:hover {
        background: rgba(255,255,255,.12);
        color: #fff;
        transform: translateY(-1px);
    }

    .rncda-social a.whatsapp:hover {
        background: #25D366;
    }

    /* Accent line */
    .rncda-accent-line {
        height: 3px;
        background: linear-gradient(
            90deg,
            var(--rncda-green) 0%,
            var(--rncda-green) 48%,
            var(--rncda-primary) 48%,
            var(--rncda-primary) 100%
        );
    }

    /* =========================
       MAIN NAVIGATION
    ========================= */

    .rncda-main {
        background: #fff;
        border-bottom: 1px solid var(--rncda-border);
    }

    .rncda-main-inner {
        min-height: 82px;
        display: flex;
        align-items: center;
        gap: 30px;
        padding: 10px 24px;
    }

    /* Logo */
    .rncda-logo {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
        flex-shrink: 0;
    }

    .rncda-logo img {
        width: auto;
        height: 54px;
        display: block;
        object-fit: contain;
    }

    /* Navigation */
    .rncda-nav {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .rncda-nav-list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        gap: 2px;
    }

    .rncda-nav-list > li {
        position: relative;
    }

    .rncda-nav-list > li > a {
        min-height: 44px;
        padding: 10px 13px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        border-radius: 8px;
        color: var(--rncda-ink);
        text-decoration: none;
        font-size: 13.5px;
        font-weight: 600;
        white-space: nowrap;
        transition: .2s ease;
    }

    .rncda-nav-list > li > a:hover,
    .rncda-nav-list > li.rncda-open > a {
        color: var(--rncda-primary);
        background: var(--rncda-primary-light);
    }

    .rncda-caret {
        width: 13px;
        height: 13px;
        transition: transform .2s ease;
        opacity: .65;
    }

    .rncda-open > a .rncda-caret {
        transform: rotate(180deg);
    }

    /* =========================
       DROPDOWN
    ========================= */

    .rncda-dropdown {
        position: absolute;
        top: calc(100% + 7px);
        left: 0;

        width: 285px;
        padding: 8px;

        background: #fff;
        border: 1px solid var(--rncda-border);
        border-radius: 12px;

        box-shadow: var(--rncda-shadow-md);

        opacity: 0;
        visibility: hidden;
        pointer-events: none;

        transform: translateY(8px);
        transition: .2s ease;
    }

    .rncda-dropdown::before {
        content: "";
        position: absolute;
        top: -5px;
        left: 24px;

        width: 10px;
        height: 10px;

        background: #fff;
        border-left: 1px solid var(--rncda-border);
        border-top: 1px solid var(--rncda-border);

        transform: rotate(45deg);
    }

    .rncda-dropdown::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -8px;
        height: 8px;
    }

    .rncda-nav-list li:hover > .rncda-dropdown,
    .rncda-nav-list li.rncda-open > .rncda-dropdown {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0);
    }

    .rncda-dropdown ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .rncda-dropdown li a {
        display: flex;
        align-items: flex-start;
        gap: 11px;

        padding: 10px;
        border-radius: 8px;

        text-decoration: none;
        color: var(--rncda-ink);

        transition: .18s ease;
    }

    .rncda-dropdown li a:hover {
        background: var(--rncda-primary-light);
    }

    .rncda-menu-icon {
        width: 34px;
        height: 34px;
        flex-shrink: 0;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;
        background: var(--rncda-primary-light);
        color: var(--rncda-primary);
    }

    .rncda-dropdown li a:hover .rncda-menu-icon {
        background: var(--rncda-primary);
        color: #fff;
    }

    .rncda-menu-copy {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .rncda-menu-title {
        font-size: 13.5px;
        font-weight: 700;
    }

    .rncda-menu-description {
        color: var(--rncda-muted);
        font-size: 11.5px;
        line-height: 1.45;
    }

    /* =========================
       MEGA MENU
    ========================= */

    .rncda-mega {
        position: absolute;
        top: calc(100% + 7px);
        left: 50%;
        width: min(850px, 80vw);

        background: #fff;
        border: 1px solid var(--rncda-border);
        border-radius: 14px;
        box-shadow: var(--rncda-shadow-lg);

        opacity: 0;
        visibility: hidden;
        pointer-events: none;

        transform: translateX(-50%) translateY(8px);
        transition: .2s ease;
    }

    .rncda-mega::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -8px;
        height: 8px;
    }

    .rncda-nav-list li:hover > .rncda-mega,
    .rncda-nav-list li.rncda-open > .rncda-mega {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateX(-50%) translateY(0);
    }

    .rncda-mega-grid {
        display: grid;
        grid-template-columns: 1fr 1fr 250px;
        gap: 0;
        padding: 22px;
    }

    .rncda-mega-column {
        padding: 0 20px;
    }

    .rncda-mega-column:first-child {
        padding-left: 0;
    }

    .rncda-mega-column + .rncda-mega-column {
        border-left: 1px solid var(--rncda-border);
    }

    .rncda-mega-heading {
        margin: 0 0 12px;
        font-family: var(--rncda-font-display);
        font-size: 15px;
        color: var(--rncda-primary-dark);
    }

    .rncda-mega-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .rncda-mega-list a {
        display: flex;
        align-items: flex-start;
        gap: 9px;
        padding: 7px 0;

        color: var(--rncda-ink);
        text-decoration: none;
        font-size: 13px;

        transition: .18s ease;
    }

    .rncda-mega-list a:hover {
        color: var(--rncda-primary);
        padding-left: 4px;
    }

    .rncda-mega-list svg {
        margin-top: 2px;
        color: var(--rncda-green);
        flex-shrink: 0;
    }

    /* Feature panel */
    .rncda-mega-feature {
        margin-left: 12px;
        padding: 20px;
        border-radius: 12px;

        background:
            linear-gradient(
                145deg,
                var(--rncda-primary-dark),
                var(--rncda-primary)
            );

        color: #fff;
    }

    .rncda-mega-feature .eyebrow {
        font-size: 10.5px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .1em;
        color: #A9DFC8;
    }

    .rncda-mega-feature h4 {
        margin: 10px 0 8px;
        font-family: var(--rncda-font-display);
        font-size: 18px;
        line-height: 1.3;
        color: #fff;
    }

    .rncda-mega-feature p {
        margin: 0 0 15px;
        color: rgba(255,255,255,.76);
        font-size: 12px;
        line-height: 1.6;
    }

    .rncda-feature-link {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        color: #fff;
        text-decoration: none;
        font-size: 12px;
        font-weight: 700;

        transition: .2s ease;
    }

    .rncda-feature-link:hover {
        color: #A9DFC8;
    }

    /* =========================
       RIGHT ACTIONS
    ========================= */

    .rncda-actions {
        display: flex;
        align-items: center;
        gap: 9px;
        flex-shrink: 0;
    }

    .rncda-search {
        width: 40px;
        height: 40px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border: 1px solid var(--rncda-border);
        border-radius: 9px;

        background: #fff;
        color: var(--rncda-navy);

        cursor: pointer;
        transition: .2s ease;
    }

    .rncda-search:hover {
        border-color: var(--rncda-primary);
        color: var(--rncda-primary);
        background: var(--rncda-primary-light);
    }

    /* AI */
    .rncda-ai {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 10px 14px;
        border-radius: 8px;

        background: var(--rncda-green-light);
        color: var(--rncda-green-dark);

        font-size: 12.5px;
        font-weight: 700;
        text-decoration: none;

        transition: .2s ease;
    }

    .rncda-ai:hover {
        background: var(--rncda-green);
        color: #fff;
        transform: translateY(-1px);
    }

    /* Contact */
    .rncda-contact {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        padding: 11px 17px;
        border-radius: 8px;

        background: var(--rncda-primary);
        color: #fff;

        font-size: 12.5px;
        font-weight: 700;
        text-decoration: none;

        box-shadow: 0 7px 18px rgba(10,89,158,.18);

        transition: .2s ease;
    }

    .rncda-contact:hover {
        background: var(--rncda-primary-dark);
        color: #fff;
        transform: translateY(-1px);
    }

    /* =========================
       MOBILE
    ========================= */

    .rncda-menu-toggle {
        width: 42px;
        height: 42px;

        display: none;
        align-items: center;
        justify-content: center;

        border: 1px solid var(--rncda-border);
        border-radius: 9px;

        background: var(--rncda-primary);
        cursor: pointer;
    }

    .rncda-menu-toggle span,
    .rncda-menu-toggle span::before,
    .rncda-menu-toggle span::after {
        width: 19px;
        height: 2px;
        background: #fff;
        border-radius: 2px;
        display: block;
        position: relative;
        transition: .2s ease;
    }

    .rncda-menu-toggle span::before,
    .rncda-menu-toggle span::after {
        content: "";
        position: absolute;
        left: 0;
    }

    .rncda-menu-toggle span::before {
        top: -6px;
    }

    .rncda-menu-toggle span::after {
        top: 6px;
    }

    .rncda-mobile-close {
        width: 34px;
        height: 34px;
        border-radius: 50%;
        border: 1px solid rgba(255,255,255,.25);
        background: rgba(255,255,255,.1);
        color: #fff;

        display: flex;
        align-items: center;
        justify-content: center;

        cursor: pointer;
    }

    .rncda-mobile-head {
        display: none;
    }

    .rncda-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(7,63,112,.42);
        backdrop-filter: blur(3px);

        opacity: 0;
        visibility: hidden;
        transition: .25s ease;
        z-index: 998;
    }

    .rncda-header.menu-active .rncda-backdrop {
        opacity: 1;
        visibility: visible;
    }

    @media (max-width: 1200px) {
        .rncda-nav-list > li > a {
            padding-left: 9px;
            padding-right: 9px;
            font-size: 12.5px;
        }

        .rncda-contact {
            padding-left: 13px;
            padding-right: 13px;
        }

        .rncda-ai span {
            display: none;
        }

        .rncda-ai {
            width: 40px;
            height: 40px;
            justify-content: center;
            padding: 0;
        }
    }

    @media (max-width: 991px) {

        .rncda-topbar-left .hide-mobile {
            display: none;
        }

        .rncda-main-inner {
            min-height: 70px;
            padding: 9px 16px;
            gap: 10px;
        }

        .rncda-logo img {
            height: 47px;
        }

        .rncda-menu-toggle {
            display: flex;
        }

        .rncda-nav {
            position: fixed;
            top: 0;
            right: -360px;

            width: 340px;
            max-width: 88vw;
            height: 100vh;

            display: block;

            background: #fff;
            box-shadow: var(--rncda-shadow-lg);

            overflow-y: auto;

            transition: right .3s ease;
            z-index: 999;
        }

        .rncda-header.menu-active .rncda-nav {
            right: 0;
        }

        .rncda-mobile-head {
            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 18px;

            background: var(--rncda-primary-dark);
            color: #fff;
        }

        .rncda-mobile-title {
            font-family: var(--rncda-font-display);
            font-size: 18px;
        }

        .rncda-nav-list {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            gap: 2px;

            padding: 15px 16px 30px;
        }

        .rncda-nav-list > li {
            width: 100%;
        }

        .rncda-nav-list > li > a {
            width: 100%;
            justify-content: space-between;

            padding: 14px 12px;
            font-size: 14px;
        }

        .rncda-dropdown,
        .rncda-mega {
            position: static;
            width: 100%;

            display: none;

            opacity: 1;
            visibility: visible;
            pointer-events: auto;

            transform: none;

            border: none;
            box-shadow: none;
            border-radius: 0;

            padding: 5px 0 8px 10px;
            background: transparent;
        }

        .rncda-nav-list li.rncda-open > .rncda-dropdown,
        .rncda-nav-list li.rncda-open > .rncda-mega {
            display: block;
        }

        .rncda-dropdown::before,
        .rncda-dropdown::after,
        .rncda-mega::before {
            display: none;
        }

        .rncda-mega-grid {
            grid-template-columns: 1fr;
            gap: 15px;
            padding: 5px 0;
        }

        .rncda-mega-column {
            padding: 0;
        }

        .rncda-mega-column + .rncda-mega-column {
            border-left: none;
            border-top: 1px solid var(--rncda-border);
            padding-top: 15px;
        }

        .rncda-mega-feature {
            margin: 0;
        }

        .rncda-actions {
            margin-left: auto;
        }

        .rncda-contact {
            display: none;
        }
    }

    @media (max-width: 575px) {

        .rncda-topbar-inner {
            justify-content: center;
            padding: 6px 10px;
        }

        .rncda-topbar-left {
            display: none;
        }

        .rncda-topbar-right {
            gap: 10px;
        }

        .rncda-top-location {
            display: none;
        }

        .rncda-main-inner {
            padding-left: 12px;
            padding-right: 12px;
        }

        .rncda-logo img {
            height: 43px;
            max-width: 150px;
        }

        .rncda-search {
            display: none;
        }

        .rncda-ai {
            display: none;
        }

        .rncda-menu-toggle {
            width: 40px;
            height: 40px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .rncda-header *,
        .rncda-header *::before,
        .rncda-header *::after {
            transition: none !important;
        }
    }

    .rncda-header a:focus-visible,
    .rncda-header button:focus-visible {
        outline: 2px solid var(--rncda-green);
        outline-offset: 3px;
    }
</style>


<!-- =========================
     ICON SPRITE
========================= -->

<svg aria-hidden="true"
     style="position:absolute;width:0;height:0;overflow:hidden"
     focusable="false">

    <defs>

        <symbol id="rncda-mail" viewBox="0 0 24 24">
            <rect x="3" y="5" width="18" height="14" rx="2"/>
            <path d="m3 7 9 6 9-6"/>
        </symbol>

        <symbol id="rncda-phone" viewBox="0 0 24 24">
            <path d="M6.5 3.5h3l1.2 4-2 1.6a14 14 0 0 0 6.2 6.2l1.6-2 4 1.2v3c0 .9-.7 1.6-1.6 1.6C11.4 19.1 4.9 12.6 4.9 5.1c0-.9.7-1.6 1.6-1.6Z"/>
        </symbol>

        <symbol id="rncda-pin" viewBox="0 0 24 24">
            <path d="M12 21s7-6.1 7-11a7 7 0 1 0-14 0c0 4.9 7 11 7 11Z"/>
            <circle cx="12" cy="10" r="2.2"/>
        </symbol>

        <symbol id="rncda-facebook" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9"/>
            <path d="M13.5 17v-5h1.8l.3-2.1h-2.1V8.6c0-.7.2-1.1 1.2-1.1h1.1V5.6c-.5-.1-1.1-.2-1.7-.2-1.8 0-3 1.1-3 3.1v1.4H9.2V12h1.9v5"/>
        </symbol>

        <symbol id="rncda-linkedin" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="3"/>
            <path d="M8 10v6"/>
            <circle cx="8" cy="7.5" r=".8" fill="currentColor" stroke="none"/>
            <path d="M12 16v-3.2c0-1.4.8-2.3 2-2.3s2 .9 2 2.3V16"/>
        </symbol>

        <symbol id="rncda-youtube" viewBox="0 0 24 24">
            <rect x="3" y="6" width="18" height="12" rx="3"/>
            <path d="m10 9 5 3-5 3Z"/>
        </symbol>

        <symbol id="rncda-whatsapp" viewBox="0 0 24 24">
            <path d="M12 3.5a8.5 8.5 0 0 0-7.3 12.8L3.5 20.5l4.4-1.2A8.5 8.5 0 1 0 12 3.5Z"/>
            <path d="M8.7 8.4c.3-.6.6-.6.9-.6h.5c.2 0 .4.2.6.6l.7 1.7c.1.3.1.5-.1.7l-.5.5c-.2.2-.2.4 0 .7.4.7 1.1 1.3 1.8 1.7.3.2.5.2.7-.1l.5-.6c.2-.2.4-.3.7-.2l1.7.8c.3.1.4.3.4.6-.1.7-.5 1.3-1.1 1.6-.6.3-1.2.3-2 .1-1.3-.3-2.7-1.1-4-2.3-1.1-1-2-2.3-2.5-3.5-.4-1-.3-1.9.3-2.7Z"/>
        </symbol>

        <symbol id="rncda-search" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="7"/>
            <path d="m16.5 16.5 4 4"/>
        </symbol>

        <symbol id="rncda-chevron" viewBox="0 0 24 24">
            <path d="m6 9 6 6 6-6"/>
        </symbol>

        <symbol id="rncda-close" viewBox="0 0 24 24">
            <path d="M6 6l12 12"/>
            <path d="m18 6-12 12"/>
        </symbol>

        <symbol id="rncda-info" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9"/>
            <path d="M12 11v5"/>
            <circle cx="12" cy="8" r=".8" fill="currentColor" stroke="none"/>
        </symbol>

        <symbol id="rncda-target" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="8"/>
            <circle cx="12" cy="12" r="4.5"/>
            <circle cx="12" cy="12" r="1" fill="currentColor" stroke="none"/>
        </symbol>

        <symbol id="rncda-users" viewBox="0 0 24 24">
            <circle cx="9" cy="8" r="3"/>
            <path d="M3.5 19c0-3 2.4-5 5.5-5s5.5 2 5.5 5"/>
            <circle cx="17" cy="9" r="2.3"/>
            <path d="M15.5 14.2c2.7.4 4.5 2 4.5 4.8"/>
        </symbol>

        <symbol id="rncda-chart" viewBox="0 0 24 24">
            <path d="M4 19V5"/>
            <path d="M4 19h16"/>
            <path d="m7 15 3-4 3 2 5-6"/>
        </symbol>

        <symbol id="rncda-file" viewBox="0 0 24 24">
            <path d="M7 3h7l4 4v14H7z"/>
            <path d="M14 3v4h4"/>
            <path d="M10 12h4"/>
            <path d="M10 15.5h4"/>
        </symbol>

        <symbol id="rncda-calendar" viewBox="0 0 24 24">
            <rect x="4" y="5" width="16" height="15" rx="2"/>
            <path d="M4 9h16"/>
            <path d="M8 3v4"/>
            <path d="M16 3v4"/>
        </symbol>

        <symbol id="rncda-message" viewBox="0 0 24 24">
            <path d="M4 5h16v11H9l-5 4v-4H4z"/>
            <path d="M8 10h8"/>
        </symbol>

        <symbol id="rncda-image" viewBox="0 0 24 24">
            <rect x="3" y="4" width="18" height="16" rx="2"/>
            <circle cx="9" cy="10" r="1.5"/>
            <path d="m5 17 4-4 3 3 3-4 4 5"/>
        </symbol>

        <symbol id="rncda-video" viewBox="0 0 24 24">
            <rect x="3" y="6" width="13" height="12" rx="2"/>
            <path d="m16 10 5-3v10l-5-3"/>
        </symbol>

        <symbol id="rncda-heart" viewBox="0 0 24 24">
            <path d="M12 20s-7-4.5-7-10a4 4 0 0 1 7-2.6A4 4 0 0 1 19 10c0 5.5-7 10-7 10Z"/>
            <path d="M8 12h2l1-3 2 6 1-3h2"/>
        </symbol>

        <symbol id="rncda-check" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="3"/>
            <path d="m8 12 3 3 5-6"/>
        </symbol>

        <symbol id="rncda-sparkle" viewBox="0 0 24 24">
            <path d="M12 3c.5 3 1.2 4.2 4.5 4.7-3.3.5-4 1.7-4.5 4.7-.5-3-1.2-4.2-4.5-4.7C10.8 7.2 11.5 6 12 3Z"/>
            <path d="M18 14c.3 1.7.8 2.5 2.5 2.8-1.7.3-2.2 1.1-2.5 2.8-.3-1.7-.8-2.5-2.5-2.8 1.7-.3 2.2-1.1 2.5-2.8Z"/>
        </symbol>

    </defs>
</svg>


<header class="rncda-header">

    <!-- TOPBAR -->
    <div class="rncda-topbar">
        <div class="container-fluid">
            <div class="rncda-topbar-inner">

                <div class="rncda-topbar-left">

                    <a href="mailto:info@rwandancda.org" class="rncda-top-link">
                        <svg width="14" height="14">
                            <use href="#rncda-mail"/>
                        </svg>
                        info@rwandancda.org
                    </a>

                    <span class="rncda-top-divider hide-mobile"></span>

                    <a href="tel:+250791232176"
                       class="rncda-top-link hide-mobile">
                        <svg width="14" height="14">
                            <use href="#rncda-phone"/>
                        </svg>
                        +250 791 232 176
                    </a>

                </div>

                <div class="rncda-topbar-right">

                    <span class="rncda-top-link rncda-top-location">
                        <svg width="14" height="14">
                            <use href="#rncda-pin"/>
                        </svg>
                        Kigali, Rwanda
                    </span>

                    <span class="rncda-top-divider rncda-top-location"></span>

                    <div class="rncda-social">

                        <a href="https://www.facebook.com/RwandaNCDA"
                           target="_blank"
                           rel="noopener"
                           aria-label="Facebook">
                            <svg width="15" height="15">
                                <use href="#rncda-facebook"/>
                            </svg>
                        </a>

                        <a href="https://twitter.com/RwandaNCDA"
                           target="_blank"
                           rel="noopener"
                           aria-label="X">
                            <strong style="font-size:12px;">𝕏</strong>
                        </a>

                        <a href="http://www.youtube.com/@rwandancda"
                           target="_blank"
                           rel="noopener"
                           aria-label="YouTube">
                            <svg width="15" height="15">
                                <use href="#rncda-youtube"/>
                            </svg>
                        </a>

                        <a href="https://www.linkedin.com/company/65703122/"
                           target="_blank"
                           rel="noopener"
                           aria-label="LinkedIn">
                            <svg width="15" height="15">
                                <use href="#rncda-linkedin"/>
                            </svg>
                        </a>

                        <a href="https://wa.me/250791232176"
                           target="_blank"
                           rel="noopener"
                           aria-label="WhatsApp"
                           class="whatsapp">
                            <svg width="15" height="15">
                                <use href="#rncda-whatsapp"/>
                            </svg>
                        </a>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="rncda-accent-line"></div>


    <!-- MAIN NAV -->
    <div class="rncda-main">

        <div class="container-fluid">

            <div class="rncda-main-inner">

                <!-- LOGO -->
                <a href="{{ URL::route('home') }}"
                   class="rncda-logo"
                   aria-label="Rwanda NCD Alliance home">

                    <img
                        src="{{ asset('new/img/logos/logo.png') }}"
                        alt="Rwanda NCD Alliance"
                        width="150"
                        height="54"
                    >

                </a>


                <!-- NAVIGATION -->
                <nav class="rncda-nav"
                     aria-label="Primary navigation">

                    <div class="rncda-mobile-head">

                        <span class="rncda-mobile-title">
                            Rwanda NCD Alliance
                        </span>

                        <button
                            type="button"
                            class="rncda-mobile-close"
                            aria-label="Close menu">

                            <svg width="16" height="16">
                                <use href="#rncda-close"/>
                            </svg>

                        </button>

                    </div>


                    <ul class="rncda-nav-list">

                        <!-- WHO WE ARE -->
                        <li class="menu-item-has-children">

                            <a href="#"
                               aria-haspopup="true"
                               aria-expanded="false">

                                Who We Are

                                <svg class="rncda-caret">
                                    <use href="#rncda-chevron"/>
                                </svg>

                            </a>

                            <div class="rncda-mega">

                                <div class="rncda-mega-grid">

                                    <div class="rncda-mega-column">

                                        <h4 class="rncda-mega-heading">
                                            Organization
                                        </h4>

                                        <ul class="rncda-mega-list">

                                            <li>
                                                <a href="{{ URL::route('about_us') }}">
                                                    <svg width="17" height="17">
                                                        <use href="#rncda-info"/>
                                                    </svg>
                                                    <span>About Us</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ URL::route('Mission.Vision.Objectives') }}">
                                                    <svg width="17" height="17">
                                                        <use href="#rncda-target"/>
                                                    </svg>
                                                    <span>Mission, Vision & Objectives</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ URL::route('our_impact') }}">
                                                    <svg width="17" height="17">
                                                        <use href="#rncda-chart"/>
                                                    </svg>
                                                    <span>Our Impact</span>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                    <div class="rncda-mega-column">

                                        <h4 class="rncda-mega-heading">
                                            People & Partnerships
                                        </h4>

                                        <ul class="rncda-mega-list">

                                            <li>
                                                <a href="{{ URL::route('team') }}">
                                                    <svg width="17" height="17">
                                                        <use href="#rncda-users"/>
                                                    </svg>
                                                    <span>Our Team</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ URL::route('partnerships') }}">
                                                    <svg width="17" height="17">
                                                        <use href="#rncda-users"/>
                                                    </svg>
                                                    <span>Partners & Members</span>
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                    <div class="rncda-mega-feature">

                                        <span class="eyebrow">
                                            ABOUT RNCDA
                                        </span>

                                        <h4>
                                            Building a healthier Rwanda together.
                                        </h4>

                                        <p>
                                            Discover our mission, people, partnerships
                                            and work advancing prevention and control
                                            of non-communicable diseases.
                                        </p>

                                        <a href="{{ URL::route('about_us') }}"
                                           class="rncda-feature-link">

                                            Explore our story

                                            <span>→</span>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        </li>


                        <!-- OUR WORK -->
                        <li class="menu-item-has-children">

                            <a href="#"
                               aria-haspopup="true"
                               aria-expanded="false">

                                Our Work

                                <svg class="rncda-caret">
                                    <use href="#rncda-chevron"/>
                                </svg>

                            </a>

                            <div class="rncda-dropdown">

                                <ul>

                                    @foreach($engagements as $engagement)

                                        <li>

                                            <a href="{{ url('ncd_engagements', $engagement->title) }}">

                                                <span class="rncda-menu-icon">

                                                    <svg width="17" height="17">
                                                        <use href="#rncda-check"/>
                                                    </svg>

                                                </span>

                                                <span class="rncda-menu-copy">

                                                    <span class="rncda-menu-title">
                                                        {{ $engagement->title }}
                                                    </span>

                                                    <span class="rncda-menu-description">
                                                        Explore our work and programmes
                                                    </span>

                                                </span>

                                            </a>

                                        </li>

                                    @endforeach

                                </ul>

                            </div>

                        </li>


                        <!-- RESOURCES -->
                        <li class="menu-item-has-children">

                            <a href="#"
                               aria-haspopup="true"
                               aria-expanded="false">

                                Resources & Media

                                <svg class="rncda-caret">
                                    <use href="#rncda-chevron"/>
                                </svg>

                            </a>

                            <div class="rncda-mega">

                                <div class="rncda-mega-grid">

                                    <div class="rncda-mega-column">

                                        <h4 class="rncda-mega-heading">
                                            Resources
                                        </h4>

                                        <ul class="rncda-mega-list">

                                            <li>
                                                <a href="{{ URL::route('ncd_resources') }}">
                                                    <svg width="17">
                                                        <use href="#rncda-file"/>
                                                    </svg>
                                                    Publications
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ URL::route('add_newsletter') }}">
                                                    <svg width="17">
                                                        <use href="#rncda-calendar"/>
                                                    </svg>
                                                    Newsletter
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('ncd_stories') }}">
                                                    <svg width="17">
                                                        <use href="#rncda-message"/>
                                                    </svg>
                                                    NCD Stories
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                    <div class="rncda-mega-column">

                                        <h4 class="rncda-mega-heading">
                                            News & Events
                                        </h4>

                                        <ul class="rncda-mega-list">

                                            <li>
                                                <a href="{{ URL::route('ncd_posts') }}">
                                                    <svg width="17">
                                                        <use href="#rncda-file"/>
                                                    </svg>
                                                    Latest News
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ URL::route('ncd_covid_posts') }}">
                                                    <svg width="17">
                                                        <use href="#rncda-heart"/>
                                                    </svg>
                                                    NCDs & COVID-19
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('gallery') }}">
                                                    <svg width="17">
                                                        <use href="#rncda-image"/>
                                                    </svg>
                                                    Gallery
                                                </a>
                                            </li>

                                            <li>
                                                <a href="{{ url('video-gallery') }}">
                                                    <svg width="17">
                                                        <use href="#rncda-video"/>
                                                    </svg>
                                                    Videos
                                                </a>
                                            </li>

                                        </ul>

                                    </div>


                                    <div class="rncda-mega-feature">

                                        <span class="eyebrow">
                                            RESOURCES
                                        </span>

                                        <h4>
                                            Knowledge for action.
                                        </h4>

                                        <p>
                                            Access publications, stories, news,
                                            campaigns and resources supporting
                                            NCD prevention and advocacy.
                                        </p>

                                        <a href="{{ URL::route('ncd_resources') }}"
                                           class="rncda-feature-link">
                                            Browse resources →
                                        </a>

                                    </div>

                                </div>

                            </div>

                        </li>


                        <!-- HEALTH TOOLS -->
                        <li class="menu-item-has-children">

                            <a href="#"
                               aria-haspopup="true"
                               aria-expanded="false">

                                Health Tools

                                <svg class="rncda-caret">
                                    <use href="#rncda-chevron"/>
                                </svg>

                            </a>

                            <div class="rncda-dropdown">

                                <ul>

                                    <li>

                                        <a href="{{ URL::route('know_your_numbers') }}">

                                            <span class="rncda-menu-icon">
                                                <svg width="18">
                                                    <use href="#rncda-heart"/>
                                                </svg>
                                            </span>

                                            <span class="rncda-menu-copy">

                                                <span class="rncda-menu-title">
                                                    Know Your Numbers
                                                </span>

                                                <span class="rncda-menu-description">
                                                    Check your BMI and health numbers
                                                </span>

                                            </span>

                                        </a>

                                    </li>


                                    <li>

                                        <a href="{{ URL::route('assessments.create') }}">

                                            <span class="rncda-menu-icon">
                                                <svg width="18">
                                                    <use href="#rncda-check"/>
                                                </svg>
                                            </span>

                                            <span class="rncda-menu-copy">

                                                <span class="rncda-menu-title">
                                                    Diabetes Assessment
                                                </span>

                                                <span class="rncda-menu-description">
                                                    Complete a quick risk assessment
                                                </span>

                                            </span>

                                        </a>

                                    </li>

                                </ul>

                            </div>

                        </li>

                    </ul>

                </nav>


                <!-- ACTIONS -->
                <div class="rncda-actions">

                    <button
                        type="button"
                        class="rncda-search"
                        aria-label="Search">

                        <svg width="18" height="18">
                            <use href="#rncda-search"/>
                        </svg>

                    </button>


                    <a href="{{ url('ai-assistant') }}"
                       class="rncda-ai">

                        <svg width="17" height="17">
                            <use href="#rncda-sparkle"/>
                        </svg>

                        <span>AI Assistant</span>

                    </a>


                    <a href="{{ URL::route('message') }}"
                       class="rncda-contact">

                        <svg width="16" height="16">
                            <use href="#rncda-message"/>
                        </svg>

                        Contact Us

                    </a>


                    <button
                        type="button"
                        class="rncda-menu-toggle"
                        aria-label="Open menu"
                        aria-expanded="false">

                        <span></span>

                    </button>

                </div>

            </div>

        </div>

    </div>


    <!-- MOBILE BACKDROP -->
    <div class="rncda-backdrop"></div>

</header>


<script>
(function () {

    const header = document.querySelector('.rncda-header');

    if (!header) return;

    const toggle = header.querySelector('.rncda-menu-toggle');
    const close = header.querySelector('.rncda-mobile-close');
    const backdrop = header.querySelector('.rncda-backdrop');

    const parents = header.querySelectorAll(
        '.rncda-nav-list > .menu-item-has-children'
    );


    function closeMenu() {

        header.classList.remove('menu-active');

        if (toggle) {
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Open menu');
        }

        document.body.style.overflow = '';

        parents.forEach(function (item) {

            item.classList.remove('rncda-open');

            const link = item.querySelector(':scope > a');

            if (link) {
                link.setAttribute('aria-expanded', 'false');
            }

        });

    }


    function openMenu() {

        header.classList.add('menu-active');

        if (toggle) {
            toggle.setAttribute('aria-expanded', 'true');
            toggle.setAttribute('aria-label', 'Close menu');
        }

        document.body.style.overflow = 'hidden';

    }


    if (toggle) {

        toggle.addEventListener('click', function () {

            if (header.classList.contains('menu-active')) {
                closeMenu();
            } else {
                openMenu();
            }

        });

    }


    if (close) {
        close.addEventListener('click', closeMenu);
    }


    if (backdrop) {
        backdrop.addEventListener('click', closeMenu);
    }


    parents.forEach(function (item) {

        const trigger = item.querySelector(':scope > a');

        if (!trigger) return;


        trigger.addEventListener('click', function (event) {

            if (window.innerWidth < 992) {

                event.preventDefault();

                const currentlyOpen =
                    item.classList.contains('rncda-open');


                parents.forEach(function (other) {

                    if (other !== item) {

                        other.classList.remove('rncda-open');

                        const otherTrigger =
                            other.querySelector(':scope > a');

                        if (otherTrigger) {
                            otherTrigger.setAttribute(
                                'aria-expanded',
                                'false'
                            );
                        }

                    }

                });


                item.classList.toggle(
                    'rncda-open',
                    !currentlyOpen
                );

                trigger.setAttribute(
                    'aria-expanded',
                    String(!currentlyOpen)
                );

            }

        });


        item.addEventListener('mouseenter', function () {

            if (window.innerWidth >= 992) {
                trigger.setAttribute('aria-expanded', 'true');
            }

        });


        item.addEventListener('mouseleave', function () {

            if (window.innerWidth >= 992) {
                trigger.setAttribute('aria-expanded', 'false');
            }

        });

    });


    document.addEventListener('keydown', function (event) {

        if (
            event.key === 'Escape' &&
            header.classList.contains('menu-active')
        ) {
            closeMenu();
        }

    });


    window.addEventListener('resize', function () {

        if (window.innerWidth >= 992) {
            closeMenu();
        }

    });

})();
</script>

<!-- =========================
     END HEADER
========================= -->