@extends('layouts.base')
@section('title','Home')
@section('content')

<!-- BANNER
        ================================================== -->
@include('includes.banner')


<!-- ABOUTUS
        ================================================== -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row align-items-xl-center" data-aos="zoom-in">
                <div class="col-lg-5 mb-2-5 mb-lg-0">
                    <div class="position-relative">
                        <div class="row">
                            <div class="col-6">
                                <img class="mb-4 border-radius-10" src="{{ asset('new/img/content/about-02.jpg')}}"
                                    alt="...">
                                <img src="{{ asset('new/img/content/about-03.jpg')}}" class="border-radius-10" alt="...">
                            </div>
                            <div class="col-6 mt-4 mt-lg-6">
                                <img src="{{ asset('new/img/content/about-05.jpg')}}" class="border-radius-10" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ps-lg-2-2 ps-xl-6">
                        <h2 class="h1 mb-1-6 font-weight-400"><span class="fw-bolder">Rwanda Non-Communicable Disease
                                Alliance</span></h2>
                        <p class="w-90 display-sm-28 mb-1-9">
                            Rwanda Non-Communicable Diseases Alliance is a unique civil society network, <a
                                href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance"
                                target="_blank">founded in 2016</a> and uniting 25 organizations
                            ( NCDs Patients, health care professionals and youth-led organizations and private institutions)
                            working on NCDs in Rwanda.
                        </p>

                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1 ms-3">
                                <a href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance"
                                    target="_blank" class="button button-border button-rounded button-large ms-0 mt-4">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- OUR STRENGTH
        ================================================== -->

<section id="content">
    <div class="content-wrap">
        <div class="section parallax mb-0 border-0 dark" style="height: 450px; padding: 120px 0;" data-bs-theme="dark">

            <div class="vertical-middle text-center" style="z-index: 2;">
                <div class="container fadeInUp animated" data-animate="fadeInUp">
                    <div class="heading-block border-bottom-0 mb-0">
                        <h2 style="font-size: 42px;">Beautiful HTML5 Videos</h2>
                        <span class="d-none d-lg-block">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</span>
                    </div>
                    <a href="#" class="button button-border button-rounded button-white button-light button-large ms-0 mb-0" style="margin-top: 40px;">Show More</a>
                </div>
            </div>

            <div class="video-wrap no-placeholder" style="z-index: 1;">
                <video poster="images/videos/messiermarathon.jpg" preload="none" loop="" autoplay="" muted="" playsinline="" style="width: 800px; height: 450px; left: -69.5px;">
                    <source src="images/videos/forum.mp4" type="video/mp4">
                    <source src="images/videos/forum.webm" type="video/webm">
                </video>
                <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
            </div>

        </div>

        <div class="row mb-6 align-items-stretch">

            <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: var(--cnvs-themecolor);" data-bs-theme="dark">
                <div>
                    <h3 class="text-uppercase" style="font-weight: 600;">Our vision</h3>
                    <p style="line-height: 1.8;">A healthy people in a nation free from preventable suffering, disability, and deaths caused by Non
                        Communicable Diseases.</p>
                    <a href="#" class="button button-border button-light button-rounded button-reveal text-end text-uppercase m-0"><i class="uil uil-angle-right-b"></i><span>Read More</span></a>
                    <i class="bi-lightbulb bg-icon"></i>
                </div>
            </div>

            <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;" data-bs-theme="dark">
                <div>
                    <h3 class="text-uppercase" style="font-weight: 600;">Our Mission</h3>
                    <p style="line-height: 1.8;">To unite the efforts and create a powerful voice for the NCDs awareness rising, advocate for the
                        prevention and control of NCDs and their risk factors in Rwanda, by promoting multisectoral
                        partnerships, healthy living style education, early detection and responding to NCDs challenges
                        to
                        improve health and well-being.</p>
                    <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                    <i class="bi-gear-fill bg-icon"></i>
                </div>
            </div>

            <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;" data-bs-theme="dark">
                <div>
                    <h3 class="text-uppercase" style="font-weight: 600;">Our Objectives</h3>
                    <p style="line-height: 1.8;">
                        <li data-aos="fade-up" data-aos-delay="100">Building capacity and providing technical support to
                            the
                            members</li>
                        <li data-aos="fade-up" data-aos-delay="100">Leading awareness and healthy life education for
                            NCDs
                            Prevention</li>
                        <li data-aos="fade-up" data-aos-delay="100">Empower people living with NCDs and Advocate for
                            them on access
                            to quality care</li>
                        <li data-aos="fade-up" data-aos-delay="100">Advocate for the community concerning the prevention
                            and
                            control of NCDs</li>
                        <li data-aos="fade-up" data-aos-delay="100">Contribute to evidence based NCD policies and
                            practices.
                    </p>
                    </li>
                    </p>
                    <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                    <i class="bi-hand-thumbs-up bg-icon"></i>
                </div>
            </div>

        </div>

    </div>
</section>


<div class="section my-0">
    <div class="container">

        <div class="row align-items-center col-mb-30 mt-0 mt-lg-5">
            <div class="col-md-6">
                <img src="{{ asset('new/img/content/about-01.jpg')}}" alt="Image">
            </div>

            <div class="col-md-6 text-center text-md-start">
                <div class="heading-block border-bottom-0">
                    <h2><span class="fw-bolder text-style">NCD STORIES </span></h2>
                </div>

                <p>Most people nowadays face a lot of challenges because of the COVID-19
                    pandemic either changing their lifestyles,
                    economy, and health, particularly people living with non-communicable diseases (PLWNCDs) who are
                    more at
                    risk for severe complications of COVID-19 and death when they are contracted.</p>

                <a href="#testimonials" class="button button-border button-rounded button-large button-dark ms-0">Our Stories</a>
            </div>
        </div>

    </div>
