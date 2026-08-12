<!-- ======= Footer ======= -->
<footer id="footer" class="footer-modern">

  <div class="footer-main">
    <div class="container">
      <div class="row gy-5">

        {{-- Org info --}}
        <div class="col-lg-4 col-md-6 footer-info">
          <a href="{{ URL::route('home') }}" class="footer-logo-link">
            <img src="{{ URL::asset('img/logo-footer.png') }}" alt="{{ config('app.name') }}" class="img-fluid footer-logo" />
          </a>
          <p class="footer-tagline">
            NCDs affect people in all corners of the globe — rich and poor, old and young,
            in cities and villages, the privileged and the vulnerable. It's better to fight as one.
          </p>

          <div class="footer-contact-mini">
            <div class="contact-line">
              <i class="bi bi-geo-alt-fill"></i>
              <span>Kigali - Kinamba, KN 8 AVE 27, Rwanda</span>
            </div>
            <div class="contact-line">
              <i class="bi bi-telephone-fill"></i>
              <a href="tel:+250791232176">+250 791 232 176</a>
            </div>
            <div class="contact-line">
              <i class="bi bi-envelope-fill"></i>
              <a href="mailto:info@rwandancda.org">info@rwandancda.org</a>
            </div>
          </div>

          <div class="social-links">
            <a href="#" class="twitter" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
            <a href="{{ URL::route('video-gallery') ?? '#' }}" class="youtube" aria-label="Video Gallery"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        {{-- About the org --}}
        <div class="col-lg-2 col-md-6 col-6 footer-links">
          <h4>About Us</h4>
          <ul>
            <li><a href="{{ URL::route('about_us') }}"><i class="bi bi-chevron-right"></i> Who We Are</a></li>
            <li><a href="{{ URL::route('Mission.Vision.Objectives') }}"><i class="bi bi-chevron-right"></i> Mission &amp; Vision</a></li>
            <li><a href="{{ URL::route('partnerships') }}"><i class="bi bi-chevron-right"></i> Partnerships &amp; Members</a></li>
            <li><a href="{{ URL::route('team') }}"><i class="bi bi-chevron-right"></i> Team Members</a></li>
            <li><a href="{{ URL::route('our_impact') }}"><i class="bi bi-chevron-right"></i> Our Impact</a></li>
            <li><a href="{{ URL::route('know_your_numbers') }}"><i class="bi bi-chevron-right"></i> Know Your Numbers</a></li>
          </ul>
        </div>

        {{-- Resources / media --}}
        <div class="col-lg-3 col-md-6 col-6 footer-links">
          <h4>Resources &amp; Media</h4>
          <ul>
            <li><a href="{{ URL::route('ncd_posts') }}"><i class="bi bi-chevron-right"></i> Latest News</a></li>
            <li><a href="{{ URL::route('ncd_covid_posts') }}"><i class="bi bi-chevron-right"></i> NCDs &amp; COVID-19</a></li>
            <li><a href="{{ URL::route('ncd_resources') }}"><i class="bi bi-chevron-right"></i> Resource Library</a></li>
            <li><a href="{{ URL::route('ncd_stories') }}"><i class="bi bi-chevron-right"></i> Stories</a></li>
            <li><a href="{{ URL::route('gallery') }}"><i class="bi bi-chevron-right"></i> Photo Gallery</a></li>
            <li><a href="{{ URL::route('video-gallery') }}"><i class="bi bi-chevron-right"></i> Video Gallery</a></li>
            <li><a href="{{ URL::route('newsletters') }}"><i class="bi bi-chevron-right"></i> Newsletters</a></li>
            <li><a href="{{ URL::route('assessments.create') }}"><i class="bi bi-chevron-right"></i> Diabetes Self-Assessment</a></li>
          </ul>
        </div>

        {{-- Newsletter + calendar --}}
        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Stay Connected</h4>
          <p>Subscribe to receive our latest news, reports and event updates.</p>
          <form action="{{ URL::route('subscribe') }}" method="POST" class="newsletter-form">
            @csrf
            <div class="newsletter-input-group">
              <input type="email" name="email" placeholder="Your email address" required>
              <button type="submit" aria-label="Subscribe"><i class="bi bi-send-fill"></i></button>
            </div>
          </form>

          <div class="calendar-select-group">
            <label for="calendarYear"><i class="bi bi-calendar-event"></i> Annual Calendar</label>
            <?php $calendars = App\Calendar::all(); ?>
            <select id="calendarYear" class="form-select" onChange="selectChange(this)">
              <option value="{{ URL::current() }}" selected disabled>Choose a year</option>
              @foreach($calendars as $calendar)
                <option value="{{ $calendar->file }}">{{ $calendar->year }}</option>
              @endforeach
            </select>
          </div>

          <a href="{{ URL::route('message') }}" class="footer-contact-btn">
            <i class="bi bi-chat-dots-fill"></i> Contact Us
          </a>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
      <div class="copyright">
        &copy; {{ date('Y') }} <strong>{{ config('app.name') }}</strong>. All Rights Reserved.
      </div>
      <div class="footer-bottom-links">
        <a href="{{ URL::route('conference-2022') }}">Conference 2022</a>
        <span class="divider">/</span>
        <a href="{{ URL::route('conference-2021') }}">Conference 2021</a>
        <span class="divider">/</span>
        <a href="{{ url('login') }}">Login</a>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" id="back-to-top" class="back-to-top-btn" aria-label="Back to top">
  <i class="bi bi-arrow-up"></i>
