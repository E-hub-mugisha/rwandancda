@extends('layouts.base')
@section('title','Home')
@section('content')

<style>
    :root {
        --rn-black: #0B0D0C;
        --rn-black-soft: #14211A;
        --rn-green: #1DA851;
        --rn-green-dark: #167A3C;
        --rn-blue: #5D89C8;
        --rn-blue-dark: #3E6AA8;
        --rn-paper: #F6F8F6;
        --rn-white: #FFFFFF;
        --rn-line: rgba(11,13,12,0.10);
        --rn-text-soft: rgba(11,13,12,0.62);
        --rn-font-head: 'Space Grotesk', 'Segoe UI', sans-serif;
        --rn-font-body: 'Inter', 'Segoe UI', sans-serif;
    }

    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap');

    #cs_home_root { font-family: var(--rn-font-body); color: var(--rn-black-soft); background: var(--rn-white); }
    #cs_home_root h1, #cs_home_root h2, #cs_home_root h3, #cs_home_root h4 { font-family: var(--rn-font-head); letter-spacing: -0.01em; color: var(--rn-blue-dark); }

    /* ---------- Hero ---------- */
    .rn_hero { position: relative; height: 92vh; min-height: 620px; background: var(--rn-black); overflow: hidden; }
    .rn_hero_slide { position: absolute; inset: 0; background-size: cover; background-position: center; opacity: 0; transition: opacity 1.1s ease; }
    .rn_hero_slide.active { opacity: 1; }
    .rn_hero_slide::after {
        content: ''; position: absolute; inset: 0;
        background: linear-gradient(180deg, rgba(11,13,12,0.75) 0%, rgba(11,13,12,0.25) 45%, rgba(11,13,12,0.85) 100%);
    }
    .rn_hero_inner { position: relative; z-index: 2; height: 100%; display: flex; flex-direction: column; justify-content: flex-end; padding-bottom: 88px; }
    .rn_hero_tag { display: inline-flex; align-items: center; gap: 10px; color: var(--rn-white); font-size: 14px; font-weight: 500; margin-bottom: 18px; }
    .rn_hero_tag::before { content: ''; width: 26px; height: 2px; background: var(--rn-green); display: inline-block; }
    .rn_hero_title { font-size: clamp(32px, 4.4vw, 58px); font-weight: 700; color: var(--rn-white); line-height: 1.08; max-width: 820px; margin-bottom: 22px; }
    .rn_hero_sub { font-size: 17px; color: rgba(255,255,255,0.82); max-width: 620px; line-height: 1.6; margin-bottom: 34px; }
    .rn_btn { display: inline-flex; align-items: center; gap: 10px; padding: 14px 26px; border-radius: 6px; font-weight: 600; font-size: 15px; text-decoration: none; transition: transform .15s ease, background .2s ease; border: 1.5px solid transparent; }
    .rn_btn:hover { transform: translateY(-2px); text-decoration: none; }
    .rn_btn_primary { background: var(--rn-green); color: var(--rn-black); }
    .rn_btn_primary:hover { background: var(--rn-green-dark); color: var(--rn-white); }
    .rn_btn_ghost { border-color: rgba(255,255,255,0.4); color: var(--rn-white); }
    .rn_btn_ghost:hover { border-color: var(--rn-white); color: var(--rn-white); background: rgba(255,255,255,0.08); }
    .rn_hero_group { display: flex; gap: 14px; flex-wrap: wrap; }

    .rn_hero_nav { position: absolute; z-index: 3; bottom: 40px; right: 6%; display: flex; gap: 10px; }
    .rn_hero_nav button { width: 42px; height: 42px; border-radius: 50%; border: 1.5px solid rgba(255,255,255,0.4); background: transparent; color: #fff; display: flex; align-items: center; justify-content: center; cursor: pointer; transition: .2s; }
    .rn_hero_nav button:hover { background: var(--rn-green); border-color: var(--rn-green); color: var(--rn-black); }
    .rn_hero_count { position: absolute; z-index: 3; bottom: 50px; left: 6%; color: rgba(255,255,255,0.7); font-family: var(--rn-font-head); font-size: 14px; letter-spacing: .04em; }
    .rn_hero_count b { color: var(--rn-white); font-size: 16px; }

    /* ---------- Section shell ---------- */
    .rn_section { padding: 96px 0; }
    .rn_section_tight { padding: 72px 0; }
    .rn_kicker { color: var(--rn-green-dark); font-weight: 600; font-size: 14px; margin-bottom: 10px; }
    .rn_head_row { display: flex; justify-content: space-between; align-items: flex-end; gap: 40px; flex-wrap: wrap; margin-bottom: 48px; }
    .rn_head_row h2 { font-size: clamp(26px, 3vw, 38px); font-weight: 700; margin: 0; max-width: 560px; }
    .rn_head_row p { max-width: 380px; color: var(--rn-text-soft); font-size: 15px; line-height: 1.6; margin: 0; }

    /* ---------- Engagement / features ---------- */
    .rn_feat_grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: var(--rn-line); border: 1px solid var(--rn-line); }
    .rn_feat_card { background: var(--rn-white); padding: 40px 34px; position: relative; }
    .rn_feat_icon { width: 46px; height: 46px; border-radius: 50%; background: var(--rn-green); color: var(--rn-black); display: flex; align-items: center; justify-content: center; margin-bottom: 26px; }
    .rn_feat_card h3 { font-size: 20px; font-weight: 700; margin-bottom: 12px; color: var(--rn-blue-dark); }
    .rn_feat_card p { color: var(--rn-text-soft); font-size: 14.5px; line-height: 1.65; margin-bottom: 22px; }
    .rn_feat_link { display: inline-flex; align-items: center; gap: 8px; font-weight: 600; font-size: 14px; color: var(--rn-green-dark); text-decoration: none; }
    .rn_feat_link:hover { color: var(--rn-blue-dark); text-decoration: none; }

    /* ---------- About ---------- */
    .rn_about_bg { background: var(--rn-paper); }
    .rn_about_text { font-size: 16.5px; line-height: 1.75; color: var(--rn-black); }
    .rn_about_text a { color: var(--rn-green-dark); font-weight: 600; }
    .rn_about_media { position: relative; }
    .rn_about_media img { width: 100%; border-radius: 8px; display: block; }
    .rn_about_media_main { position: relative; }
    .rn_about_badge { position: absolute; bottom: -22px; left: -22px; background: var(--rn-blue-dark); color: var(--rn-white); border-radius: 8px; padding: 22px 26px; }
    .rn_about_badge b { font-size: 34px; display: block; color: var(--rn-green); font-family: var(--rn-font-head); }
    .rn_about_badge span { font-size: 13px; color: rgba(255,255,255,0.7); }

    /* ---------- Mission strip ---------- */
    .rn_mission { background: var(--rn-black); color: var(--rn-white); }
    .rn_mission_grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 44px; }
    .rn_mission_col { border-top: 2px solid var(--rn-green); padding-top: 22px; }
    .rn_mission_col h3 { font-size: 19px; font-weight: 700; margin-bottom: 12px; color: var(--rn-white); }
    .rn_mission_col p, .rn_mission_col li { color: rgba(255,255,255,0.72); font-size: 14.5px; line-height: 1.7; }
    .rn_mission_col ul { list-style: none; padding: 0; margin: 0; }
    .rn_mission_col li { display: flex; gap: 10px; margin-bottom: 10px; }
    .rn_mission_col li svg { flex-shrink: 0; margin-top: 4px; color: var(--rn-blue); }

    /* ---------- Video / impact ---------- */
    .rn_impact { position: relative; background: var(--rn-black-soft); overflow: hidden; }
    .rn_impact_inner { position: relative; z-index: 2; text-align: center; padding: 110px 0; }
    .rn_impact h2 { color: var(--rn-white); font-size: clamp(26px, 3.4vw, 40px); max-width: 640px; margin: 0 auto 34px; }
    .rn_play { width: 76px; height: 76px; border-radius: 50%; background: var(--rn-green); display: flex; align-items: center; justify-content: center; margin: 0 auto 26px; text-decoration: none; transition: transform .2s; }
    .rn_play:hover { transform: scale(1.08); }
    .rn_play svg { color: var(--rn-black); margin-left: 4px; }

    /* ---------- Stories ---------- */
    .rn_stories_bg { background: var(--rn-blue); }
    .rn_story_card { background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.18); border-radius: 8px; padding: 30px; height: 100%; }
    .rn_story_card h3 a { color: var(--rn-white); text-decoration: none; font-size: 19px; font-weight: 700; }
    .rn_story_card p { color: rgba(255,255,255,0.8); font-size: 14.5px; margin: 12px 0 18px; }
    .rn_text_btn { color: var(--rn-white); font-weight: 600; font-size: 14px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }

    /* ---------- News ---------- */
    .rn_featured_card { background: var(--rn-white); border: 1px solid var(--rn-line); border-radius: 8px; overflow: hidden; height: 100%; }
    .rn_featured_card img { width: 100%; aspect-ratio: 16/10; object-fit: cover; display: block; }
    .rn_featured_body { padding: 26px; }
    .rn_meta { font-size: 13px; color: var(--rn-text-soft); margin-bottom: 10px; }
    .rn_featured_body h3 a { font-size: 24px; font-weight: 700; color: var(--rn-blue-dark); text-decoration: none; line-height: 1.3; }

    .rn_news_side { background: var(--rn-paper); border-radius: 8px; padding: 28px; height: 100%; }
    .rn_news_side h4 { font-weight: 700; font-size: 15px; margin-bottom: 18px; }
    .rn_news_entry { display: flex; gap: 14px; padding: 14px 0; border-bottom: 1px solid var(--rn-line); }
    .rn_news_entry:last-child { border-bottom: none; }
    .rn_news_entry img { width: 58px; height: 58px; border-radius: 6px; object-fit: cover; flex-shrink: 0; }
    .rn_news_entry a { color: var(--rn-blue-dark); font-size: 14px; font-weight: 600; line-height: 1.4; text-decoration: none; }
    .rn_news_entry small { color: var(--rn-text-soft); font-size: 12px; }

    /* ---------- Resources ---------- */
    .rn_res_card { border: 1px solid var(--rn-line); border-radius: 8px; padding: 28px; height: 100%; transition: border-color .2s; }
    .rn_res_card:hover { border-color: var(--rn-green); }
    .rn_res_card h3 a { font-size: 19px; font-weight: 700; color: var(--rn-blue-dark); text-decoration: none; }
    .rn_res_card .rn_text_btn { color: var(--rn-green-dark); margin-top: 16px; }
    .rn_res_card .rn_text_btn:hover { color: var(--rn-green-dark); }

    @media (max-width: 991px) {
        .rn_feat_grid { grid-template-columns: 1fr; }
        .rn_mission_grid { grid-template-columns: 1fr; gap: 30px; }
        .rn_about_badge { position: static; margin-top: -40px; margin-left: 20px; display: inline-block; }
    }
</style>

<div id="cs_home_root">

<!-- Hero -->
<section class="rn_hero" id="rnHero">
    <div class="rn_hero_slide active" style="background-image:url('new/img/intro-carousel/banner.jpg');">
        <div class="rn_hero_inner container">
            <div class="rn_hero_tag">Rwanda NCD Alliance</div>
            <h1 class="rn_hero_title">A unified voice against non-communicable diseases in Rwanda</h1>
            <p class="rn_hero_sub">A civil society network founded in 2016, uniting 25 organizations of NCD patients, health professionals, youth-led groups and private institutions.</p>
            <div class="rn_hero_group">
                <a href="{{ route('about_us') }}" class="rn_btn rn_btn_primary">About us</a>
                <a href="{{ route('ncd_posts') }}" class="rn_btn rn_btn_ghost">Recent news</a>
            </div>
        </div>
    </div>
    <div class="rn_hero_slide" style="background-image:url('new/img/intro-carousel/banner-2.jpg');">
        <div class="rn_hero_inner container">
            <div class="rn_hero_tag">Kigali Car Free Day</div>
            <h1 class="rn_hero_title">Promoting health through the Kigali Car Free Day initiative</h1>
            <p class="rn_hero_sub">Encouraging walking, running and cycling to build healthy lifestyles, cut pollution and raise NCD awareness across the city.</p>
            <div class="rn_hero_group">
                <a href="https://www.kigalicity.gov.rw/news-detail/expanding-kigali-car-free-day" target="_blank" rel="noopener noreferrer" class="rn_btn rn_btn_primary">Learn more</a>
                <a href="{{ route('message') }}" class="rn_btn rn_btn_ghost">Contact us</a>
            </div>
        </div>
    </div>
    <div class="rn_hero_slide" style="background-image:url('new/img/intro-carousel/forum.jpg');">
        <div class="rn_hero_inner container">
            <div class="rn_hero_tag">#NCDAF2025</div>
            <h1 class="rn_hero_title">The global NCD community gathered in Kigali for the 4th Global NCDA Forum</h1>
            <p class="rn_hero_sub">Held from 13&ndash;15 February 2025 and led by the Global NCD Alliance and RNCDA, bringing together experts and advocates to champion the global NCD response.</p>
            <div class="rn_hero_group">
                <a href="https://forum.ncdalliance.org/" target="_blank" rel="noopener noreferrer" class="rn_btn rn_btn_primary">Learn more</a>
                <a href="https://forum.ncdalliance.org/photos/" target="_blank" rel="noopener noreferrer" class="rn_btn rn_btn_ghost">Event highlights</a>
            </div>
        </div>
    </div>

    <div class="rn_hero_count"><b id="rnHeroActive">01</b> / 03</div>
    <div class="rn_hero_nav">
        <button type="button" id="rnHeroPrev" aria-label="Previous slide">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
        <button type="button" id="rnHeroNext" aria-label="Next slide">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none"><path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
    </div>
