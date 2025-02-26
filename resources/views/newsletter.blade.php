@extends('layouts.base')
@section('title','Newsletter')
@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="img/bg/bg-03.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>@yield('title')</h1>
      </div>
      <div class="col-md-12">
        <div class="breadcrumb">
          <span class="left-dot"></span>
          <span class="right-dot"></span>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="#!">@yield('title')</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
</section>

<!-- WHY CHOOSE US
        ================================================== -->
<section class="bg-img cover-background" data-overlay-dark="8" data-background="{{ asset('new/img/bg/bg-01.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-1-9 mb-lg-0">
        <div class="pe-lg-1-6 pe-xl-6">
          <div class="section-heading text-start mb-4 mb-md-5">
            <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">In our newsletter</span>
            <h2 class="text-white mb-0">Members'<span class="fw-bolder">Add, RWANDANCDA </span>newsletter.</h2>
          </div>
          <div class="row mb-1-6 mb-sm-1-9">
            <div class="col-12 mb-1-6 mb-sm-1-9">
              <img src="{{ asset('new/img/content/why-us.jpg')}}" class="rounded" alt="...">
            </div>
          </div>
          <a type="button" class="butn secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Newsletter</a>
        </div>
      </div>
      <div class="col-lg-6">
        <div>
          <div class="accordion" id="accordion">
            <div class="card">
              <h2 class="card-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why filling this form ?</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                <div class="card-body">
                  <p>Rwanda NCD Alliance newsletter is a quarterly output that intends to keep members and stakeholders up to date with our work. <br>

                    This tool was designed to collect inputs from our members and engage them in the content development process.
                    Members submission should include but not limited to: </p>
                  <ul class="list-style6">
                    <li class="text-black">Recent news items or activities such as campaigns, meetings, advocacy successes, event reports, or any other developments your organization has organized; </li>

                    <li class="text-black">Upcoming events that you are planning that are relevant for the NCD community;</li>

                    <li class="text-black">Useful resources on NCDs that you have developed;</li>

                    <li class="text-black">Any other opportunities in your organization that could benefit other members, such as internship, volunteerism, scholarships... </li>
                  </ul>
                  <p>Note: You can submit your content for the next publications at any time.</p>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-none d-xl-block p-3 bg-secondary position-absolute rounded-circle top-20 right-5 ani-top-bottom z-index-3"></div>
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
        <section class="overflow-visible">
  <div class="container">
    <div class="section-heading-02 text-center mb-1-9 mb-md-2-9">
      <div class="sub-title mb-3">
        <span class="text-secondary">Our Newsletter</span>
        <div class="title-img">
          <img src="{{ asset('new/img/icons/habitro-icon.png')}}" alt="...">
        </div>
      </div>
      <h2 class="h1 fw-bolder mb-0">Latest Newsletter</h2>
    </div>
    <div class="row g-xxl-5 mt-n1-9">
      @foreach($newsletters as $newsletters)
      <div class="col-md-6 col-lg-4 mt-1-9">
        <article class="card-style11">
          <div>
            <img src="{{ URL::asset('new/img/bg/newsletter.png') }}" class="border-radius-10" alt="...">
            <span class="date">Jun 25</span>
          </div>
          <div class="card-body">
            <h3 class="text-white h4 mb-3">
              <a href="{{ $newsletters->link }}" target="_blank">{{ $newsletters->title }}</a>
            </h3>
            <div>
              <span class="d-inline-block text-white me-4"><i class="fas fa-comments me-2 text-primary align-middle"></i>10 Comment</span>
              <span class="d-inline-block text-white text-capitalize"><i class="fas fa-user me-2 text-primary"></i><a href="#!">admin</a></span>
            </div>
          </div>
        </article>
      </div>
      @endforeach
    </div>
  </div>
  <img src="{{ asset('new/img/content/animation9.png')}}" class="position-absolute bottom-5 left ani-top-bottom d-none d-md-block" alt="...">
</section>
@endsection