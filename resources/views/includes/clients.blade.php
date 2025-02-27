<section id="content" data-onepage-settings="{&quot;offset&quot;:60,&quot;speed&quot;:1250,&quot;easing&quot;:false}">
    <div class="content-wrap">
        <div class="container">

            <h3>Our Project</h3>

            <ul class="clients-grid row row-cols-2 row-cols-sm-3 row-cols-md-6">
                @foreach($partners as $partner)
                @if($partner->type == 1)
                <li class="col"><a href="#"><img src="{{ asset('new/img')}}/{{$partner->logo }}" alt="Clients" height="80" width="100"></a></li>
                @endif
                @endforeach
            </ul>

            <div class="divider"><i class="bi-circle-fill"></i></div>
        </div>

        <div class="section">

            <h3 class="text-center">Our Strategic</h3>

            <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget owl-loaded owl-drag" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xs="3" data-items-sm="3" data-items-md="5" data-items-lg="6" data-items-xl="7">

                <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-1842px, 0px, 0px); transition: 0.25s; width: 2764px;">
                        @foreach($partners as $partner)
                        @if($partner->type != 1)
                        <div class="owl-item" style="width: 200.333px; margin-right: 30px;">
                            <div class="oc-item"><a href="#"><img src="{{ asset('new/img')}}/{{$partner->logo }}" alt="Brands"></a></div>
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
</section>