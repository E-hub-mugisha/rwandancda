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
                    <source src="images/videos/messiermarathon.mp4" type="video/mp4">
                    <source src="images/videos/messiermarathon.webm" type="video/webm">
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

        <a href="#" class="button button-full text-center mt-5 footer-stick">
            <div class="container">
                Need help with your Account? <strong>Start here</strong> <i class="fa-solid fa-caret-right" style="top:4px;"></i>
            </div>
        </a>

    </div>
</section>


<!-- SERVICE
        ================================================== -->
<section>
    <div class="bg-light section-bg"></div>
    <div class="container position-relative z-index-9">
        <div class="section-heading-02 text-center mb-1-9 mb-md-2-9">
            <div class="sub-title mb-3">
                <span class="text-secondary">Our Engagements</span>
                <div class="title-img">
                    <img src="{{ asset('new/img/icons/habitro-icon.png')}}" alt="...">
                </div>
            </div>
            <h2 class="h1 fw-bolder mb-0">RWANDANCDA ENGAGEMENTS</h2>
        </div>
        <div class="row mt-n1-9">
            @foreach( $groupFocus as $groupFocus)
            <div class="col-md-6 col-xl-4 mt-1-9">
                <div class="service-style01">
                    <img src="{{ asset('new/img/content/service-01.jpg')}}" class="border-radius-10" alt="...">
                    <div class="services-content">
                        <div class="d-flex align-items-center service-text">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('new/img/icons/icon-34.png')}}" alt="...">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="h5 mb-0"><a href="{{ url('ncd_engagements', $groupFocus->title) }}">{{
                                        $groupFocus->title}}</a></h5>
                            </div>
                        </div>
                        <p class="mb-0">Our nutrition team love the benefits of exercise and healthy food.</p>
                        <a class="service-btn text-center" href="{{ url('ncd_engagements', $groupFocus->title) }}">More
                            Details <i class="fas fa-arrow-right align-middle ms-2"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


<!-- SERVICE
        ================================================== -->
<section class="bg-light pt-21 pt-xl-24">
    <div class="container">
        <div class="section-heading">
            <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Updates</span>
            <h2>{!! $header ?? 'Recent<span class="fw-bolder"> News & Events</span>' !!}</h2>
            <!-- <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p> -->
        </div>
        <div class="service-carousel owl-carousel owl-theme">
            @foreach($posts as $post)
            <div class="card card-style1 border-0 border-radius-10 mx-2 mx-sm-4 my-4">
                <img class="border-top-radius-10" src="{{ asset('new/img')}}/{{$post->image }}"
                    alt="{{ Str::limit($post->title, 60) }}">
                <div class="card-body border-bottom-radius-10">
                    <!-- <div class="icon-box">
                                <img src="{{ asset('new/img')}}/{{$post->image }}" alt="...">
                            </div> -->
                    <h3 class="h4 mb-3"><a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50)
                            }}</a></h3>
                    <p>Our nutrition team love the benefits of exercise and healthy food.</p>
                    <a href="{{ url('ncd_news', $post->slug) }}" class="link-btn">Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="bg-secondary p-2-2 rounded-circle position-absolute bottom-10 left-5 d-none d-lg-block"></div>
    <div class="bg-primary p-3 rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none d-lg-block">
    </div>
</section>

<!-- ABOUTUS
        ================================================== -->
<section class="pt-0 pb-lg-21 pb-xl-24 section-with-bg">
    <div class="container">
        <div class="row align-items-xl-center border-top pt-6 pt-sm-8 pt-lg-10 pt-xl-15 border-color-extra-light-gray">
            <div class="col-lg-6 mb-1-9 mb-lg-0">
                <div class="position-relative text-end">
                    <div class="about-block d-inline-block ps-1-9 ps-sm-2-9">
                        <img src="{{ asset('new/img/content/about-01.jpg')}}"
                            class="border-radius-10 z-index-1 position-relative" alt="...">
                    </div>
                    <div class="bg-primary p-6 border-radius-10 position-absolute bottom-10 right-5 ani-top-bottom">
                    </div>
                    <!-- <img src="{{ asset('new/img/content/balance-body-mind-01.jpg')}}" class="position-absolute top-10 left-n5 left-lg-n10 rounded-circle z-index-2 d-none d-sm-block" alt="..." height="300" width="300"> -->
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ps-xxl-2-3">
                    <h2 class="display-20 display-sm-15 display-xl-9 font-weight-400 mb-3"><span
                            class="fw-bolder text-style">NCD STORIES</span></h2>
                    <p>Most people nowadays face a lot of challenges because of the COVID-19
                        pandemic either changing their lifestyles,
                        economy, and health, particularly people living with non-communicable diseases (PLWNCDs) who are
                        more at
                        risk for severe complications of COVID-19 and death when they are contracted.</p>
                    <p>This is a compiled 15 testimonies collected through Our Views Our Voices
                        Project funded by NCD Alliance to support the involvement of PLWNCDs in “NCD Story Sharing".</p>

                    <a href="#testimonials" class="butn secondary">Read Stories</a>
                </div>
            </div>
        </div>
    </div>
    <div class="d-inline-block p-3 bg-secondary position-absolute rounded-circle top-20 right-5 ani-left-right"></div>
