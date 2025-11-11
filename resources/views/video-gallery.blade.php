@extends('layouts.base')
@section('title','Video Showcase')
@section('content')

<!-- Start Service Section -->
<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Explore & Learn</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Our Mission, Vision & Objectives</h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">
                Discover how Rwanda NCD Alliance is working together with partners to advance NCD prevention, treatment, and care.
            </div>
        </div>

        <div class="cs_height_100 cs_height_lg_40"></div>

        <div class="container">
            <div class="row col-mb-80">
                
                <!-- Featured Local Video -->
                <div class="widget col-lg-12">
                    <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">
                        <h4 class="fw-bolder mb-3">Recent Event Highlight</h4>
                        <div class="fluid-width-video-wrapper rounded-4 overflow-hidden">
                            <video preload="auto" autoplay muted loop playsinline controls style="width: 100%;">
                                <source src="{{ asset('images/videos/forum.mp4') }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>

                <!-- YouTube Video Grid -->
                <main class="postcontent col-lg-12">
                    <div class="row g-4 mb-5">
                        @php
                            $videos = [
                                '2K4yolH6XYQ',
                                'XiBuCe_4cxg',
                                'kWiL9TAI41Y',
                                '2K4yolH6XYQ'
                            ];
                        @endphp

                        @foreach ($videos as $video)
                        <div class="col-md-3 py-0 px-1">
                            <div class="card bg-dark text-white shadow-sm rounded-4 overflow-hidden">
                                <div class="ratio ratio-16x9">
                                    <iframe 
                                        class="embed-responsive-item"
                                        src="https://www.youtube.com/embed/{{ $video }}?autoplay=0&loop=1&playlist={{ $video }}&mute=1"
                                        title="Rwanda NCDA Video"
                                        frameborder="0"
                                        allow="autoplay; encrypted-media"
                                        allowfullscreen>
                                    </iframe>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </main>

            </div>
        </div>
    </div>
</section>

@endsection
