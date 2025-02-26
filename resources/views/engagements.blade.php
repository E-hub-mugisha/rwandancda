@extends('layouts.base')
@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="img/bg/bg-03.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{{ $eng_title }}</h1>
      </div>
      <div class="col-md-12">
        <div class="breadcrumb">
          <span class="left-dot"></span>
          <span class="right-dot"></span>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="#!">{{ $eng_title }}</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
</section>

<!-- MEAL PLANS INFO
        ================================================== -->
<section>
  <div class="container">
    <div class="row align-items-xl-center">
      <div class="col-lg-6 mb-2-5 mb-lg-0">
        <div class="position-relative me-1-9 text-center text-lg-start">
          <img src="{{ asset('new/img/content/about-03.jpg')}}" class="border-radius-10" alt="...">
          <h4 class="about-box border-radius-10">
            {{ $eng_title }}
          </h4>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-2-5 ps-xl-6">
          <h2 class="h1 mb-1-6 font-weight-400">Engaging individuals, communities and government to bring <span class="fw-bolder"> the NCDs into the public spotlight and on national agenda.</span></h2>
          <p class="mb-1-6 lead">
            We are partnering with both health and non-health sectors to urge community behavior changes such doing physical
            activities, regularly NCDs check-up and eating healthier diet as the vital factors in the prevention of NCDs.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EXTRA
        ================================================== -->
<section class="bg-img cover-background" data-overlay-dark="0" data-background="{{ asset('new/img/bg/bg-04.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading text-start mb-4">
          <p class="display-sm-28">
            It also underlines the need for continued advocacy for and support of screening initiatives nationwide as
            part of a comprehensive prevention and treatment response to the diseases.
          </p>
        </div>
        <a href="about-us.html" class="butn secondary">Read More</a>
      </div>
    </div>
  </div>
</section>

<!-- SERVICE
        ================================================== -->
<section>
  <div class="container">
    <div class="section-heading">
      <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">What we offer</span>
      <h2>Provide best<span class="fw-bolder"> services</span></h2>
      <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p>
    </div>
    <div class="row g-xxl-5 mt-n2-9">
      @if($programs->count() > 0)

      @foreach($programs as $engagement)
      <div class="col-md-6 col-lg-4 mt-2-9">
        <div class="card card-style1 border-0 border-radius-10">
          <img class="border-top-radius-10" src="{{ asset('new/img')}}/{{$engagement->poster}}" alt="{{ $engagement->title }}">
          <div class="card-body border-bottom-radius-10">
            <h3 class="h4 mb-3"><a href="{{ route('detail', $engagement->id ) }}">{{ $engagement->title }}</a></h3>
            <p>Our nutrition team love the benefits of exercise and healthy food.</p>
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