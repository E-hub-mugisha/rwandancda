@extends('layouts.base')
@section('title','Video Showcase')
@section('content')

<!-- Page Sub Menu
		============================================= -->
<div id="page-menu" style="--cnvs-page-submenu-sticky-offset: 60px;" class="">
    <div id="page-menu-wrap">
        <div class="container">
            <div class="page-menu-row">

                <div class="page-menu-title">Rwanda<span>NCDA</span></div>

                <nav class="page-menu-nav">
                    <ul class="page-menu-container">
                        <li class="page-menu-item current"><a href="#">
                                <div>@yield('title')</div>
                            </a></li>
                    </ul>
                </nav>

                <div id="page-menu-trigger"><i class="bi-list"></i></div>

            </div>
        </div>
    </div>
    <div class="page-menu-wrap-clone" style="height: 48px;"></div>
</div><!-- #page-menu end -->

<section id="content">
    <div class="content-wrap bg-light">
        <div class="container">
            <div class="section-heading">
                <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">ShowCase</span>
                <h2>Event<span class="fw-bolder"> Videos</span></h2>
                <!-- <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p> -->
            </div>
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