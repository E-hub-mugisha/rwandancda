<!-- Header
		============================================= -->
<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
						============================================= -->
                <div id="logo">
                    <a href="{{ route('home')}}">
                        <img class="logo-default" srcset="{{ asset('new/img/logos/logo.png')}}" src="{{ asset('new/img/logos/logo.png')}}" alt="Canvas Logo">
                        <img class="logo-dark" srcset="{{ asset('new/img/logos/logo.png')}}" src="{{ asset('new/img/logos/logo.png')}}" alt="Canvas Logo">
                    </a>
                </div><!-- #logo end -->

                <div class="header-misc">


                    <!-- Top Cart
							============================================= -->
                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                        <ul id="top-social">
                            <li><a href="https://www.facebook.com/RwandaNCDA"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/RwandaNCDA"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="http://www.youtube.com/@rwandancda"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/65703122/admin/dashboard/"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div><!-- #top-cart end -->

                </div>

                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                <!-- Primary Navigation
						============================================= -->
                <nav class="primary-menu">

                    <ul class="menu-container">
                        <li class="menu-item">
                            <a class="menu-link">
                                <div>Who We are</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ URL::route('about_us') }}">
                                        <div>About Us</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ URL::route('team')}}">
                                        <div>Team members</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#">
                                <div>Engagements</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    @if($engagements->count() > 1 )
                                    @foreach($engagements as $engagement)
                                    <a class="menu-link" href="{{ url('ncd_engagements', $engagement->title) }}">
                                        <div>{{ $engagement->title }}</div>
                                    </a>
                                    @endforeach
                                    @endif
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item mega-menu">
                            <a class="menu-link" href="#">
                                <div>Resources</div>
                            </a>
                            <div class="mega-menu-content mega-menu-style-2">
                                <div class="container">
                                    <div class="row">
                                        <ul class="sub-menu-container mega-menu-column col-lg-6">
                                            <li class="menu-item mega-menu-title">
                                                <a class="menu-link" href="#">
                                                    <div>Assessment Tools</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="{{ URL::route('know_your_numbers') }}">
                                                            <div>Know your numbers (BMI)</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="gdpr.html">
                                                            <div>Diabetes</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="gdpr.html">
                                                            <div>hypertension</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="sub-menu-container mega-menu-column col-lg-6">
                                            <li class="menu-item mega-menu-title">
                                                <a class="menu-link" href="#">
                                                    <div>Resources</div>
                                                </a>
                                                <ul class="sub-menu-container">
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="{{ URL::route('ncd_resources') }}">
                                                            <div><i class="bi-asterisk"></i>Publications</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="{{ URL::route('add_newsletter') }}">
                                                            <div><i class="bi-calendar"></i>Newsletter</div>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item">
                                                        <a class="menu-link" href="{{ url('/') }}#testimonials">
                                                            <div><i class="bi-question-circle"></i>NCD Stories</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#!">
                                <div>News & Events</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ URL::route('ncd_posts') }}">
                                        <div>Regular News</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ URL::route('ncd_covid_posts') }}">
                                        <div>NCDs & COVID-19</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="#!">
                                <div>Showcase</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('gallery') }}">
                                        <div>Gallery</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>Videos</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item">
                            <a class="menu-link" href="{{ URL::route('message') }}">
                                <div>Contact Us</div>
                            </a>
                        </li>
                    </ul>

                </nav><!-- #primary-menu end -->
            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->

