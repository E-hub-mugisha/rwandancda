<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/logo2.png') }}" rel="icon">
    <link href="{{ URL::asset('img/logo2.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">
</head>

<body>

    
 <!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
          <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on +250 791 232 176  or info@rwandancda.org.</p>
            </div>
            <div class="col-md-6">
              <div class="d-flex justify-content-md-end justify-content-between">
                <ul class="social-custom list-inline contact-info d-block d-md-none">
                  <li class="list-inline-item"><a href="tel:+250782347211"><i class="fa fa-phone"></i></a></li>
                  <li class="list-inline-item"><a href="mail-to:info@rwandancda.org"><i class="fa fa-envelope"></i></a></li>
                </ul>
                <ul class="social-custom list-inline">
                  <li class="list-inline-item"><a href="https://web.facebook.com/RwandaNCDA/" target="blank" class="facebook"><i class="fa fa-facebook" title="rncda"></i></a></li>
                  <li class="list-inline-item"><a href="https://linkedin.com/company/rwandancda" target="blank" class="linkedin"><i class="fa fa-linkedin" title="rncda"></i></a></li>
                  <li class="list-inline-item"><a href="https://instagram.com/rwandancda" target="blank" class="instagram"><i class="fa fa-instagram" title="rncda"></i></a></li>
                  <li class="list-inline-item"><a href="https://twitter.com/RwandaNCDA" target="blank" class="twitter"><i class="fa fa-twitter"></i title="rncda"></a></li>
                  <li class="list-inline-item"><a href="https://www.youtube.com/channel/UC31T6EdrAzRntcRyZlBF_tw?view_as=subscriber" target="blank" class="youtube"><i class="fa fa-youtube" title="rncda"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
        <div class="col-xl-11 d-flex align-items-center">
          <!-- <h1 class="logo mr-auto"><a href="{{ route('home')}}">BizPage</a></h1> -->
          <!-- Uncomment below if you prefer to use an image logo -->
           <a href="{{ url('/') }}" class="logo mr-auto"><img src="{{ URL::asset('img/logo.png') }}" alt="" class="img-fluid"></a>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li><a href="{{ URL::route('about_us') }}">About Us</a></li>
              <li class="drop-down"><a href="">Engagements</a>
                <ul>
                    @if($engagements->count() > 1 )
                        @foreach($engagements as $engagement)
                            <li><a href="{{ url('ncd_engagements', $engagement->title) }}">{{ $engagement->title }}</a></li>
                        @endforeach
                    @endif
                    <li><a href="{{ URL::route('know_your_numbers') }}">Know your numbers</a></li>
                </ul>
              </li>
              
              <li class="drop-down"><a href="">News & Events</a>
                <ul>
                    <li><a href="{{ URL::route('ncd_posts') }}">Regular</a></li>
                    <li><a href="{{ URL::route('ncd_covid_posts') }}">NCDs & COVID-19</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="">NCD Conference</a>
                 <ul>
                     <li><a href="{{ url('conference-2022') }}">NCD conference 2022</a></li>
                     <li><a href="{{ url('conference-2021') }}">NCD conference 2021</a></li>
                     
                 </ul>
              </li>
              <li class="drop-down"><a href="" class="active">Resources</a>
                <ul>
                    <li><a href="{{ url('/') }}#testimonials">NCD Stories</a></li>
                    <li><a href="{{ URL::route('ncd_resources') }}">Publicatios</a></li>
                    <li><a href="{{ url('gallery') }}">Gallery</a></li>
                    <li class="active"><a href="{{ URL::route('add_newsletter') }}">Newsletter</a></li>
                    
                </ul>
              </li>
              <li><a href="{{ URL::route('message') }}">Contact Us</a></li>
            </ul>
          </nav><!-- .nav-menu -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->

 
  <main id="main">
<!-- ======= Portfolio Section ======= -->
    <section id="resources" class="section-bg">
      <div class="container mb-3 mt-3" data-aos="fade-up">

        <header class="section-header">
          <h3 class="section-title mt-4">Newsletters</h3>
        </header>
        <div class="row">
            @foreach( $newsletters as $newsletters )
            <div class="col-md-4 mt-2">
                <div class="card" style="height: 250px;" >
                    <div class="card-body  d-flex flex-column">
                        <h6 class="card-subtitle mb-2 text-muted"><img src="{{ URL::asset('img/newsletter.png') }}" style="width: 50px; height: 50px;"></h6>
                        <p class="card-text">{{ $newsletters->title }}</p>
                        <a href="{{ $newsletters->link }}" target="_blank" type="button" class="btn btn-outline-success mt-auto">Read More...</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
                
      </div>
    </section><!-- End Portfolio Section -->
    
    </main><!-- End #main -->

  @include('footer')
  
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
          <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
          <script src="{{ URL::asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/counterup/counterup.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/venobox/venobox.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
          <script src="{{ URL::asset('vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
          <script src="{{ URL::asset('js/main.js') }}"></script>

</body>

</html>