</section>

<style>
    /* Sliding animation */
    .slide-up {
        animation: slideUp 0.8s ease-in-out;
    }

    @keyframes slideUp {
        from {
            transform: translateY(50px);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    /* Scrollable Sidebar */
    .scrollable-div {
        max-height: 450px;
        /* Set the height you want */
        overflow-y: auto;
        padding-right: 10px;
        /* Prevent scrollbar from overlapping content */
    }

    /* Scrollbar Styling (Optional) */
    .scrollable-div::-webkit-scrollbar {
        width: 6px;
    }

    .scrollable-div::-webkit-scrollbar-thumb {
        background-color: #aaa;
        border-radius: 10px;
    }

    .scrollable-div::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }

    .featured {
        /*max-height: 450px;*/
    }
</style>

<div class="container my-5">
    <div class="section-heading">
        <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Updates</span>
        <h2>{!! $header ?? 'Recent<span class="fw-bolder"> News & Events</span>' !!}</h2>
        <!-- <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p> -->
    </div>
    <div class="row">
        <!-- Left Column - Main Feature Post -->
        <div class="col-md-8">
            @if($featured)
            <div class="card featured shadow-lg border-0">
                <img src="{{ asset('new/img')}}/{{$featured->image }}" class="card-img-top"
                    alt="{{ Str::limit($featured->title, 50) }}">
                <div class="card-body">
                    <h2 class="card-title">{{ Str::limit($featured->title, 50) }}</h2>
                    <p class="card-text">This is a detailed description of the featured post. It highlights key
                        information, insights, or main content.</p>
                    <a href="{{ url('ncd_news', $featured->slug) }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
            @endif
        </div>

        <!-- Right Column - Other Posts (Suggested Videos Style) -->
        <div class="col-md-4">
            <h5 class="mb-3">More Posts</h5>
            <div class="scrollable-div">
                @foreach($posts as $post)
                <div class="card mb-3 shadow-sm border-0 slide-up">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="{{ asset('new/img')}}/{{$post->image }}" class="img-fluid rounded-start"
                                alt="{{ Str::limit($post->title, 50) }}">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h6 class="card-title">{{ Str::limit($post->title, 50) }}</h6>
                                <p class="card-text text-muted small">Short description of the post.</p>
                                <a href="{{ url('ncd_news', $post->slug) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>


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


@include('includes.highlights')

<!-- Newsletter
        ================================================== -->
<section class="overflow-visible" style="background-color: cadetblue;">
    <div class="container">
        <div class="section-heading-02 text-center mb-1-9 mb-md-2-9">
            <div class="sub-title mb-3">
                <span class="text-secondary">Our Newsletter</span>
                <div class="title-img">
                    <img src="{{ asset('new/img/icons/habitro-icon.png')}}" alt="...">
                </div>
            </div>
            <h2 class="h1 fw-bolder mb-0">Latest Newsletter</h2>
        </div>
        <div class="row g-xxl-5 mt-n1-9">
            @foreach($newsletters as $newsletters)
            <div class="col-md-6 col-lg-4 mt-1-9">
                <article class="card-style11">
                    <div>
                        <img src="{{ URL::asset('new/img/bg/newsletter.png') }}" class="border-radius-10" alt="...">
                    </div>
                    <div class="card-body">
                        <h3 class="text-white h4 mb-3">
                            <a href="{{ $newsletters->link }}" target="_blank">{{ $newsletters->title }}</a>
                        </h3>
                        <div>
                            <span class="d-inline-block text-white me-4"><i
                                    class="fas fa-comments me-2 text-primary align-middle"></i>10 Comment</span>
                            <span class="d-inline-block text-white text-capitalize"><i
                                    class="fas fa-user me-2 text-primary"></i><a href="#!">admin</a></span>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach
        </div>
    </div>
    <img src="{{ asset('new/img/content/animation9.png')}}"
        class="position-absolute bottom-5 left ani-top-bottom d-none d-md-block" alt="...">
</section>


@include('includes.clients')
@include('includes.bmi')
@endsection