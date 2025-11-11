@extends('layouts.base')
@section('title','Gallery')
@section('content')

{{-- Custom CSS improvements --}}
<style>
    .gallery-img {
        height: 220px;
        object-fit: cover;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .gallery-img:hover {
        transform: scale(1.03);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .sidebar-sticky {
        position: sticky;
        top: 100px;
    }
</style>

<section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        {{-- Header Section --}}
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Events & Conference</p>
                <h2 class="cs_section_title cs_fs_48 mb-0">Take a Look at The Latest <br> Events & Gallery</h2>
            </div>
            <div class="cs_section_heading_right">
                <a href="{{ URL::route('ncd_posts') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg cs_radius_100">
                    <span class="cs_btn_text">See All Events</span>
                </a>
            </div>
        </div>

        <div class="cs_height_50 cs_height_lg_40"></div>

        <div class="row cs_row_gap_30 cs_gap_y_30 cs_gallery_list">
            @if($images->count() > 0)
            
            {{-- Sidebar Filters --}}
            <div class="col-lg-3 mb-5">
                <div class="cs_sidebar cs_style_4 cs_heading_font sidebar-sticky">
                    {{-- Event Type Filter --}}
                    <div class="cs_sidebar_widget cs_type_3 cs_gray_bg cs_radius_15 mb-4">
                        <h3 class="cs_widget_title cs_fs_20 cs_semibold cs_accent_color">Conferences & Events</h3>
                        <hr>
                        <ul class="cs_department_list cs_accent_color cs_mp0">
                            <li><a href="{{ route('gallery') }}">All Events</a></li>
                            @foreach($eventTypes as $eventType)
                            <li><a href="{{ route('gallery', ['event_type' => $eventType]) }}">{{ $eventType }}</a></li>
                            @endforeach
                        </ul>
                    </div>

                    {{-- Year Filter --}}
                    <div class="cs_sidebar_widget cs_type_3 cs_gray_bg cs_radius_15">
                        <h3 class="cs_widget_title cs_fs_20 cs_semibold cs_accent_color">Year</h3>
                        <hr>
                        <ul class="cs_department_list cs_accent_color cs_mp0">
                            <li><a href="{{ route('gallery') }}">All Years</a></li>
                            @foreach($years as $year)
                            <li><a href="{{ route('gallery', ['year' => $year]) }}">{{ $year }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Gallery Grid --}}
            <div class="col-lg-9">
                <div class="row g-4">
                    @foreach($images as $image)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="cs_card cs_style_7">
                            <a href="{{ asset('new/img/galleries/'.$image->image) }}" class="cs_gallery_item">
                                <img src="{{ asset('new/img/galleries/'.$image->image) }}" alt="{{ $image->event }}" class="gallery-img w-100">
                            </a>
                            <div class="cs_card_info mt-2 text-center">
                                <h5 class="cs_fs_20 cs_heading_color mb-1">{{ $image->event }}</h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                {{-- Pagination --}}
                <div class="mt-5 d-flex justify-content-center">
                    {{ $images->links() }}
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

@endsection
