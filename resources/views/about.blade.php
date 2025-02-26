@extends('layouts.base')
@section('title','about us')
@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="{{ asset('new/img/bg/bg-03.jpg')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>About Us</h1>
      </div>
      <div class="col-md-12">
        <div class="breadcrumb">
          <span class="left-dot"></span>
          <span class="right-dot"></span>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="#!">About Us</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
</section>

<!-- ABOUTUS
        ================================================== -->
<section>
  <div class="container">
    <div class="row align-items-xl-center">
      <div class="col-lg-5 mb-2-5 mb-lg-0">
        <div class="position-relative">
          <div class="row">
            <div class="col-6">
              <img class="mb-4 border-radius-10" src="{{ asset('new/img/content/about-02.jpg')}}" alt="...">
              <img src="{{ asset('new/img/content/about-03.jpg')}}" class="border-radius-10" alt="...">
            </div>
            <div class="col-6 mt-4 mt-lg-6">
              <img class="mb-4 border-radius-10" src="{{ asset('new/img/content/about-04.PNG')}}" alt="...">
              <img src="{{ asset('new/img/content/about-05.jpg')}}" class="border-radius-10" alt="...">
            </div>
          </div>
          <div class="about-exp-box border-radius-10">
            <div class="about-exp-content">
              <h2 class="countup">
                <?php
                // Set the starting year
                $startYear = 2016;

                // Get the current year
                $currentYear = date("Y");

                // Calculate the number of years of experience
                $yearsOfExperience = $currentYear - $startYear;

                // Display the result
                echo $yearsOfExperience;
                ?>
              </h2>
              <h6 class="text-white mb-0">Years Of Experience</h6>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="ps-lg-2-2 ps-xl-6">
          <h2 class="h1 mb-1-6 font-weight-400">About <span class="fw-bolder">Rwanda Non-Communicable Disease Alliance</span> for healthy life.</h2>
          <p class="w-90 display-sm-28 mb-1-9">Rwanda Non-Communicable Diseases Alliance is a unique civil society network, <a href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance" target="_blank">founded in 2016</a> and uniting 25 organizations
            ( NCDs Patients, health care professionals and youth-led organizations and private institutions) working on NCDs in Rwanda.</p>
          <div class="about-us mb-1-9 mt-n1-9 row border-bottom pb-1-9">
            <div class="col-md-12 mt-1-9">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="about-icon">
                    <img src="{{ asset('new/img/icons/icon-13.png')}}" alt="...">
                  </div>
                </div>
                <div class="flex-grow-1 ms-4">
                  <p class="mb-0 display-sm-28">Working together as an alliance provides a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward.
                    It is our belief that addressing NCDs needs wide and multi-sector collaboration. Rwanda NCDA is globally connected with other NCDs Alliances.</p>
                </div>
              </div>
            </div>

          </div>
          <div class="d-flex align-items-center">
            <div class="flex-grow-1 ms-3">
              <a href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance" target="_blank" class="butn secondary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-inline-block p-3 bg-secondary position-absolute rounded-circle top-20 right-5 ani-left-right"></div>
</section>


<!-- ======= About Us Section ======= -->
<section id="about">
  <div class="container" data-aos="fade-up">

    <header class="section-header">
    </header>

    <div class="row about-cols" style="text-align: justify;">


      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="about-col shadow-lg p-3 mb-5 bg-white rounded" style="height: 500px;">
          <div class="img">
            <div class="icon"><i class="bi bi-bar-chart"></i></div>
          </div>
          <h2 class="title"><a href="#">Our Vision</a></h2>
          <p>
            A healthy people in a nation free from preventable suffering, disability, and deaths caused by Non Communicable Diseases.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="about-col shadow-lg p-3 mb-5 bg-white rounded" style="height: 500px;">
          <div class="img">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
          </div>

          <h2 class="title"><a href="#">Our Mission</a></h2>
          <p>
            To unite the efforts and create a powerful voice for the NCDs awareness rising, advocate for the prevention and control of NCDs and their risk factors in Rwanda; by promoting multisectoral partnerships, healthy living style education, early detection and responding to NCDs challenges to improve health and well-being.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="about-col shadow-lg p-3 mb-5 bg-white rounded" style="height: 500px;">
          <div class="img">
            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
          </div>
          <h2 class="title"><a href="#">Our Objectives</a></h2>
          <p data-aos="fade-up" data-aos-delay="100">Building capacity and providing technical support to the members</p>
          <p data-aos="fade-up" data-aos-delay="100">Leading awareness and healthy life education for NCDs Prevention</p>
          <p data-aos="fade-up" data-aos-delay="100">Empower people living with NCDs and Advocate for them on access to quality care</p>
          <p data-aos="fade-up" data-aos-delay="100">Advocate for the community concerning the prevention and control of NCDs</p>
          <p data-aos="fade-up" data-aos-delay="100">Contribute to evidence based NCD policies and practices.</p>
          </p>
        </div>
      </div>


    </div>

  </div>
</section><!-- End About Us Section -->

<!-- CERTIFICATIONS
        ================================================== -->
<section class="bg-light">
  <div class="container">
    <div class="section-heading">
      <!-- <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Certifications</span> -->
      <h2>Our<span class="fw-bolder"> Members</span></h2>
    </div>
    <div class="certificate-carousel owl-carousel owl-theme">
      @foreach($members as $member)
      <div class="certificate-wrapper">
        <div class="certificate-image">
          <a href="{{ $member->website }}" target="_target">
            <img src="{{ asset('new/img')}}/{{$member->logo }}" alt="..." height="50px">
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
<!-- TEAM
        ================================================== -->
<section class="overflow-visible">
  <div class="container">
    <div class="section-heading">
      <span class="text-secondary title-font display-25 display-md-23 d-block mb-1">Our team</span>
      <h2><span class="fw-bolder">Board</span> members</h2>
    </div>
    <div class="row g-xxl-5 mt-n1-9">
      @foreach($workers as $worker)

      @if($worker->department === 'BOARD MEMBERS')

      <div class="col-sm-6 col-lg-3 mt-1-9">
        <div class="card-style3">
          <div class="pb-1-9">
            <div class="card-image position-relative">
              <div class="card-icons">
                <span class="card-icon ti-close"></span>
                <a href="#!" class="card-icon fab fa-twitter"></a>
                <a href="#!" class="card-icon fab fa-facebook-f"></a>
                <a href="#!" class="card-icon fab fa-instagram"></a>
              </div>
              <a href="#!" class="card-inner-img">
                <img src="{{ asset('new/img')}}/{{$worker->photo }}" class="rounded-circle" alt="{{ $worker->name }}">
              </a>
            </div>
          </div>
          <div class="text-center">
            <h3 class="h4 mb-1"><a href="team-details.html">{{ $worker->name }}</a></h3>
            <p class="mb-0">{{ $worker->title }}</p>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>

  </div>
  <div class="bg-white p-8 p-lg-9 d-lg-inline-block rounded-circle position-absolute top-n10 right-10 z-index-3 d-none"></div>
  <div class="bg-primary p-2-0 d-sm-inline-block rounded-circle position-absolute top-5 right-10 z-index-3 d-none"></div>
  <div class="bg-secondary p-3 d-sm-inline-block rounded-circle position-absolute top-5 right-10 z-index-3 ani-left-right d-none"></div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-1-9 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none"></div>
</section>

<section class="overflow-visible">
  <div class="container">
    <div class="section-heading">
      <h2><span class="fw-bolder"> Staff</span> members</h2>
    </div>
    <div class="row g-xxl-5 mt-n1-9">
      @foreach($workers as $worker)

      @if($worker->department === 'WORKFORCE')

      <div class="col-sm-6 col-lg-4 mt-1-9">
        <div class="card-style3">
          <div class="pb-1-9">
            <div class="card-image position-relative">
              <div class="card-icons">
                <span class="card-icon ti-close"></span>
                <a href="#!" class="card-icon fab fa-twitter"></a>
                <a href="#!" class="card-icon fab fa-facebook-f"></a>
                <a href="#!" class="card-icon fab fa-instagram"></a>
              </div>
              <a href="#!" class="card-inner-img">
                <img src="{{ asset('new/img')}}/{{$worker->photo }}" class="rounded-circle" alt="{{ $worker->name }}">
              </a>
            </div>
          </div>
          <div class="text-center">
            <h3 class="h4 mb-1"><a href="team-details.html">{{ $worker->name }}</a></h3>
            <p class="mb-0">{{ $worker->title }}</p>
          </div>
        </div>
      </div>
      @endif
      @endforeach
    </div>
  </div>
  <div class="bg-white p-8 p-lg-9 d-lg-inline-block rounded-circle position-absolute top-n10 right-10 z-index-3 d-none"></div>
  <div class="bg-primary p-2-0 d-sm-inline-block rounded-circle position-absolute top-5 right-10 z-index-3 d-none"></div>
  <div class="bg-secondary p-3 d-sm-inline-block rounded-circle position-absolute top-5 right-10 z-index-3 ani-left-right d-none"></div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-1-9 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none"></div>
