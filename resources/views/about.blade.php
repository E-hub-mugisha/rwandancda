@extends('layouts.base')
@section('title','about us')
@section('content')

<!-- Page Sub Menu
		============================================= -->
<div id="page-menu" style="--cnvs-page-submenu-sticky-offset: 60px;" class="">
  <div id="page-menu-wrap">
    <div class="container">
      <div class="page-menu-row">

        <div class="page-menu-title">Rwanda<span>NCDA</span></div>

        <nav class="page-menu-nav">
          <ul class="page-menu-container">
            <li class="page-menu-item current"><a href="#">
                <div>@yield('title')</div>
              </a></li>
          </ul>
        </nav>

        <div id="page-menu-trigger"><i class="bi-list"></i></div>

      </div>
    </div>
  </div>
  <div class="page-menu-wrap-clone" style="height: 48px;"></div>
</div><!-- #page-menu end -->


<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div class="row align-items-xl-center">
        <div class="col-lg-5 mb-2-5 mb-lg-0">
          <div class="position-relative">
            <div class="row">
              <div class="col-6">
                <img class="mb-4 border-radius-10" src="{{ asset('new/img/content/about-02.jpg')}}" alt="...">
                <img src="{{ asset('new/img/content/about-03.jpg')}}" class="border-radius-10" alt="...">
              </div>
              <div class="col-6 mt-4 mt-lg-6">
                <img class="mb-4 border-radius-10" src="{{ asset('new/img/content/about-04.PNG')}}" alt="...">
                <img src="{{ asset('new/img/content/about-05.jpg')}}" class="border-radius-10" alt="...">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="ps-lg-2-2 ps-xl-6">
            <h2 class="h1 mb-1-6 font-weight-400">About <span class="fw-bolder">Rwanda Non-Communicable Disease Alliance</span> for healthy life.</h2>
            <p class="w-90 display-sm-28 mb-1-9">Rwanda Non-Communicable Diseases Alliance is a unique civil society network, <a href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance" target="_blank">founded in 2016</a> and uniting 25 organizations
              ( NCDs Patients, health care professionals and youth-led organizations and private institutions) working on NCDs in Rwanda.</p>
            <p class="mb-0 display-sm-28">
              Working together as an alliance provides a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward.
              It is our belief that addressing NCDs needs wide and multi-sector collaboration. Rwanda NCDA is globally connected with other NCDs Alliances.
            </p>
            <div class="d-flex align-items-center">
              <a href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance" class="button button-rounded px-5 button-3d button-text-effect button-text-flip-x">
                <div class="button-inner"><span>Read More</span><span>About us</span></div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section id="content">
  <div class="content-wrap">
    <div class="section parallax mb-0 border-0 dark" style="height: 450px; padding: 120px 0;" data-bs-theme="dark">

      <div class="vertical-middle text-center" style="z-index: 2;">
        <div class="container fadeInUp animated" data-animate="fadeInUp">
          <div class="heading-block border-bottom-0 mb-0">
            <h2 style="font-size: 42px;">Global NCD Forum (#NCDAF2025) happening in Kigali February 2025</h2>
            <span class="d-none d-lg-block">Global NCD Forum (#NCDAF2025) happening in Kigali February 2025</span>
          </div>
          <a href="#" class="button button-border button-rounded button-white button-light button-large ms-0 mb-0" style="margin-top: 40px;">Show More</a>
        </div>
      </div>

      <div class="video-wrap no-placeholder" style="z-index: 1;">
        <video poster="images/videos/forum.jpg" preload="none" loop="" autoplay="" muted="" playsinline="" style="width: 800px; height: 450px; left: -69.5px;">
          <source src="images/videos/forum.mp4" type="video/mp4">
          <source src="images/videos/messiermarathon.webm" type="video/webm">
        </video>
        <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
      </div>

    </div>

    <div class="row mb-6 align-items-stretch">

      <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: var(--cnvs-themecolor);" data-bs-theme="dark">
        <div>
          <h3 class="text-uppercase" style="font-weight: 600;">Our vision</h3>
          <p style="line-height: 1.8;">A healthy people in a nation free from preventable suffering, disability, and deaths caused by Non
            Communicable Diseases.</p>
          <a href="#" class="button button-border button-light button-rounded button-reveal text-end text-uppercase m-0"><i class="uil uil-angle-right-b"></i><span>Read More</span></a>
          <i class="bi-lightbulb bg-icon"></i>
        </div>
      </div>

      <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;" data-bs-theme="dark">
        <div>
          <h3 class="text-uppercase" style="font-weight: 600;">Our Mission</h3>
          <p style="line-height: 1.8;">To unite the efforts and create a powerful voice for the NCDs awareness rising, advocate for the
            prevention and control of NCDs and their risk factors in Rwanda, by promoting multisectoral
            partnerships, healthy living style education, early detection and responding to NCDs challenges
            to
            improve health and well-being.</p>
          <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
          <i class="bi-gear-fill bg-icon"></i>
        </div>
      </div>

      <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;" data-bs-theme="dark">
        <div>
          <h3 class="text-uppercase" style="font-weight: 600;">Our Objectives</h3>
          <p style="line-height: 1.8;">
            <li data-aos="fade-up" data-aos-delay="100">Building capacity and providing technical support to
              the
              members</li>
            <li data-aos="fade-up" data-aos-delay="100">Leading awareness and healthy life education for
              NCDs
              Prevention</li>
            <li data-aos="fade-up" data-aos-delay="100">Empower people living with NCDs and Advocate for
              them on access
              to quality care</li>
            <li data-aos="fade-up" data-aos-delay="100">Advocate for the community concerning the prevention
              and
              control of NCDs</li>
            <li data-aos="fade-up" data-aos-delay="100">Contribute to evidence based NCD policies and
              practices.
          </p>
          </li>
          </p>
          <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
          <i class="bi-hand-thumbs-up bg-icon"></i>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="bg-light" id="content">
  <div class="content-wrap">
    <div class="container">

      <div class="section-heading">
        <h2>Our<span class="fw-bolder"> Members</span></h2>
      </div>

      <ul class="clients-grid row row-cols-2 row-cols-sm-3 row-cols-md-6">
        @foreach($members as $member)
        <li class="col"><a href="{{ $member->website }}"><img src="{{ asset('new/img')}}/{{$member->logo }}" alt="Clients"></a></li>
        @endforeach
      </ul>
    </div>
  </div>
</section>

<section id="content">
  <div class="content-wrap">
    <a href="{{ URL::route('message') }}" class="button button-full text-center footer-stick">
      <div class="container">
        Need more with Rwanda NDCA? <strong>Start here</strong> <i class="fa-solid fa-caret-right" style="top:4px;"></i>
      </div>
    </a>

  </div>
</section>

@endsection