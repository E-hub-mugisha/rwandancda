@extends('layouts.base')
@section('title','Gallery')
@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="{{ asset('new/img/bg/bg-03.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>@yield('title')</h1>
      </div>
      <div class="col-md-12">
        <div class="breadcrumb">
          <span class="left-dot"></span>
          <span class="right-dot"></span>
          <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#!">@yield('title')</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
</section>

<!-- PORTFOLIO STYLE 1
        ================================================== -->
<section>
  <div class="container">
    <div class="row portfolio-gallery-isotope mt-n2-9">
      @if($images->count() > 0 )

      @foreach($images as $image)
      <div class="col-md-6 col-lg-4 mt-2-9 nutritonist" data-src="{{ asset('new/img/galleries')}}/{{$image->image }}" data-sub-html="<h4 class='text-white'>Vegetarian Diet #01</h4><p>Nutritonist</p>">
        <div class="portfolio-style-01">
          <div class="position-relative">
            <div class="position-relative">
              <img src="{{ asset('new/img/galleries')}}/{{$image->image }}" alt="...">
              <div class="portfolio-overlay">
                <div class="portfolio-icon-box">
                  <a href="#!"><i class="ti-zoom-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      @endforeach
<div class="mt-4">
    {{ $images->links() }}
</div>
      @endif
    </div>
  </div>
</section>
@endsection