</section>

<!-- TEAM
        ================================================== -->
<section class="bg-img bg-primary cover-background" data-background="img/bg/bg-08.png">
  <div class="container">
    <div class="section-heading-02 text-center mb-1-9 mb-md-2-9">
      <div class="sub-title mb-3">
        <span class="text-secondary">Our Team</span>
        <div class="title-img">
          <img src="{{ asset('new/img/icons/habitro-icon.png')}}" alt="...">
        </div>
      </div>
      <h2 class="h1 fw-bolder text-white mb-0">ADVISORY COMMITTEE</h2>
    </div>
    <div class="row g-lg-5 mt-n1-9">
      @foreach($workers as $worker)

      @if($worker->department === 'ADVISORY COMMITTEE')

      <div class="col-md-6 col-lg-4 mt-1-9">
        <div class="card card-style10 border-0 p-3 p-sm-4">
          <div class="card-image position-relative">
            <img src="{{ asset('new/img')}}/{{$worker->photo }}" class="border-radius-10" alt="{{ $worker->name }}">
            <div class="team-social-icon">
              <div class="social-icons"><i class="fas fa-share-alt"></i></div>
              <ul class="list-unstyled">
                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-body p-0 text-center mt-4">
            <h3 class="h4"><a href="team-details.html" class="text-white">{{ $worker->name }}</a></h3>
            <span class="text-secondary">{{ $worker->title }}</span>
          </div>
        </div>
      </div>
      @endif

      @endforeach
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row justify-content-center g-0 mb-2-9">
      <div class="col-md-5 col-xl-4 bg-img cover-background min-height-350 border-start-md-radius-10 border-top-sm-radius-10" data-background="{{ asset('new/img/content/technical.JPG')}}"></div>
      <div class="col-md-7 col-xl-6">
        <div class="success-content border-end-md-radius-10 border-bottom-sm-radius-10">
          <h4 class="text-center text-primary mb-4 title-font">TECHNICAL WORKING GROUP</h4>
          <p>More than 1000 volunteers already affiliated with RNCDA. The volunteers have a health background. They are young and well educated
            (normally they are recent graduates and university students). They are much eager to serve as well as bringing back what they have
            acquired from universities to the communities. However, few of them have received proper training in NCDs and data collection, and
            more have to be recruited through the already existing network of RNCDA and its member organizations.</p>

        </div>
      </div>
    </div>
    <div class="row justify-content-center flex-row-reverse g-0 mb-2-9">
      <div class="col-md-5 col-xl-4 bg-img cover-background min-height-350 border-end-md-radius-10 border-top-sm-radius-10" data-background="{{ asset('new/img/content/volunteer.JPG')}}"></div>
      <div class="col-md-7 col-xl-6">
        <div class="success-content border-start-md-radius-10 border-top-sm-radius-10">
          <h4 class="text-center text-primary mb-4 title-font">VOLUNTEERS</h4>
          <p>More than 1000 volunteers already affiliated with RNCDA. The volunteers have a health background. They are young and well educated
            (normally they are recent graduates and university students). They are much eager to serve as well as bringing back what they have
            acquired from universities to the communities. However, few of them have received proper training in NCDs and data collection, and
            more have to be recruited through the already existing network of RNCDA and its member organizations.</p>

        </div>
      </div>
    </div>
  </div>
</section>
@endsection