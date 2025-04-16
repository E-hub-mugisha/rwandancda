@extends('layouts.base')
@section('title','about us')
@section('content')

<!-- Start Page Header -->
<section class="cs_page_heading cs_center cs_bg_filed" data-src="assets/img/page_heading_bg.jpg">
  <div class="container">
    <div class="cs_page_heading_in">
      <h1 class="cs_page_heading_title cs_fs_48 cs_white_color">About Us</h1>
      <ol class="breadcrumb cs_fs_20 cs_white_color cs_heading_font">
        <li class="breadcrumb-item"><a href="index.html"><i class="fa-solid fa-house"></i>Home</a></li>
        <li class="breadcrumb-item active">About us</li>
      </ol>
    </div>
  </div>
</section>
<!-- End Page Header -->

<!-- Start About Section -->
<section class="cs_about cs_style_1 position-relative" id="about">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row align-items-center cs_gap_y_40">
      <div class="col-lg-6">
        <div class="cs_about_thumbnail">
          <div class="cs_about_thumbnail_1">
            <img src="{{ asset('new/img/content/about-05.jpg')}}" alt="Image">
            <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_player_btn cs_style_1 cs_video_open">
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
            <p class="cs_experience_box_number cs_fs_48 cs_bold cs_white_color">30+</p>
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
          <ul class="cs_list cs_style_1 cs_mp0">
            <li>
              <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
              </svg>
              Top quality Technician team
            </li>
            <li>
              <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
              </svg>
              World Class Reputed Hospital
            </li>
            <li>
              <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
              </svg>
              Discount on all Pathology & Radiology treatment
            </li>
          </ul>
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