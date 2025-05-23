@extends('layouts.base')
@section('title','Mission, Vision &amp; Objectives')
@section('content')

<!-- Start Service Section -->
<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Get To Know</p>
                <h2 class="cs_section_title cs_accent_color mb-0">Our Mission, Vision &amp; <br> Objectives</h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">Working together as an alliance provides a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward</div>
        </div>
        <div class="cs_height_100 cs_height_lg_40"></div>
        <div class="cs_service_grid float-center cs_style_2">
            <div class="cs_iconbox cs_style_8 cs_white_bg">
                <div class="cs_iconbox_icon cs_center cs_radius_50">
                    <img src="assets/img/icons/service_icon_4.svg" alt="Icon">
                </div>
                <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="#">Rwanda NCDA vision</a></h3>
                <p class="cs_iconbox_subtitle">
                    A healthy people in a nation free from preventable suffering,
                    disability, and deaths caused by Non
                    Communicable Diseases.
                </p>
                <a href="#" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
                    <span>Learn more</span>
                    <div class="cs_text_btn_icon cs_center">
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </a>
            </div>
            <div class="cs_iconbox cs_style_8 cs_white_bg">
                <div class="cs_iconbox_icon cs_center cs_radius_50">
                    <img src="assets/img/icons/service_icon_5.svg" alt="Icon">
                </div>
                <h3 class="cs_iconbox_title cs_fs_32 cs_semibold"><a href="#">Rwanda NCDA Mission</a></h3>
                <p class="cs_iconbox_subtitle">
                    To unite the efforts and create a powerful voice for the NCDs awareness rising, advocate for the
                    prevention and control of NCDs and their risk factors in Rwanda, by promoting multisectoral
                    partnerships, healthy living style education, early detection and responding to NCDs challenges
                    to
                    improve health and well-being.
                </p>
                <a href="#" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
                    <span>More Info</span>
                    <div class="cs_text_btn_icon cs_center">
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="cs_height_0 cs_height_lg_40"></div>
        <div class="cs_center mt-5">
            <a href="{{ URL::route('about_us') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg ">
                <span class="cs_btn_text">More Info</span>
            </a>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Service Section -->

<!-- Start Pricing Section -->
<section class="cs_pricing_section cs_accent_bg cs_hide_before_after">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_text_center wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
            <div class="cs_section_heading_right cs_white_color text-end">Working together as an alliance provides a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward</div>
        </div>
        <div class="cs_height_32 cs_height_lg_30"></div>
        <div class="cs_tabs cs_style_1 ">
            <div class="cs_height_32 cs_height_lg_30"></div>
            <div class="cs_tab_body">
                <div class="cs_tab active" id="cs_monthly">
                    <div class="row justify-content-center cs_row_gap_30 cs_gap_y_30">
                        <div class="col-lg-10">
                            <div class="cs_pricing_table cs_style_1 cs_type_2">
                                <div class="cs_pricing_headedr">
                                    <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Get to know</h3>
                                    <a href="{{ URL::route('message') }}" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
                                        <span><i class="fa-solid fa-arrow-right"></i></span>
                                        <span><i class="fa-solid fa-arrow-right"></i></span>
                                    </a>
                                </div>
                                <div class="cs_pricing_feature">
                                    <h3 class="cs_pricing_feature_title cs_fs_32">Our Objectives</h3>
                                    <div class="row">
                                        <ul class="cs_pricing_feature_list cs_mp0 col-md-6">
                                            <li><i class="fa-solid fa-check"></i>Building capacity and providing technical support to the members</li>
                                            <li><i class="fa-solid fa-check"></i>Leading awareness and healthy life education for NCDs Prevention</li>
                                            <li><i class="fa-solid fa-check"></i>Empower people living with NCDs and Advocate for them on access to quality care</li>
                                        </ul>
                                        <ul class="cs_pricing_feature_list cs_mp0 col-md-6">
                                            <li><i class="fa-solid fa-check"></i>Empower people living with NCDs and Advocate for them on access to quality care</li>
                                            <li><i class="fa-solid fa-check"></i> Advocate for the community concerning the prevention and control of NCDs</li>
                                            <li><i class="fa-solid fa-check"></i>Contribute to evidence based NCD policies and practices.</li>
                                        </ul>
                                    </div>
                                    <a href="{{ URL::route('message') }}" class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up">Let's collaborate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>

<section class="cs_cta cs_style_1 mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="cs_cta_in">
                    <div class="cs_cta_info">
                        <h2 class="cs_cta_title">Meet the expert support workforce</h2>
                        <p class="cs_cta_subtitle mb-0">Get to know our dedicated team members who are committed to making a difference in the field of non-communicable diseases</p>
                    </div>
                    <a href="{{ URL::route('team')}}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
                        <span class="cs_btn_text">Workforce</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection