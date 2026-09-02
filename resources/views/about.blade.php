@extends('layouts.base')
@section('title','about us')
@section('content')

<style>
  /* ===== Rwanda NCD Alliance — About page design tokens ===== */
  #ncda-about, #ncda-cta {
    --ink: #16241F;
    --forest: #1B4332;
    --forest-dark: #0F2A20;
    --gold: #C99A3E;
    --paper: #F3F5F1;
    --sage: #DDE5D9;
    --muted: #55655C;

    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: var(--ink);
  }

  #ncda-about h1, #ncda-about h2, #ncda-about h3,
  #ncda-cta h1, #ncda-cta h2, #ncda-cta h3 {
    font-family: 'Newsreader', Georgia, serif;
    font-weight: 500;
    letter-spacing: -0.01em;
  }

  /* ---------- About / Hero ---------- */
  #ncda-about {
    background: var(--paper);
    padding: 96px 0;
  }

  .ncda-eyebrow {
    font-size: 0.95rem;
    color: var(--gold);
    font-weight: 600;
    margin: 0 0 14px;
  }

  .ncda-title {
    font-size: clamp(2.2rem, 4vw, 3.2rem);
    line-height: 1.15;
    color: var(--forest-dark);
    margin: 0 0 28px;
    max-width: 14ch;
  }

  .ncda-title em {
    font-style: normal;
    color: var(--forest);
  }

  .ncda-text {
    font-size: 1.15rem;
    line-height: 1.7;
    color: var(--muted);
    max-width: 58ch;
    margin: 0;
  }

  .ncda-text a {
    color: var(--forest);
    text-decoration: underline;
    text-decoration-color: var(--sage);
    text-underline-offset: 3px;
  }
  .ncda-text a:hover { text-decoration-color: var(--gold); }

  /* Stat ledger, right column */
  .ncda-stats {
    border-left: 1px solid var(--sage);
    padding-left: 40px;
  }

  .ncda-stat {
    padding: 22px 0;
    border-bottom: 1px solid var(--sage);
  }
  .ncda-stat:first-child { padding-top: 0; }
  .ncda-stat:last-child { border-bottom: none; }

  .ncda-stat-num {
    font-family: 'Newsreader', Georgia, serif;
    font-size: 2.6rem;
    line-height: 1;
    color: var(--forest);
    display: block;
    margin-bottom: 6px;
  }

  .ncda-stat-label {
    font-size: 0.95rem;
    color: var(--muted);
  }

  @media (max-width: 991px) {
    .ncda-stats {
      border-left: none;
      border-top: 1px solid var(--sage);
      padding-left: 0;
      padding-top: 32px;
      margin-top: 40px;
      display: flex;
      gap: 48px;
    }
    .ncda-stat { border-bottom: none; padding: 0; flex: 1; }
  }

  /* ---------- CTA / Working together ---------- */
  #ncda-cta { padding: 0 0 96px; }

  .ncda-cta-block {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    background: var(--forest-dark);
    border-radius: 6px;
    overflow: hidden;
  }

  .ncda-cta-copy {
    padding: 64px;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .ncda-cta-copy h2 {
    color: #fff;
    font-size: clamp(1.6rem, 2.6vw, 2.1rem);
    line-height: 1.25;
    margin: 0 0 20px;
  }

  .ncda-cta-copy p {
    color: #C9D3CB;
    font-size: 1.05rem;
    line-height: 1.7;
    margin: 0 0 32px;
  }

  .ncda-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    align-self: flex-start;
    background: var(--gold);
    color: var(--forest-dark);
    font-weight: 600;
    font-size: 1rem;
    padding: 14px 28px;
    border-radius: 4px;
    text-decoration: none;
    transition: background 0.2s ease;
  }
  .ncda-btn:hover { background: #DCAF52; color: var(--forest-dark); }
  .ncda-btn:focus-visible { outline: 2px solid #fff; outline-offset: 3px; }

  .ncda-cta-image {
    background-image:
      linear-gradient(120deg, rgba(15,42,32,0.55), rgba(15,42,32,0.15)),
      url('assets/img/card_bg_2.png');
    background-size: cover;
    background-position: center;
    min-height: 320px;
  }

  @media (max-width: 767px) {
    .ncda-cta-block { grid-template-columns: 1fr; }
    .ncda-cta-copy { padding: 44px 32px; }
    .ncda-cta-image { min-height: 220px; order: -1; }
  }

  @media (prefers-reduced-motion: reduce) {
    .ncda-btn { transition: none; }
  }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@400;500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<!-- Start About Section -->
<section id="ncda-about">
  <div class="container">
    <div class="row align-items-start">
      <div class="col-lg-7">
        <p class="ncda-eyebrow">About us</p>
        <h1 class="ncda-title">Rwanda Non‑Communicable <em>Disease Alliance</em></h1>
        <p class="ncda-text">
          Rwanda Non-Communicable Diseases Alliance is a unique civil society network,
          <a href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance" target="_blank" rel="noopener">founded in 2016</a>
          and uniting 25 organizations — NCD patients, health care professionals, youth-led
          organizations and private institutions — working on NCDs in Rwanda.
        </p>
      </div>

      <div class="col-lg-4 offset-lg-1">
        <div class="ncda-stats">
          <div class="ncda-stat">
            <span class="ncda-stat-num">2016</span>
            <span class="ncda-stat-label">Year the alliance was founded</span>
          </div>
          <div class="ncda-stat">
            <span class="ncda-stat-num">25</span>
            <span class="ncda-stat-label">Member organizations across Rwanda</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Section -->

<!-- Start CTA Section -->
<section id="ncda-cta">
  <div class="container">
    <div class="ncda-cta-block">
      <div class="ncda-cta-copy">
        <h2>Working together as an alliance</h2>
        <p>
          A mutual platform for collaboration and joint advocacy to drive the NCDs agenda
          forward. Addressing NCDs takes wide, multi-sector collaboration — Rwanda NCDA is
          connected with NCD alliances around the world.
        </p>
        <a href="{{ route('partnerships') }}" class="ncda-btn">Meet our members</a>
      </div>
      <div class="ncda-cta-image" role="img" aria-label="Alliance members collaborating"></div>
    </div>
  </div>
</section>
<!-- End CTA Section -->

@endsection