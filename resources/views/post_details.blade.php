@extends('layouts.base')
@section('title', $data->title)
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
  <div class="content-wrap">
    <div class="container">

      <div class="row gx-5 col-mb-80">
        <!-- Post Content
						============================================= -->
        <main class="postcontent col-lg-9">

          <div class="single-post mb-0">

            <!-- Single Post
								============================================= -->
            <div class="entry">

              <!-- Entry Title
									============================================= -->
              <div class="entry-title">
                <h2>{!! $data->title !!}</h2>
              </div><!-- .entry-title end -->

              <!-- Entry Meta
									============================================= -->
              <div class="entry-meta">
                <ul>
                  <li><i class="uil uil-schedule"></i> {{ $data->created_at }}</li>
                  <li><a href="#"><i class="uil uil-user"></i> admin</a></li>
                  <li><i class="uil uil-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                  <li><a href="#"><i class="uil uil-comments-alt"></i> 43 Comments</a></li>
                  <li><a href="#"><i class="uil uil-camera"></i></a></li>
                </ul>
              </div><!-- .entry-meta end -->

              <!-- Entry Image
									============================================= -->
              <div class="entry-image">
                <a href="#"><img src="{{ asset('new/img')}}/{{ $data->image }}" alt="{!! $data->title !!}"></a>
              </div><!-- .entry-image end -->

              <!-- Entry Content
									============================================= -->
              <div class="entry-content mt-0">

                <div class="card border-default mb-4">
                  <div class="card-body py-2">
                    <div class="row align-items-center justify-content-between fs-6">
                      <div class="col-md-auto fst-italic text-muted">5 min read</div>

                      <div class="col-md-auto">
                        <div class="d-flex">
                          <div class="font-sizer" data-step="20" data-target=".entry-content">
                            <button type="button" class="font-size-minus btn btn-outline-secondary border-contrast-200 h-bg-contrast-200 h-text-contrast-900 border-0 ms-1"><i class="bi-type" style="font-size: 12px;"></i></button>
                            <button type="button" class="font-size-plus btn btn-outline-secondary border-contrast-200 h-bg-contrast-200 h-text-contrast-900 border-0 ms-1"><i class="bi-type" style="font-size: 20px;"></i></button>
                          </div>

                          <button type="button" class="font-size-plus btn btn-outline-secondary border-contrast-200 h-bg-contrast-200 h-text-contrast-900 border-0 ms-1" onclick="window.print();"><i class="bi-printer"></i></button>

                          <button type="button" class="font-size-plus btn btn-outline-secondary border-contrast-200 h-bg-contrast-200 h-text-contrast-900 border-0 ms-1" data-scrollto="#cnvs-article-share"><i class="bi-share"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <p>{!! $data->body !!}</p>
                <!-- Post Single - Content End -->

                <!-- Tag Cloud
										============================================= -->
                <div class="tagcloud mb-5">
                  <a href="#">general</a>
                </div><!-- .tagcloud end -->

                <div class="tags flex-grow-1 mb-4 mb-md-0 pe-md-3 wow fadeIn" data-wow-delay="200ms">
                  <div id="copy" class="d-none">
                    {{ URL::current() }}
                  </div>
                  <a type="button" class="copyButton btn btn-success" id="copyButtonId" data-id="{{ URL::current() }}" data-clipboard-action="copy" data-clipboard-target="div#copy" onclick="toastr.success('Ready! Link Copied to Clipboard!');">Copy to share Link !</a>
                </div>

                <!-- Post Single - Share
										============================================= -->
                <div id="cnvs-article-share" class="card border-default my-4" data-onepage-settings="{&quot;offset&quot;:60,&quot;speed&quot;:1250,&quot;easing&quot;:false}">
                  <div class="card-body p-3">
                    <div class="d-flex align-items-center justify-content-between">
                      <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                      <div class="d-flex">
                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                          <i class="fa-brands fa-facebook-f"></i>
                          <i class="fa-brands fa-facebook-f"></i>
                        </a>

                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-x-twitter" title="Twitter">
                          <i class="fa-brands fa-x-twitter"></i>
                          <i class="fa-brands fa-x-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                          <i class="fa-brands fa-pinterest-p"></i>
                          <i class="fa-brands fa-pinterest-p"></i>
                        </a>

                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
                          <i class="fa-brands fa-whatsapp"></i>
                          <i class="fa-brands fa-whatsapp"></i>
                        </a>

                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
                          <i class="fa-solid fa-rss"></i>
                          <i class="fa-solid fa-rss"></i>
                        </a>

                        <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
                          <i class="fa-solid fa-envelope"></i>
                          <i class="fa-solid fa-envelope"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div><!-- Post Single - Share End -->

              </div>
            </div><!-- .entry end -->

          </div>

        </main><!-- .postcontent end -->

        <!-- Sidebar
						============================================= -->
        <aside class="sidebar col-lg-3">
          <div class="sidebar-widgets-wrap">

            <div class="widget">

              <ul class="nav canvas-tabs tabs nav-tabs size-sm mb-3" id="canvas-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="canvas-tab-1" data-bs-toggle="pill" data-bs-target="#tab-1" type="button" role="tab" aria-controls="canvas-tab-1" aria-selected="true">Popular</button>
                </li>
              </ul>

              <div id="canvas-TabContent" class="tab-content">

                <div class="tab-pane show active" id="tab-1" role="tabpanel" aria-labelledby="canvas-tab-1" tabindex="0">
                  <div class="posts-sm row col-mb-30" id="popular-post-list-sidebar">
                    @foreach($related_data as $post)
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

            </div>

          </div>
        </aside><!-- .sidebar end -->
      </div>

    </div>
  </div>
</section>

<script>
  $(function() {
    var clipboard = new Clipboard('.copyButton');
    clipboard.on('success', function(e) {
      console.log(e);
    });
    clipboard.on('error', function(e) {
      console.log(e);
    });
  });
</script>
@endsection