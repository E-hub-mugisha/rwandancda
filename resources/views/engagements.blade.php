@extends('layouts.base')
@section('content')


<!-- Start About Section -->
<section class="cs_about cs_style_1 cs_type_2 cs_hide_before_after position-relative">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row align-items-center cs_gap_y_40">
      <div class="col-lg-6">
        <div class="cs_about_thumbnail">
          <div class="cs_about_thumbnail_1 cs_hide_before_after">
            <img src="{{ asset('assets/img/about_6.jpeg') }}" alt="Image">
            <div class="cs_commentbox cs_accent_bg">
              <blockquote class="cs_white_color cs_opacity_9">“Engaging individuals, communities and government to bring the NCDs into the public spotlight and on national agenda.”</blockquote>
            </div>
            <div class="cs_about_shape_9 position-absolute">
              <img src="{{ asset('assets/img/about_shape_5.png') }}" alt="Shape Image">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <div class="cs_about_content">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Engagements</p>
            <h2 class="cs_section_title cs_fs_48 mb-0">{{ $eng_title }}&nbsp;<span class="cs_accent_color">In Rwanda NCDA.</span></h2>
          </div>
          <p class="cs_about_text cs_heading_color">
            We are partnering with both health and non-health sectors to urge community behavior changes such doing physical
            activities, regularly NCDs check-up and eating healthier diet as the vital factors in the prevention of NCDs.
          </p>
          <a href="{{ route('about_us') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg "><span class="cs_btn_text">Info More About</span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End About Section -->

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
      @if($programs->count() > 0)

      @foreach($programs as $engagement)
      <div class="col-lg-4">
        <article class="cs_post cs_style_1">
          <a href="{{ route('detail', $engagement->id ) }}" class="cs_post_thumbnail">
            <img src="{{ asset('new/img')}}/{{$engagement->poster}}" alt="{{ $engagement->title }}">
          </a>
          <div class="cs_post_info">
            <div class="cs_post_meta">{{ $engagement->created_at }}</div>
            <h3 class="cs_post_title cs_fs_32">
              <a href="{{ route('detail', $engagement->id ) }}">{{ $engagement->title }}</a>
            </h3>
            <a href="{{ route('detail', $engagement->id ) }}" class="cs_text_btn cs_fs_18 cs_heading_color">
              <span>Learn More</span>
              <div class="cs_text_btn_icon cs_center">
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                <span><i class="fa-solid fa-arrow-right-long"></i></span>
              </div>
            </a>
          </div>
        </article>
      </div>
      @endforeach

      @endif
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection