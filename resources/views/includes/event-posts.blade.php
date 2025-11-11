<style>
/* Smooth slide-up animation on load */
.slide-up {
    animation: slideUp 0.6s ease-out;
}

@keyframes slideUp {
    from {
        transform: translateY(20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

/* Flex row for equal height columns */
.row-equal {
    display: flex;
    flex-wrap: wrap;
    /* gap: 30px; optional spacing between columns */
}

/* Make columns equal height */
.row-equal > [class*='col-'] {
    display: flex;
    flex-direction: column;
}

/* Recent posts scrollable card */
.scrollable-card {
    flex: 1; /* fill the available height */
    max-height: none; /* height is controlled by parent */
    overflow-y: auto;
    padding-right: 10px;
}

/* Optional scrollbar styling */
.scrollable-card::-webkit-scrollbar {
    width: 6px;
}

.scrollable-card::-webkit-scrollbar-thumb {
    background-color: #aaa;
    border-radius: 10px;
}

.scrollable-card::-webkit-scrollbar-track {
    background-color: #f1f1f1;
}

/* Entry styles */
.entry {
    padding: 12px 0;
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
    margin: 0;
}

.entry-meta {
    font-size: 13px;
    color: #777;
}

/* Feature article card */
.entry-featured {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.06);
    display: flex;
    flex-direction: column;
}

.entry-featured img {
    width: 100%;
    border-radius: 10px;
}

.entry-featured .cs_post_info {
    padding: 20px;
    flex: 1; /* allow info to grow if needed */
}
</style>

<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">

        <!-- Section Heading -->
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">
                    Rwanda NCD Alliance
                </p>
                <h2 class="cs_section_title cs_accent_color mb-0">
                    Latest News & Updates
                </h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">
                Empowering communities, sharing knowledge, and advancing the fight against non-communicable diseases through strategic partnerships and advocacy.
            </div>
        </div>

        <div class="cs_height_100 cs_height_lg_40"></div>

        <div class="row  row-equal col-mb-80">
            <!-- Featured Article -->
            <div class="col-lg-6">
                @if($featured)
                <article class="entry-featured wow fadeInLeft animated" data-wow-duration="0.9s" data-wow-delay="0.25s">
                    <a href="{{ url('ncd_news', $featured->slug) }}">
                        <img src="{{ asset('new/img/'.$featured->image) }}" alt="{{ Str::limit($featured->title, 50) }}">
                    </a>
                    <div class="cs_post_info">
                        <div class="cs_post_meta">
                            Published on {{ $featured->created_at->format('F d, Y') }}
                        </div>
                        <h3 class="cs_post_title cs_fs_32">
                            <a href="{{ url('ncd_news', $featured->slug) }}">
                                {{ Str::limit($featured->title, 50) }}
                            </a>
                        </h3>
                        <a href="{{ url('ncd_news', $featured->slug) }}" class="cs_text_btn cs_type_1 cs_fs_18 cs_heading_color">
                            <span>Read Full Story</span>
                            <div class="cs_text_btn_icon cs_heading_bg cs_white_color cs_radius_50 cs_center">
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </div>
                        </a>
                    </div>
                </article>
                @endif
            </div>

            <!-- Recent Posts (Scrollable Card) -->
            <aside class="sidebar col-lg-6 order-lg-last">
                <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm scrollable-card">
                    <div class="widget">
                        <h4><span class="fw-bolder">More Recent Updates</span></h4>
                        <div class="carousel-vertical">
                            @foreach($posts as $post)
                            <div class="entry slide-up">
                                <div class="grid-inner row g-0 align-items-center">
                                    <div class="col-auto">
                                        <div class="entry-image">
                                            <a href="{{ url('ncd_news', $post->slug) }}">
                                                <img src="{{ asset('new/img/' . ($post->image ?: 'placeholder.png')) }}" alt="{{ Str::limit($post->title, 50) }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col ps-3">
                                        <h4 class="fs-6 mb-1">
                                            <a href="{{ url('ncd_news', $post->slug) }}">
                                                {{ Str::limit($post->title, 50) }}
                                            </a>
                                        </h4>
                                        <div class="entry-meta">
                                            <small>Published {{ $post->created_at->format('F d, Y') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<script>
    // Initialize vertical carousel (if using a carousel library)
    document.addEventListener('DOMContentLoaded', function() {
        // Example initialization code for a vertical carousel
        // Replace with actual library initialization if needed
        const carousel = document.querySelector('.carousel-vertical');
        // Initialize your carousel library here
        new Carousel(carousel, {
            direction: 'vertical',
            autoplay: true,
            loop: true,
            interval: 3000,
        });
    });
</script>