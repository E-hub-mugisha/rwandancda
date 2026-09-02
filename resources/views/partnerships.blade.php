@extends('layouts.base')
@section('title','Partnerships & Members')

@section('content')

<style>
/* =========================================================
   RWANDA NCD ALLIANCE — MODERN NGO PARTNERSHIPS PAGE
   ========================================================= */

#ncda-partners {
    --ink: #16241F;
    --forest: #1B4332;
    --forest-dark: #0D261C;
    --forest-soft: #285943;
    --gold: #C99A3E;
    --gold-soft: #F2E5C9;
    --paper: #F5F7F3;
    --white: #FFFFFF;
    --sage: #DDE5D9;
    --sage-light: #EAF0E7;
    --muted: #65736B;
    --border: #E1E7E0;

    font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    color: var(--ink);
    background: var(--paper);
    overflow: hidden;
}

#ncda-partners *,
#ncda-partners *::before,
#ncda-partners *::after {
    box-sizing: border-box;
}

#ncda-partners h1,
#ncda-partners h2,
#ncda-partners h3,
#ncda-partners h4 {
    font-family: 'Newsreader', Georgia, serif;
    font-weight: 500;
    letter-spacing: -0.025em;
}

#ncda-partners a {
    text-decoration: none;
}


/* =========================================================
   HERO
   ========================================================= */

.ncda-partners-hero {
    position: relative;
    padding: 105px 0 115px;
    background:
        radial-gradient(
            circle at 88% 20%,
            rgba(201,154,62,.12),
            transparent 28%
        ),
        linear-gradient(
            135deg,
            #f5f7f3 0%,
            #eef3ed 100%
        );
}

.ncda-hero-grid {
    position: relative;
    z-index: 2;
    display: grid;
    grid-template-columns: minmax(0, 1.15fr) minmax(320px, .85fr);
    align-items: center;
    gap: 80px;
}

.ncda-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    margin: 0 0 22px;
    color: var(--forest);
    font-size: .82rem;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
}

.ncda-eyebrow::before {
    content: "";
    width: 34px;
    height: 2px;
    background: var(--gold);
}

.ncda-partners-hero h1 {
    max-width: 780px;
    margin: 0 0 25px;
    color: var(--forest-dark);
    font-size: clamp(3rem, 6vw, 5.6rem);
    line-height: .98;
}

.ncda-hero-copy {
    max-width: 650px;
    margin: 0;
    color: var(--muted);
    font-size: 1.08rem;
    line-height: 1.8;
}

.ncda-hero-visual {
    position: relative;
    min-height: 360px;
}

.ncda-orbit {
    position: absolute;
    inset: 20px;
    border: 1px solid rgba(27,67,50,.12);
    border-radius: 50%;
}

.ncda-orbit::before,
.ncda-orbit::after {
    content: "";
    position: absolute;
    border: 1px solid rgba(201,154,62,.22);
    border-radius: 50%;
}

.ncda-orbit::before {
    inset: 45px;
}

.ncda-orbit::after {
    inset: 90px;
}

.ncda-hero-center {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 150px;
    height: 150px;
    display: flex;
    align-items: center;
    justify-content: center;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    background: var(--forest);
    color: white;
    text-align: center;
    box-shadow: 0 25px 60px rgba(15,42,32,.20);
}

.ncda-hero-center strong {
    display: block;
    font-family: 'Newsreader', Georgia, serif;
    font-size: 2rem;
    font-weight: 500;
}

.ncda-hero-center span {
    display: block;
    margin-top: 3px;
    color: rgba(255,255,255,.72);
    font-size: .72rem;
    text-transform: uppercase;
    letter-spacing: .08em;
}

.ncda-orbit-logo {
    position: absolute;
    z-index: 3;
    width: 70px;
    height: 70px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 12px;
    background: white;
    border: 1px solid var(--border);
    border-radius: 50%;
    box-shadow: 0 12px 30px rgba(20,50,35,.10);
}

.ncda-orbit-logo img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.ncda-orbit-logo:nth-child(1) {
    top: 0;
    left: 45%;
}

.ncda-orbit-logo:nth-child(2) {
    top: 35%;
    right: 0;
}

.ncda-orbit-logo:nth-child(3) {
    bottom: 0;
    left: 45%;
}

.ncda-orbit-logo:nth-child(4) {
    top: 35%;
    left: 0;
}


/* =========================================================
   INTRO STATS
   ========================================================= */

.ncda-network-strip {
    position: relative;
    z-index: 5;
    margin-top: -48px;
}

.ncda-network-card {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    overflow: hidden;
    background: var(--forest);
    border-radius: 18px;
    box-shadow: 0 25px 55px rgba(15,42,32,.16);
}

.ncda-network-stat {
    position: relative;
    padding: 30px 35px;
}

.ncda-network-stat + .ncda-network-stat {
    border-left: 1px solid rgba(255,255,255,.13);
}

.ncda-network-stat strong {
    display: block;
    color: white;
    font-family: 'Newsreader', Georgia, serif;
    font-size: 2.5rem;
    line-height: 1;
}

.ncda-network-stat span {
    display: block;
    margin-top: 8px;
    color: rgba(255,255,255,.68);
    font-size: .85rem;
}


/* =========================================================
   MEMBERS
   ========================================================= */

.ncda-members-section {
    padding: 110px 0 120px;
}

.ncda-section-heading {
    display: flex;
    align-items: end;
    justify-content: space-between;
    gap: 30px;
    margin-bottom: 45px;
}

.ncda-section-heading h2 {
    max-width: 650px;
    margin: 0;
    color: var(--forest-dark);
    font-size: clamp(2.4rem, 4vw, 3.7rem);
    line-height: 1.05;
}

.ncda-section-description {
    max-width: 420px;
    margin: 0;
    color: var(--muted);
    font-size: .98rem;
    line-height: 1.75;
}


/* Tabs */

.ncda-tabs-wrap {
    margin-bottom: 42px;
}

.ncda-tabs {
    display: inline-flex;
    flex-wrap: wrap;
    gap: 7px;
    padding: 6px;
    margin: 0;
    list-style: none;
    background: var(--sage-light);
    border: 1px solid var(--border);
    border-radius: 50px;
}

.ncda-tabs .nav-item {
    margin: 0;
}

.ncda-tabs .nav-link {
    border: 0;
    border-radius: 50px;
    padding: 12px 20px;
    background: transparent;
    color: var(--muted);
    font-size: .86rem;
    font-weight: 600;
    transition: all .25s ease;
}

.ncda-tabs .nav-link:hover {
    color: var(--forest);
}

.ncda-tabs .nav-link.active {
    background: var(--forest);
    color: white;
    box-shadow: 0 5px 15px rgba(27,67,50,.18);
}


/* Member grid */

.ncda-logo-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(0, 1fr));
    gap: 18px;
}

.ncda-logo-tile {
    position: relative;
    min-height: 205px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 30px 22px 24px;
    background: white;
    border: 1px solid var(--border);
    border-radius: 14px;
    text-align: center;
    transition:
        transform .25s ease,
        box-shadow .25s ease,
        border-color .25s ease;
}

.ncda-logo-tile::before {
    content: "";
    position: absolute;
    top: 0;
    left: 24px;
    right: 24px;
    height: 2px;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: center;
    transition: transform .25s ease;
}

.ncda-logo-tile:hover {
    transform: translateY(-6px);
    border-color: rgba(201,154,62,.5);
    box-shadow: 0 18px 38px rgba(22,36,31,.09);
}

.ncda-logo-tile:hover::before {
    transform: scaleX(1);
}

.ncda-logo-image {
    width: 100%;
    height: 78px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
}

.ncda-logo-tile img {
    max-width: 145px;
    max-height: 72px;
    object-fit: contain;
}

