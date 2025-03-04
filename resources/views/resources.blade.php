@extends('layouts.base')
@section('content')
@section('title','Resources')

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

<section id="content" data-onepage-settings="{&quot;offset&quot;:50,&quot;speed&quot;:800,&quot;easing&quot;:false}">
  <div class="content-wrap pb-0">
      <div class="container">
        <div class="row g-xl-5 ">
          @foreach($resources_data as $resource)
          @if( empty( (json_decode($resource->file))[0]->download_link ) )
          @continue
          @else
          <div class="col-md-6 col-lg-6 mt-2-9">
            <article class="entry event p-3">
              <div class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                <?php $file = (json_decode($resource->file))[0]->download_link; ?>
                  
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

                </div>
              </div>
            </article>
          </div>
          @endif
          @endforeach
        </div>
        {{ $resources_data->links('vendor.pagination.custom-pagination') }}
      </div>
    </div>
</section>

@endsection