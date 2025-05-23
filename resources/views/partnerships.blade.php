@extends('layouts.base')
@section('title','Partnerships and Members')
@section('content')

<section class="cs_service_area cs_type_1">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Get To Know</p>
        <h2 class="cs_section_title cs_accent_color mb-0">Our Member, Project, <br>&amp; Strategic Members</h2>
      </div>
      <div class="cs_section_heading_right cs_accent_color text-end">Working together as an alliance provides a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward</div>
    </div>
    <div class="cs_section_heading cs_style_1 cs_text_center mt-5">
      <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Our Partners</p>
      <h2 class="cs_section_title cs_fs_48 mb-0">Meet our Member</h2>
    </div>
    <div class="row cs_row_gap_30 cs_gap_y_30 mt-5">
      @foreach($members as $member)
      <div class="col-lg-2">
        <div class="cs_card cs_style_1 cs_radius_10" style="padding: 20px;">
          <a href="{{ $member->website }}" class="cs_card_thumbnail cs_radius_10">
            <img src="{{ asset('new/img')}}/{{$member->logo }}" alt="Card Thumbnail">
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

<section class="cs_service_area cs_accent_bg">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row">
      <div class="cs_section_heading col-md-3 cs_text_center">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_white_color cs_heading_font">Board’s Team</p>
        <h2 class="cs_section_title cs_fs_48 cs_white_color mb-0">Meet our Project Partner</h2>
      </div>
      <div class="col-md-9">
        <div class="row cs_row_gap_30 cs_gap_y_30">
          @foreach($partners as $partner)
          @if($partner->type == 1)
          <div class="col-lg-2">
            <div class="cs_card cs_style_1 cs_radius_10" style="padding: 20px;">
              <a href="#" class="cs_card_thumbnail cs_radius_10">
                <img src="{{ asset('new/img')}}/{{$partner->logo }}" alt="Card Thumbnail">
              </a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

<section class="cs_service_area cs_type_1">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="row">
      <div class="cs_section_heading col-md-3 cs_text_center">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Board’s Team</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">Meet our Strategic Partner</h2>
      </div>
      <div class="col-md-9">
        <div class="row cs_row_gap_30 cs_gap_y_30">
          @foreach($partners as $partner)
          @if($partner->type != 1)
          <div class="col-lg-2">
            <div class="cs_card cs_style_1 cs_radius_10" style="padding: 20px;">
              <a href="#" class="cs_card_thumbnail cs_radius_10">
                <img src="{{ asset('new/img')}}/{{$partner->logo }}" alt="Card Thumbnail">
              </a>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection