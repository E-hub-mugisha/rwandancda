<style>
    /* Slide-up animation */
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

    /* Scrollable container for posts */
    .scrollable-div {
        /* max-height: 450px; */
        overflow: hidden;
        position: relative;
        padding-right: 10px;
    }

    /* Scrollbar styling (optional) */
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

    /* Vertical auto scroll effect */
    .carousel-vertical {
        display: flex;
        flex-direction: column;
        animation: scrollVertical 12s linear infinite;
    }

    /* Pause on hover */
    .scrollable-div:hover .carousel-vertical {
        animation-play-state: paused;
    }

    /* Scrolling keyframes */
    @keyframes scrollVertical {
        0% {
            transform: translateY(0);
        }

        100% {
            transform: translateY(-100%);
        }
    }

    /* Post entry styles */
    .entry {
        padding-bottom: 20px;
        border-bottom: 1px solid #eee;
    }

    .entry:last-child {
        border-bottom: none;
    }

    .entry-image img {
        width: 60px;
        height: 60px;
        object-fit: cover;
        border-radius: 8px;
    }

    .entry-title h4 {
        font-size: 15px;
        line-height: 1.4;
    }

    .entry-meta {
        font-size: 13px;
        color: #777;
    }

    .entry-featured {
        display: flex;
        flex-direction: column;
        background-color: #f1f1f1;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .entry-featured img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 10px;
    }
    .entry-featured .cs_post_info {
        padding: 20px;
    }
    .entry-featured .cs_post_info .cs_post_meta {
        font-size: 14px;
        color: #999;
        margin-bottom: 10px;
    }
</style>


<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Rwanda NCD Alliance</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Recent News &amp; Events.</h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">Working together as an alliance provides a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward</div>
        </div>
        <div class="cs_height_100 cs_height_lg_40"></div>
        <div class="row col-mb-80">
            <div class="col-lg-7">
                @if($featured)
                <article class="entry-featured rounded-5 bg-white" data-wow-duration="0.9s" data-wow-delay="0.25s" style="background-color: #f1f1f1; visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInLeft;">
                    <a href="{{ url('ncd_news', $featured->slug) }}" class="{{ Str::limit($featured->title, 50) }}">
                        <img src="{{ asset('new/img')}}/{{$featured->image }}" alt="{{ Str::limit($featured->title, 50) }}">
                    </a>
                    <div class="cs_post_info">
                        <div class="cs_post_meta">{{ $featured->created_at->format('M d, Y') }}</div>
                        <h3 class="cs_post_title cs_fs_32"><a href="{{ url('ncd_news', $featured->slug) }}">{{ Str::limit($featured->title, 50) }}</a></h3>
                        <a href="{{ url('ncd_news', $featured->slug) }}" class="cs_text_btn cs_type_1 cs_fs_18 cs_heading_color">
                            <span>Learn More</span>
                            <div class="cs_text_btn_icon cs_heading_bg cs_white_color cs_radius_50 cs_center">
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                        </a>
                    </div>
                </article>
                @endif
            </div>

            <aside class="sidebar col-lg-5 order-lg-last">
                <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">
                    <div class="widget">
                        <h4><span class="fw-bolder">Recent Posts</span></h4>
                        <div class="scrollable-div" id="post-list-sidebar">
                            <div class="carousel-vertical">
                                @foreach($posts->all() as $post)
                                <div class="entry col-12 slide-up">
                                    <div class="grid-inner row g-0 align-items-center">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="{{ url('ncd_news', $post->slug) }}">
                                                    <img src="{{ asset('new/img') }}/{{ $post->image }}" alt="{{ Str::limit($post->title, 50) }}">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4 class="fs-6 mb-1">
                                                    <a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a>
                                                </h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul class="list-unstyled small">
                                                    <li>{{ $post->created_at->format('M d, Y') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>