</div>

@include('includes.event-posts')

<!-- SERVICE
        ================================================== -->
<section id="content" data-onepage-settings="{&quot;offset&quot;:60,&quot;speed&quot;:1250,&quot;easing&quot;:false}">
    <div class="content-wrap">
        <div class="container">

            <div class="row justify-content-between align-items-center">
                <div class="col-md-4">
                    <h3 class="h3 font-secondary fw-bold mb-4">Here our Stories</h3>
                    <p class="lead mb-0">This is a compiled 15 testimonies collected through Our Views Our Voices
                        Project funded by NCD Alliance to support the involvement of PLWNCDs in “NCD Story Sharing".</p>
                </div>

                <div class="col-md-7">
                    <div class="owl-carousel carousel-widget owl-loaded owl-drag with-carousel-dots" data-items="2" data-autoplay="5000">





                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="transform: translate3d(-268px, 0px, 0px); transition: all; width: 804px;">
                                @foreach( $stories as $story)
                                <div class="owl-item" style="width: 248px; margin-right: 20px;">
                                    <div class="p-2">
                                        <div class="card text-center rounded-6 shadow-sm overflow-hidden">
                                            <div class="card-body p-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <img class="rounded-circle mx-auto w-auto mb-4" src="{{ asset('new/img')}}/{{$story->photo }}" width="64" height="64" alt="Customer Testimonails">
                                                        <p class="mb-4 font-secondary" style="font-size: 1.125rem; line-height: 1.65;">{{ Str::limit($story->headline, 100) }}</p>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <div>
                                                            <h4 class="h6 mb-0 fw-medium">{{ $story->name }}</h4>
                                                            <small class="text-muted">{{ $story->disease }}</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-icon bi-star-fill op-02"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="uil uil-angle-left-b"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="uil uil-angle-right-b"></i></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="content" data-onepage-settings="{&quot;offset&quot;:50,&quot;speed&quot;:800,&quot;easing&quot;:false}">
    <div class="content-wrap pb-0">

        <div class="section pb-0">
            <div class="container">
                <div class="fancy-title title-center title-border">
                    <h3>Recent Resources</h3>
                </div>

                <div id="oc-events" class="owl-carousel events-carousel carousel-widget owl-loaded owl-drag" data-margin="0" data-pagi="false" data-items="1" data-items-lg="2" data-items-xl="2">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-516px, 0px, 0px); transition: all; width: 2064px;">
                            @foreach($resources_data as $resource)
                            @if( empty( (json_decode($resource->file))[0]->download_link ) )
                            @continue
                            @else
                            <div class="owl-item" style="width: 516px;">
                                <div class="oc-item">
                                    <article class="entry event p-3">
                                        <div class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                            <div class="col-12 mb-md-0">
                                                <?php $file = (json_decode($resource->file))[0]->download_link; ?>
                                                <a href="{{ URL::asset( $file ) }}" target="_blank" class="entry-image">
                                                    <img src="https://source.unsplash.com/fIHozNWfcvs/800x450" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2">
                                                    <div class="bg-overlay">
                                                        <div class="bg-overlay-content justify-content-start align-items-start">
                                                            <div class="badge bg-light text-dark rounded-pill">Resources</div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-12 p-4 pt-0">
                                                <div class="entry-meta no-separator mb-1 mt-0">
                                                    <ul>
                                                        <li><a href="{{ URL::asset( $file ) }}" target="_blank" class="text-uppercase fw-medium">{{ $resource->created_at }}</a></li>
                                                    </ul>
                                                </div>

                                                <div class="entry-title nott">
                                                    <h3><a href="{{ URL::asset( $file ) }}" target="_blank">{{
                                                        Str::limit($resource->title, 50)}}</a></h3>
                                                </div>
                                                <div class="entry-content my-3">
                                                    <p class="mb-0">{{
                                                        Str::limit($resource->title, 50)}}</p>
                                                </div>

                                                <div class="entry-meta no-separator">
                                                    <ul>
                                                        <li><a href="{{ URL::asset( $file ) }}" target="_blank" class="fw-normal"><i class="uil uil-map-marker"></i> New York, USA</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="uil uil-angle-left-b"></i></button><button type="button" role="presentation" class="owl-next"><i class="uil uil-angle-right-b"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>

    </div>
</section>

@include('includes.cta')


<!-- Newsletter
        ================================================== -->
<section id="content" class="overflow-visible" style="background-color: cadetblue;">
    <div class="content-wrap">
        <div class="container">
            <div class="section-heading-02 text-center mb-1-9 mb-md-2-9">
                <h2 class="h1 text-white fw-bolder mb-0">Latest Newsletter</h2>
            </div>
            <div class="row g-xxl-5 mt-n1-9">
                @foreach($newsletters as $newsletters)
                <div class="col-md-6 col-lg-4 mt-1-9">
                    <article class="entry event p-3">
                        <div class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">

                            <div class="col-12 p-4 pt-0">

                                <div class="entry-title nott">
                                    <h3><a href="#" target="_blank">{{
                                                        Str::limit($newsletters->title, 30)}}</a></h3>
                                </div>

                                <div class="entry-meta no-separator">
                                    <ul>
                                        <li><a href="#" target="_blank" class="fw-normal"><i class="uil uil-calendar"></i> {{ $newsletters->created_at }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


@include('includes.clients')

<section id="content">
    <div class="content-wrap">
        <a href="{{ URL::route('message') }}" class="button button-full text-center footer-stick">
            <div class="container">
                Need more with Rwanda NDCA? <strong>Start here</strong> <i class="fa-solid fa-caret-right" style="top:4px;"></i>
            </div>
        </a>

    </div>
</section>
@endsection