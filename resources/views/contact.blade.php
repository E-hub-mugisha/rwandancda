@extends('layouts.base')
@section('content')
@section('title','Contact us')


<!-- Page Sub Menu
		============================================= -->
<div id="page-menu" style="--cnvs-page-submenu-sticky-offset: 60px;" class="">
  <div id="page-menu-wrap">
    <div class="container">
      <div class="page-menu-row">

        <div class="page-menu-title">Get in Touch  <span>with Us</span></div>

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

<!-- Content
		============================================= -->
<section id="content">
  <div class="content-wrap">
    <div class="container">

      <div class="row align-items-stretch col-mb-50">
        <!-- Google Map
						============================================= -->
        <div class="col-lg-6">
          <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.546240411269!2d30.059368073212216!3d-1.933719536672797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca5034ddd8ca5%3A0x6b1e1a735c808995!2sRwanda%20NCD%20Alliance!5e0!3m2!1sen!2srw!4v1720425068706!5m2!1sen!2srw" width="100%" height="50" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div><!-- Google Map End -->

        <div class="col-lg-6">

          <div class="row col-mb-50 mb-0">
            <!-- Contact Info
								============================================= -->
            <div class="col-md-5">

              <address>
                <strong>Headquarters:</strong><br>
                Kigali - Kinamba, KN8 Av27<br>
              </address>
              <abbr title="Phone Number"><strong>Phone:</strong></abbr> +250 791 232 176<br>
              <abbr title="Email Address"><strong>Email:</strong></abbr> info@rwandancda.org

            </div><!-- Contact Info End -->

            <!-- Testimonials
								============================================= -->
            <div class="col-md-7">

              <div class="widget pt-0 border-0">
                <div class="fslider customjs testimonial twitter-scroll twitter-feed" data-username="envato" data-count="3" data-animation="slide" data-arrows="false">
                  <div class="alert twitter-widget-alert text-center alert-danger">Could not fetch Tweets from Twitter API. Please try again later.</div>
                  <div class="row gx-2">
                    <div class="col-auto">
                      <i class="i-plain i-large color fa-brands fa-twitter mb-0"></i>
                    </div>
                    <div class="col">
                      <div class="flexslider">
                        <div class="slider-wrap"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div><!-- Testimonial End -->
          </div>

          <!-- Modal Contact Form
							============================================= -->
          <a href="#" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="button button-3d m-0 w-100 button-xlarge d-none d-md-block text-center">Click here to Send an Email</a>
          <a href="#" data-bs-toggle="modal" data-bs-target="#contactFormModal" class="button button-3d m-0 w-100 d-block d-md-none text-center">Send an Email</a>

          <div class="modal fade" id="contactFormModal" tabindex="-1" role="dialog" aria-labelledby="contactFormModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="contactFormModalLabel">Send Us an Email</h4>
                  <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">

                  <div class="form-widget">
                    <div class="form-result"></div>
                    <form class="mb-0" id="template-contactform" name="template-contactform" action="#" method="post" novalidate="novalidate">

                      <div class="form-process">
                        <div class="css3-spinner">
                          <div class="css3-spinner-scaler"></div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-6 form-group">
                          <label for="template-contactform-name">Name <small>*</small></label>
                          <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="form-control required">
                        </div>

                        <div class="col-sm-6 form-group">
                          <label for="template-contactform-email">Email <small>*</small></label>
                          <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email form-control">
                        </div>

                        <div class="w-100"></div>

                        <div class="col-12 form-group">
                          <label for="template-contactform-phone">Phone</label>
                          <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="form-control">
                        </div>


                        <div class="w-100"></div>

                        <div class="col-12 form-group">
                          <label for="template-contactform-subject">Subject <small>*</small></label>
                          <input type="text" id="template-contactform-subject" name="subject" value="" class="required form-control">
                        </div>

                        <div class="col-12 form-group">
                          <label for="template-contactform-message">Message <small>*</small></label>
                          <textarea class="required form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                        </div>

                        <div class="col-12 form-group d-none">
                          <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control">
                        </div>

                        <div class="col-12 form-group">
                          <button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                        </div>
                      </div>

                      <input type="hidden" name="prefix" value="template-contactform-">

                    </form>

                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
          </div><!-- /.modal -->
          <!-- Modal Contact Form End -->

        </div>
      </div>

    </div>
  </div>
</section><!-- #content end -->


@endsection