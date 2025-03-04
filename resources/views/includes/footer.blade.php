<footer id="footer" class="dark" data-bs-theme="dark" data-onepage-settings="{&quot;offset&quot;:60,&quot;speed&quot;:1250,&quot;easing&quot;:false}">
    <div class="container">

        <!-- Footer Widgets
				============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row col-mb-50">
                <div class="col-lg-8">

                    <div class="row col-mb-50">
                        <div class="col-md-4">

                            <div class="widget">

                                <img src="{{ asset('new/img/logos/logo-footer.png')}}" alt="Image" class="footer-logo" height="50">

                                <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                    <address>
                                        <strong>Headquarters:</strong><br>
                                        Kigali - Kinamba, KN8 Av27<br>
                                    </address>
                                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> +250 791 232 176<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@rwandancda.org
                                </div>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget widget_links">

                                <h4>Quick Links</h4>

                                <ul>
                                    <li><a href="{{ URL::route('about_us') }}">About Us</a></li>
                                    <li>
                                        <a href="#!">Calendar </a>

                                        <?php
                                        $calendars = App\Calendar::all();
                                        ?>
                                        <select class="form-select" aria-label="Default select example" onChange="selectChange(this)">
                                            <option value="{{ URL::current() }}">Choose Year</option>
                                            @foreach($calendars as $calendar)
                                            <option value="{{ $calendar->file }}">{{ $calendar->year }}</option>
                                            @endforeach
                                        </select>
                                    </li>
                                    <li><a href="{{ URL::route('ncd_posts') }}">Recent Post</a></li>
                                    <li><a href="{{ URL::route('message') }}">Contact Us</a></li>
                                    <li><a href="https://rwandancda.org:2096" target="_blank">Staff Login</a></li>
                                </ul>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="widget">
                                <h4>Recent Posts</h4>

                                <div class="posts-sm row col-mb-30" id="post-list-footer">
                                    <div class="entry col-12">
                                        @foreach(\TCG\Voyager\Models\Post::where('category_id',1)->orderBy('created_at', 'desc')->take(3)->get() as $RecentPost)
                                        <div class="grid-inner row">
                                            <div class="col">
                                                <div class="entry-title">
                                                    <h4><a href="{{ url('ncd_news', $RecentPost->slug) }}">{{ Str::limit($RecentPost->title, 30) }}</a></h4>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul>
                                                        <li>{{ $RecentPost->created_at }}</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4">

                    <div class="row col-mb-50">

                        <div class="col-md-5 col-lg-12">
                            <div class="widget subscribe-widget">
                                <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                                <div class="widget-subscribe-form-result"></div>
                                <form action="{{ URL::route('subscribe') }}" method="post" class="mb-0" novalidate="novalidate">
                                    <div class="input-group mx-auto">
                                        <div class="input-group-text"><i class="bi-envelope-plus"></i></div>
                                        <input type="email" id="widget-subscribe-form-email" name="email" class="form-control required email" placeholder="Enter your Email">
                                        <button class="btn btn-success" type="submit">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-3 col-lg-12">
                            <div class="widget">

                                <div class="row col-mb-30">
                                    <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
                                        <a href="https://www.facebook.com/RwandaNCDA" class="social-icon text-white border-transparent bg-facebook me-2 mb-0 float-none">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="https://www.facebook.com/RwandaNCDA" class="ms-1"><small class="d-block"><strong>Like Us</strong><br>on Facebook</small></a>
                                    </div>
                                    <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center">
                                        <a href="https://twitter.com/RwandaNCDA" class="social-icon text-white border-transparent bg-twitter me-2 mb-0 float-none">
                                            <i class="fab fa-x-twitter"></i>
                                        </a>
                                        <a href="https://twitter.com/RwandaNCDA" class="ms-1"><small class="d-block"><strong>Follow Us</strong><br>on Twiiter</small></a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
			============================================= -->
    <div id="copyrights">
        <div class="container">

            <div class="row col-mb-30">

                <div class="col-md-6 text-center text-md-start">
                    Copyrights © <span class="current-year"></span> All Rights Reserved.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="d-flex justify-content-center justify-content-md-end mb-2">
                        <a href="https://www.facebook.com/RwandaNCDA" class="social-icon border-transparent si-small h-bg-facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="https://twitter.com/RwandaNCDA" class="social-icon border-transparent si-small h-bg-x-twitter">
                            <i class="fab fa-x-twitter"></i>
                        </a>

                        <a href="http://www.youtube.com/@rwandancda" class="social-icon border-transparent si-small h-bg-youtube">
                            <i class="fab fa-youtube"></i>
                        </a>

                        <a href="https://www.linkedin.com/company/65703122/admin/dashboard/" class="social-icon border-transparent si-small me-0 h-bg-linkedin">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>

                    <i class="bi-envelope"></i> info@rwandancda.org <span class="middot">·</span> <i class="fa-solid fa-phone"></i> +250 791 232 176 <span class="middot">·</span> <i class="bi-skype"></i> RwandaNcda
                </div>

            </div>

        </div>
    </div><!-- #copyrights end -->
</footer>

<script>
    function selectChange(elm) {
        window.open(elm.value);
    }
</script>