.ncda-logo-tile h6 {
    margin: 0;
    color: var(--ink);
    font-family: 'Inter', sans-serif;
    font-size: .88rem;
    font-weight: 650;
    line-height: 1.45;
}

.ncda-logo-tile h6 a {
    color: inherit;
}

.ncda-logo-tile h6 a:hover {
    color: var(--forest);
}

.ncda-external {
    margin-top: 7px;
    color: var(--gold);
    font-size: .72rem;
    font-weight: 600;
}


/* =========================================================
   PARTNER SECTIONS
   ========================================================= */

.ncda-partner-section {
    position: relative;
    padding: 105px 0;
}

.ncda-project-section {
    background: var(--forest-dark);
    color: white;
}

.ncda-strategic-section {
    background: #E9EFE7;
}

.ncda-partner-layout {
    display: grid;
    grid-template-columns: 300px minmax(0, 1fr);
    gap: 80px;
    align-items: start;
}

.ncda-partner-intro {
    position: sticky;
    top: 30px;
}

.ncda-partner-kicker {
    margin: 0 0 15px;
    color: var(--gold);
    font-size: .78rem;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
}

.ncda-partner-intro h2 {
    margin: 0 0 20px;
    font-size: clamp(2.4rem, 4vw, 3.5rem);
    line-height: 1.03;
}

.ncda-project-section .ncda-partner-intro h2 {
    color: white;
}

.ncda-strategic-section .ncda-partner-intro h2 {
    color: var(--forest-dark);
}

.ncda-partner-intro p {
    margin: 0;
    color: var(--muted);
    line-height: 1.75;
}

.ncda-project-section .ncda-partner-intro p {
    color: rgba(255,255,255,.62);
}

.ncda-partner-logos .ncda-logo-grid {
    grid-template-columns: repeat(3, minmax(0, 1fr));
}

.ncda-project-section .ncda-logo-tile {
    min-height: 190px;
    background: rgba(255,255,255,.045);
    border-color: rgba(255,255,255,.12);
}

.ncda-project-section .ncda-logo-tile:hover {
    background: rgba(255,255,255,.08);
    border-color: rgba(201,154,62,.55);
}

.ncda-project-section .ncda-logo-tile img {
    filter: brightness(0) invert(1);
    opacity: .88;
}

.ncda-strategic-section .ncda-logo-tile {
    background: white;
}


/* =========================================================
   CTA
   ========================================================= */

.ncda-partnership-cta {
    padding: 105px 0;
    background: white;
}

.ncda-cta-box {
    position: relative;
    overflow: hidden;
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: center;
    gap: 50px;
    padding: 65px 70px;
    background: var(--forest);
    border-radius: 20px;
}

.ncda-cta-box::after {
    content: "";
    position: absolute;
    width: 300px;
    height: 300px;
    right: -100px;
    top: -130px;
    border: 1px solid rgba(201,154,62,.35);
    border-radius: 50%;
}

.ncda-cta-box h2 {
    position: relative;
    z-index: 2;
    max-width: 650px;
    margin: 0 0 13px;
    color: white;
    font-size: clamp(2.2rem, 4vw, 3.4rem);
    line-height: 1.05;
}

.ncda-cta-box p {
    position: relative;
    z-index: 2;
    max-width: 600px;
    margin: 0;
    color: rgba(255,255,255,.68);
    line-height: 1.7;
}

.ncda-cta-button {
    position: relative;
    z-index: 3;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 170px;
    padding: 15px 24px;
    background: var(--gold);
    border: 1px solid var(--gold);
    border-radius: 50px;
    color: white;
    font-size: .88rem;
    font-weight: 700;
    transition: all .25s ease;
}

.ncda-cta-button:hover {
    background: white;
    border-color: white;
    color: var(--forest);
    transform: translateY(-2px);
}


/* =========================================================
   RESPONSIVE
   ========================================================= */

