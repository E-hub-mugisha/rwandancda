@extends('layouts.base')
@section('title','Newsletter')
@section('content')

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

      <div class="row align-items-center">
        <div class="col-md-5">
          <img src="{{ asset('new/img/content/why-us.jpg')}}" class="rounded" alt="...">
        </div>

        <div class="col-md-7 text-center text-md-start">
          <div class="heading-block border-bottom-0">
            <h2>Why filling this form ?</h2>
            <span>Rwanda NCD Alliance newsletter is a quarterly output that intends to keep members and stakeholders up to date with our work.
            </span>
            <p>

              This tool was designed to collect inputs from our members and engage them in the content development process.
              Members submission should include but not limited to: </p>
            <p>Recent news items or activities such as campaigns, meetings, advocacy successes, event reports, or any other developments your organization has organized; </p>

            <p>Upcoming events that you are planning that are relevant for the NCD community;</p>

            <p>Useful resources on NCDs that you have developed;</p>

            <p>Any other opportunities in your organization that could benefit other members, such as internship, volunteerism, scholarships... </p>
            <p>Note: You can submit your content for the next publications at any time.</p>
            <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-outline-secondary">Learn more →</button>
          </div>
        </div>

        <div class="line"></div>

      </div>

    </div>
  </div>
</section>
<!-- static Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Newsletter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
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

          <div class="row">
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
          <div class="text-center mt-4 mb-4">
            <button style="background: #0ed94c; border-color: #0ed94c; color: #fff;" class="btn btn-success">Send</button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<!-- Newsletter
        ================================================== -->
<section id="content" data-onepage-settings="{&quot;offset&quot;:50,&quot;speed&quot;:800,&quot;easing&quot;:false}">
  <div class="content-wrap pb-0">
    <div class="container">
      <div class="row g-xl-5">
        @foreach($newsletters as $newsletters)
        <div class="col-md-6 col-lg-4 mt-1-9">
          <article class="entry event p-3">
            <div class="grid-inner bg-contrast-0 row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">

              <div class="col-12 p-4 pt-0">
                <div class="entry-meta no-separator mb-1 mt-0">
                  <ul>
                    <li><a href="#" target="_blank" class="text-uppercase fw-medium">{{ $newsletters->created_at }}</a></li>
                  </ul>
                </div>

                <div class="entry-title nott">
                  <h3><a href="#" target="_blank">{{
                                                        Str::limit($newsletters->title, 50)}}</a></h3>
                </div>
                <div class="entry-content my-3">
                  <p class="mb-0">{{
                                                        Str::limit($newsletters->title, 50)}}</p>
                </div>

                
              </div>
            </div>
          </article>
        </div>
        @endforeach
      </div>
    </div>

  </div>
</section>
@endsection