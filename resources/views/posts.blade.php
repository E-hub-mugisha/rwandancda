@extends('layouts.base')
@section('title', 'News')
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

      <!-- Posts
					============================================= -->
      <div id="posts" class="post-grid row gutter-30">
        @foreach($posts as $post)
        <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
          <div class="grid-inner">
            <div class="entry-image">
              <a href="{{ url('ncd_news', $post->slug) }}" data-lightbox="image"><img src="{{ asset('new/img')}}/{{ $post->image }}" alt="Standard Post with Image"></a>
            </div>
            <div class="entry-title">
              <h2><a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a></h2>
            </div>
            <div class="entry-meta">
              <ul>
                <li><i class="uil uil-schedule"></i> {{ $post->created_at }}</li>
                <li><a href="{{ url('ncd_news', $post->slug) }}#comments"><i class="uil uil-comments-alt"></i> 13</a></li>
                <li><a href="#"><i class="uil uil-camera"></i></a></li>
              </ul>
            </div>
            <div class="entry-content">
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p> -->
              <a href="{{ url('ncd_news', $post->slug) }}" class="more-link">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div><!-- #posts end -->

      <!-- Pagination
					============================================= -->
      {{ $posts->links('vendor.pagination.custom-pagination') }}


    </div>
  </div>
</section>

@endsection