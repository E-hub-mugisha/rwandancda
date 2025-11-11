@extends('layouts.base')
@section('title','Contact Us')
@section('content')

<style>
  .contact_form_wrapper {
    padding: 40px;
    background: #fff;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    border-radius: 15px;
  }

  .cs_form_field {
    height: 55px;
    border: 1px solid #ddd;
    padding: 15px;
    font-size: 16px;
  }

  textarea.cs_form_field {
    height: auto;
  }

  .cs_iconbox_icon {
    font-size: 26px;
  }

  .cs_location_map iframe {
    width: 100%;
    height: 400px;
    border-radius: 15px;
  }
</style>

<section>
  <div class="cs_height_120 cs_height_lg_80"></div>
  <div class="container">

    {{-- Page Title --}}
    <div class="cs_section_heading cs_style_1 cs_type_1 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.25s">
      <div class="cs_section_heading_left">
        <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">Let's Talk</p>
        <h2 class="cs_section_title cs_fs_48 mb-0">Contact With Us</h2>
      </div>
      <div class="cs_section_heading_right">
        <a href="#contact" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg cs_radius_100">
          <span class="cs_btn_text">Let's Connect</span>
        </a>
      </div>
    </div>

    <div class="cs_height_50 cs_height_lg_40"></div>

    {{-- Contact Form & Info --}}
    <div class="row cs_gap_y_40">
      {{-- Contact Form --}}
      <div class="col-lg-6">
        <div class="contact_form_wrapper cs_heading_font" id="contact">
          <div class="cs_section_heading cs_style_1">
            <h2 class="cs_section_title cs_fs_40 mb-0">Get in Touch</h2>
            <div class="cs_height_20"></div>
            <p>Send us a message and we’ll respond as soon as possible.</p>
          </div>

          <div class="cs_height_40"></div>

          <form method="POST" action="{{ route('contact.send') }}" class="row cs_row_gap_30">
            @csrf
            <div class="col-sm-6 mb-3">
              <input type="text" name="fname" class="cs_form_field" placeholder="First Name*">
            </div>
            <div class="col-sm-6 mb-3">
              <input type="text" name="lname" class="cs_form_field" placeholder="Last Name*">
            </div>
            <div class="col-sm-6 mb-3">
              <input type="email" name="email" class="cs_form_field" placeholder="Email Address*">
            </div>
            <div class="col-sm-6 mb-3">
              <input type="text" name="phone" class="cs_form_field" placeholder="Phone Number*">
            </div>
            <div class="col-12 mb-3">
              <input type="text" name="subject" class="cs_form_field" placeholder="Subject*">
            </div>
            <div class="col-12 mb-3">
              <textarea name="message" rows="5" class="cs_form_field" placeholder="Your Message here"></textarea>
            </div>
            <div class="col-12 mb-3">
              <button type="submit" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg cs_radius_5 w-100">
                <span class="cs_btn_text">Send Message</span>
                <span class="cs_btn_text"><i class="fa-solid fa-arrow-right"></i></span>
              </button>
            </div>
          </form>
        </div>
      </div>

      {{-- Contact Info --}}
      <div class="col-lg-6">
        <div class="row cs_gap_y_30">
          <div class="col-lg-12">
            <div class="contact_form_wrapper cs_heading_font position-relative">
              <div class="cs_section_heading cs_style_1">
                <h2 class="cs_section_title cs_fs_40 mb-0">Need Assistance?</h2>
                <div class="cs_height_20"></div>
                <p>Call or message us. We’ll respond as soon as possible.</p>
              </div>

              <div class="cs_height_40"></div>

              <div class="row text-center">
                <div class="col-md-4 mb-3">
                  <div class="cs_iconbox cs_style_11">
                    <div class="cs_iconbox_icon cs_center cs_radius_50 cs_accent_bg cs_white_color">
                      <i class="fa-solid fa-phone"></i>
                    </div>
                    <a href="tel:+250791232176" class="cs_iconbox_text">+250 791 232 176</a>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="cs_iconbox cs_style_11">
                    <div class="cs_iconbox_icon cs_center cs_radius_50 cs_accent_bg cs_white_color">
                      <i class="fa-regular fa-envelope"></i>
                    </div>
                    <a href="mailto:info@rwandancda.org" class="cs_iconbox_text">info@rwandancda.org</a>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="cs_iconbox cs_style_11">
                    <div class="cs_iconbox_icon cs_center cs_radius_50 cs_accent_bg cs_white_color">
                      <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <p class="cs_iconbox_text mb-0">Kicukiro, Kigali</p>
                  </div>
                </div>
              </div>

            </div>
          </div>

          {{-- Google Map --}}
          <div class="col-lg-12">
            <div class="cs_location_map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.4433005239213!2d30.061906759161673!3d-1.933649833897745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca5034ddd8ca5%3A0x6b1e1a735c808995!2sRwanda%20NCD%20Alliance!5e0!3m2!1sen!2sbd!4v1747979635394!5m2!1sen!2sbd"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
              </iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="cs_height_120 cs_height_lg_80"></div>

  </div>
</section>

@endsection