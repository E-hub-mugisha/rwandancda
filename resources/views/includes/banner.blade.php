<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header" data-autoplay="7000" data-speed="650" data-loop="true">
    <div class="slider-inner">

        <div class="swiper swiper-parent">
            <div class="swiper-wrapper">
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
                <div class="swiper-slide dark">
                    <div class="container">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-animate="fadeInUp">Beautifully Flexible</h2>
                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                        </div>
                    </div>
                    <div class="video-wrap no-placeholder">
                        <video id="slide-video" poster="images/videos/deskwork.jpg" preload="auto" loop autoplay muted playsinline>
                            <source src='images/videos/forum.webm' type='video/webm'>
                            <source src='images/videos/forum.mp4' type='video/mp4'>
                        </video>
                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>
                    </div>
                </div>
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