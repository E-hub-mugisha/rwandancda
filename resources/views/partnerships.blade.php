@extends('layouts.base')
@section('title','Partnerships and Members')
@section('content')

<style>
  /* ===== Rwanda NCD Alliance — shared design tokens (see about.blade.php) ===== */
  #ncda-partners {
    --ink: #16241F;
    --forest: #1B4332;
    --forest-dark: #0F2A20;
    --gold: #C99A3E;
    --paper: #F3F5F1;
    --sage: #DDE5D9;
    --muted: #55655C;

    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: var(--ink);
    background: var(--paper);
  }

  #ncda-partners h1, #ncda-partners h2, #ncda-partners h3 {
    font-family: 'Newsreader', Georgia, serif;
    font-weight: 500;
    letter-spacing: -0.01em;
  }

  /* ---------- Heading ---------- */
  .ncda-p-head {
    padding: 96px 0 64px;
  }

  .ncda-eyebrow {
    font-size: 0.95rem;
    color: var(--gold);
    font-weight: 600;
    margin: 0 0 14px;
  }

  .ncda-p-head h2 {
    font-size: clamp(2rem, 3.6vw, 2.8rem);
    line-height: 1.2;
    color: var(--forest-dark);
    margin: 0;
    max-width: 20ch;
  }

  /* ---------- Members ---------- */
  .ncda-members { padding-bottom: 100px; }

  .ncda-members h3 {
    font-size: 1.6rem;
    color: var(--forest-dark);
    margin-bottom: 32px;
  }

  .ncda-tabs {
    display: flex;
    gap: 32px;
    border-bottom: 1px solid var(--sage);
    margin-bottom: 40px;
    list-style: none;
    padding: 0;
  }

  .ncda-tabs .nav-link {
    background: none;
    border: none;
    padding: 0 0 14px;
    font-size: 1rem;
    font-weight: 600;
    color: var(--muted);
    border-bottom: 2px solid transparent;
    border-radius: 0;
  }

  .ncda-tabs .nav-link.active {
    color: var(--forest-dark);
    background: none;
    border-bottom: 2px solid var(--gold);
  }

  .ncda-tabs .nav-link:hover:not(.active) {
    color: var(--forest);
  }

  /* Logo tile grid, shared by members + partners */
  .ncda-logo-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(160px, 1fr));
    gap: 20px;
  }

  .ncda-logo-tile {
    background: #fff;
    border: 1px solid var(--sage);
    border-radius: 6px;
    padding: 20px 16px;
    text-align: center;
    transition: border-color 0.2s ease, transform 0.2s ease;
  }

  .ncda-logo-tile:hover {
    border-color: var(--gold);
    transform: translateY(-2px);
  }

  .ncda-logo-tile img {
    max-width: 100%;
    height: 64px;
    object-fit: contain;
    margin-bottom: 12px;
  }

  .ncda-logo-tile h6 {
    font-size: 0.9rem;
    font-weight: 600;
    margin: 0;
  }

  .ncda-logo-tile h6 a {
    color: var(--ink);
    text-decoration: none;
  }

  .ncda-logo-tile h6 a:hover { color: var(--forest); }

  @media (prefers-reduced-motion: reduce) {
    .ncda-logo-tile { transition: none; }
  }

  /* ---------- Partner bands ---------- */
  .ncda-partner-band {
    padding: 88px 0;
  }

  .ncda-partner-band.ncda-dark {
    background: var(--forest-dark);
  }

  .ncda-partner-band .row {
    display: flex;
    flex-wrap: wrap;
    gap: 48px;
  }

  .ncda-partner-label {
    flex: 0 0 220px;
  }

  .ncda-partner-label p {
    font-size: 0.95rem;
    font-weight: 600;
    color: var(--gold);
    margin: 0 0 12px;
  }

  .ncda-partner-label h2 {
    font-size: 1.9rem;
    margin: 0;
    max-width: 12ch;
  }

  .ncda-dark .ncda-partner-label h2 { color: #fff; }
  .ncda-partner-band:not(.ncda-dark) .ncda-partner-label h2 { color: var(--forest-dark); }

  .ncda-partner-logos { flex: 1; min-width: 260px; }

  .ncda-dark .ncda-logo-tile {
    background: rgba(255,255,255,0.04);
    border-color: rgba(255,255,255,0.14);
  }

  .ncda-dark .ncda-logo-tile img { filter: brightness(0) invert(1); opacity: 0.85; }

  @media (max-width: 767px) {
    .ncda-partner-label { flex: 1 1 100%; }
  }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@400;500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<div id="ncda-partners">

  <!-- Start Heading -->
  <section class="ncda-p-head">
    <div class="container">
      <p class="ncda-eyebrow">Get to know</p>
      <h2>Our members, project &amp; strategic partners</h2>
    </div>
  </section>
  <!-- End Heading -->

  <!-- Start Members -->
  <section class="ncda-members">
    <div class="container">
      <h3>Our members</h3>

      <ul class="ncda-tabs" id="membersTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="founding-tab" data-bs-toggle="tab" data-bs-target="#founding" type="button" role="tab">Founding &amp; adherent members</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="affiliated-tab" data-bs-toggle="tab" data-bs-target="#affiliated" type="button" role="tab">Affiliated members</button>
        </li>
      </ul>

      <div class="tab-content" id="membersTabContent">
        <!-- Founding Members -->
        <div class="tab-pane fade show active" id="founding" role="tabpanel">
          <div class="ncda-logo-grid">
            @foreach($founders as $founder)
            <div class="ncda-logo-tile">
              <img src="{{ asset('new/img/'.$founder->logo) }}" alt="{{ $founder->name }}">
              <h6><a href="{{ $founder->website }}" target="_blank" rel="noopener">{{ $founder->name }}</a></h6>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Adherent Members -->
        <div class="tab-pane fade" id="adherent" role="tabpanel">
          <div class="ncda-logo-grid">
            @foreach($adherents as $adherent)
            <div class="ncda-logo-tile">
              <img src="{{ asset('new/img/'.$adherent->logo) }}" alt="{{ $adherent->name }}">
              <h6><a href="{{ $adherent->website }}" target="_blank" rel="noopener">{{ $adherent->name }}</a></h6>
            </div>
            @endforeach
          </div>
        </div>

        <!-- Affiliated Members -->
        <div class="tab-pane fade" id="affiliated" role="tabpanel">
          <div class="ncda-logo-grid">
            @foreach($affiliated as $affiliatedMember)
            <div class="ncda-logo-tile">
              <img src="{{ asset('new/img/'.$affiliatedMember->logo) }}" alt="{{ $affiliatedMember->name }}">
              <h6><a href="{{ $affiliatedMember->website }}" target="_blank" rel="noopener">{{ $affiliatedMember->name }}</a></h6>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Members -->

  <!-- Start Project Partners -->
  <section class="ncda-partner-band ncda-dark">
    <div class="container">
      <div class="row">
        <div class="ncda-partner-label">
          <p>Project partners</p>
          <h2>Meet our project partners</h2>
        </div>
        <div class="ncda-partner-logos">
          <div class="ncda-logo-grid">
            @foreach($partners->where('type', 1) as $partner)
            <div class="ncda-logo-tile">
              <img src="{{ asset('new/img/'.$partner->logo) }}" alt="Project partner logo">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Project Partners -->

  <!-- Start Strategic Partners -->
  <section class="ncda-partner-band">
    <div class="container">
      <div class="row">
        <div class="ncda-partner-label">
          <p>Strategic partners</p>
          <h2>Meet our strategic partners</h2>
        </div>
        <div class="ncda-partner-logos">
          <div class="ncda-logo-grid">
            @foreach($partners->where('type', '!=', 1) as $partner)
            <div class="ncda-logo-tile">
              <img src="{{ asset('new/img/'.$partner->logo) }}" alt="Strategic partner logo">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Strategic Partners -->

</div>

@endsection