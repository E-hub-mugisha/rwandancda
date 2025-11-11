<!-- Start Header Section -->
<header class="cs_site_header cs_style_1 cs_sticky_header cs_heading_font cs_heading_color">
    <div class="cs_main_header">
        <div class="container-fluid">
            <div class="cs_main_header_in">
                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="{{ URL::route('home') }}">
                        <img src="{{ asset('new/img/logos/logo.png')}}" alt="Logo" height="50" width="100">
                    </a>
                    <div class="cs_nav cs_fs_18 cs_semibold">
                        <div class="cs_nav_list_wrap">
                            <ul class="cs_nav_list">
                                <li>
                                    <a href="{{ URL::route('home') }}">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a>
                                        <div>Who We are</div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::route('about_us') }}">
                                                <div>About Us</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::route('Mission.Vision.Objectives') }}">
                                                <div>Mission, Vision &amp; Objectives</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::route('our_impact') }}">
                                                <div>Our Impact</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::route('team')}}">
                                                <div>WorkForces</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::route('partnerships') }}">
                                                <div>Partnerships & Members</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <div>Engagements</div>
                                    </a>
                                    <ul>
                                        <li>
                                            @if($engagements->count() > 1 )
                                            @foreach($engagements as $engagement)
                                            <a href="{{ url('ncd_engagements', $engagement->title) }}">
                                                <div>{{ $engagement->title }}</div>
                                            </a>
                                            @endforeach
                                            @endif
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <div>Resources</div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::route('ncd_resources') }}">
                                                <div><i class="bi-asterisk"></i>Publications</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::route('add_newsletter') }}">
                                                <div><i class="bi-calendar"></i>Newsletter</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('ncd_stories') }}">
                                                <div><i class="bi-question-circle"></i>NCD Stories</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <div>Assessment Tools</div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ URL::route('know_your_numbers') }}">
                                                <div>Know your numbers (BMI)</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ URL::route('assessments.create') }}">
                                                <div>Diabetes assessment</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">News & Events</a>
                                    <ul>
                                        <li><a href="{{ URL::route('ncd_posts') }}">Regular news</a></li>
                                        <li><a href="{{ URL::route('ncd_covid_posts') }}">NCDs & COVID-19</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Showcase</a>
                                    <ul>
                                        <li><a href="{{ url('gallery') }}">Gallery</a></li>
                                        <li><a href="{{ url('video-gallery') }}">Videos</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ URL::route('message') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="cs_main_header_right">
                    <button type="button" class="cs_search_toggle_btn text-black">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.3337 27.9998C22.3293 27.9998 28.0003 22.3288 28.0003 15.3332C28.0003 8.33756 22.3293 2.6665 15.3337 2.6665C8.33805 2.6665 2.66699 8.33756 2.66699 15.3332C2.66699 22.3288 8.33805 27.9998 15.3337 27.9998Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M29.3337 29.3332L26.667 26.6665" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <div class="cs_header_social_links">
                        <a href="https://www.facebook.com/RwandaNCDA" class="cs_center">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="https://twitter.com/RwandaNCDA" class="cs_center">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="http://www.youtube.com/@rwandancda" class="cs_center">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/65703122/admin/dashboard/" class="cs_center">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header Section -->