@extends('layouts.base')
@section('title','Video Showcase')
@section('content')

<section id="content">
    <div class="content-wrap bg-light">
        <div class="container">
            <div class="section-heading">
                <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">ShowCase</span>
                <h2>Event<span class="fw-bolder"> Videos</span></h2>
                <!-- <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p> -->
            </div>
            <div class="row col-mb-80">
                <main class="postcontent col-lg-8">
                    <div class="row g-4 mb-5">
                        <div class="row g-4 ">
                            <div class="col-md-6 py-0 px-1">
                                <div class="card bg-dark text-white mb-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2K4yolH6XYQ?autoplay=1&loop=1&playlist=2K4yolH6XYQ&mute=1" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 py-0 px-1">
                                <div class="card bg-dark text-white mb-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XiBuCe_4cxg?autoplay=1&loop=1&playlist=XiBuCe_4cxg&mute=1" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 py-0 px-1">
                                <div class="card bg-dark text-white mb-2">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kWiL9TAI41Y?autoplay=1&loop=1&playlist=kWiL9TAI41Y&mute=1" allowfullscreen></iframe>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 py-0 px-1">
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