@media (max-width: 1100px) {

    .ncda-hero-grid {
        gap: 45px;
    }

    .ncda-logo-grid {
        grid-template-columns: repeat(3, minmax(0, 1fr));
    }

    .ncda-partner-layout {
        grid-template-columns: 240px minmax(0, 1fr);
        gap: 45px;
    }

    .ncda-partner-logos .ncda-logo-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}


@media (max-width: 900px) {

    .ncda-partners-hero {
        padding: 80px 0 95px;
    }

    .ncda-hero-grid {
        grid-template-columns: 1fr;
    }

    .ncda-hero-visual {
        min-height: 300px;
        max-width: 500px;
        width: 100%;
        margin: 0 auto;
    }

    .ncda-section-heading {
        display: block;
    }

    .ncda-section-description {
        margin-top: 20px;
    }

    .ncda-partner-layout {
        grid-template-columns: 1fr;
    }

    .ncda-partner-intro {
        position: static;
    }

    .ncda-cta-box {
        grid-template-columns: 1fr;
        padding: 50px 40px;
    }
}


@media (max-width: 767px) {

    .ncda-partners-hero {
        padding: 65px 0 80px;
    }

    .ncda-partners-hero h1 {
        font-size: 3rem;
    }

    .ncda-network-strip {
        margin-top: -35px;
    }

    .ncda-network-card {
        grid-template-columns: 1fr;
    }

    .ncda-network-stat {
        padding: 22px 25px;
    }

    .ncda-network-stat + .ncda-network-stat {
        border-left: 0;
        border-top: 1px solid rgba(255,255,255,.13);
    }

    .ncda-members-section,
    .ncda-partner-section,
    .ncda-partnership-cta {
        padding: 75px 0;
    }

    .ncda-tabs {
        display: flex;
        width: 100%;
        overflow-x: auto;
        border-radius: 14px;
        flex-wrap: nowrap;
    }

    .ncda-tabs .nav-link {
        white-space: nowrap;
    }

    .ncda-logo-grid,
    .ncda-partner-logos .ncda-logo-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 12px;
    }

    .ncda-logo-tile {
        min-height: 175px;
        padding: 22px 12px;
    }

    .ncda-logo-tile img {
        max-width: 120px;
        max-height: 60px;
    }

    .ncda-cta-box {
        padding: 40px 25px;
        border-radius: 15px;
    }
}


@media (max-width: 480px) {

    .ncda-partners-hero h1 {
        font-size: 2.55rem;
    }

    .ncda-hero-visual {
        min-height: 260px;
    }

    .ncda-hero-center {
        width: 125px;
        height: 125px;
    }

    .ncda-orbit-logo {
        width: 58px;
        height: 58px;
        padding: 9px;
    }

    .ncda-logo-grid,
    .ncda-partner-logos .ncda-logo-grid {
        grid-template-columns: 1fr 1fr;
    }

    .ncda-logo-tile {
        min-height: 160px;
    }

    .ncda-logo-image {
        height: 62px;
        margin-bottom: 14px;
    }

    .ncda-logo-tile h6 {
        font-size: .78rem;
    }
}


@media (prefers-reduced-motion: reduce) {
    #ncda-partners * {
        scroll-behavior: auto !important;
        transition: none !important;
    }
}
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Newsreader:wght@400;500;600&display=swap"
    rel="stylesheet"
>


