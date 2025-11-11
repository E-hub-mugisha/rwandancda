@extends('layouts.base')
@section('title','Resources')
@section('content')

<section class="cs_service_area cs_type_3">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">

    {{-- Section Heading --}}
    <div class="cs_section_heading cs_style_1 cs_type_1">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Resources</p>
        <h2 class="cs_section_title cs_accent_color mb-0">Valuable NCD Publications & Medical Resources</h2>
      </div>
      <div class="cs_section_heading_right cs_accent_color text-end">
        Access important documents, guidelines, research papers, and advocacy tools from Rwanda NCD Alliance members.
      </div>
    </div>

    <div class="cs_height_100 cs_height_lg_40"></div>

    {{-- Resource Cards --}}
    <div class="row cs_gap_y_30">
      @forelse($resources_data as $resource)
        @php
          $fileObj = json_decode($resource->file)[0] ?? null;
          $fileLink = $fileObj->download_link ?? null;
        @endphp

        @if($fileLink)
        <div class="col-lg-4">
          <div class="cs_iconbox cs_style_8 cs_white_bg shadow-sm p-4 h-100 d-flex flex-column justify-content-between">
            <div>
              <h3 class="cs_iconbox_title cs_fs_28 cs_semibold">
                <a href="{{ asset($fileLink) }}" target="_blank">{{ Str::limit($resource->title, 60) }}</a>
              </h3>
            </div>
            <div class="mt-3">
              <a href="{{ asset($fileLink) }}" target="_blank" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
                <span>Download Resource</span>
                <div class="cs_text_btn_icon cs_center">
                  <i class="fa-solid fa-arrow-right-long"></i>
                </div>
              </a>
            </div>
          </div>
        </div>
        @endif

      @empty
        <div class="col-12 text-center">
          <p class="text-muted fs-5">No resources available at the moment. Please check back later.</p>
        </div>
      @endforelse
    </div>

    <div class="mt-5 d-flex justify-content-center">
      {{ $resources_data->links() }}
    </div>

  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection
