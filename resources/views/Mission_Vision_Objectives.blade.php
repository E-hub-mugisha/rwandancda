@extends('layouts.base')
@section('title','Mission, Vision &amp; Objectives')
@section('content')

<style>
  /* ===== Rwanda NCD Alliance — shared design tokens (see about.blade.php) ===== */
  #ncda-mvo {
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

  #ncda-mvo h1, #ncda-mvo h2, #ncda-mvo h3 {
    font-family: 'Newsreader', Georgia, serif;
    font-weight: 500;
    letter-spacing: -0.01em;
  }

  /* ---------- Section heading row ---------- */
  .ncda-mvo-head {
    background: var(--paper);
    padding: 96px 0 72px;
  }

  .ncda-mvo-head .row {
    display: flex;
    flex-wrap: wrap;
    gap: 32px;
    justify-content: space-between;
    align-items: flex-end;
  }

  .ncda-eyebrow {
    font-size: 0.95rem;
    color: var(--gold);
    font-weight: 600;
    margin: 0 0 14px;
  }

  .ncda-mvo-head h2 {
    font-size: clamp(2rem, 3.6vw, 2.8rem);
    line-height: 1.2;
    color: var(--forest-dark);
    margin: 0;
    max-width: 15ch;
  }

  .ncda-mvo-head .ncda-intro {
    font-size: 1.05rem;
    line-height: 1.7;
    color: var(--muted);
    max-width: 40ch;
    margin: 0;
  }

  /* ---------- Vision / Mission ---------- */
  .ncda-vm-wrap {
    background: var(--paper);
    padding-bottom: 100px;
  }

  .ncda-vm-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    border-top: 1px solid var(--sage);
  }

  .ncda-vm-item {
    padding: 48px 48px 48px 0;
    border-bottom: 1px solid var(--sage);
  }

  .ncda-vm-item + .ncda-vm-item {
    padding-left: 48px;
    padding-right: 0;
    border-left: 1px solid var(--sage);
  }

  .ncda-vm-label {
    font-size: 0.85rem;
    font-weight: 600;
    color: var(--gold);
    margin-bottom: 14px;
  }

  .ncda-vm-item h3 {
    font-size: 1.7rem;
    color: var(--forest-dark);
    margin: 0 0 16px;
  }

  .ncda-vm-item p {
    font-size: 1.05rem;
    line-height: 1.7;
    color: var(--muted);
    margin: 0;
    max-width: 46ch;
  }

  @media (max-width: 767px) {
    .ncda-vm-grid { grid-template-columns: 1fr; }
    .ncda-vm-item, .ncda-vm-item + .ncda-vm-item {
      padding: 40px 0;
      border-left: none;
    }
  }

  /* ---------- Objectives (dark band) ---------- */
  .ncda-obj {
    background: var(--forest-dark);
    padding: 88px 0;
  }

  .ncda-obj h2 {
    color: #fff;
    font-size: clamp(1.8rem, 3vw, 2.4rem);
    margin: 0 0 40px;
  }

  .ncda-obj-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0 56px;
  }

  .ncda-obj-list li {
    display: flex;
    gap: 16px;
    padding: 22px 0;
    border-bottom: 1px solid rgba(255,255,255,0.12);
    color: #D9E0D6;
    font-size: 1.02rem;
    line-height: 1.55;
  }

  .ncda-obj-list li i {
    color: var(--gold);
    margin-top: 4px;
    flex-shrink: 0;
  }

  .ncda-obj-cta {
    margin-top: 44px;
  }

  .ncda-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
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

  @media (max-width: 767px) {
    .ncda-obj-list { grid-template-columns: 1fr; }
  }

  /* ---------- Team CTA ---------- */
  .ncda-team-cta {
    background: var(--paper);
    padding: 96px 0;
  }

  .ncda-team-band {
    background: var(--forest);
    border-radius: 6px;
    padding: 64px 56px;
    text-align: center;
  }

  .ncda-team-band h2 {
    color: #fff;
    font-size: clamp(1.6rem, 2.8vw, 2.2rem);
    margin: 0 0 16px;
  }

  .ncda-team-band p {
    color: #C9D3CB;
    font-size: 1.05rem;
    line-height: 1.6;
    max-width: 52ch;
    margin: 0 auto 32px;
  }

  @media (max-width: 767px) {
    .ncda-team-band { padding: 48px 28px; }
  }

  @media (prefers-reduced-motion: reduce) {
    .ncda-btn { transition: none; }
  }
</style>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@400;500;600&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<div id="ncda-mvo">

  <!-- Start Heading -->
  <section class="ncda-mvo-head">
    <div class="container">
      <div class="row">
        <div>
          <p class="ncda-eyebrow">Get to know</p>
          <h2>Our mission, vision &amp; objectives</h2>
        </div>
        <p class="ncda-intro">
          Working together as an alliance provides a mutual platform for collaboration
          and joint advocacy to drive the NCDs agenda forward.
        </p>
      </div>
    </div>
  </section>
  <!-- End Heading -->

  <!-- Start Vision / Mission -->
  <section class="ncda-vm-wrap">
    <div class="container">
      <div class="ncda-vm-grid">
        <div class="ncda-vm-item">
          <p class="ncda-vm-label">Vision</p>
          <h3>A healthy Rwanda</h3>
          <p>
            A healthy people in a nation free from preventable suffering, disability,
            and deaths caused by Non-Communicable Diseases.
          </p>
        </div>
        <div class="ncda-vm-item">
          <p class="ncda-vm-label">Mission</p>
          <h3>One voice for NCDs</h3>
          <p>
            To unite the efforts and create a powerful voice for NCDs awareness raising,
            advocate for the prevention and control of NCDs and their risk factors in
            Rwanda, by promoting multisectoral partnerships, healthy lifestyle education,
            early detection and responding to NCDs challenges to improve health and well-being.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Vision / Mission -->

  <!-- Start Objectives -->
  <section class="ncda-obj">
    <div class="container">
      <h2>Our objectives</h2>
      <ul class="ncda-obj-list">
        <li><i class="fa-solid fa-check"></i>Building capacity and providing technical support to members</li>
        <li><i class="fa-solid fa-check"></i>Leading awareness and healthy lifestyle education for NCD prevention</li>
        <li><i class="fa-solid fa-check"></i>Empowering people living with NCDs and advocating for access to quality care</li>
        <li><i class="fa-solid fa-check"></i>Advocating for the community on the prevention and control of NCDs</li>
        <li><i class="fa-solid fa-check"></i>Contributing to evidence-based NCD policies and practices</li>
      </ul>
      <div class="ncda-obj-cta">
        <a href="{{ URL::route('message') }}" class="ncda-btn">Let's collaborate</a>
      </div>
    </div>
  </section>
  <!-- End Objectives -->

  <!-- Start Team CTA -->
  <section class="ncda-team-cta">
    <div class="container">
      <div class="ncda-team-band">
        <h2>Meet the expert support workforce</h2>
        <p>
          Get to know our dedicated team members who are committed to making a difference
          in the field of non-communicable diseases.
        </p>
        <a href="{{ URL::route('team') }}" class="ncda-btn">Workforce</a>
      </div>
    </div>
  </section>
  <!-- End Team CTA -->

</div>

@endsection