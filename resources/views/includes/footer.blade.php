<!-- Start Footer Section -->
<footer class="cs_footer cs_style_1 cs_heading_bg">
    <div class="container cs_white_color">
        <div class="cs_footer_row">
            <div class="cs_footer_col">
                <div class="cs_footer_widget">
                    <div class="cs_footer_text_widget">
                        <img src="{{ asset('new/img/logos/logo-footer.png')}}" alt="Logo" height="50" width="100">
                        
                    </div>
                    <p class="mt-3">Follow us on social media to stay updated <br> with our latest activities and initiatives.</p>
                    <div class="cs_social_btns cs_style_1">
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
            <div class="cs_footer_col">
                <div class="cs_footer_widget">
                    <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Quick Links</h2>
                    <ul class="cs_footer_widget_menu">
                        <li><a href="{{ URL::route('home') }}">Home</a></li>
                        <li><a href="{{ URL::route('about_us') }}">About</a></li>
                        <li><a href="{{ URL::route('message') }}">Contact</a></li>
                        <li><a href="#">Staff Login</a></li>
                    </ul>
                </div>
            </div>
            <div class="cs_footer_col">
                <div class="cs_footer_widget">
                    <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Resources</h2>
                    <ul class="cs_footer_widget_menu">
                        <li><a href="{{ URL::route('ncd_resources') }}">Publications</a></li>
                        <li><a href="#">Newsletter</a></li>
                        <li><a href="#">NCD Stories</a></li>
                        <li><a href="#">Refund Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="cs_footer_col">
                <div class="cs_footer_widget">
                    <h2 class="cs_footer_widget_title cs_fs_32 cs_white_color cs_bold">Office</h2>
                    <ul class="cs_footer_widget_menu cs_address">
                        <li>Kicukiro Kigali, Rwanda</li>
                        <li>
                            <a href="tel:+250791232176">+250 791 232 176</a>
                        </li>
                        <P>Subscribe to Our Newsletter:</p>
                        
                        <form action="{{ URL::route('subscribe') }}" method="post">
                            <div class="input-group mx-auto">
                                <div class="input-group-text"><i class="bi-envelope-plus"></i></div>
                                <input type="email" id="widget-subscribe-form-email" name="email" class="form-control required email" placeholder="Enter your Email">
                                <button class="btn btn-success" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_footer_bottom cs_white_color">
        <div class="container">
            <div class="cs_footer_bottom_in">
                <p class="cs_copyright mb-0">RWANDANCDA &copy; {{ date('Y') }}. All Rights Reserved.</p>
                <ul class="cs_footer_widget_menu">
                    <li><a href="#">Powered by HOMIEZ</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->