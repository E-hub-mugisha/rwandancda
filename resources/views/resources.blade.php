@extends('layouts.base')
@section('content')
@section('title','Resources')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="img/bg/bg-03.jpg">
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
            <li><a href="{{ route('home')}}">Home</a></li>
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

<!-- BLOG GRID
        ================================================== -->
<section>
  <div class="container">
    <div class="row g-xl-5 mt-n2-9">
      @foreach($resources_data as $resource)
      @if( empty( (json_decode($resource->file))[0]->download_link ) )
      @continue
      @else
      <div class="col-md-6 col-lg-4 mt-2-9">
        <article class="card card-style4">
          <!--<div class="image-box">-->
          <!--  <img src="{{ asset('new/img/blog/blog-01.jpg')}}" class="border-radius-10" alt="...">-->
          <!--  <div class="blog-date"><span>30</span> Mar 21</div>-->
          <!--</div>-->
          <div class="card-body border-radius-10">
            <!--<ul class="list-unstyled mb-3">-->
            <!--  <li class="d-inline-block me-3 text-capitalize"><i class="ti-user me-2 text-primary"></i><a href="#!">admin</a></li>-->
            <!--  <li class="d-inline-block"><i class="ti-comment me-2 text-primary align-middle"></i> 06 Comment</li>-->
            <!--</ul>-->
            <?php $file = (json_decode($resource->file))[0]->download_link; ?>
            <h3 class="h4 mb-3"><a href="{{ URL::asset( $file ) }}" target="_blank">{{ Str::limit($resource->title, 50)}}</a></h3>
            <a href="{{ URL::asset( $file ) }}" target="_blank" class="link-btn">Read More</a>
          </div>
        </article>
      </div>
      @endif
      @endforeach
    </div>
    <div class="row">
      <div class="col-sm-12">
        <!-- start pager  -->
        <ul class="pagination justify-content-center d-sm-flex text-center mb-0 mt-6 mt-lg-7">
          <li><a href="#!"><i class="fas fa-long-arrow-alt-left me-2"></i></a></li>
          <li class="active"><a href="#!">1</a></li>
          <li><a href="#!">2</a></li>
          <li><a href="#!">3</a></li>
          <li><a href="#!"><i class="fas fa-long-arrow-alt-right ms-2"></i></a></li>
        </ul>
        <!-- end pager -->
      </div>
    </div>
  </div>
</section>

@endsection