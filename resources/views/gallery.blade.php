@extends('layouts.base')
@section('title','Gallery')
@section('content')


<!-- PORTFOLIO STYLE 1
        ================================================== -->
<section id="content">
  <div class="content-wrap">
    <div class="container">
      <div class="row portfolio-gallery-isotope mt-n2-9">
        @if($images->count() > 0 )

        @foreach($images as $image)
        <div class="col-md-6 col-lg-4 mt-2-9 nutritonist" data-src="{{ asset('new/img/galleries')}}/{{$image->image }}" data-sub-html="{{ $image->event }}">
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
  </div>
</section>
@endsection