</section>

<script>
(function(){
    var slides = document.querySelectorAll('#rnHero .rn_hero_slide');
    var counter = document.getElementById('rnHeroActive');
    var i = 0, timer;
    function show(n){
        slides[i].classList.remove('active');
        i = (n + slides.length) % slides.length;
        slides[i].classList.add('active');
        counter.textContent = String(i+1).padStart(2,'0');
    }
    function auto(){ timer = setInterval(function(){ show(i+1); }, 6000); }
    document.getElementById('rnHeroNext').addEventListener('click', function(){ clearInterval(timer); show(i+1); auto(); });
    document.getElementById('rnHeroPrev').addEventListener('click', function(){ clearInterval(timer); show(i-1); auto(); });
    auto();
})();
</script>

<!-- Engagement / Features -->
<section class="rn_section">
    <div class="container">
        <div class="rn_feat_grid">
            @foreach( $engagements as $engagement )
            <div class="rn_feat_card">
                <div class="rn_feat_icon">
                    <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2095 5.00343C14.4914 4.61685 15.0244 4.37887 15.4938 4.33792C15.7173 4.31843 15.9444 4.34161 16.1501 4.43536C16.363 4.53233 16.5272 4.69911 16.6272 4.91041C16.7279 5.12353 16.7655 5.3641 16.786 5.59704C16.8155 5.93211 16.8161 6.27783 16.8214 6.61428L16.8234 6.73891C16.5326 6.69683 16.2375 6.68714 15.9428 6.70491L15.9415 6.62814C15.9369 6.33625 15.9355 6.03917 15.9147 5.74806C15.9054 5.61698 15.8882 5.40622 15.8315 5.28635C15.8207 5.26351 15.8085 5.24653 15.7854 5.23594C15.7256 5.20864 15.6344 5.20874 15.5704 5.21435C15.3621 5.23258 15.046 5.3419 14.9237 5.51781C14.7225 5.80735 14.3633 5.95539 14.0191 5.86315L11.6699 5.23372L11.7838 4.80898L11.8977 4.38403L14.2095 5.00343Z" fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.805859 0.996469L0.370485 2.62141C0.351525 2.69235 0.36231 2.76951 0.400041 2.83329C0.435768 2.8935 0.491262 2.93543 0.556373 2.95151L1.30928 3.13574L1.87604 1.02068L1.13176 0.803764C1.10955 0.797521 1.08669 0.79396 1.06381 0.793945C1.02065 0.793945 0.977271 0.805552 0.937305 0.827856C0.872713 0.864419 0.824804 0.925981 0.805859 0.996469Z" fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.36955 1.16455L1.80859 3.25798L9.4809 5.13538L9.95273 3.37457L2.36955 1.16455ZM8.46466 4.17642C8.44266 4.17642 8.42025 4.17376 8.398 4.1675L3.275 2.795C3.13794 2.75842 3.05661 2.61749 3.09331 2.4801C3.13009 2.34315 3.27076 2.26198 3.408 2.29855L8.53097 3.67149C8.66804 3.70806 8.7494 3.84901 8.71265 3.98597C8.68187 4.10059 8.57807 4.17642 8.46466 4.17642Z" fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4464 3.51807L9.98047 5.25725L10.7226 5.43886C10.8729 5.4759 11.0209 5.39251 11.0593 5.24888L11.218 4.65697L11.3766 4.06505C11.4144 3.9241 11.3261 3.77469 11.18 3.73185L10.4464 3.51807Z" fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8599 9.06784C12.7303 8.04102 9.84708 6.99236 8.1788 7.64805C7.51544 7.90899 7.14678 8.42508 7.083 9.18292C7.06835 9.35691 7.05844 9.51768 7.05273 9.66687L8.59453 8.91171C8.66086 8.87915 8.73797 8.87692 8.80622 8.90503C8.87443 8.93356 8.92709 8.98976 8.95082 9.05981L9.45339 10.5411L11.1342 9.75474C11.2627 9.69452 11.4156 9.75029 11.4757 9.87873C11.5359 10.0072 11.4804 10.1602 11.3519 10.2204L9.41117 11.1281C9.37672 11.1442 9.33951 11.1522 9.30233 11.1522C9.26808 11.1522 9.23376 11.1455 9.2015 11.1317C9.13436 11.1031 9.08246 11.047 9.059 10.9778L8.55812 9.50183L7.05305 10.2387C7.09556 11.1412 7.35003 11.4795 7.63394 11.8565C7.87301 12.1741 8.14392 12.5336 8.30882 13.2179C8.49341 13.9833 8.49982 14.5645 8.50669 15.18C8.50987 15.466 8.51312 15.7621 8.53492 16.0886C8.66089 17.9777 9.05493 19.3234 9.61603 19.781C9.7859 19.9198 9.96948 19.9737 10.1773 19.9461C10.2126 19.9398 10.7693 19.8368 11.0132 19.4849C11.1195 19.3314 11.15 19.1503 11.1063 18.9322L11.1052 18.9264C10.5964 16.0561 11.2971 14.4526 12.1225 13.9092C12.5969 13.597 13.1409 13.597 13.6153 13.9092C14.4407 14.4525 15.1414 16.0561 14.6325 18.9264L14.6315 18.9322C14.5876 19.1512 14.6184 19.3328 14.7257 19.4867C14.9687 19.8355 15.5253 19.9398 15.5604 19.9461C15.7682 19.9733 15.9518 19.9193 16.1217 19.781C16.6827 19.3234 17.0768 17.9777 17.2026 16.0886C17.2245 15.7621 17.2276 15.4664 17.2312 15.1801C17.2363 14.7124 17.2411 14.2646 17.3241 13.7407L17.3257 13.7308C17.3517 13.5681 17.3853 13.3981 17.4288 13.2179C17.5938 12.5336 17.8681 12.1732 18.1103 11.8556C18.4886 11.3583 18.8155 10.9292 18.6549 9.18515C18.5814 8.39028 18.2102 7.83985 17.5519 7.54903C17.316 7.44472 17.0531 7.37805 16.7742 7.34408L17.3364 8.7993C17.3806 8.91439 17.3369 9.04508 17.232 9.1102L16.339 9.66553L17.3784 10.7829C17.4752 10.8868 17.4693 11.0496 17.3654 11.146C17.3159 11.1919 17.253 11.2147 17.1906 11.2147C17.1216 11.2147 17.053 11.1875 17.0023 11.133L15.7502 9.78687C15.698 9.73067 15.6735 9.65394 15.6837 9.5781C15.6939 9.50183 15.7375 9.43449 15.8027 9.3939L16.7803 8.78592L16.2132 7.31787C15.2594 7.33846 14.2135 7.66674 13.4478 8.13514C13.7441 8.31489 14.0016 8.50225 14.2055 8.6878C14.3106 8.78326 14.3183 8.94561 14.2229 9.05088C14.1274 9.1557 13.9649 9.16328 13.8599 9.06784Z" fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7153 16.1228C17.6355 17.3164 17.3647 19.4302 16.4461 20.1796C16.2115 20.3709 15.9499 20.4673 15.6663 20.4673C15.6075 20.4673 15.5478 20.4628 15.4871 20.4548C15.4854 20.4544 15.4837 20.4544 15.482 20.4539C15.4495 20.449 14.6815 20.3223 14.3038 19.7804C14.1155 19.5101 14.056 19.192 14.1268 18.8343C14.5918 16.208 13.9897 14.7713 13.3325 14.339C13.0334 14.1419 12.704 14.1419 12.4048 14.339C11.7477 14.7713 11.1454 16.208 11.6105 18.8343C11.6813 19.192 11.6218 19.5101 11.4334 19.7804C11.0557 20.3223 10.2877 20.449 10.2552 20.4539C10.2535 20.4544 10.2518 20.4544 10.2501 20.4548C9.89687 20.503 9.57435 20.4106 9.29106 20.1796C8.37225 19.4302 8.10158 17.3164 8.02197 16.1228C7.99928 15.7824 7.99587 15.4791 7.99261 15.1861C7.98848 14.8137 7.9847 14.4723 7.94368 14.102C6.1845 14.5979 5.10449 15.3431 5.10449 16.0737V22.2056H20.6388V16.0737C20.6388 15.3421 19.5565 14.5965 17.7938 14.1001C17.7526 14.4711 17.7489 14.813 17.7448 15.1861C17.7412 15.4791 17.7381 15.7824 17.7153 16.1228Z" fill="currentColor" />
                    </svg>
                </div>
                <h3>{{ $engagement->title }}</h3>
                <p>{{ $engagement->content }}</p>
                <a href="{{ url('ncd_engagements', $engagement->title) }}" class="rn_feat_link">
                    Read more
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About -->
<section class="rn_section rn_about_bg" id="about">
    <div class="container">
        <div class="row align-items-center cs_gap_y_40">
            <div class="col-lg-6">
                <p class="rn_kicker">About us</p>
                <h2 style="font-size:clamp(26px,3vw,40px); font-weight:700; margin-bottom:22px;">Rwanda Non-Communicable Disease Alliance</h2>
                <p class="rn_about_text">Rwanda Non-Communicable Diseases Alliance is a unique civil society network, <a href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance" target="_blank">founded in 2016</a>, uniting 25 organizations &mdash; NCD patients, health care professionals, youth-led organizations and private institutions &mdash; working on NCDs in Rwanda.</p>
                <div style="margin-top:28px;">
                    <a href="{{ route('ncd_posts')}}" class="rn_btn rn_btn_primary" style="background:var(--rn-blue); color:#fff;">See our impact</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rn_about_media rn_about_media_main">
                    <img src="{{ asset('new/img/content/about-05.jpg')}}" alt="Community health outreach">
                    <div class="rn_about_badge">
                        <b>9+</b>
                        <span>Years of experience</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission strip -->
