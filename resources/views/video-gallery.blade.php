@extends('layouts.base')
@section('title','Video Showcase')
@section('content')

<!-- Start Service Section -->
<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Get To Know</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Our Mission, Vision &amp; <br> Objectives</h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized</div>
        </div>
        <div class="cs_height_100 cs_height_lg_40"></div>
        <div class="container">
            <div class="row col-mb-80">
                <div class="widget col-lg-12">
                    <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">
                        <h4><span class="fw-bolder">Recent Event in Video</span></h4>
                        <div class="fluid-width-video-wrapper">
                            <video preload="none" loop="" autoplay="" muted="" playsinline="" style="width: 100%;">
                                <source src="images/videos/forum.mp4" allow="autoplay; fullscreen" allowfullscreen="" id="fitvid0">
                                </source>
                            </video>
                        </div>
                    </div>
                </div>
                <main class="postcontent col-lg-12">
                    <div class="row g-4 mb-5">
                        <div class="row g-4 ">
                            <div class="col-md-3 py-0 px-1">
                                <div class="card bg-dark text-white mb-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2K4yolH6XYQ?autoplay=1&loop=1&playlist=2K4yolH6XYQ&mute=1" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 py-0 px-1">
                                <div class="card bg-dark text-white mb-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XiBuCe_4cxg?autoplay=1&loop=1&playlist=XiBuCe_4cxg&mute=1" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 py-0 px-1">
                                <div class="card bg-dark text-white mb-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kWiL9TAI41Y?autoplay=1&loop=1&playlist=kWiL9TAI41Y&mute=1" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3 py-0 px-1">
                                <div class="card bg-dark text-white mb-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2K4yolH6XYQ?autoplay=1&loop=1&playlist=2K4yolH6XYQ&mute=1" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</section>


@endsection