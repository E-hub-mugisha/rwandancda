@php 

$engagements = App\Models\Engagement::all();

$engagementCount = $engagements->count();

@endphp

<!-- Start Header Section -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        /* ---- Core palette: deep clinical navy + warm amber accent ---- */
        --ncd-teal-900: #14293D;
        --ncd-teal-800: #1B3A57;
        --ncd-teal-700: #245175;
        --ncd-teal-600: #326994;
        --ncd-teal-500: #4E84AF;
        --ncd-teal-300: #9EC0DC;
        --ncd-teal-100: #E7F1F8;
        --ncd-teal-50: #F5FAFD;
        --ncd-amber: #E7963C;
        --ncd-amber-dark: #C77A21;
        --ncd-amber-50: #FDF3E7;

        /* ---- New accent palette (mega menu / mobile menu redesign) ---- */
        --ncd-accent-blue: #5D89C8;
        --ncd-accent-blue-dark: #4A729E;
        --ncd-accent-blue-50: #EEF3FA;
        --ncd-whatsapp: #25D366;
        --ncd-whatsapp-dark: #1DA851;

        --ncd-ink: #142230;
        --ncd-slate: #56697A;
        --ncd-white: #FFFFFF;
        --ncd-border: rgba(20, 41, 61, .12);
        --ncd-border-strong: rgba(20, 41, 61, .22);
        --ncd-font-body: 'Inter', system-ui, -apple-system, sans-serif;
        --ncd-font-display: 'Fraunces', Georgia, serif;
        --ncd-radius: 14px;
        --ncd-radius-sm: 9px;
        --ncd-shadow-sm: 0 2px 8px -2px rgba(20, 41, 61, .10);
        --ncd-shadow-md: 0 14px 32px -12px rgba(20, 41, 61, .20);
        --ncd-shadow-lg: 0 26px 64px -20px rgba(20, 41, 61, .30);
    }

    /* ============================================================
       ICON SYSTEM (inline SVG sprite, replaces icon fonts/emoji)
       ============================================================ */
    .ncd-icon {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        fill: none;
        stroke: currentColor;
        stroke-width: 1.6;
        stroke-linecap: round;
        stroke-linejoin: round;
        vertical-align: -3px;
    }

    .ncd-icon-sm {
        width: 13px;
        height: 13px;
        stroke-width: 1.8;
    }

    .ncd-icon-lg {
        width: 20px;
        height: 20px;
        stroke-width: 1.4;
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
        padding: 7px 24px;
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

    .ncd-topbar-item .ncd-icon {
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
        color: rgba(255, 255, 255, .82);
        text-decoration: none;
        transition: .2s ease;
    }

    .ncd-topbar-social a .ncd-icon {
        width: 14px;
        height: 14px;
    }

    .ncd-topbar-social a:hover {
        background: var(--ncd-amber);
        color: var(--ncd-teal-900);
        transform: translateY(-1px);
    }

    /* WhatsApp topbar icon gets its own brand-colored hover instead of amber */
    .ncd-topbar-social a.ncd-topbar-whatsapp:hover {
        background: var(--ncd-whatsapp);
        color: var(--ncd-white);
    }

    /* ---------- EKG pulse strip (subtle, thematic to a health alliance) ---------- */
    .ncd-pulse-line {
        height: 4px;
        width: 100%;
        overflow: hidden;
        background: var(--ncd-teal-50);
        line-height: 0;
    }

    .ncd-pulse-line svg {
        width: 200%;
        height: 4px;
        stroke: var(--ncd-amber);
        animation: ncd-pulse-scroll 10s linear infinite;
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
        padding: 14px 24px;
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
        line-height: 1.14;
    }

    .ncd-brand-text strong {
        font-family: var(--ncd-font-display);
        font-weight: 600;
        font-size: 18px;
        color: var(--ncd-teal-900);
        letter-spacing: .002em;
    }

    .ncd-brand-text em {
        font-style: normal;
        font-size: 11.5px;
        font-weight: 600;
        color: var(--ncd-slate);
        margin-top: 2px;
    }

    /* ---------- Primary nav ---------- */
    .cs_nav {
        flex: 1 1 auto;
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

    .cs_nav_list>li>a:hover,
    .cs_nav_list>li.ncd-open>a {
        color: var(--ncd-teal-700);
        background: var(--ncd-teal-50);
    }

    .cs_nav_list>li>a:hover::after,
    .cs_nav_list>li.ncd-open>a::after {
        transform: scaleX(1);
    }

    .cs_nav_list>li.menu-item-has-children>a .ncd-caret {
        width: 8px;
        height: 8px;
        stroke: currentColor;
        stroke-width: 1.8;
        opacity: .65;
        transition: transform .2s ease;
    }

    .cs_nav_list>li.ncd-open>a .ncd-caret {
        transform: rotate(180deg);
    }

    /* ---------- Standard dropdown ---------- */
    .cs_nav_list .ncd-dropdown {
        list-style: none;
        margin: 0;
        padding: 8px;
        position: absolute;
        top: calc(100% + 10px);
        left: 0;
        min-width: 280px;
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

    .cs_nav_list .ncd-dropdown::before {
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

    /* FIX: invisible hover-bridge closing the dead zone between the trigger
       link and the panel below it — this gap was why the menu appeared to
       "auto disappear": the mouse left every hoverable box while crossing it. */
    .cs_nav_list .ncd-dropdown::after {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -10px;
        height: 10px;
        background: transparent;
    }

    .cs_nav_list li.menu-item-has-children:hover>.ncd-dropdown,
    .cs_nav_list li.ncd-open>.ncd-dropdown {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0);
    }

    .ncd-dropdown li a {
        display: flex;
        align-items: flex-start;
        gap: 11px;
        padding: 9px 11px;
        border-radius: 8px;
        text-decoration: none;
        color: var(--ncd-ink);
        transition: .15s ease;
    }

    .ncd-dropdown li a:hover {
        background: var(--ncd-teal-100);
        padding-left: 14px;
    }

    .ncd-dropdown .ncd-item-icon {
        width: 30px;
        height: 30px;
        border-radius: 8px;
        background: var(--ncd-teal-100);
        color: var(--ncd-teal-700);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .ncd-dropdown li a:hover .ncd-item-icon {
        background: var(--ncd-teal-700);
        color: var(--ncd-white);
    }

    .ncd-item-copy {
        display: flex;
        flex-direction: column;
        gap: 1px;
        min-width: 0;
    }

    .ncd-item-title {
        font-size: 13.8px;
        font-weight: 600;
        color: var(--ncd-ink);
    }

    .ncd-item-desc {
        font-size: 12px;
        color: var(--ncd-slate);
        line-height: 1.35;
    }

    .ncd-dropdown li a:hover .ncd-item-title {
        color: var(--ncd-teal-800);
    }

    /* Health-tools variant: two prominent action cards instead of plain rows */
    .ncd-dropdown.ncd-tools {
        min-width: 300px;
    }

    .ncd-dropdown.ncd-tools li a {
        border: 1px solid transparent;
        margin-bottom: 2px;
    }

    .ncd-dropdown.ncd-tools li a:hover {
        border-color: var(--ncd-border);
        background: var(--ncd-teal-50);
        padding-left: 11px;
    }

    .ncd-dropdown.ncd-tools .ncd-item-icon {
        background: var(--ncd-amber-50);
        color: var(--ncd-amber-dark);
    }

    .ncd-dropdown.ncd-tools li a:hover .ncd-item-icon {
        background: var(--ncd-amber);
        color: var(--ncd-white);
    }

    /* ---------- Mega menu (Who We Are / Resources & Media) ---------- */
    .ncd-mega-wrap {
        position: static;
    }

    .ncd-mega {
        position: absolute;
        top: calc(100% + 10px);
        left: 50%;
        transform: translateX(-50%) translateY(8px);
        width: min(880px, 82vw);
        background: var(--ncd-white);
        border: 1px solid var(--ncd-border);
        border-radius: var(--ncd-radius);
        box-shadow: var(--ncd-shadow-lg);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: .2s ease;
        z-index: 1001;
        /* overflow:hidden removed — it was clipping the hover-bridge below
           and was not needed once the feature card carries its own radius */
    }

    /* FIX: same hover-bridge trick as the standard dropdown, so mega menus
       (Who We Are, Resources & Media) stop closing while the mouse crosses
       the gap on the way down from the nav link. */
    .ncd-mega::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -10px;
        height: 10px;
        background: transparent;
    }

    .cs_nav_list li.menu-item-has-children:hover>.ncd-mega,
    .cs_nav_list li.ncd-open>.ncd-mega {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateX(-50%) translateY(0);
    }

    .ncd-mega-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr) 240px;
        gap: 4px;
        padding: 22px;
        border-radius: var(--ncd-radius);
        overflow: hidden;
        background: var(--ncd-white);
    }

    /* "Who We Are" mega menu — 2 link columns + feature card */
    .ncd-mega.ncd-mega-alt .ncd-mega-grid {
        grid-template-columns: repeat(2, 1fr) 260px;
    }

    .ncd-mega-col+.ncd-mega-col {
        border-left: 1px solid var(--ncd-border);
        padding-left: 20px;
    }

    .ncd-mega-heading {
        font-family: var(--ncd-font-display);
        font-size: 14.5px;
        font-weight: 600;
        color: var(--ncd-teal-900);
        margin: 2px 0 10px;
    }

    .ncd-mega.ncd-mega-alt .ncd-mega-heading {
        color: var(--ncd-accent-blue-dark);
    }

    .ncd-mega-col ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .ncd-mega-col li a {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 8px 8px 8px 0;
        text-decoration: none;
        color: var(--ncd-ink);
        border-radius: 8px;
        transition: .15s ease;
    }

    .ncd-mega-col li a:hover {
        color: var(--ncd-teal-700);
        padding-left: 4px;
    }

    .ncd-mega.ncd-mega-alt .ncd-mega-col li a:hover {
        color: var(--ncd-accent-blue-dark);
    }

    .ncd-mega-col li a:hover .ncd-item-icon {
        background: var(--ncd-teal-700);
        color: var(--ncd-white);
    }

    .ncd-mega.ncd-mega-alt .ncd-mega-col .ncd-item-icon {
        background: var(--ncd-accent-blue-50);
        color: var(--ncd-accent-blue-dark);
    }

    .ncd-mega.ncd-mega-alt .ncd-mega-col li a:hover .ncd-item-icon {
        background: var(--ncd-accent-blue);
        color: var(--ncd-white);
    }

    .ncd-mega-col .ncd-item-icon {
        width: 26px;
        height: 26px;
    }

    .ncd-mega-feature {
        background: linear-gradient(160deg, var(--ncd-teal-900) 0%, var(--ncd-teal-700) 100%);
        border-radius: var(--ncd-radius-sm);
        padding: 18px;
        color: var(--ncd-white);
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-left: 4px;
    }

    /* Blue feature card for "Who We Are" */
    .ncd-mega-feature.ncd-mega-feature-alt {
        background: linear-gradient(160deg, var(--ncd-accent-blue) 0%, var(--ncd-accent-blue-dark) 100%);
    }

    .ncd-mega-feature .ncd-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 11.5px;
        font-weight: 600;
        color: var(--ncd-amber);
    }

    .ncd-mega-feature.ncd-mega-feature-alt .ncd-eyebrow {
        color: var(--ncd-white);
        opacity: .85;
    }

    .ncd-mega-feature h4 {
        font-family: var(--ncd-font-display);
        font-size: 16px;
        font-weight: 600;
        margin: 0;
        line-height: 1.3;
    }

    .ncd-mega-feature p {
        font-size: 12.5px;
        color: rgba(255, 255, 255, .78);
        line-height: 1.5;
        margin: 0;
    }

    .ncd-mega-feature a.ncd-feature-link {
        margin-top: 4px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-size: 13px;
        font-weight: 700;
        color: var(--ncd-white);
        text-decoration: none;
        border-bottom: 1px solid rgba(255, 255, 255, .35);
        padding-bottom: 2px;
        width: max-content;
        transition: border-color .2s ease;
    }

    .ncd-mega-feature a.ncd-feature-link:hover {
        border-color: var(--ncd-amber);
        color: var(--ncd-amber);
    }

    .ncd-mega-feature.ncd-mega-feature-alt a.ncd-feature-link:hover {
        border-color: var(--ncd-white);
        color: var(--ncd-white);
    }

    /* WhatsApp CTA pill inside the "Who We Are" feature card */
    .ncd-whatsapp-inline {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-top: 2px;
        padding: 8px 14px;
        border-radius: 999px;
        background: var(--ncd-whatsapp);
        color: var(--ncd-white);
        font-size: 12.5px;
        font-weight: 700;
        text-decoration: none;
        width: max-content;
        transition: .2s ease;
    }

    .ncd-whatsapp-inline:hover {
        background: var(--ncd-whatsapp-dark);
        transform: translateY(-1px);
        color: var(--ncd-white);
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

    .cs_search_toggle_btn .ncd-icon {
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
        box-shadow: 0 6px 16px -6px rgba(20, 41, 61, .5);
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
    .ncd-ai-btn .ncd-icon {
        position: relative;
        z-index: 1;
    }

    .ncd-ai-btn .ncd-icon {
        color: var(--ncd-amber);
        animation: ncd-ai-pulse 2.4s ease-in-out infinite;
    }

    .ncd-ai-btn:hover {
        transform: translateY(-1px);
        box-shadow: 0 10px 22px -8px rgba(199, 122, 33, .55);
    }

    .ncd-ai-btn:hover::before {
        opacity: 1;
    }

    .ncd-ai-btn:hover .ncd-icon {
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
        .ncd-ai-btn .ncd-icon {
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
        box-shadow: 0 6px 14px -6px rgba(231, 150, 60, .6);
        transition: .2s ease;
        flex-shrink: 0;
    }

    .ncd-cta:hover {
        background: var(--ncd-amber-dark);
        color: var(--ncd-white);
        transform: translateY(-1px);
        box-shadow: 0 10px 20px -8px rgba(199, 122, 33, .6);
    }

    /* ============================================================
       MOBILE TOGGLE — redesigned (colored square, white bars,
       swaps to a white button with blue X when the menu is open)
       ============================================================ */
    .ncd-menu-toggle {
        width: 44px;
        height: 44px;
        border: none;
        border-radius: 12px;
        background: linear-gradient(135deg, var(--ncd-accent-blue) 0%, var(--ncd-accent-blue-dark) 100%);
        box-shadow: 0 6px 14px -6px rgba(93, 137, 200, .55);
        display: none;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        flex-shrink: 0;
        transition: .25s ease;
    }

    .ncd-menu-toggle:hover {
        transform: translateY(-1px);
        box-shadow: 0 10px 20px -8px rgba(74, 114, 158, .6);
    }

    .ncd-menu-toggle span {
        display: block;
        width: 18px;
        height: 2px;
        border-radius: 2px;
        background: var(--ncd-white);
        position: relative;
        transition: .25s ease;
    }

    .ncd-menu-toggle span::before,
    .ncd-menu-toggle span::after {
        content: "";
        position: absolute;
        left: 0;
        width: 18px;
        height: 2px;
        border-radius: 2px;
        background: var(--ncd-white);
        transition: .25s ease;
    }

    .ncd-menu-toggle span::before {
        top: -6px;
    }

    .ncd-menu-toggle span::after {
        top: 6px;
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle {
        background: var(--ncd-white);
        box-shadow: var(--ncd-shadow-sm);
        border: 1px solid var(--ncd-border-strong);
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle span {
        background: transparent;
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle span::before,
    .cs_site_header.ncd-menu-active .ncd-menu-toggle span::after {
        background: var(--ncd-accent-blue-dark);
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle span::before {
        transform: rotate(45deg);
        top: 0;
    }

    .cs_site_header.ncd-menu-active .ncd-menu-toggle span::after {
        transform: rotate(-45deg);
        top: 0;
    }

    /* ---------- Mobile panel header / footer (hidden on desktop) ---------- */
    .ncd-mobile-panel-head,
    .ncd-mobile-panel-foot {
        display: none;
    }

    /* ---------- Mobile backdrop ---------- */
    .ncd-nav-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(20, 41, 61, .5);
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

        .ncd-mega {
            width: min(760px, 86vw);
        }

        .ncd-mega-grid {
            grid-template-columns: repeat(3, 1fr) 200px;
        }

        .ncd-mega.ncd-mega-alt .ncd-mega-grid {
            grid-template-columns: repeat(2, 1fr) 220px;
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

        /* Hover-bridges are only useful for the desktop hover interaction;
           on mobile the accordion is click-driven, so disable them to avoid
           an inert 10px strip sitting over adjacent content. */
        .ncd-dropdown::after,
        .ncd-mega::before {
            display: none;
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
            padding: 0 0 24px;
            transition: right .3s ease;
            z-index: 999;
            display: block !important;
            justify-content: initial;
        }

        .cs_site_header.ncd-menu-active .cs_nav {
            right: 0;
        }

        /* Sticky colored header inside the mobile panel */
        .ncd-mobile-panel-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px;
            background: linear-gradient(135deg, var(--ncd-accent-blue) 0%, var(--ncd-accent-blue-dark) 100%);
            color: var(--ncd-white);
            position: sticky;
            top: 0;
            z-index: 2;
        }

        .ncd-mobile-panel-title {
            font-family: var(--ncd-font-display);
            font-weight: 600;
            font-size: 17px;
        }

        .ncd-mobile-close {
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, .4);
            background: rgba(255, 255, 255, .12);
            color: var(--ncd-white);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: .2s ease;
        }

        .ncd-mobile-close .ncd-icon {
            width: 15px;
            height: 15px;
        }

        .ncd-mobile-close:hover {
            background: var(--ncd-white);
            color: var(--ncd-accent-blue-dark);
        }

        .cs_nav_list_wrap {
            display: block;
            padding: 12px 18px 0;
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

        .cs_nav_list>li.menu-item-has-children>a .ncd-caret {
            transform: rotate(0deg);
        }

        .cs_nav_list>li.ncd-open>a .ncd-caret {
            transform: rotate(180deg);
        }

        .cs_nav_list>li>a:hover,
        .cs_nav_list>li.ncd-open>a {
            background: var(--ncd-teal-50);
        }

        /* Standard dropdown -> stacked accordion */
        .ncd-dropdown {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            border: none;
            display: none;
            width: 100%;
            min-width: 0;
            margin: 4px 0 8px;
            padding: 4px 0 4px 10px;
            background: transparent;
            pointer-events: auto;
        }

        .ncd-dropdown::before {
            display: none;
        }

        .cs_nav_list li.ncd-open>.ncd-dropdown {
            display: block;
        }

        /* Mega menu -> stacked accordion, single column */
        .ncd-mega {
            position: static;
            width: 100%;
            transform: none;
            opacity: 1;
            visibility: visible;
            box-shadow: none;
            border: none;
            border-radius: 0;
            display: none;
            margin: 4px 0 8px;
        }

        .cs_nav_list li.ncd-open>.ncd-mega {
            display: block;
        }

        .ncd-mega-grid,
        .ncd-mega.ncd-mega-alt .ncd-mega-grid {
            grid-template-columns: 1fr;
            gap: 18px;
            padding: 12px 0 12px 10px;
        }

        .ncd-mega-col+.ncd-mega-col {
            border-left: none;
            border-top: 1px solid var(--ncd-border);
            padding-left: 0;
            padding-top: 16px;
        }

        .ncd-mega-feature {
            margin-left: 0;
        }

        /* WhatsApp footer button, pinned at the bottom of the mobile panel */
        .ncd-mobile-panel-foot {
            display: block;
            padding: 16px 18px 4px;
            margin-top: 10px;
            border-top: 1px solid var(--ncd-border);
        }

        .ncd-whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;
            width: 100%;
            padding: 12px 16px;
            border-radius: 999px;
            background: var(--ncd-whatsapp);
            color: var(--ncd-white);
            font-weight: 700;
            font-size: 14px;
            text-decoration: none;
            box-shadow: 0 8px 18px -8px rgba(37, 211, 102, .55);
            transition: .2s ease;
        }

        .ncd-whatsapp-btn:hover {
            background: var(--ncd-whatsapp-dark);
            transform: translateY(-1px);
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

<!-- ===== SVG icon sprite (defines every icon used below; replaces icon-font / emoji glyphs) ===== -->
<svg aria-hidden="true" style="position:absolute;width:0;height:0;overflow:hidden;" focusable="false">
    <defs>
        <symbol id="ncd-i-mail" viewBox="0 0 24 24">
            <path d="M3 6.5h18v11H3z" />
            <path d="m3 7 9 6 9-6" />
        </symbol>
        <symbol id="ncd-i-phone" viewBox="0 0 24 24">
            <path d="M6.6 10.8c1.4 2.8 3.8 5.1 6.6 6.6l2.2-2.2c.3-.3.7-.4 1-.2 1.1.4 2.3.6 3.6.6.6 0 1 .4 1 1V20c0 .6-.4 1-1 1C11.7 21 3 12.3 3 2.9c0-.6.4-1 1-1h3.4c.6 0 1 .4 1 1 0 1.2.2 2.4.6 3.6.1.4 0 .8-.2 1L6.6 10.8Z" />
        </symbol>
        <symbol id="ncd-i-pin" viewBox="0 0 24 24">
            <path d="M12 21s7-6.3 7-11.5A7 7 0 0 0 5 9.5C5 14.7 12 21 12 21Z" />
            <circle cx="12" cy="9.5" r="2.3" />
        </symbol>

        <symbol id="ncd-i-facebook" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="8.5" />
            <path d="M13.6 8.7h1.7V6.2h-2c-1.7 0-2.8 1.1-2.8 2.9v1.5H8.9v2.4h1.6V18h2.5v-5h1.9l.3-2.4h-2.2V9.4c0-.5.2-.7.6-.7Z" />
        </symbol>
        <symbol id="ncd-i-x" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="8.5" />
            <path d="M8.3 8.3 15.7 15.7" />
            <path d="M15.7 8.3 8.3 15.7" />
        </symbol>
        <symbol id="ncd-i-youtube" viewBox="0 0 24 24">
            <rect x="3" y="6.5" width="18" height="11" rx="3" />
            <path d="m10.3 9.7 4.6 2.3-4.6 2.3Z" />
        </symbol>
        <symbol id="ncd-i-linkedin" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="8.5" />
            <circle cx="8.6" cy="8" r="1" fill="currentColor" stroke="none" />
            <path d="M8.6 11v5.3" />
            <path d="M12.3 16.3v-3.4c0-1.2.8-1.9 1.8-1.9 1 0 1.6.7 1.6 1.9v3.4" />
        </symbol>
        <symbol id="ncd-i-whatsapp" viewBox="0 0 24 24">
            <path d="M12 3.5a8.5 8.5 0 0 0-7.3 12.8L3.5 20.5l4.4-1.2A8.5 8.5 0 1 0 12 3.5Z" />
            <path d="M8.7 8.4c.3-.6.6-.6.9-.6h.5c.2 0 .4 0 .6.5.2.5.7 1.7.7 1.8.1.1.1.3 0 .4-.1.2-.1.3-.3.5l-.4.4c-.1.1-.3.3-.1.6.2.3.8 1.3 1.7 2 1.1.9 2 1.2 2.3 1.3.3.1.5.1.7-.1.2-.2.8-.9 1-1.2.2-.3.4-.2.6-.1.2.1 1.5.7 1.8.9.3.1.4.2.5.3.1.2.1.9-.2 1.7-.3.8-1.6 1.5-2.2 1.6-.6.1-1.3.1-2.1-.1-.5-.2-1.1-.4-1.9-.7-3.3-1.4-5.4-4.7-5.6-4.9-.2-.2-1.3-1.7-1.3-3.3 0-1.6.8-2.3 1.1-2.6Z" fill="currentColor" stroke="none" />
        </symbol>
        <symbol id="ncd-i-close" viewBox="0 0 24 24">
            <path d="M6 6l12 12" />
            <path d="M18 6 6 18" />
        </symbol>

        <symbol id="ncd-i-info" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="9" />
            <path d="M12 11v5.5" />
            <circle cx="12" cy="8" r=".9" fill="currentColor" stroke="none" />
        </symbol>
        <symbol id="ncd-i-target" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="8.3" />
            <circle cx="12" cy="12" r="5" />
            <circle cx="12" cy="12" r="1.3" fill="currentColor" stroke="none" />
        </symbol>
        <symbol id="ncd-i-trending" viewBox="0 0 24 24">
            <path d="m3.5 16 6-6 4 4 7-7" />
            <path d="M15 7h5.5v5.5" />
        </symbol>
        <symbol id="ncd-i-users" viewBox="0 0 24 24">
            <circle cx="9" cy="8.5" r="3" />
            <path d="M3.6 19c0-3 2.4-5 5.4-5s5.4 2 5.4 5" />
            <circle cx="17" cy="9.6" r="2.3" />
            <path d="M15.6 14.3c2.3.4 4.1 2 4.1 4.7" />
        </symbol>
        <symbol id="ncd-i-share" viewBox="0 0 24 24">
            <circle cx="6" cy="12" r="2.3" />
            <circle cx="17.5" cy="6" r="2.3" />
            <circle cx="17.5" cy="18" r="2.3" />
            <path d="m8 10.8 7.6-3.6" />
            <path d="m8 13.2 7.6 3.6" />
        </symbol>

        <symbol id="ncd-i-clipboard" viewBox="0 0 24 24">
            <rect x="6" y="4.5" width="12" height="16" rx="2" />
            <path d="M9 4.5V3.8A1.8 1.8 0 0 1 10.8 2h2.4A1.8 1.8 0 0 1 15 3.8v.7" />
            <path d="M9 10.7h6" />
            <path d="M9 14h6" />
            <path d="M9 17.3h3.5" />
        </symbol>
        <symbol id="ncd-i-file-text" viewBox="0 0 24 24">
            <path d="M7 3h7l4 4v14H7z" />
            <path d="M14 3v4h4" />
            <path d="M9.5 12h5" />
            <path d="M9.5 15.5h5" />
        </symbol>
        <symbol id="ncd-i-calendar" viewBox="0 0 24 24">
            <rect x="4" y="5.5" width="16" height="14.5" rx="2" />
            <path d="M4 9.5h16" />
            <path d="M8 3v3.5" />
            <path d="M16 3v3.5" />
        </symbol>
        <symbol id="ncd-i-message" viewBox="0 0 24 24">
            <path d="M4 5.5h16v11H9l-4 3.5v-3.5H4z" />
            <path d="M8 10h8" />
        </symbol>
        <symbol id="ncd-i-newspaper" viewBox="0 0 24 24">
            <rect x="3.5" y="5" width="13" height="14" rx="1.5" />
            <path d="M16.5 8.5H20v9a1.5 1.5 0 0 1-1.5 1.5H8" />
            <path d="M7 8.5h6" />
            <path d="M7 11.5h6" />
            <path d="M7 14.5h6" />
        </symbol>
        <symbol id="ncd-i-activity" viewBox="0 0 24 24">
            <path d="M3 12h4l2-6 4 12 2-6h6" />
        </symbol>
        <symbol id="ncd-i-image" viewBox="0 0 24 24">
            <rect x="3.5" y="4.5" width="17" height="15" rx="2" />
            <circle cx="9" cy="10" r="1.7" />
            <path d="m5 17 4.5-5 3.5 3.5L17 11l3 4.5" />
        </symbol>
        <symbol id="ncd-i-video" viewBox="0 0 24 24">
            <rect x="3.5" y="6.5" width="12" height="11" rx="2" />
            <path d="m15.5 10.5 5-2.5v8l-5-2.5" />
        </symbol>
        <symbol id="ncd-i-heart-pulse" viewBox="0 0 24 24">
            <path d="M12 19.3s-7.2-4.5-7.2-9.9a4.3 4.3 0 0 1 7.2-3.2 4.3 4.3 0 0 1 7.2 3.2c0 1-.2 1.8-.6 2.6h-3l-1.5-2.6-2 4.1-1.3-2.4H8" />
        </symbol>
        <symbol id="ncd-i-check-square" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="3.5" />
            <path d="m8.3 12.2 2.5 2.5 5-5.2" />
        </symbol>
        <symbol id="ncd-i-chat" viewBox="0 0 24 24">
            <path d="M4 5.5h16v11H9l-4 3.5v-3.5H4z" />
            <circle cx="8.3" cy="11" r=".9" fill="currentColor" stroke="none" />
            <circle cx="12" cy="11" r=".9" fill="currentColor" stroke="none" />
            <circle cx="15.7" cy="11" r=".9" fill="currentColor" stroke="none" />
        </symbol>
        <symbol id="ncd-i-sparkle" viewBox="0 0 24 24">
            <path d="M12 3.5c.5 2.9 1 4 4.5 4.5-3.5.5-4 1.6-4.5 4.5-.5-2.9-1-4-4.5-4.5 3.5-.5 4-1.6 4.5-4.5Z" />
            <path d="M18.5 14c.3 1.6.6 2.2 2.5 2.5-1.9.3-2.2.9-2.5 2.5-.3-1.6-.6-2.2-2.5-2.5 1.9-.3 2.2-.9 2.5-2.5Z" />
        </symbol>
        <symbol id="ncd-i-search" viewBox="0 0 24 24">
            <circle cx="11" cy="11" r="7.5" />
            <path d="m21 21-4.7-4.7" />
        </symbol>
        <symbol id="ncd-i-chevron" viewBox="0 0 24 24">
            <path d="m6 9 6 6 6-6" />
        </symbol>
    </defs>
</svg>

<header class="cs_site_header cs_style_1 cs_sticky_header cs_heading_font cs_heading_color">

    <!-- ===== Top utility bar ===== -->
    <div class="ncd-topbar">
        <div class="container-fluid">
            <div class="ncd-topbar-in">
                <div class="ncd-topbar-left">
                    <a href="mailto:info@ncdarwanda.org" class="ncd-topbar-item">
                        <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                            <use href="#ncd-i-mail" />
                        </svg>
                        <span>info@ncdarwanda.org</span>
                    </a>
                    <span class="ncd-topbar-divider d-none d-md-inline-block"></span>
                    <a href="tel:+250788000000" class="ncd-topbar-item d-none d-md-inline-flex">
                        <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                            <use href="#ncd-i-phone" />
                        </svg>
                        <span>+250 788 000 000</span>
                    </a>
                </div>

                <div class="ncd-topbar-right">
                    <span class="ncd-topbar-item d-none d-sm-inline-flex" style="opacity:.8;">
                        <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                            <use href="#ncd-i-pin" />
                        </svg>
                        <span>Kigali, Rwanda</span>
                    </span>
                    <span class="ncd-topbar-divider d-none d-sm-inline-block"></span>
                    <div class="ncd-topbar-social">
                        <a href="https://www.facebook.com/RwandaNCDA" target="_blank" rel="noopener" aria-label="Facebook">
                            <svg class="ncd-icon" aria-hidden="true">
                                <use href="#ncd-i-facebook" />
                            </svg>
                        </a>
                        <a href="https://twitter.com/RwandaNCDA" target="_blank" rel="noopener" aria-label="X (Twitter)">
                            <svg class="ncd-icon" aria-hidden="true">
                                <use href="#ncd-i-x" />
                            </svg>
                        </a>
                        <a href="http://www.youtube.com/@rwandancda" target="_blank" rel="noopener" aria-label="YouTube">
                            <svg class="ncd-icon" aria-hidden="true">
                                <use href="#ncd-i-youtube" />
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/company/65703122/" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <svg class="ncd-icon" aria-hidden="true">
                                <use href="#ncd-i-linkedin" />
                            </svg>
                        </a>
                        <a href="https://wa.me/250788000000" target="_blank" rel="noopener" aria-label="WhatsApp" class="ncd-topbar-whatsapp">
                            <svg class="ncd-icon" aria-hidden="true">
                                <use href="#ncd-i-whatsapp" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== EKG pulse strip ===== -->
    <div class="ncd-pulse-line" aria-hidden="true">
        <svg viewBox="0 0 400 20" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 10 H30 L40 10 L48 2 L56 18 L64 10 L100 10 H130 L140 10 L148 2 L156 18 L164 10 H200
                     M200 10 H230 L240 10 L248 2 L256 18 L264 10 L300 10 H330 L340 10 L348 2 L356 18 L364 10 H400"
                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
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

                    <!-- Sticky header shown only inside the mobile slide-in panel -->
                    <div class="ncd-mobile-panel-head">
                        <span class="ncd-mobile-panel-title">Menu</span>
                        <button type="button" class="ncd-mobile-close" aria-label="Close menu">
                            <svg class="ncd-icon" aria-hidden="true">
                                <use href="#ncd-i-close" />
                            </svg>
                        </button>
                    </div>

                    <div class="cs_nav_list_wrap">
                        <ul class="cs_nav_list">

                            <!-- ===== Who We Are (mega menu) ===== -->
                            <li class="menu-item-has-children ncd-mega-wrap">
                                <a href="#" aria-haspopup="true" aria-expanded="false">
                                    Who We Are
                                    <svg class="ncd-icon ncd-icon-sm ncd-caret" aria-hidden="true">
                                        <use href="#ncd-i-chevron" />
                                    </svg>
                                </a>
                                <div class="ncd-mega ncd-mega-alt">
                                    <div class="ncd-mega-grid">
                                        <div class="ncd-mega-col">
                                            <p class="ncd-mega-heading">Organization</p>
                                            <ul>
                                                <li><a href="{{ URL::route('about_us') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-info" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">About Us</span><span class="ncd-item-desc">Who we are and how we work</span></span>
                                                    </a></li>
                                                <li><a href="{{ URL::route('Mission.Vision.Objectives') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-target" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Mission, Vision &amp; Objectives</span><span class="ncd-item-desc">What we're working toward</span></span>
                                                    </a></li>
                                                <li><a href="{{ URL::route('our_impact') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-trending" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Our Impact</span><span class="ncd-item-desc">Results across our programs</span></span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="ncd-mega-col">
                                            <p class="ncd-mega-heading">People &amp; Partners</p>
                                            <ul>
                                                <li><a href="{{ URL::route('team')}}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-users" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Workforces</span><span class="ncd-item-desc">Meet the people behind the work</span></span>
                                                    </a></li>
                                                <li><a href="{{ URL::route('partnerships') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-share" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Partnerships &amp; Members</span><span class="ncd-item-desc">Organizations we work alongside</span></span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="ncd-mega-feature ncd-mega-feature-alt">
                                            <span class="ncd-eyebrow">
                                                <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                                                    <use href="#ncd-i-info" />
                                                </svg>
                                                Get to know us
                                            </span>
                                            <h4>Building a healthier Rwanda together</h4>
                                            <p>Learn about our mission, our partners, and the teams driving NCD advocacy nationwide.</p>
                                            <a class="ncd-feature-link" href="{{ URL::route('about_us') }}">
                                                Read our story
                                                <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                                                    <use href="#ncd-i-chevron" style="transform:rotate(-90deg)" />
                                                </svg>
                                            </a>
                                            <a class="ncd-whatsapp-inline" href="https://wa.me/250788000000" target="_blank" rel="noopener">
                                                <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                                                    <use href="#ncd-i-whatsapp" />
                                                </svg>
                                                Chat with us
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- ===== Our Work / Engagements ===== -->
                            <li class="menu-item-has-children">
                                <a href="#" aria-haspopup="true" aria-expanded="false">
                                    Our Work
                                    <svg class="ncd-icon ncd-icon-sm ncd-caret" aria-hidden="true">
                                        <use href="#ncd-i-chevron" />
                                    </svg>
                                </a>
                                <ul class="ncd-dropdown">
                                    @if($engagements->count() > 1 )
                                    @foreach($engagements as $engagement)
                                    <li>
                                        <a href="{{ url('ncd_engagements', $engagement->title) }}">
                                            <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                    <use href="#ncd-i-clipboard" />
                                                </svg></span>
                                            <span class="ncd-item-copy"><span class="ncd-item-title">{{ $engagement->title }}</span></span>
                                        </a>
                                    </li>
                                    @endforeach
                                    @endif
                                </ul>
                            </li>

                            <!-- ===== Resources & Media (mega menu) ===== -->
                            <li class="menu-item-has-children ncd-mega-wrap">
                                <a href="#" aria-haspopup="true" aria-expanded="false">
                                    Resources &amp; Media
                                    <svg class="ncd-icon ncd-icon-sm ncd-caret" aria-hidden="true">
                                        <use href="#ncd-i-chevron" />
                                    </svg>
                                </a>
                                <div class="ncd-mega">
                                    <div class="ncd-mega-grid">
                                        <div class="ncd-mega-col">
                                            <p class="ncd-mega-heading">Resources</p>
                                            <ul>
                                                <li><a href="{{ URL::route('ncd_resources') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-file-text" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Publications</span><span class="ncd-item-desc">Reports and technical briefs</span></span>
                                                    </a></li>
                                                <li><a href="{{ URL::route('add_newsletter') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-calendar" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Newsletter</span><span class="ncd-item-desc">Subscribe for updates</span></span>
                                                    </a></li>
                                                <li><a href="{{ url('ncd_stories') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-message" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">NCD Stories</span><span class="ncd-item-desc">Voices from the community</span></span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="ncd-mega-col">
                                            <p class="ncd-mega-heading">News &amp; Events</p>
                                            <ul>
                                                <li><a href="{{ URL::route('ncd_posts') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-newspaper" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Regular News</span><span class="ncd-item-desc">Announcements and coverage</span></span>
                                                    </a></li>
                                                <li><a href="{{ URL::route('ncd_covid_posts') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-activity" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">NCDs &amp; COVID-19</span><span class="ncd-item-desc">Pandemic-era health updates</span></span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="ncd-mega-col">
                                            <p class="ncd-mega-heading">Showcase</p>
                                            <ul>
                                                <li><a href="{{ url('gallery') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-image" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Gallery</span><span class="ncd-item-desc">Photos from our programs</span></span>
                                                    </a></li>
                                                <li><a href="{{ url('video-gallery') }}">
                                                        <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                                <use href="#ncd-i-video" />
                                                            </svg></span>
                                                        <span class="ncd-item-copy"><span class="ncd-item-title">Videos</span><span class="ncd-item-desc">Films and campaign stories</span></span>
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="ncd-mega-feature">
                                            <span class="ncd-eyebrow">
                                                <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                                                    <use href="#ncd-i-file-text" />
                                                </svg>
                                                Latest publication
                                            </span>
                                            <h4>State of NCDs in Rwanda</h4>
                                            <p>Our latest advocacy brief examines the burden of diabetes, hypertension and cancer nationwide.</p>
                                            <a class="ncd-feature-link" href="{{ URL::route('ncd_resources') }}">
                                                Read the report
                                                <svg class="ncd-icon ncd-icon-sm" aria-hidden="true">
                                                    <use href="#ncd-i-chevron" style="transform:rotate(-90deg)" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- ===== Health Tools ===== -->
                            <li class="menu-item-has-children">
                                <a href="#" aria-haspopup="true" aria-expanded="false">
                                    Health Tools
                                    <svg class="ncd-icon ncd-icon-sm ncd-caret" aria-hidden="true">
                                        <use href="#ncd-i-chevron" />
                                    </svg>
                                </a>
                                <ul class="ncd-dropdown ncd-tools">
                                    <li><a href="{{ URL::route('know_your_numbers') }}">
                                            <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                    <use href="#ncd-i-heart-pulse" />
                                                </svg></span>
                                            <span class="ncd-item-copy"><span class="ncd-item-title">Know Your Numbers (BMI)</span><span class="ncd-item-desc">Check your BMI in minutes</span></span>
                                        </a></li>
                                    <li><a href="{{ URL::route('assessments.create') }}">
                                            <span class="ncd-item-icon"><svg class="ncd-icon" aria-hidden="true">
                                                    <use href="#ncd-i-check-square" />
                                                </svg></span>
                                            <span class="ncd-item-copy"><span class="ncd-item-title">Diabetes Assessment</span><span class="ncd-item-desc">Take our quick screening quiz</span></span>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- WhatsApp CTA pinned to the bottom of the mobile panel -->
                    <div class="ncd-mobile-panel-foot">
                        <a href="https://wa.me/250788000000" target="_blank" rel="noopener" class="ncd-whatsapp-btn">
                            <svg class="ncd-icon" aria-hidden="true">
                                <use href="#ncd-i-whatsapp" />
                            </svg>
                            <span>Chat on WhatsApp</span>
                        </a>
                    </div>
                </nav>

                <!-- Right actions -->
                <div class="cs_main_header_right">
                    <button type="button" class="cs_search_toggle_btn" aria-label="Search">
                        <svg class="ncd-icon" aria-hidden="true">
                            <use href="#ncd-i-search" />
                        </svg>
                    </button>

                    <!-- AI Assistant -->
                    <a href="{{ url('ai-assistant') }}" class="ncd-ai-btn" aria-label="Ask AI Assistant">
                        <svg class="ncd-icon" aria-hidden="true">
                            <use href="#ncd-i-sparkle" />
                        </svg>
                        <span class="ncd-ai-label">Ask AI Assistant</span>
                    </a>

                    <a href="{{ URL::route('message') }}" class="ncd-cta">
                        <svg class="ncd-icon d-none d-sm-inline" aria-hidden="true">
                            <use href="#ncd-i-chat" />
                        </svg>
                        Contact Us
                    </a>

                    <!-- Mobile menu toggle -->
                    <button type="button" class="ncd-menu-toggle" aria-label="Open menu" aria-expanded="false">
                        <span></span>
                    </button>
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
        var mobileClose = header.querySelector('.ncd-mobile-close');

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

        if (mobileClose) {
            mobileClose.addEventListener('click', closeMenu);
        }

        // ESC closes mobile menu
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && header.classList.contains('ncd-menu-active')) {
                closeMenu();
            }
        });

        // Accordion dropdowns / mega menu on mobile, plus aria-expanded sync everywhere
        var dropdownParents = header.querySelectorAll('.menu-item-has-children');
        dropdownParents.forEach(function(li) {
            var trigger = li.querySelector(':scope > a');
            trigger.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    var isOpen = li.classList.contains('ncd-open');
                    // collapse siblings at the same level
                    li.parentElement.querySelectorAll(':scope > .menu-item-has-children').forEach(function(sib) {
                        if (sib !== li) {
                            sib.classList.remove('ncd-open');
                            var sibTrigger = sib.querySelector(':scope > a');
                            if (sibTrigger) sibTrigger.setAttribute('aria-expanded', 'false');
                        }
                    });
                    li.classList.toggle('ncd-open', !isOpen);
                    trigger.setAttribute('aria-expanded', String(!isOpen));
                }
            });

            // Keep aria-expanded in sync with hover-driven desktop dropdowns
            li.addEventListener('mouseenter', function() {
                if (window.innerWidth >= 992) trigger.setAttribute('aria-expanded', 'true');
            });
            li.addEventListener('mouseleave', function() {
                if (window.innerWidth >= 992) trigger.setAttribute('aria-expanded', 'false');
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
                        var t = li.querySelector(':scope > a');
                        if (t) t.setAttribute('aria-expanded', 'false');
                    });
                }
            }, 120);
        });
    })();
</script>