<section class="rn_section rn_mission">
    <div class="container">
        <div class="rn_mission_grid">
            <div class="rn_mission_col">
                <h3>Our vision</h3>
                <p>A healthy people in a nation free from preventable suffering, disability and deaths caused by non-communicable diseases.</p>
            </div>
            <div class="rn_mission_col">
                <h3>Our mission</h3>
                <p>To unite efforts and create a powerful voice for NCD awareness, advocate for prevention and control of NCDs and their risk factors in Rwanda, and promote multisectoral partnerships, healthy-living education, early detection and response.</p>
            </div>
            <div class="rn_mission_col">
                <h3>Our objectives</h3>
                <ul>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>Build capacity and provide technical support to members</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>Lead awareness and healthy-living education for NCD prevention</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>Empower people living with NCDs and advocate for their access to quality care</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>Advocate to communities on NCD prevention and control</li>
                    <li><svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M20 6L9 17l-5-5" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></svg>Contribute to evidence-based NCD policies and practices</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Impact video -->
<section class="rn_impact cs_bg_filed" data-src="{{ asset('new/img/heartbeat.svg') }}">
    <div class="container rn_impact_inner">
        <a href="https://www.youtube.com/watch?v=G6DP05PcKhk" class="rn_play cs_video_open">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
        </a>
        <h2>Life with NCDs</h2>
        <p style="color:rgba(255,255,255,0.68); max-width:560px; margin:0 auto;">Many people face challenges in lifestyle, economy and health, especially those living with non-communicable diseases, who face a higher risk of severe complications.</p>
    </div>
