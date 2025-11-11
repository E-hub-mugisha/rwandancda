@extends('layouts.base')
@section('title','Newsletter')
@section('content')


<section class="cs_video_section cs_style_1 cs_accent_bg position-relative">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_vider_wrapper cs_style_1">
      <a href="#" class="cs_player_btn cs_style_2 cs_center cs_video_open wow zoomIn animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: zoomIn;">
        <span></span>
      </a>
      <h2 class="cs_video_title">Rwanda NCD Alliance &nbsp;<span class="cs_accent_color">Quarterly newsletter</span></h2>
      <p class="cs_video_subtitle">Stay informed with our latest updates, campaigns, advocacy milestones, and member contributions in the fight against NCDs.</p>
      
      <div class="cs_video_shape_3">
        <img src="{{ asset('assets/img/heartbeat.svg') }}" alt="Icon">
      </div>
      <div class="cs_video_shape_4">
        <img src="{{ asset('assets/img/stethoscope.svg') }}" alt="Icon">
      </div>
    </div>
    <div class="cs_video_shape_1">
      <img src="{{ asset('assets/img/icons/coronavirus.svg') }}" alt="Icon">
    </div>
    <div class="cs_video_shape_2">
      <img src="{{ asset('assets/img/icons/health-insurance.svg') }}" alt="Icon" class="cs_spinner_img">
    </div>
  </div>
</section>

<section class="cs_service_area cs_accent_bg position-relative">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_white_color">Newsletter</p>
        <h2 class="cs_section_title cs_white_color">Contribute to the Quarterly Newsletter</h2>
      </div>
    </div>
    <div class="cs_height_50 cs_height_lg_40"></div>
    <div class="row cs_gap_y_40 justify-content-center">
      <div class="col-lg-6">
        <div class="cs_pricing_table cs_style_1 cs_type_2">
          <div class="cs_pricing_headedr">
            <h3 class="cs_pricing_head_title cs_fs_24 mb-0">Our Newsletter</h3>
            <a href="{{ URL::route('message') }}" class="cs_pricing_icon cs_center cs_white_bg cs_radius_50">
              <span><i class="fa-solid fa-arrow-right"></i></span>
              <span><i class="fa-solid fa-arrow-right"></i></span>
            </a>
          </div>
          <div class="cs_pricing_feature">
            <h3 class="cs_pricing_feature_title cs_fs_32">Newsletter Objectives</h3>
            <ul class="cs_pricing_feature_list cs_mp0">
              <li><i class="fa-solid fa-check"></i>Recent news items or activities such as campaigns, meetings, advocacy successes, event reports, or any other developments your organization has organized;</li>
              <li><i class="fa-solid fa-check"></i>Upcoming events that you are planning that are relevant for the NCD community;</li>
              <li><i class="fa-solid fa-check"></i>Useful resources on NCDs that you have developed;</li>
              <li><i class="fa-solid fa-check"></i>Any other opportunities in your organization that could benefit other members, such as internship, volunteerism, scholarships... </li>
              <li><i class="fa-solid fa-question"></i>Note: You can submit your content for the next publications at any time.</li>
            </ul>
            <button class="cs_pricing_btn cs_fs_18 cs_semibold cs_accent_color cs_white_bg cs_hover_up" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Submit Your Article</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="cs_service_shape_1 position-absolute">
    <img src="{{ asset('assets/img/heartbeat_2.svg') }}" alt="Shape">
  </div>
  <div class="cs_service_shape_2 position-absolute">
    <img src="{{ asset('assets/img/stethoscope_2.svg') }}" alt="Shape" class="cs_spinner_img">
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>

<section class="cs_service_area cs_type_3">
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">
    <div class="cs_section_heading cs_style_1 cs_type_1">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Recent Editions</p>
        <h2 class="cs_section_title cs_accent_color mb-0">Latest Newsletter Publications</h2>
      </div>
    </div>
    <div class="cs_height_100 cs_height_lg_40"></div>
    <div class="row cs_gap_y_30">
      @foreach($newsletters as $newsletters)
      <div class="col-lg-4">
        <div class="cs_iconbox cs_style_8 cs_white_bg">
          <h3 class="cs_iconbox_title cs_fs_32 cs_semibold">
            <a href="#" target="_blank">{{ Str::limit($newsletters->title, 50)}}</a>
          </h3>
          <a href="#" target="_blank" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
            <span>Read More</span>
            <div class="cs_text_btn_icon cs_center">
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
              <span><i class="fa-solid fa-arrow-right-long"></i></span>
            </div>
          </a>
        </div>
      </div>
      @endforeach

    </div>
  </div>
  <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- static Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form action="{{ URL::route('send_newsletter') }}" method="post" role="form" enctype="multipart/form-data">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
        @endif
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Newsletter</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-4 mt-2">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your full name(s)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-4 mt-2">
              <input type="email" class="form-control" name="email" id="email" placeholder="Contact email address" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-4 mt-2">
              <input type="text" class="form-control" name="phone" id="email" placeholder="Telephone number" data-rule="minlen:7" data-msg="Please enter a valid phone number" />
              <div class="validate"></div>
            </div>
            <div class="form-group mt-2">
              <textarea class="form-control" name="description" rows="5" data-msg=" Content Description  ( Optional ) " placeholder=" Content Description  ( Optional ) "></textarea>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-2">
              <input type="text" name="organization" class="form-control" id="name" placeholder="Member organisation name (e.g: Rwanda Diabetes Association (RDA)" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group mt-2">
              <input type="text" class="form-control" name="title" id="title" placeholder=" Title of your input " data-rule="minlen:4" data-msg="Please enter a title for your content" />
              <div class="validate"></div>
            </div>
            <div class="form-group mt-2">
              <textarea class="form-control" name="content" rows="5" id="subject" placeholder=" The main text of your input " data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"></textarea>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-2">
              <textarea class="form-control" name="resources" rows="5" id="subject" placeholder="Related links and resources to your input" data-rule="minlen:10" data-msg="Please enter at least one resource"></textarea>
              <div class="validate"></div>
            </div>
            <div class="form-group mt-2">
              <label for="CoverImage" style="color: #000;">Choose a High Resolution Cover Photo</label>
              <input type="file" class="form-control" name="image" data-rule="required" data-msg="Please attach a high-resolution image you would like to have on the top of your input in the newsletter.">
              <div class="validate"></div>
            </div>

            <div class="form-group mt-2">
              <textarea class="form-control" name="comments" rows="5" id="subject" placeholder="Any other comments? " data-rule="minlen:10" data-msg="Please provide some comments"></textarea>
              <div class="validate"></div>
            </div>
            <div class="form-check mt-2">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <span class="mr-1" style="text-align: justify;"> I provide consent to the Rwanda NCD Alliance to collect, store and publish personal data from this form.
                The information will be used only for the purpose(s) for which you have submitted this form.
                You can change your mind at any time by sending an email to info@rwandancda.org. </span>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit Newsletter</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection