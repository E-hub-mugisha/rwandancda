@extends('layouts.base')
@section('title', $data->title)
@section('content')

<section>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">

    {{-- Page Heading --}}
    <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s">
      <div>
        <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Blog & News</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">{{ $data->title }}</h2>
      </div>
    </div>

    <div class="cs_height_50 cs_height_lg_40"></div>

    <div class="row cs_gap_y_40">
      
      {{-- Main Blog Content --}}
      <div class="col-lg-8">
        <div class="cs_post_details cs_style_1 cs_heading_font">
          
          {{-- Blog Image --}}
          <div class="cs_post_thumbnail cs_radius_10 mb-4">
            <img src="{{ asset('new/img/' . $data->image) }}" alt="{{ $data->title }}">
          </div>

          {{-- Post Meta --}}
          <ul class="cs_post_meta cs_fs_14 cs_accent_color list-inline">
            <li><i class="fa-solid fa-calendar"></i> {{ $data->created_at->format('F d, Y') }}</li>
            <li><i class="fa-solid fa-bookmark"></i> Technology</li>
            <li><i class="fa-solid fa-message"></i> 2 Comments</li>
          </ul>

          <hr class="my-3">

          {{-- Blog Body --}}
          <div class="cs_post_content">
            {!! $data->body !!}
          </div>

          {{-- Tags --}}
          <div class="cs_tag_list cs_type_1 cs_fs_14 cs_heading_font cs_accent_color mt-4">
            @php
              $tags = ['Medical','Rehab','Psychology','Eyecare','Dental','Phytotherapy','Hospitality','Senior Care'];
            @endphp
            @foreach($tags as $tag)
              <a href="#" class="cs_tag_link cs_gray_bg cs_radius_6">{{ $tag }}</a>
            @endforeach
          </div>
          
        </div>
      </div>

      {{-- Sidebar --}}
      <aside class="col-lg-4">
        <div class="cs_sidebar cs_style_1">

          {{-- Search Widget --}}
          <div class="cs_sidebar_widget cs_gray_bg cs_radius_10 p-4 mb-4">
            <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Search</h3>
            <form action="#" class="cs_search cs_radius_6 mt-3">
              <span class="cs_search_icon cs_accent_color"><i class="fa-solid fa-magnifying-glass"></i></span>
              <input type="text" placeholder="Search...">
            </form>
          </div>

          {{-- Recent Posts Widget --}}
          <div class="cs_sidebar_widget cs_gray_bg cs_radius_10 p-4 mb-4">
            <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Recent Posts</h3>
            @foreach($related_data as $post)
              <div class="cs_post cs_style_3 d-flex mb-3">
                <a href="{{ url('ncd_news', $post->slug) }}" class="cs_post_thumbnail cs_radius_10 me-3">
                  <img src="{{ asset('new/img/' . $post->image) }}" alt="{{ $post->title }}" class="cs_zoom_in">
                </a>
                <div class="cs_post_info">
                  <h3 class="cs_post_title cs_fs_18 cs_semibold cs_heading_color mb-1">
                    <a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a>
                  </h3>
                  <div class="cs_post_meta cs_fs_14 cs_accent_color">{{ $post->created_at->format('F d, Y') }}</div>
                </div>
              </div>
            @endforeach
          </div>

          {{-- Tags Widget --}}
          <div class="cs_sidebar_widget cs_gray_bg cs_radius_10 p-4">
            <h3 class="cs_sidebar_title cs_fs_20 cs_semibold cs_accent_color">Tags</h3>
            <div class="cs_tag_list cs_fs_14 cs_heading_font cs_accent_color mt-3">
              @foreach($tags as $tag)
                <a href="#" class="cs_tag_link cs_white_bg cs_radius_6">{{ $tag }}</a>
              @endforeach
            </div>
          </div>

        </div>
      </aside>

    </div>

  </div>
</section>

@endsection
