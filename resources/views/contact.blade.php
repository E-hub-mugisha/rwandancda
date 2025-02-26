@extends('layouts.base')
@section('content')
@section('title','Contact us')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="img/bg/bg-03.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Contact Us</h1>
      </div>
      <div class="col-md-12">
        <div class="breadcrumb">
          <span class="left-dot"></span>
          <span class="right-dot"></span>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="#!">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
</section>

<!-- CONTACT FORM
        ================================================== -->
<section>
  <div class="container">
    <div class="row g-0">
      <div class="col-lg-7">
        <div class="p-2-2 p-lg-2-9 box-shadow-style1 h-100">
          <h2 class="mb-4">Get In Touch</h2>
          <form class="contact quform" action="#" method="post" enctype="multipart/form-data">
            @csrf
            <div class="quform-elements">
              <div class="row">

                <div class="col-md-6">
                  <div class="quform-element form-group">
                    <label for="name">Your Name <span class="quform-required">*</span></label>
                    <div class="quform-input">
                      <input class="form-control" id="name" type="text" name="name" placeholder="Your name here" />
                      @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="quform-element form-group">
                    <label for="email">Your Email <span class="quform-required">*</span></label>
                    <div class="quform-input">
                      <input class="form-control" id="email" type="email" name="email" placeholder="Your email here" />
                      @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="quform-element form-group">
                    <label for="subject">Your Subject <span class="quform-required">*</span></label>
                    <div class="quform-input">
                      <input class="form-control" id="subject" type="text" name="subject" placeholder="Your subject here" />
                      @if ($errors->has('subject'))
                      <span class="text-danger">{{ $errors->first('subject') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="quform-element form-group">
                    <label for="message">Message <span class="quform-required">*</span></label>
                    <div class="quform-input">
                      <textarea class="form-control" id="message" name="message" rows="3" placeholder="Tell us a few words"></textarea>
                      @if ($errors->has('message'))
                      <span class="text-danger">{{ $errors->first('message') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="quform-submit-inner">
                    <button class="butn border-0" type="submit">Send Message</button>
                  </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-5 bg-img cover-background theme-overlay" data-overlay-dark="9" data-background="img/content/contact-image.jpg">
        <div class="p-1-9 p-lg-2-9 position-relative z-index-1 h-100">
          <h2 class="mb-3 text-white">Our Contact Detail</h2>
          <p class="mb-2-2 text-white display-sm-28">Need any consultations contact with us</p>
          <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white">
            <div class="flex-shrink-0 mt-2">
              <i class="fas fa-phone-alt text-secondary fs-2"></i>
            </div>
            <div class="flex-grow-1 ms-4">
              <h3 class="h5 text-white">Phone Number</h3>
              <span class="text-white d-block mb-1">+250 791 232 176</span>
              <!-- <span class="text-white">+250 791 232 176</span> -->
            </div>
          </div>
          <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white">
            <div class="flex-shrink-0 mt-2">
              <i class="far fa-envelope-open text-secondary fs-2"></i>
            </div>
            <div class="flex-grow-1 ms-4">
              <h3 class="h5 text-white">Email Address</h3>
              <span class="text-white d-block mb-1">info@rwandancda.org</span>
              <!-- <span class="text-white">info@rwandancda.org</span> -->
            </div>
          </div>
          <div class="d-flex mb-4 pb-3 border-bottom border-color-light-white">
            <div class="flex-shrink-0 mt-2">
              <i class="fas fa-map-marker-alt text-secondary fs-2"></i>
            </div>
            <div class="flex-grow-1 ms-4">
              <h3 class="h5 text-white">Location</h3>
              <address class="text-white d-block mb-0 w-md-80 w-xl-70">Kigali - Kinamba, KN8 Av27</address>
            </div>
          </div>
          <ul class="contact-social-icons">
            <li>
              <a href="#!"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-youtube"></i></a>
            </li>
            <li>
              <a href="#!"><i class="fab fa-linkedin-in"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MAP
        ================================================== -->
<div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.546240411269!2d30.059368073212216!3d-1.933719536672797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca5034ddd8ca5%3A0x6b1e1a735c808995!2sRwanda%20NCD%20Alliance!5e0!3m2!1sen!2srw!4v1720425068706!5m2!1sen!2srw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


@endsection