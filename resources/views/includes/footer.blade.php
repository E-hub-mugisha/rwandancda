<!-- =========================
     RNCDA PROFESSIONAL FOOTER
========================= -->

<style>
    :root {
        --rncda-footer-navy: #082B4C;
        --rncda-footer-dark: #061D32;
        --rncda-footer-blue: #0A599E;
        --rncda-footer-green: #16845C;
        --rncda-footer-text: #B9C8D4;
        --rncda-footer-muted: #8298AA;
        --rncda-footer-border: rgba(255,255,255,.10);
    }

    .rncda-footer {
        font-family: 'Inter', sans-serif;
        background: var(--rncda-footer-dark);
        color: var(--rncda-footer-text);
    }

    /* =========================
       CTA BAND
    ========================= */

    .rncda-footer-cta {
        background: var(--rncda-footer-blue);
        color: #fff;
        padding: 34px 0;
    }

    .rncda-footer-cta-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
    }

    .rncda-footer-cta h3 {
        margin: 0 0 6px;
        color: #fff;
        font-family: 'Fraunces', Georgia, serif;
        font-size: 25px;
        font-weight: 600;
    }

    .rncda-footer-cta p {
        margin: 0;
        color: rgba(255,255,255,.78);
        font-size: 14px;
    }

    .rncda-footer-cta-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        padding: 12px 20px;
        border-radius: 8px;

        background: #fff;
        color: var(--rncda-footer-blue);

        font-size: 13px;
        font-weight: 700;
        text-decoration: none;

        white-space: nowrap;

        transition: .2s ease;
    }

    .rncda-footer-cta-button:hover {
        background: #EAF7F1;
        color: var(--rncda-footer-green);
        transform: translateY(-1px);
    }

    /* =========================
       MAIN FOOTER
    ========================= */

    .rncda-footer-main {
        padding: 65px 0 48px;
    }

    .rncda-footer-logo {
        height: 58px;
        width: auto;
        margin-bottom: 20px;
    }

    .rncda-footer-description {
        max-width: 350px;
        color: var(--rncda-footer-muted);
        line-height: 1.75;
        font-size: 13.5px;
        margin-bottom: 24px;
    }

    /* Contact */
    .rncda-footer-contact {
        display: flex;
        flex-direction: column;
        gap: 11px;
    }

    .rncda-footer-contact-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: var(--rncda-footer-text);
        font-size: 13px;
    }

    .rncda-footer-contact-item svg {
        color: #63C697;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .rncda-footer-contact-item a {
        color: var(--rncda-footer-text);
        text-decoration: none;
    }

    .rncda-footer-contact-item a:hover {
        color: #fff;
    }

    /* =========================
       FOOTER HEADINGS
    ========================= */

    .rncda-footer-heading {
        position: relative;

        margin: 0 0 20px;

        color: #fff;

        font-size: 14px;
        font-weight: 700;
        letter-spacing: .01em;
    }

    .rncda-footer-heading::after {
        content: "";

        display: block;

        width: 28px;
        height: 2px;

        margin-top: 9px;

        background: var(--rncda-footer-green);
        border-radius: 2px;
    }

    /* =========================
       LINKS
    ========================= */

    .rncda-footer-links {
        list-style: none;
        padding: 0;
        margin: 0;

        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .rncda-footer-links a {
        display: inline-flex;
        align-items: center;
        gap: 7px;

        color: var(--rncda-footer-muted);
        text-decoration: none;

        font-size: 13px;

        transition: .2s ease;
    }

    .rncda-footer-links a::before {
        content: "›";

        color: var(--rncda-footer-green);
        font-size: 17px;
        line-height: 1;
    }

    .rncda-footer-links a:hover {
        color: #fff;
        transform: translateX(3px);
    }

    /* =========================
       NEWSLETTER
    ========================= */

    .rncda-newsletter-text {
        color: var(--rncda-footer-muted);
        font-size: 13px;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    .rncda-newsletter-form {
        display: flex;
        background: #fff;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid rgba(255,255,255,.08);
    }

    .rncda-newsletter-form input {
        flex: 1;
        min-width: 0;

        border: 0;
        outline: 0;

        padding: 12px 13px;

        font-size: 12.5px;
        color: #172B3A;
    }

    .rncda-newsletter-form button {
        width: 48px;

        border: 0;

        background: var(--rncda-footer-green);
        color: #fff;

        cursor: pointer;

        transition: .2s ease;
    }

    .rncda-newsletter-form button:hover {
        background: var(--rncda-footer-blue);
    }

    /* Calendar */
    .rncda-calendar {
        margin-top: 23px;
    }

    .rncda-calendar label {
        display: flex;
        align-items: center;
        gap: 7px;

        color: var(--rncda-footer-text);

        font-size: 12px;
        font-weight: 600;

        margin-bottom: 8px;
    }

    .rncda-calendar label svg {
        color: #63C697;
    }

    .rncda-calendar select {
        width: 100%;

        padding: 10px 12px;

        background: rgba(255,255,255,.07);
        color: #fff;

        border: 1px solid var(--rncda-footer-border);
        border-radius: 7px;

        font-size: 12px;

        outline: none;
    }

    .rncda-calendar select option {
        color: #172B3A;
    }

    /* =========================
       SOCIAL
    ========================= */

    .rncda-footer-social {
        display: flex;
        gap: 7px;
        margin-top: 22px;
    }

    .rncda-footer-social a {
        width: 35px;
        height: 35px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border: 1px solid var(--rncda-footer-border);
        border-radius: 7px;

        color: var(--rncda-footer-text);
        text-decoration: none;

        transition: .2s ease;
    }

    .rncda-footer-social a:hover {
        background: var(--rncda-footer-green);
        border-color: var(--rncda-footer-green);
        color: #fff;
        transform: translateY(-2px);
    }

    /* =========================
       BOTTOM
    ========================= */

    .rncda-footer-bottom {
        border-top: 1px solid var(--rncda-footer-border);
        background: rgba(0,0,0,.14);
        padding: 17px 0;
    }

    .rncda-footer-bottom-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .rncda-copyright {
        color: var(--rncda-footer-muted);
        font-size: 11.5px;
    }

    .rncda-copyright strong {
        color: #fff;
    }

    .rncda-bottom-links {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 8px;
    }

    .rncda-bottom-links a {
        color: var(--rncda-footer-muted);
        text-decoration: none;
        font-size: 11.5px;
    }

    .rncda-bottom-links a:hover {
        color: #fff;
    }

    .rncda-bottom-divider {
        color: rgba(255,255,255,.18);
    }

    /* =========================
       BACK TO TOP
    ========================= */

    .rncda-back-top {
        position: fixed;

        right: 24px;
        bottom: 24px;

        width: 44px;
        height: 44px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 8px;

        background: var(--rncda-footer-green);
        color: #fff;

        box-shadow: 0 10px 30px rgba(0,0,0,.2);

        opacity: 0;
        visibility: hidden;

        transform: translateY(10px);

        transition: .25s ease;

        z-index: 999;
        text-decoration: none;
    }

    .rncda-back-top.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .rncda-back-top:hover {
        background: var(--rncda-footer-blue);
        color: #fff;
        transform: translateY(-2px);
    }

    @media (max-width: 767px) {

        .rncda-footer-cta-inner {
            flex-direction: column;
            align-items: flex-start;
        }

        .rncda-footer-main {
            padding: 50px 0 35px;
        }

        .rncda-footer-bottom-inner {
            flex-direction: column;
            text-align: center;
        }

        .rncda-bottom-links {
            justify-content: center;
        }

        .rncda-back-top {
            right: 16px;
            bottom: 16px;
        }
    }
</style>


<footer class="rncda-footer">

    <!-- =========================
         CTA
    ========================= -->

    <section class="rncda-footer-cta">

        <div class="container">

            <div class="rncda-footer-cta-inner">

                <div>

                    <h3>
                        Together, we can build a healthier Rwanda.
                    </h3>

                    <p>
                        Connect with us, learn more about our work or join the
                        movement against non-communicable diseases.
                    </p>

                </div>

                <a href="{{ URL::route('message') }}"
                   class="rncda-footer-cta-button">

                    Contact RNCDA

                    <span>→</span>

                </a>

            </div>

        </div>

    </section>


    <!-- =========================
         MAIN FOOTER
    ========================= -->

    <div class="rncda-footer-main">

        <div class="container">

            <div class="row gy-5">

                <!-- ORGANIZATION -->
                <div class="col-lg-4 col-md-6">

                    <a href="{{ URL::route('home') }}">

                        <img
                            src="{{ asset('img/logo-footer.png') }}"
                            alt="{{ config('app.name') }}"
                            class="rncda-footer-logo"
                        >

                    </a>

                    <p class="rncda-footer-description">

                        NCDs affect people in all corners of the globe —
                        rich and poor, old and young, in cities and villages,
                        the privileged and the vulnerable.

                        <strong>It's better to fight as one.</strong>

                    </p>


                    <div class="rncda-footer-contact">

                        <div class="rncda-footer-contact-item">

                            <svg width="16" height="16">
                                <use href="#rncda-pin"/>
                            </svg>

                            <span>
                                Kigali - Kinamba, KN 8 AVE 27, Rwanda
                            </span>

                        </div>


                        <div class="rncda-footer-contact-item">

                            <svg width="16" height="16">
                                <use href="#rncda-phone"/>
                            </svg>

                            <a href="tel:+250791232176">
                                +250 791 232 176
                            </a>

                        </div>


                        <div class="rncda-footer-contact-item">

                            <svg width="16" height="16">
                                <use href="#rncda-mail"/>
                            </svg>

                            <a href="mailto:info@rwandancda.org">
                                info@rwandancda.org
                            </a>

                        </div>

                    </div>


                    <div class="rncda-footer-social">

                        <a href="https://www.facebook.com/RwandaNCDA"
                           target="_blank"
                           rel="noopener"
                           aria-label="Facebook">

                            <svg width="16" height="16">
                                <use href="#rncda-facebook"/>
                            </svg>

                        </a>

                        <a href="https://twitter.com/RwandaNCDA"
                           target="_blank"
                           rel="noopener"
                           aria-label="X">

                            <strong>𝕏</strong>

                        </a>

                        <a href="http://www.youtube.com/@rwandancda"
                           target="_blank"
                           rel="noopener"
                           aria-label="YouTube">

                            <svg width="16" height="16">
                                <use href="#rncda-youtube"/>
                            </svg>

                        </a>

                        <a href="https://www.linkedin.com/company/65703122/"
                           target="_blank"
                           rel="noopener"
                           aria-label="LinkedIn">

                            <svg width="16" height="16">
                                <use href="#rncda-linkedin"/>
                            </svg>

                        </a>

                        <a href="https://wa.me/250791232176"
                           target="_blank"
                           rel="noopener"
                           aria-label="WhatsApp">

                            <svg width="16" height="16">
                                <use href="#rncda-whatsapp"/>
                            </svg>

                        </a>

                    </div>

                </div>


                <!-- ABOUT -->
                <div class="col-lg-2 col-md-6 col-6">

                    <h4 class="rncda-footer-heading">
                        About Us
                    </h4>

                    <ul class="rncda-footer-links">

                        <li>
                            <a href="{{ URL::route('about_us') }}">
                                Who We Are
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('Mission.Vision.Objectives') }}">
                                Mission & Vision
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('partnerships') }}">
                                Partnerships & Members
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('team') }}">
                                Our Team
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('our_impact') }}">
                                Our Impact
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('know_your_numbers') }}">
                                Know Your Numbers
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- RESOURCES -->
                <div class="col-lg-3 col-md-6 col-6">

                    <h4 class="rncda-footer-heading">
                        Resources & Media
                    </h4>

                    <ul class="rncda-footer-links">

                        <li>
                            <a href="{{ URL::route('ncd_posts') }}">
                                Latest News
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('ncd_covid_posts') }}">
                                NCDs & COVID-19
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('ncd_resources') }}">
                                Resource Library
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('ncd_stories') }}">
                                NCD Stories
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('gallery') }}">
                                Photo Gallery
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('video-gallery') }}">
                                Video Gallery
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('newsletters') }}">
                                Newsletters
                            </a>
                        </li>

                        <li>
                            <a href="{{ URL::route('assessments.create') }}">
                                Diabetes Assessment
                            </a>
                        </li>

                    </ul>

                </div>


                <!-- NEWSLETTER -->
                <div class="col-lg-3 col-md-6">

                    <h4 class="rncda-footer-heading">
                        Stay Connected
                    </h4>

                    <p class="rncda-newsletter-text">

                        Subscribe for the latest news, reports,
                        campaigns and event updates from RNCDA.

                    </p>


                    <form
                        action="{{ URL::route('subscribe') }}"
                        method="POST"
                        class="rncda-newsletter-form">

                        @csrf

                        <input
                            type="email"
                            name="email"
                            placeholder="Your email address"
                            required
                            aria-label="Email address"
                        >

                        <button
                            type="submit"
                            aria-label="Subscribe">

                            <span>→</span>

                        </button>

                    </form>


                    <!-- CALENDAR -->

                    <div class="rncda-calendar">

                        <label for="calendarYear">

                            <svg width="15" height="15">
                                <use href="#rncda-calendar"/>
                            </svg>

                            Annual Calendar

                        </label>


                        <?php
                            $calendars = App\Models\Calendar::all();
                        ?>

                        <select
                            id="calendarYear"
                            onchange="selectChange(this)">

                            <option value="" selected disabled>
                                Choose a year
                            </option>

                            @foreach($calendars as $calendar)

                                <option value="{{ $calendar->file }}">
                                    {{ $calendar->year }}
                                </option>

                            @endforeach

                        </select>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================
         BOTTOM BAR
    ========================= -->

    <div class="rncda-footer-bottom">

        <div class="container">

            <div class="rncda-footer-bottom-inner">

                <div class="rncda-copyright">

                    © {{ date('Y') }}

                    <strong>
                        {{ config('app.name') }}
                    </strong>.

                    All Rights Reserved.

                </div>


                <div class="rncda-bottom-links">

                    <a href="{{ URL::route('conference-2022') }}">
                        Conference 2022
                    </a>

                    <span class="rncda-bottom-divider">|</span>

                    <a href="{{ URL::route('conference-2021') }}">
                        Conference 2021
                    </a>

                    <span class="rncda-bottom-divider">|</span>

                    <a href="{{ url('login') }}">
                        Login
                    </a>

                </div>

            </div>

        </div>

    </div>

</footer>


<!-- BACK TO TOP -->

<a
    href="#"
    id="rncda-back-top"
    class="rncda-back-top"
    aria-label="Back to top">

    ↑

</a>


<script>

    function selectChange(elm) {

        if (elm.value) {
            window.open(elm.value, '_blank');
        }

    }


    (function () {

        const button =
            document.getElementById('rncda-back-top');

        if (!button) return;


        window.addEventListener('scroll', function () {

            if (window.scrollY > 350) {

                button.classList.add('show');

            } else {

                button.classList.remove('show');

            }

        });


        button.addEventListener('click', function (event) {

            event.preventDefault();

            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });

        });

    })();

</script>

<!-- =========================
     END FOOTER
========================= -->