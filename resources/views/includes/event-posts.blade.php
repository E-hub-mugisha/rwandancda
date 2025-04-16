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

    .portfolio-image img {
        width: 100%;
        /* Make the image take the full width of its container */
        height: 300px;
        /* Set a fixed height */
        object-fit: cover;
        /* Ensures the image covers the set dimensions without distortion */
    }
</style>

<section id="content">
    <div class="content-wrap bg-light">
        <div class="container">
            <div class="section-heading">
                <h2>{!! $header ?? 'Recent<span class="fw-bolder"> News & Events</span>' !!}</h2>
                <!-- <p class="mb-0 w-md-80 w-lg-70 w-xl-50 mx-auto">We connect buyers and sellers of natural, organic, environmentally sound products. We find the best suppliers and makers of natural and organic products.</p> -->
            </div>
            <div class="row col-mb-80">
                <main class="postcontent col-lg-8">

                    <div class="row g-4 mb-5">
                        @if($featured)
                        <article class="entry featured event col-12 mb-0">
                            <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                                <div class="col-12 mb-md-0">
                                    <a href="{{ url('ncd_news', $featured->slug) }}" class="entry-image">
                                        <img src="{{ asset('new/img')}}/{{$featured->image }}" alt="{{ Str::limit($featured->title, 50) }}" class="rounded-2">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content justify-content-start align-items-start">
                                                <div class="badge bg-light text-dark rounded-pill">Online Event</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-12 p-4 pt-0">
                                    <div class="entry-meta no-separator mb-1 mt-0">
                                        <ul>
                                            <li><a href="{{ url('ncd_news', $featured->slug) }}" class="text-uppercase fw-medium">{{ $featured->created_at }}</a></li>
                                        </ul>
                                    </div>

                                    <div class="entry-title nott">
                                        <h3><a href="{{ url('ncd_news', $featured->slug) }}">{{ Str::limit($featured->title, 50) }}</a></h3>
                                    </div>
                                    <div class="entry-content my-3">
                                        <p class="mb-0">{{ Str::limit($featured->title, 50) }}</p>
                                    </div>
                                    <a href="{{ url('ncd_news', $featured->slug) }}" class="more-link">Read More</a>
                                </div>
                            </div>
                        </article>
                        @endif
                    </div>
                </main>

                <aside class="sidebar col-lg-4 order-lg-last">
                    <div class="sidebar-widgets-wrap bg-white rounded-5 p-4 shadow-sm">

                        <div class="widget">

                            <h4><span class="fw-bolder">Recent Posts</span></h4>
                            <div class="posts-sm row col-mb-30 scrollable-div" id="post-list-sidebar">
                                @foreach($posts as $post)
                                <div class="entry col-12 slide-up">
                                    <div class="grid-inner row g-0">
                                        <div class="col-auto">
                                            <div class="entry-image">
                                                <a href="{{ url('ncd_news', $post->slug) }}"><img src="{{ asset('new/img')}}/{{$post->image }}" alt="{{ Str::limit($post->title, 50) }}"></a>
                                            </div>
                                        </div>
                                        <div class="col ps-3">
                                            <div class="entry-title">
                                                <h4><a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a></h4>
                                            </div>
                                            <div class="entry-meta">
                                                <ul>
                                                    <li>{{ $post->created_at }}</li>
                                                </ul>
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
    </div>
</section>