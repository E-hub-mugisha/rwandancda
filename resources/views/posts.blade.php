@extends('layouts.base')
@section('title', 'News')
@section('content')

<section>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInUp;">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Blog &amp; news</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">Take a Look at The Latest <br> Articles &amp; News</h2>
      </div>
      <div class="cs_section_heading_right">
        <a href="blog.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
          <span class="cs_btn_text">See All Blogs</span>
        </a>
      </div>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <div class="row cs_row_gap_30 cs_gap_y_40">
      @foreach($posts as $post)
      <div class="col-lg-4">
        <article class="cs_post cs_style_1">
          <a href="{{ url('ncd_news', $post->slug) }}" class="cs_post_thumbnail">
            <img src="{{ asset('new/img')}}/{{ $post->image }}" alt="{{ Str::limit($post->title, 50) }}">
          </a>
          <div class="cs_post_info">
            <div class="cs_post_meta">{{ $post->created_at }}</div>
            <h3 class="cs_post_title cs_fs_32"><a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a></h3>
            <a href="{{ url('ncd_news', $post->slug) }}" class="cs_text_btn cs_fs_18 cs_heading_color">
              <span>Read More</span>
              <div class="cs_text_btn_icon cs_center">
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
              </div>
            </a>
          </div>
        </article>
      </div>
      @endforeach
    </div>

    <div class="cs_center mt-5">
      {{ $posts->links() }}
    </div>
    <div class="col-md-12 justify-item-center mt-4">

      
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection