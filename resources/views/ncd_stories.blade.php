@extends('layouts.base')
@section('title','Newsletter')
@section('content')

<section class="cs_video_section cs_style_1 cs_accent_bg position-relative mt-5">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_vider_wrapper cs_style_1">
            <a href="#" class="cs_player_btn cs_style_2 cs_center cs_video_open wow zoomIn animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: zoomIn;">
                <span></span>
            </a>
            <h2 class="cs_video_title">Life with
                <span class="cs_accent_color">NCDs</span>
            </h2>
            <p class="cs_video_subtitle">
                Many people face challenges in lifestyle, economy, and health, especially those living with non-communicable diseases (PLWNCDs), who are at higher risk of severe complications.
                </p>
            
            <div class="cs_video_shape_3">
                <img src="assets/img/heartbeat.svg" alt="Icon">
            </div>
            <div class="cs_video_shape_4">
                <img src="assets/img/stethoscope.svg" alt="Icon">
            </div>
        </div>
        <div class="cs_video_shape_1">
            <img src="assets/img/icons/coronavirus.svg" alt="Icon">
        </div>
        <div class="cs_video_shape_2">
            <img src="assets/img/icons/health-insurance.svg" alt="Icon" class="cs_spinner_img">
        </div>
    </div>
</section>

<section class="cs_service_area cs_accent_bg position-relative pb-5">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_white_color">NCD Stories & Challenges</p>
                <h2 class="cs_section_title cs_white_color">Hear testimony from our community.</h2>
            </div>
        </div>
        <div class="cs_height_50 cs_height_lg_40"></div>
        <div class="row cs_gap_y_40">
            <div class="col-xl-12">
                <div class="row">
                    @foreach( $stories as $story)
                    <div class="col-md-4 mb-3">
                        <div class="cs_iconbox cs_style_2 wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="cs_iconbox_text">
                                <h3 class="cs_iconbox_title cs_fs_24 cs_white_color"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $story->id }}">{{ $story->name }}</a>
                                </h3>
                                <p class="cs_iconbox_subtitle cs_white_color">{{ Str::limit($story->headline, 100) }}</p>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $story->id }}" class="cs_text_btn">
                                    <span>Read More</span>
                                    <div class="cs_text_btn_icon cs_center">
                                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="cs_service_shape_1 position-absolute">
        <img src="assets/img/heartbeat_2.svg" alt="Shape">
    </div>
    <div class="cs_service_shape_2 position-absolute">
        <img src="assets/img/stethoscope_2.svg" alt="Shape" class="cs_spinner_img">
    </div>
</section>

@foreach( $stories as $story)
<!-- static Modal -->
<div class="modal fade" id="staticBackdrop{{ $story->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <h3>{{ $story->name }}s' Story</h3>
                    <h5><strong>Disease</strong></strong>: {{ $story->disease }}</h5>
                    
                    <p class="mt-3">
                        {!! $story->content !!}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection