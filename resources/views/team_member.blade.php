@extends('layouts.base')
@section('title','Workforce & Team Members')
@section('description','Meet our Board, Workforce, Advisory & Volunteers Team Members. Get to know our dedicated team members who are committed to making a difference in the field of non-communicable diseases.')

@section('content')

<!-- Custom Style for Image Consistency -->
<style>
    .team-photo {
        width: 100%;
        height: 500px;
        object-fit: cover;
        border-radius: 10px;
    }
</style>

<!-- Start Team Section -->
<section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">

        <!-- Section Header -->
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Get To Know</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Our board, Staff &amp; Management team</h2>
            </div>
            
        </div>

        {{-- Board Members --}}
        <div class="cs_section_heading cs_style_1 cs_text_center mt-5">
            <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Board’s Team</p>
            <h2 class="cs_section_title cs_fs_48 mb-0">Meet our Board Member</h2>
        </div>
        <div class="cs_height_50 cs_height_lg_40"></div>

        <div class="row cs_row_gap_30 cs_gap_y_30">
            @foreach($workers->where('department', 'BOARD MEMBERS') as $worker)
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="cs_team cs_style_1 cs_type_2">
                        <div class="cs_team_thumbnail cs_center">
                            <img src="{{ asset('new/img')}}/{{$worker->photo }}" alt="{{ $worker->name }}" class="team-photo">
                            <div class="cs_social_btns cs_style_2 position-absolute">
                                <a href="#" class="cs_center cs_share"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="cs_center"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="cs_team_bio">
                            <h3 class="cs_team_title cs_fs_20 cs_medium cs_heading_color">
                                <a href="#">{{ $worker->name }}</a>
                            </h3>
                            <p class="cs_team_subtitle cs_heading_color mb-0">{{ $worker->title }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#workerModal{{ $worker->id }}">
                                More Info
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
<!-- End Board Section -->

<!-- Start Staff Section -->
<section class="cs_service_area cs_type_1">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">

        <div class="cs_section_heading cs_style_1 cs_text_center">
            <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Staff Team</p>
            <h2 class="cs_section_title cs_fs_48 mb-0">Meet our Staff Members</h2>
        </div>

        <div class="cs_height_50 cs_height_lg_40"></div>

        <div class="row cs_row_gap_30 cs_gap_y_30 mb-5">
            @foreach($workers->where('department', 'WORKFORCE') as $worker)
                <div class="col-xl-4 col-lg-4 col-sm-6">
                    <div class="cs_team cs_style_1 cs_type_2">
                        <div class="cs_team_thumbnail cs_center">
                            <img src="{{ asset('new/img')}}/{{$worker->photo }}" alt="{{ $worker->name }}" class="team-photo">
                            <div class="cs_social_btns cs_style_2 position-absolute">
                                <a href="#" class="cs_center cs_share"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="cs_center"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="cs_center"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#" class="cs_center"><i class="fa-brands fa-pinterest-p"></i></a>
                            </div>
                        </div>
                        <div class="cs_team_bio">
                            <h3 class="cs_team_title cs_fs_20 cs_medium cs_heading_color">
                                <a href="#">{{ $worker->name }}</a>
                            </h3>
                            <p class="cs_team_subtitle cs_heading_color mb-0">{{ $worker->title }}</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#workerModal{{ $worker->id }}">
                                More Info
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Staff Section -->

<!-- Start Volunteers & Technical Workgroup Section -->
<section class="cs_contact">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Our workforce</p>
                <h2 class="cs_section_title cs_fs_48 mb-0">Our volunteers &amp; <span class="cs_accent_color">Technical worker Group</span></h2>
            </div>
            
        </div>

        <div class="row cs_row_gap_30 cs_gap_y_30 mt-5">
            <div class="col-lg-6 wow fadeInLeft animated" data-wow-duration="0.9s" data-wow-delay="0.25s">
                <div class="cs_card cs_style_3 cs_bg_filed" style="background-image: url('assets/img/card_bg_1.png');">
                    <h2 class="cs_card_title cs_fs_36">Our volunteers!</h2>
                    <p class="cs_address_text cs_fs_20 cs_medium cs_heading_font cs_heading_color mb-0">
                        More than 50 volunteers already affiliated with RNCDA. The volunteers have a health background. They are young and well educated (normally they are recent graduates and university students). They are much eager to serve as well as bringing back what they have acquired from universities to the communities.
                    </p>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInRight animated" data-wow-duration="0.9s" data-wow-delay="0.25s">
                <div class="cs_card cs_style_3 cs_bg_filed" style="background-image: url('assets/img/card_bg_2.png');">
                    <h2 class="cs_card_title cs_fs_36">Technical Work group</h2>
                    <p class="cs_address_text cs_fs_20 cs_medium cs_heading_font cs_heading_color mb-0">
                        The National Non-Communicable Diseases (NCD) Technical Working Group (TWG) is a multi-sectoral platform established by Rwanda’s Ministry of Health to coordinate and strengthen the national response to NCDs. Chaired by the Rwanda Biomedical Centre (RBC), with WHO and CHAI as co-chairs, the TWG brings together stakeholders from government, civil society, academia, and development partners. The Rwanda NCD Alliance, serving as the current secretary, plays a key role in coordination. The TWG focuses on strategic planning, policy alignment, and joint implementation of NCD prevention and control efforts.
                    </p>
                    <div class="cs_height_40 cs_height_lg_40"></div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Volunteers Section -->

<!-- Modals Section -->
@foreach($workers as $worker)
<div class="modal fade" id="workerModal{{ $worker->id }}" tabindex="-1" aria-labelledby="workerModalLabel{{ $worker->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $worker->title }} Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="cs_team_details cs_heading_font">
                    <div class="row cs_gap_y_40">
                        <div class="col-lg-6">
                            <div class="cs_section_heading cs_style_1">
                                <h2 class="cs_section_title cs_fs_48 mb-0">{{ $worker->name }}</h2>
                                <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">{{ $worker->title }}</p>
                            </div>
                            <ul class="cs_team_contact_list cs_fs_20 cs_heading_color cs_mp0">
                                <li><a href="mailto:{{ $worker->email }}">{{ $worker->email }}</a></li>
                                <li><a href="tel:{{ $worker->phone }}">{{ $worker->phone }}</a></li>
                            </ul>
                            <p class="cs_team_info cs_fs_18 mb-0">{{ $worker->description ?? 'No additional information provided.' }}</p>
                        </div>
                        <div class="col-lg-6">
                            <div class="cs_team_thumbnail">
                                <img src="{{ asset('new/img') }}/{{ $worker->photo }}" alt="{{ $worker->name }}" class="team-photo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
