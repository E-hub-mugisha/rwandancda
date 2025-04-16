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
                                            <a href="{{ URL::route('team')}}">
                                                <div>Team members</div>
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