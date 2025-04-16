@extends('layouts.base')
@section('content')
@section('title','Resources')

<section class="cs_service_area cs_type_3">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Resources</p>
        <h2 class="cs_section_title cs_accent_color mb-0">We offer more than Services &amp; all Solutions Medical.</h2>
      </div>
      <div class="cs_section_heading_right cs_accent_color text-end">the other hand, we denounce with righteous
        indignation and dislike men who are so beguiled and demoralized</div>
    </div>
    <div class="cs_height_100 cs_height_lg_40"></div>
    <div class="row cs_gap_y_30">
      @foreach($resources_data as $resource)
      @if( empty( (json_decode($resource->file))[0]->download_link ) )
      @continue
      @else
      <div class="col-lg-4">
        <?php $file = (json_decode($resource->file))[0]->download_link; ?>
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold">
            <a href="{{ URL::asset( $file ) }}" target="_blank">{{ Str::limit($resource->title, 50)}}</a>
          </h3>
          <!-- <p class="cs_iconbox_subtitle">
                        {{ Str::limit($resource->title, 50)}}
                    </p> -->
          <a href="{{ URL::asset( $file ) }}" target="_blank" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Read More</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
      </div>
      @endif
      @endforeach

      {{ $resources_data->links('vendor.pagination.custom-pagination') }}
    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection