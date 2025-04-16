@extends('layouts.base')
@section('title', $data->title)
@section('content')

<section>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInUp;">
      <div >
        <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Blog &amp; news</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">{{ $data->title }}</h2>
      </div>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <div class="row cs_gap_y_40">
      <div class="col-lg-8">
        <div class="cs_post_details cs_style_1 cs_heading_font">
          <div class="cs_post_thumbnail cs_radius_10">
            <img src="{{ asset('new/img')}}/{{ $data->image }}" alt="Post Image">
          </div>
          <ul class="cs_post_meta cs_fs_14 cs_accent_color cs_mp0">
            <li><i class="fa-solid fa-calendar"></i>{{ $data->created_at }}</li>
            <li><i class="fa-solid fa-bookmark"></i>Technology</li>
            <li><i class="fa-solid fa-message"></i>2 Comments</li>
          </ul>
          <hr>
          <div class="cs_height_24 cs_height_lg_20"></div>
          <p>{!! $data->body !!}</p>
        </div>
        <div class="cs_tag_list cs_type_1 cs_fs_14 cs_heading_font cs_accent_color">
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Medical</a>
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Rehab</a>
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Psychology</a>
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Eyecare</a>
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Dental</a>
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Phytotherapy</a>
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Hospitality</a>
          <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">Senior Care</a>
        </div>
        <div class="cs_height_30 cs_height_lg_30"></div>

      </div>
      <aside class="col-lg-4">
        <div class="cs_sidebar cs_style_1">
          <div class="cs_sidebar_widget cs_gray_bg cs_radius_10">
            <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Search</h3>
            <form action="#" class="cs_search cs_radius_6">
              <span class="cs_search_icon cs_accent_color"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" placeholder="Search....">
            </form>
          </div>
          <div class="cs_sidebar_widget cs_gray_bg cs_radius_10">
            <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Recent Posts</h3>
            @foreach($related_data as $post)
            <div class="cs_post cs_style_3">
              <a href="{{ url('ncd_news', $post->slug) }}" class="cs_post_thumbnail cs_radius_10">
                <img src="{{ asset('new/img')}}/{{$post->image }}" alt="{{ Str::limit($post->title, 50) }}" class="cs_zoom_in">
              </a>
              <div class="cs_post_info">
                <h3 class="cs_post_title cs_fs_18 cs_semibold cs_heading_color">
                  <a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a>
                </h3>
                <div class="cs_post_meta cs_fs_14 cs_accent_color">{{ $post->created_at }}</div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="cs_sidebar_widget cs_gray_bg cs_radius_10">
            <div class="cs_sidebar_tags">
              <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Tags</h3>
              <div class="cs_tag_list cs_fs_14 cs_heading_font cs_accent_color">
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Medical</a>
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Rehab</a>
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Psychology</a>
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Eyecare</a>
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Dental</a>
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Phytotherapy</a>
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Hospitality</a>
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">Senior Care</a>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>


@endsection