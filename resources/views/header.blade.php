<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
  <div class="container-fluid">

    <div class="row justify-content-center">
      <div class="top-bar">
        <div class="container">
          <div class="row d-flex align-items-center">
            <div class="col-md-6 d-md-block d-none">
              <p>Contact us on +250 791 232 176 or info@rwandancda.org.</p>
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
            <li class="drop-down"><a href="">Resources</a>
              <ul>
                <li><a href="{{ url('/') }}#testimonials">NCD Stories</a></li>
                <li><a href="{{ URL::route('ncd_resources') }}">Publications</a></li>
                <li><a href="{{ url('gallery') }}">Gallery</a></li>
                <li><a href="{{ URL::route('add_newsletter') }}">Newsletter</a></li>

              </ul>
            </li>
            <li><a href="{{ URL::route('message') }}">Contact Us</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </div>

  </div>
</header><!-- End Header -->