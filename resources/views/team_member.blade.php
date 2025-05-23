@extends('layouts.base')
@section('title','Workforce & Team Members')
@section('description','Meet our Board, Workforce, Advisory & Volunteers Team Members. Get to know our dedicated team members who are committed to making a difference in the field of non-communicable diseases.')
@section('content')

<!-- Start Team Section -->
<section>
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Get To Know</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Our board, Workforce, <br>Advisory &amp; volunteers team</h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">Meet our Board, Workforce, Advisory & Volunteers Team Members. Get to know our dedicated team members who are committed to making a difference in the field of non-communicable diseases.</div>
        </div>

        <div class="cs_section_heading cs_style_1 cs_text_center mt-5">
            <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Board’s Team</p>
            <h2 class="cs_section_title cs_fs_48 mb-0">Meet our Board Member</h2>
        </div>
        <div class="cs_height_50 cs_height_lg_40"></div>
        <div class="row cs_row_gap_30 cs_gap_y_30">
            @foreach($workers as $worker)
            @if($worker->department === 'BOARD MEMBERS')
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="cs_team cs_style_1 cs_type_2">
                    <div class="cs_team_thumbnail cs_center">
                        <img src="{{ asset('new/img')}}/{{$worker->photo }}" alt="{{ $worker->name }}">
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
                        <!-- Button to Open Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#workerModal{{ $worker->id }}">
                            More Info
                        </button>
                    </div>

                </div>

            </div>
            @endif
            @endforeach

        </div>
    </div>
</section>
<!-- End Team Section -->


<!-- Start Team Section -->
<section class="cs_service_area cs_type_1">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_text_center">
            <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Board’s Team</p>
            <h2 class="cs_section_title cs_fs_48 mb-0">Meet our Staff Member</h2>
        </div>
        <div class="cs_height_50 cs_height_lg_40"></div>
        <div class="row cs_row_gap_30 cs_gap_y_30 mb-5">
            @foreach($workers as $worker)
            @if($worker->department === 'WORKFORCE')
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="cs_team cs_style_1 cs_type_2">
                    <div class="cs_team_thumbnail cs_center">
                        <img src="{{ asset('new/img')}}/{{$worker->photo }}" alt="{{ $worker->name }}">
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
                        <!-- Button to Open Modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#workerModal{{ $worker->id }}">
                            More Info
                        </button>
                    </div>

                </div>

            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Team Section -->

@foreach($workers as $worker)
<!-- Modal -->
<div class="modal fade" id="workerModal{{ $worker->id }}" tabindex="-1" aria-labelledby="workerModalLabel{{ $worker->id }}" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="workerModalLabel{{ $worker->id }}">{{ $worker->title }} Info</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="cs_team_details cs_heading_font">
                    <div class="row cs_gap_y_40">
                        <div class="col-lg-6">
                            <div class="cs_section_heading cs_style_1">
                                <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">{{ $worker->title }}</p>
                                <h2 class="cs_section_title cs_fs_48 mb-0">{{ $worker->name }}</h2>
                            </div>
                            <div class="cs_height_10 cs_height_lg_10"></div>
                            <p class="cs_team_degree"><b>Degree:</b> {{ $worker->degree ?? 'N/A' }}</p>
                            <p class="cs_team_status"><b>Position:</b> {{ $worker->position ?? 'N/A' }}</p>
                            <ul class="cs_team_contact_list cs_fs_20 cs_heading_color cs_mp0">
                                <li><a href="mailto:{{ $worker->email }}">{{ $worker->email }}</a></li>
                                <li><a href="tel:{{ $worker->phone }}">{{ $worker->phone }}</a></li>
                            </ul>
                            <div class="cs_social_btns cs_style_1 mb-3">
                                <a href="#" class="cs_center cs_radius_50"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#" class="cs_center cs_radius_50"><i class="fa-brands fa-x-twitter"></i></a>
                                <a href="#" class="cs_center cs_radius_50"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#" class="cs_center cs_radius_50"><i class="fa-brands fa-dribbble"></i></a>
                            </div>
                            <p class="cs_team_info cs_fs_18 mb-0">
                                {{ $worker->description ?? 'No additional information provided.' }}
                            </p>
                            <div class="cs_height_60 cs_height_lg_50"></div>
                            <h3 class="cs_contact_heading cs_fs_42 cs_semibold">Contact with me</h3>
                            <form class="cs_reply_form cs_type_1 row cs_gap_y_24 cs_heading_font" id="contact-{{ $worker->id }}">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Your full name" class="cs_form_field">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Enter email address" class="cs_form_field">
                                </div>
                                <div class="col-md-12">
                                    <textarea name="message" rows="4" placeholder="Write your message" class="cs_form_field"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="cs_btn cs_style_1 cs_accent_bg cs_fs_18 cs_semibold cs_radius_100">
                                        <span class="cs_btn_text">Send Message</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6">
                            <div class="cs_team_thumbnail">
                                <img src="{{ asset('new/img') }}/{{ $worker->photo }}" alt="{{ $worker->name }}" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<section class="cs_contact">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInUp;">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Our workforce</p>
                <h2 class="cs_section_title cs_fs_48 mb-0">Our volunteers &amp; <span class="cs_accent_color">Technical worker Group</span></h2>
            </div>
            <div class="cs_section_heading_right mb-0">Adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</div>
        </div>
        <div class="row cs_row_gap_30 cs_gap_y_30 mt-5">
            <div class="col-lg-6 wow fadeInLeft animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInLeft;">
                <div class="cs_card cs_style_3 cs_bg_filed" data-src="assets/img/card_bg_1.png" style="background-image: url(&quot;assets/img/card_bg_1.png&quot;);">
                    <h2 class="cs_card_title cs_fs_36">Our volunteers!</h2>
                    <p class="cs_address_text cs_fs_20 cs_medium cs_heading_font cs_heading_color mb-0">
                        More than 1000 volunteers already affiliated with RNCDA. The volunteers have a health background. They are young and well educated
                        (normally they are recent graduates and university students). They are much eager to serve as well as bringing back what they have
                        acquired from universities to the communities
                    </p>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInRight;">
                <div class="cs_card cs_style_3 cs_bg_filed" data-src="assets/img/card_bg_2.png" style="background-image: url(&quot;assets/img/card_bg_2.png&quot;);">
                    <h2 class="cs_card_title cs_fs_36">Technical Work group</h2>
                    <p class="cs_address_text cs_fs_20 cs_medium cs_heading_font cs_heading_color mb-0">
                        However, few of them have received proper training in NCDs and data collection, and
                        more have to be recruited through the already existing network of RNCDA and its member organizations.
                    </p>
                    <div class="cs_height_40 cs_height_lg_40"></div>
                    <a href="{{ URL::route('message') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
                        <span class="cs_btn_text">Request Appointment</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection