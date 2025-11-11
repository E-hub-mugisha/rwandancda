@extends('layouts.base')
@section('title','Partnerships and Members')
@section('content')


<style>
    body {
        background: #f8f9fa;
    }

    .tab-content img {
        max-width: 100px;
        border-radius: 8px;
        margin-bottom: 10px;
    }

    .member-card,
    .partner-card {
        background: #fff;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        text-align: center;
        margin-bottom: 15px;
    }

    .nav-pills .nav-link.active {
        background-color: #1b3e6b;
    }

    .nav-pills .nav-link {
        color: #1b3e6b;
    }

    .vertical-tabs {
        display: flex;
        gap: 30px;
    }

    .vertical-tabs .nav {
        flex-direction: column;
        min-width: 200px;
    }

    .vertical-tabs .tab-content {
        flex: 1;
    }
</style>


<section class="cs_service_area cs_type_1">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">

        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Get To Know</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Our Member, Project, <br>&amp; Strategic Members</h2>
            </div>
        </div>

        <!-- Members Section -->
        <section id="members" class="mb-5">
            <h2 class="mb-4 text-center">Our Members</h2>

            <!-- Horizontal Tabs -->
            <ul class="nav nav-tabs justify-content-center mb-3" id="membersTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="founding-tab" data-bs-toggle="tab" data-bs-target="#founding" type="button" role="tab">Founding & Adherent Members</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="adherent-tab" data-bs-toggle="tab" data-bs-target="#adherent" type="button" role="tab"> Members</button>
                </li> -->
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="affiliated-tab" data-bs-toggle="tab" data-bs-target="#affiliated" type="button" role="tab">Affiliated Members</button>
                </li>
            </ul>

            <div class="tab-content" id="membersTabContent">
                <!-- Founding Members -->
                <div class="tab-pane fade show active" id="founding" role="tabpanel">
                    <div class="row">
                        @foreach($founders as $founder)
                        <div class="col-md-3 mb-3">
                            <div class="member-card text-center p-3 border rounded">
                                <img src="{{ asset('new/img/'.$founder->logo) }}" alt="{{ $founder->name }}" class="mb-2 img-fluid">
                                <h6><a href="{{ $founder->website }}">{{ $founder->name }}</a></h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Adherent Members -->
                <div class="tab-pane fade" id="adherent" role="tabpanel">
                    <div class="row">
                        @foreach($adherents as $adherent)
                        <div class="col-md-3 mb-3">
                            <div class="member-card text-center p-3 border rounded">
                                <img src="{{ asset('new/img/'.$adherent->logo) }}" alt="{{ $adherent->name }}" class="mb-2 img-fluid">
                                <h6><a href="{{ $adherent->website }}">{{ $adherent->name }}</a></h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Affiliated Members -->
                <div class="tab-pane fade" id="affiliated" role="tabpanel">
                    <div class="row">
                        @foreach($affiliated as $affiliatedMember)
                        <div class="col-md-3 mb-3">
                            <div class="member-card text-center p-3 border rounded">
                                <img src="{{ asset('new/img/'.$affiliatedMember->logo) }}" alt="{{ $affiliatedMember->name }}" class="mb-2 img-fluid">
                                <h6><a href="{{ $affiliatedMember->website }}">{{ $affiliatedMember->name }}</a></h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

    {{-- Custom style to make all logos same size --}}
    <style>
        .partner-logo {
            width: 100%;
            height: 120px;
            object-fit: contain;
            border-radius: 10px;
        }
    </style>


    {{-- Project Partner Section --}}
    <section class="cs_service_area cs_accent_bg">
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="row">
                <div class="cs_section_heading col-md-3 cs_text_center">
                    <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_white_color cs_heading_font">Project Partners</p>
                    <h2 class="cs_section_title cs_fs_48 cs_white_color mb-0">Meet our Project Partner</h2>
                </div>

                <div class="col-md-9">
                    <div class="row cs_row_gap_30 cs_gap_y_30">
                        @foreach($partners->where('type', 1) as $partner)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="cs_card cs_style_1 cs_radius_10 p-3">
                                <a href="#" class="cs_card_thumbnail cs_radius_10">
                                    <img src="{{ asset('new/img/'.$partner->logo) }}" alt="Project Partner Logo" class="partner-logo">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>

    {{-- Strategic Partner Section --}}
    <section class="cs_service_area cs_type_1">
        <div class="cs_height_120 cs_height_lg_80"></div>
        <div class="container">
            <div class="row">
                <div class="cs_section_heading col-md-3 cs_text_center">
                    <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Strategic Partners</p>
                    <h2 class="cs_section_title cs_fs_48 mb-0">Meet our Strategic Partner</h2>
                </div>

                <div class="col-md-9">
                    <div class="row cs_row_gap_30 cs_gap_y_30">
                        @foreach($partners->where('type', '!=', 1) as $partner)
                        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                            <div class="cs_card cs_style_1 cs_radius_10 p-3">
                                <a href="#" class="cs_card_thumbnail cs_radius_10">
                                    <img src="{{ asset('new/img/'.$partner->logo) }}" alt="Strategic Partner Logo" class="partner-logo">
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="cs_height_120 cs_height_lg_80"></div>
    </section>

    @endsection