</section>

<!-- Stories -->
<section class="rn_section rn_stories_bg">
    <div class="container">
        <div class="rn_head_row">
            <div>
                <p class="rn_kicker" style="color:var(--rn-white);">NCD stories &amp; challenges</p>
                <h2 style="color:#fff;">Hear testimony from our community</h2>
            </div>
            <a href="{{ url('ncd_stories') }}" class="rn_btn rn_btn_ghost">All stories</a>
        </div>
        <div class="row cs_gap_y_30">
            @foreach( $stories as $story)
            <div class="col-md-4">
                <div class="rn_story_card">
                    <h3><a data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $story->id }}">{{ $story->name }}</a></h3>
                    <p>{{ Str::limit($story->headline, 100) }}</p>
                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $story->id }}" class="rn_text_btn">
                        Read more
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@foreach( $stories as $story)
<div class="modal fade" id="staticBackdrop{{ $story->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <h3>{{ $story->name }}'s story</h3>
                    <p style="color:var(--rn-text-soft); font-weight:600; margin-bottom:0;">Condition: {{ $story->disease }}</p>
                    <p class="mt-3">{!! $story->content !!}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- News -->
<section class="rn_section">
    <div class="container">
        <div class="rn_head_row">
            <div>
                <p class="rn_kicker">Rwanda NCD Alliance</p>
                <h2>Latest news &amp; updates</h2>
            </div>
            <p>Empowering communities, sharing knowledge and advancing the fight against non-communicable diseases through strategic partnerships and advocacy.</p>
        </div>

        <div class="row cs_gap_y_30">
            <div class="col-lg-6">
                @if($featured)
                <article class="rn_featured_card">
                    <a href="{{ url('ncd_news', $featured->slug) }}">
                        <img src="{{ asset('new/img/'.$featured->image) }}" alt="{{ Str::limit($featured->title, 50) }}">
                    </a>
                    <div class="rn_featured_body">
                        <div class="rn_meta">Published {{ $featured->created_at->format('F d, Y') }}</div>
                        <h3><a href="{{ url('ncd_news', $featured->slug) }}">{{ Str::limit($featured->title, 50) }}</a></h3>
                        <a href="{{ url('ncd_news', $featured->slug) }}" class="rn_feat_link" style="margin-top:16px;">
                            Read full story
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </article>
                @endif
            </div>

            <div class="col-lg-6">
                <div class="rn_news_side">
                    <h4>More recent updates</h4>
                    @foreach($posts as $post)
                    <div class="rn_news_entry">
                        <a href="{{ url('ncd_news', $post->slug) }}">
                            <img src="{{ asset('new/img/' . ($post->image ?: 'placeholder.png')) }}" alt="{{ Str::limit($post->title, 50) }}">
                        </a>
                        <div>
                            <a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 50) }}</a>
                            <div><small>Published {{ $post->created_at->format('F d, Y') }}</small></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact CTA -->