</a>

<style>
  :root{
    --rncda-primary:#0f7a52;
    --rncda-primary-dark:#0a5c3d;
    --rncda-accent:#f2a900;
    --rncda-ink:#0e1b16;
    --rncda-muted:#a9c4b8;
    --rncda-bg:#0b3d2b;
  }

  .footer-modern{
    background: linear-gradient(180deg, var(--rncda-bg) 0%, var(--rncda-ink) 100%);
    color: #dce9e2;
    font-size: 15px;
    position: relative;
  }

  .footer-modern .footer-main{
    padding: 70px 0 40px;
    border-bottom: 1px solid rgba(255,255,255,.08);
  }

  .footer-modern .footer-logo{
    height: 4.5rem;
    margin-bottom: 1.25rem;
    filter: drop-shadow(0 2px 6px rgba(0,0,0,.25));
  }

  .footer-modern .footer-tagline{
    color: var(--rncda-muted);
    line-height: 1.7;
    margin-bottom: 1.5rem;
    max-width: 340px;
  }

  .footer-contact-mini{
    display:flex;
    flex-direction:column;
    gap:.6rem;
    margin-bottom: 1.5rem;
  }
  .footer-contact-mini .contact-line{
    display:flex;
    align-items:flex-start;
    gap:.6rem;
    color:#c9dcd3;
  }
  .footer-contact-mini i{
    color: var(--rncda-accent);
    margin-top: .2rem;
  }
  .footer-contact-mini a{
    color:#c9dcd3;
    text-decoration:none;
    transition: color .2s ease;
  }
  .footer-contact-mini a:hover{ color: var(--rncda-accent); }

  .footer-modern h4{
    color:#fff;
    font-size: 1.05rem;
    font-weight: 700;
    letter-spacing: .3px;
    margin-bottom: 1.4rem;
    position: relative;
    padding-bottom: .7rem;
  }
  .footer-modern h4::after{
    content:"";
    position:absolute;
    left:0; bottom:0;
    width: 34px; height: 3px;
    background: var(--rncda-accent);
    border-radius: 3px;
  }

  .footer-links ul{
    list-style:none;
    margin:0; padding:0;
    display:flex;
    flex-direction:column;
    gap:.65rem;
  }
  .footer-links a{
    color: var(--rncda-muted);
    text-decoration:none;
    display:flex;
    align-items:center;
    gap:.4rem;
    transition: all .2s ease;
  }
  .footer-links a i{
    font-size:.75rem;
    color: var(--rncda-accent);
    transition: transform .2s ease;
  }
  .footer-links a:hover{
    color:#fff;
    transform: translateX(3px);
  }
  .footer-links a:hover i{ transform: translateX(3px); }

  .footer-newsletter p{
    color: var(--rncda-muted);
    margin-bottom: 1.1rem;
  }
  .newsletter-input-group{
    display:flex;
    background:#fff;
    border-radius: 8px;
    overflow:hidden;
    box-shadow: 0 4px 14px rgba(0,0,0,.15);
  }
  .newsletter-input-group input{
    flex:1;
    border:none;
    padding: .75rem 1rem;
    font-size:.9rem;
    outline:none;
    color:#1a1a1a;
  }
  .newsletter-input-group button{
    background: var(--rncda-primary);
    border:none;
    color:#fff;
    padding: 0 1.1rem;
    cursor:pointer;
    transition: background .2s ease;
  }
  .newsletter-input-group button:hover{ background: var(--rncda-accent); }

  .calendar-select-group{
    margin-top: 1.5rem;
  }
  .calendar-select-group label{
    display:flex;
    align-items:center;
    gap:.4rem;
    color:#c9dcd3;
    font-size:.85rem;
    margin-bottom:.5rem;
  }
  .calendar-select-group .form-select{
    border-radius: 8px;
    border: none;
    padding: .55rem .75rem;
    font-size: .88rem;
  }

  .footer-contact-btn{
    display:inline-flex;
    align-items:center;
    gap:.5rem;
    margin-top: 1.4rem;
    padding: .6rem 1.1rem;
    border: 1px solid rgba(255,255,255,.25);
    border-radius: 8px;
    color:#fff;
    text-decoration:none;
    font-size:.88rem;
    transition: all .2s ease;
  }
  .footer-contact-btn:hover{
    background: var(--rncda-accent);
    border-color: var(--rncda-accent);
    color: #1a1a1a;
  }

  .social-links{ display:flex; gap:.6rem; }
  .social-links a{
    width: 38px; height: 38px;
    display:flex; align-items:center; justify-content:center;
    border-radius: 50%;
    background: rgba(255,255,255,.08);
    color:#fff;
    transition: all .25s ease;
  }
  .social-links a:hover{
    background: var(--rncda-accent);
    color:#1a1a1a;
    transform: translateY(-3px);
  }

  .footer-bottom{
    padding: 1.1rem 0;
    background: rgba(0,0,0,.2);
    font-size: .85rem;
  }
  .footer-bottom .copyright{ color: var(--rncda-muted); }
  .footer-bottom .copyright strong{ color:#fff; }
  .footer-bottom-links a{
    color: var(--rncda-muted);
    text-decoration:none;
    font-size:.85rem;
  }
  .footer-bottom-links a:hover{ color: var(--rncda-accent); }
  .footer-bottom-links .divider{ margin: 0 .5rem; color: rgba(255,255,255,.2); }

  .back-to-top-btn{
    position: fixed;
    right: 22px;
    bottom: 22px;
    width: 46px; height: 46px;
    display:flex; align-items:center; justify-content:center;
    background: var(--rncda-primary);
    color:#fff;
    border-radius: 50%;
    box-shadow: 0 6px 18px rgba(0,0,0,.25);
    opacity:0;
    visibility:hidden;
    transition: all .3s ease;
    z-index: 999;
    text-decoration:none;
  }
  .back-to-top-btn.show{ opacity:1; visibility:visible; }
  .back-to-top-btn:hover{ background: var(--rncda-accent); color:#1a1a1a; }

  @media (max-width: 767px){
    .footer-modern .footer-main{ padding: 50px 0 30px; }
    .footer-modern h4{ margin-top: .5rem; }
  }
</style>

<script>
  function selectChange(elm) {
    if (elm.value) window.open(elm.value, '_blank');
  }

  (function () {
    const btn = document.getElementById('back-to-top');
    window.addEventListener('scroll', function () {
      if (window.scrollY > 300) {
        btn.classList.add('show');
      } else {
        btn.classList.remove('show');
      }
    });
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  })();
</script>