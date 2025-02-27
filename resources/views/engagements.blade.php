@extends('layouts.base')
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
                <div>{{ $eng_title }}</div>
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
        <div class="col-lg-6 mb-2-5 mb-lg-0">
          <div class="position-relative me-1-9 text-center text-lg-start">
            <img src="{{ asset('new/img/content/about-03.jpg')}}" class="border-radius-10" alt="...">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ps-lg-2-5 ps-xl-6">
            <h2 class="mb-1-6 font-weight-400">Engaging individuals, communities and government to bring <span class="fw-bolder"> the NCDs into the public spotlight and on national agenda.</span></h2>
            <p class="w-90 display-sm-28 mb-1-9">
              We are partnering with both health and non-health sectors to urge community behavior changes such doing physical
              activities, regularly NCDs check-up and eating healthier diet as the vital factors in the prevention of NCDs.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="section footer-stick">

  <div class="container">

    <div id="section-buy" class="heading-block text-center border-bottom-0 page-section" data-onepage-settings="{&quot;offset&quot;:60,&quot;speed&quot;:1250,&quot;easing&quot;:false}">
      <h2><span class="fw-bolder text-style">{{ $eng_title }}</span></h2>
      <span class="w-90 display-sm-28 mb-1-9">It also underlines the need for continued advocacy for and support of screening initiatives nationwide as
        part of a comprehensive prevention and treatment response to the diseases.</span>
    </div>

    <div class="text-center">

      <a href="{{ URL::route('about_us') }}" data-animate="tada" class="button button-3d button-teal button-xlarge mb-0 tada animated"><i class="bi-star-fill"></i>About Us</a>

    </div>

  </div>

</div>
<!-- SERVICE
        ================================================== -->
<section>
  <div class="container">
    <div class="section-heading">
      <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Engagements</span>
      <h2>Our Recent<span class="fw-bolder"> Event</span></h2>
    </div>
    <div class="row g-xxl-5 mt-n2-9">
      @if($programs->count() > 0)

      @foreach($programs as $engagement)
      <div class="col-md-6 col-lg-4 mt-2-9">
        <div class="card card-style1 border-0 border-radius-10">
          <img class="border-top-radius-10" src="{{ asset('new/img')}}/{{$engagement->poster}}" alt="{{ $engagement->title }}">
          <div class="card-body border-bottom-radius-10">
            <h3 class="h4 mb-3"><a href="{{ route('detail', $engagement->id ) }}">{{ $engagement->title }}</a></h3>
            <a href="{{ route('detail', $engagement->id ) }}" class="link-btn">Read More</a>
          </div>
        </div>
      </div>
      @endforeach

      @endif
    </div>
  </div>
</section>

@endsection