<section class="rn_impact cs_bg_filed" style="background-image:url('{{ asset('new/img/content/about-02.jpg') }}'); background-size:cover; background-position:center;">
    <div class="container rn_impact_inner">
        <p class="rn_kicker" style="color:var(--rn-green);">Success story</p>
        <h2>Get to know our impact on the community</h2>
        <a href="{{ url('ncd_stories') }}" class="rn_btn rn_btn_primary">Our impact</a>
    </div>
</section>

<!-- Resources -->
<section class="rn_section">
    <div class="container">
        <div class="rn_head_row">
            <div>
                <p class="rn_kicker">Rwanda NCD Alliance</p>
                <h2>Publications &amp; resources</h2>
            </div>
            <p>Uniting our efforts to share knowledge, support advocacy and strengthen Rwanda's response to non-communicable diseases.</p>
        </div>

        <div class="row cs_gap_y_30">
            @foreach($resources_data as $resource)
            @php
                $fileData = json_decode($resource->file);
                $fileLink = $fileData[0]->download_link ?? null;
            @endphp
            @if($fileLink)
            <div class="col-lg-4">
                <div class="rn_res_card">
                    <h3><a href="{{ asset($fileLink) }}" target="_blank">{{ Str::limit($resource->title, 50) }}</a></h3>
                    <a href="{{ asset($fileLink) }}" target="_blank" class="rn_text_btn" style="color:var(--rn-green-dark);">
                        Read more
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none"><path d="M5 12h14M13 6l6 6-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

</div>

@endsection