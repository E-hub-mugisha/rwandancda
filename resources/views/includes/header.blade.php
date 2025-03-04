<style>
    #top-cart {
        display: flex;
        justify-content: flex-start;
        /* Align icons to the left */
        align-items: center;
        /* Vertically center the icons */
    }

    #top-social {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
    }

    #top-social li {
        margin-right: 15px;
        /* Adjust space between icons */
    }

    #top-social a {
        color: #000;
        /* Default color for icons */
        font-size: 20px;
        /* Size of the icons */
        transition: color 0.3s;
        /* Smooth transition on hover */
    }

    #top-social a:hover {
        color: #0073e6;
        /* Change color on hover (adjust as needed) */
    }
</style>

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
                        <img class="logo-default" srcset="{{ asset('new/img/logos/logo.png')}}" src="{{ asset('new/img/logos/logo.png')}}" alt="Canvas Logo" style="height: 50px;">
                        <img class="logo-dark" srcset="{{ asset('new/img/logos/logo-footer.png')}}" src="{{ asset('new/img/logos/logo-footer.png')}}" alt="Canvas Logo" style="height: 50px;">
                    </a>
                </div><!-- #logo end -->

                <div class="header-misc">


                    <!-- Top Cart
							============================================= -->
                    <div id="top-cart" class="header-misc-icon d-none d-sm-block">
                        <ul id="top-social">
                            <li><a href="https://www.facebook.com/RwandaNCDA"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://twitter.com/RwandaNCDA"><i class="fab fa-x-twitter"></i></a></li>
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
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ URL::route('partnerships') }}">
                                        <div>Partnerships & Members</div>
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
                        <li class="menu-item">
                            <a class="menu-link" href="#">
                                <div>Resources</div>
                            </a>
                            <ul class="sub-menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="shop.html">
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
                                <li class="menu-item">
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
                                            <a class="menu-link" href="{{ URL::route('assessments.create') }}">
                                                <div>Diabetes assessment</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
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
                                    <a class="menu-link" href="{{ url('video-gallery') }}">
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