<div id="ncda-partners">


    {{-- =====================================================
         HERO
         ===================================================== --}}

    <section class="ncda-partners-hero">

        <div class="container">

            <div class="ncda-hero-grid">

                <div>

                    <p class="ncda-eyebrow">
                        Our Network
                    </p>

                    <h1>
                        Stronger together for a healthier Rwanda.
                    </h1>

                    <p class="ncda-hero-copy">
                        Our members and partners bring together civil society,
                        government, development organisations, academia and
                        communities to accelerate action against
                        non-communicable diseases.
                    </p>

                </div>


                <div class="ncda-hero-visual">

                    <div class="ncda-orbit">

                        @foreach($founders->take(4) as $index => $founder)

                            <div class="ncda-orbit-logo">

                                <img
                                    src="{{ asset('new/img/'.$founder->logo) }}"
                                    alt="{{ $founder->name }}"
                                >

                            </div>

                        @endforeach

                    </div>


                    <div class="ncda-hero-center">

                        <div>
                            <strong>{{ $founders->count() + $adherents->count() + $affiliated->count() }}+</strong>
                            <span>Network</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         NETWORK STATS
         ===================================================== --}}

    <section class="ncda-network-strip">

        <div class="container">

            <div class="ncda-network-card">

                <div class="ncda-network-stat">
                    <strong>{{ $founders->count() }}</strong>
                    <span>Founding members</span>
                </div>

                <div class="ncda-network-stat">
                    <strong>{{ $adherents->count() }}</strong>
                    <span>Adherent members</span>
                </div>

                <div class="ncda-network-stat">
                    <strong>{{ $partners->count() }}</strong>
                    <span>Project & strategic partners</span>
                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         MEMBERS
         ===================================================== --}}

    <section class="ncda-members-section">

        <div class="container">

            <div class="ncda-section-heading">

                <div>

                    <p class="ncda-eyebrow">
                        Our community
                    </p>

                    <h2>
                        A network built around collective action.
                    </h2>

                </div>

                <p class="ncda-section-description">
                    The Rwanda NCD Alliance connects organisations and
                    institutions working together to prevent and control
                    non-communicable diseases across Rwanda.
                </p>

            </div>


            {{-- Tabs --}}

            <div class="ncda-tabs-wrap">

                <ul class="ncda-tabs" id="membersTab" role="tablist">

                    <li class="nav-item" role="presentation">

                        <button
                            class="nav-link active"
                            id="founding-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#founding"
                            type="button"
                            role="tab"
                            aria-selected="true"
                        >
                            Founding members
                        </button>

                    </li>

                    <li class="nav-item" role="presentation">

                        <button
                            class="nav-link"
                            id="adherent-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#adherent"
                            type="button"
                            role="tab"
                        >
                            Adherent members
                        </button>

                    </li>

                    <li class="nav-item" role="presentation">

                        <button
                            class="nav-link"
                            id="affiliated-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#affiliated"
                            type="button"
                            role="tab"
                        >
                            Affiliated members
                        </button>

                    </li>

                </ul>

            </div>



            <div class="tab-content" id="membersTabContent">


                {{-- Founding Members --}}

                <div
                    class="tab-pane fade show active"
                    id="founding"
                    role="tabpanel"
                >

                    <div class="ncda-logo-grid">

                        @foreach($founders as $founder)

                            <div class="ncda-logo-tile">

                                <div class="ncda-logo-image">

                                    <img
                                        src="{{ asset('new/img/'.$founder->logo) }}"
                                        alt="{{ $founder->name }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h6>

                                    @if($founder->website)

                                        <a
                                            href="{{ $founder->website }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            {{ $founder->name }}
                                        </a>

                                    @else

                                        {{ $founder->name }}

                                    @endif

                                </h6>

                                @if($founder->website)
                                    <span class="ncda-external">
                                        Visit website →
                                    </span>
                                @endif

                            </div>

                        @endforeach

                    </div>

                </div>



                {{-- Adherent Members --}}

                <div
                    class="tab-pane fade"
                    id="adherent"
                    role="tabpanel"
                >

                    <div class="ncda-logo-grid">

                        @foreach($adherents as $adherent)

                            <div class="ncda-logo-tile">

                                <div class="ncda-logo-image">

                                    <img
                                        src="{{ asset('new/img/'.$adherent->logo) }}"
                                        alt="{{ $adherent->name }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h6>

                                    @if($adherent->website)

                                        <a
                                            href="{{ $adherent->website }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            {{ $adherent->name }}
                                        </a>

                                    @else

                                        {{ $adherent->name }}

                                    @endif

                                </h6>

                                @if($adherent->website)
                                    <span class="ncda-external">
                                        Visit website →
                                    </span>
                                @endif

                            </div>

                        @endforeach

                    </div>

                </div>



                {{-- Affiliated Members --}}

                <div
                    class="tab-pane fade"
                    id="affiliated"
                    role="tabpanel"
                >

                    <div class="ncda-logo-grid">

                        @foreach($affiliated as $affiliatedMember)

                            <div class="ncda-logo-tile">

                                <div class="ncda-logo-image">

                                    <img
                                        src="{{ asset('new/img/'.$affiliatedMember->logo) }}"
                                        alt="{{ $affiliatedMember->name }}"
                                        loading="lazy"
                                    >

                                </div>

                                <h6>

                                    @if($affiliatedMember->website)

                                        <a
                                            href="{{ $affiliatedMember->website }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                        >
                                            {{ $affiliatedMember->name }}
                                        </a>

                                    @else

                                        {{ $affiliatedMember->name }}

                                    @endif

                                </h6>

                                @if($affiliatedMember->website)
                                    <span class="ncda-external">
                                        Visit website →
                                    </span>
                                @endif

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         PROJECT PARTNERS
         ===================================================== --}}

    <section class="ncda-partner-section ncda-project-section">

        <div class="container">

            <div class="ncda-partner-layout">

                <div class="ncda-partner-intro">

                    <p class="ncda-partner-kicker">
                        Project partners
                    </p>

                    <h2>
                        Working together to create impact.
                    </h2>

                    <p>
                        Our project partners support programmes and
                        initiatives that translate evidence and collaboration
                        into meaningful change for communities.
                    </p>

                </div>


                <div class="ncda-partner-logos">

                    <div class="ncda-logo-grid">

                        @foreach($partners->where('type', 1) as $partner)

                            <div class="ncda-logo-tile">

                                <div class="ncda-logo-image">

                                    <img
                                        src="{{ asset('new/img/'.$partner->logo) }}"
                                        alt="{{ $partner->name ?? 'Project partner' }}"
                                        loading="lazy"
                                    >

                                </div>

                                @if(isset($partner->name))
                                    <h6 style="color:white;">
                                        {{ $partner->name }}
                                    </h6>
                                @endif

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         STRATEGIC PARTNERS
         ===================================================== --}}

    <section class="ncda-partner-section ncda-strategic-section">

        <div class="container">

            <div class="ncda-partner-layout">

                <div class="ncda-partner-intro">

                    <p class="ncda-partner-kicker">
                        Strategic partners
                    </p>

                    <h2>
                        Partnerships that move the agenda forward.
                    </h2>

                    <p>
                        We collaborate with strategic organisations that
                        contribute expertise, resources, advocacy and
                        long-term commitment to the NCD response.
                    </p>

                </div>


                <div class="ncda-partner-logos">

                    <div class="ncda-logo-grid">

                        @foreach($partners->where('type', '!=', 1) as $partner)

                            <div class="ncda-logo-tile">

                                <div class="ncda-logo-image">

                                    <img
                                        src="{{ asset('new/img/'.$partner->logo) }}"
                                        alt="{{ $partner->name ?? 'Strategic partner' }}"
                                        loading="lazy"
                                    >

                                </div>

                                @if(isset($partner->name))
                                    <h6>
                                        {{ $partner->name }}
                                    </h6>
                                @endif

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
         CTA
         ===================================================== --}}

    <section class="ncda-partnership-cta">

        <div class="container">

            <div class="ncda-cta-box">

                <div>

                    <h2>
                        Become part of the movement.
                    </h2>

                    <p>
                        Join organisations across Rwanda working to build
                        healthier communities and strengthen the response
                        to non-communicable diseases.
                    </p>

                </div>

                <a
                    href="{{ url('/contact') }}"
                    class="ncda-cta-button"
                >
                    Partner with us →
                </a>

            </div>

        </div>

    </section>


</div>

@endsection