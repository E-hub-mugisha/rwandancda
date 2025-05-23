@extends('layouts.base')
@section('title','about us')
@section('content')


<!-- Start About Section -->
<section class="cs_about cs_style_1 position-relative" id="about">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row align-items-center cs_gap_y_40">
      <div class="col-lg-6">
        <div class="cs_about_thumbnail">
          <div class="cs_about_thumbnail_1">
            <img src="{{ asset('new/img/content/about-05.jpg')}}" alt="Image">
            <a href="#" class="cs_player_btn cs_style_1 cs_video_open">
              <span class="cs_player_btn_icon cs_center">
                <img src="assets/img/icons/player_icon.svg" alt="Icon">
              </span>
              <span class="cs_play_btn_text cs_fs_18 cs_semibold cs_accent_color">How We Works</span>
            </a>
          </div>
          <div class="cs_about_thumbnail_2">
            <img src="{{ asset('new/img/content/about-02.jpg')}}" alt="About Image">
            <svg class="cs_about_thumbnail_shape_2 cs_accent_color" width="123" height="125" viewBox="0 0 123 125" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle opacity="0.3" cx="73" cy="75" r="49.5" stroke="currentColor" stroke-dasharray="4 4" />
              <circle opacity="0.3" cx="62" cy="50" r="49.5" stroke="currentColor" stroke-dasharray="4 4" />
              <circle opacity="0.3" cx="50" cy="72" r="49.5" stroke="currentColor" stroke-dasharray="4 4" />
            </svg>
          </div>
          <div class="cs_experience_box cs_center cs_accent_bg cs_radius_50">
            <p class="cs_experience_box_number cs_fs_48 cs_bold cs_white_color">9+</p>
            <p class="cs_experience_box_title cs_fs_20 cs_medium cs_white_color">Experience</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
        <div class="cs_about_content">
          <div class="cs_section_heading cs_style_1">
            <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">About us</p>
            <h2 class="cs_section_title cs_fs_48 mb-0">Rwanda Non-Communicable <span
                class="cs_accent_color">Disease Alliance</span></h2>
          </div>
          <p class="cs_about_text">Rwanda Non-Communicable Diseases Alliance is a unique civil society network, <a
              href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance"
              target="_blank">founded in 2016</a> and uniting 25 organizations
            ( NCDs Patients, health care professionals and youth-led organizations and private institutions)
            working on NCDs in Rwanda.</p>
          
          <a href="{{ URL::route('about_us') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100"><span class="cs_btn_text">Info More About</span></a>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_about_shape_1">
    <img src="assets/img/about_shape_1.svg" alt="Shape Image">
  </div>
  <div class="cs_about_shape_2">
    <img src="assets/img/about_shape_1.svg" alt="Shape Image">
  </div>
  <div class="cs_about_shape_3">
    <img src="assets/img/about_shape_1.svg" alt="Shape Image">
  </div>
  <div class="cs_about_shape_4">
    <img src="assets/img/about_shape_1.svg" alt="Shape Image">
  </div>
  <div class="cs_about_shape_5">
    <img src="assets/img/about_shape_4.svg" alt="Shape Image">
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End About Section -->

<section class="cs_contact">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_row_gap_30 cs_gap_y_30 justify-content-center">
      <div class="col-lg-8 float-center wow fadeInRight animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInRight;">
        <div class="cs_card cs_style_3 cs_bg_filed" data-src="assets/img/card_bg_2.png" style="background-image: url(&quot;assets/img/card_bg_2.png&quot;);">
          <h2 class="cs_card_title cs_fs_36">Let’s Work together as an alliance!</h2>
          <p class="cs_address_text cs_fs_20 cs_medium cs_heading_font cs_heading_color mb-0">
            Providing a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward. It is our belief that addressing NCDs needs wide and multi-sector collaboration. Rwanda NCDA is globally connected with other NCDs Alliances.
          </p>
          <div class="cs_height_40 cs_height_lg_40"></div>
          <a href="appointment.html" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
            <span class="cs_btn_text">Get to know more</span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection