<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-autoplay="7000" data-speed="650" data-loop="true">
    <div class="slider-inner">

        <div class="swiper swiper-parent">
            <div class="swiper-wrapper">
            <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Global NCD Forum (#NCDAF2025)</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Global NCD Forum (#NCDAF2025) happening in Kigali February 2025</p>
                        </div>
                    </div>
                    <div class="video-wrap no-placeholder">
                        <video id="slide-video" poster="images/videos/forum.jpg" preload="auto" loop autoplay muted playsinline>
                            <source src='images/videos/forum.webm' type='video/webm'>
                            <source src='images/videos/forum.mp4' type='video/mp4'>
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                    </div>
                </div>
                @foreach ($banners as $item)
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">{{ $item->title }}</h2>
                            @if ($item->description)
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">{{ Str::limit($item->description, 60) }}</p>
                            @endif
                            @if ($item->link)
                            <a href="{{ $item->link }}" class="butn-style01 secondary"><span>Learn more</span></a>
                            @endif
                        </div>
                    </div>
                    <div class="swiper-slide-bg" style="background-image: url('{{ asset($item->image_path) }}');"></div>
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                </div>
                @endforeach
                
            </div>
            <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>
            <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>
            <div class="slide-number">
                <div class="slide-number-current"></div><span>/</span>
                <div class="slide-number-total"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section>