@extends('layouts.base')
@section('title','Home')
@section('content')

<style>
    .full-height {
        height: 100vh;
    }

    .cs_bg_filed {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<!-- Start Hero Section -->
<section id="heroCarousel" class="carousel slide cs_style_1 position-relative full-height" data-bs-ride="carousel">
    <div class="carousel-inner full-height">

        <!-- Slide 1 -->
        @foreach ($banners as $item)
        <div class="carousel-item active cs_bg_filed full-height" style="background-image: url('{{ asset($item->image_path) }}');">
            <div class="cs_hero_overlay position-absolute"></div>
            <div class="container">
                <div class="cs_hero_content_wrapper">
                    <div class="cs_hero_content wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
                        <h3 class="cs_hero_title_mini cs_fs_18 cs_white_color cs_semibold">Expert Medical Treatment</h3>
                        <h1 class="cs_hero_title cs_fs_72 cs_white_color">{{ $item->title }}</h1>
                        @if ($item->description)
                        <p class="cs_hero_subtitle cs_fs_20 cs_medium cs_white_color cs_heading_font">
                            {{ Str::limit($item->description, 60) }}
                        </p>
                        @endif
                        <a href="https://www.youtube.com/embed/rRid6GCJtgc"
                            class="cs_player_btn cs_style_1 cs_video_open cs_heading_font">
                            <span class="cs_player_btn_icon cs_center"><i class="fa-solid fa-play"></i></span>
                            <span class="cs_play_btn_text cs_fs_18 cs_semibold cs_white_color">See How We Works</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <!-- Carousel Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>

    <!-- Static Content -->
    <div class="cs_hero_doctorbox cs_center position-absolute wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.45s">
        <div class="cs_hero_doctorbox_shape">...</div>
        <div class="cs_hero_doctorbox_content">...</div>
    </div>

    <div class="cs_hero_patientbox cs_accent_bg position-absolute wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.5s">
        <div class="cs_hero_patientbox_content">...</div>
    </div>

    <a href="#about" class="cs_scroll_more_btn cs_fs_20 cs_white_color cs_medium position-absolute">
        <span class="cs_scroll_more_btn_in">
            <i class="fa-solid fa-arrow-left-long"></i> Scroll for more
        </span>
    </a>
</section>

<!-- End Hero Section -->
<!-- Start Features Section -->
<section class="cs_features cs_style_1 m-0">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="row cs_row_gap_30 cs_gap_y_30 wow fadeIn" data-wow-duration="0.9s" data-wow-delay="0.25s">
            @foreach( $engagements as $engagement )
            <div class="col-lg-4">
                <div class="cs_iconbox cs_style_4 position-relative">
                    <div class="cs_iconbox_content">
                        <div class="cs_iconbox_header">
                            <div class="cs_iconbox_icon cs_center cs_radius_50 cs_accent_color">
                                <svg width="21" height="23" viewBox="0 0 21 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.2095 5.00343C14.4914 4.61685 15.0244 4.37887 15.4938 4.33792C15.7173 4.31843 15.9444 4.34161 16.1501 4.43536C16.363 4.53233 16.5272 4.69911 16.6272 4.91041C16.7279 5.12353 16.7655 5.3641 16.786 5.59704C16.8155 5.93211 16.8161 6.27783 16.8214 6.61428L16.8234 6.73891C16.5326 6.69683 16.2375 6.68714 15.9428 6.70491L15.9415 6.62814C15.9369 6.33625 15.9355 6.03917 15.9147 5.74806C15.9054 5.61698 15.8882 5.40622 15.8315 5.28635C15.8207 5.26351 15.8085 5.24653 15.7854 5.23594C15.7256 5.20864 15.6344 5.20874 15.5704 5.21435C15.3621 5.23258 15.046 5.3419 14.9237 5.51781C14.7225 5.80735 14.3633 5.95539 14.0191 5.86315L11.6699 5.23372L11.7838 4.80898L11.8977 4.38403L14.2095 5.00343Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.805859 0.996469L0.370485 2.62141C0.351525 2.69235 0.36231 2.76951 0.400041 2.83329C0.435768 2.8935 0.491262 2.93543 0.556373 2.95151L1.30928 3.13574L1.87604 1.02068L1.13176 0.803764C1.10955 0.797521 1.08669 0.79396 1.06381 0.793945C1.02065 0.793945 0.977271 0.805552 0.937305 0.827856C0.872713 0.864419 0.824804 0.925981 0.805859 0.996469Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.36955 1.16455L1.80859 3.25798L9.4809 5.13538L9.95273 3.37457L2.36955 1.16455ZM8.46466 4.17642C8.44266 4.17642 8.42025 4.17376 8.398 4.1675L3.275 2.795C3.13794 2.75842 3.05661 2.61749 3.09331 2.4801C3.13009 2.34315 3.27076 2.26198 3.408 2.29855L8.53097 3.67149C8.66804 3.70806 8.7494 3.84901 8.71265 3.98597C8.68187 4.10059 8.57807 4.17642 8.46466 4.17642Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4464 3.51807L9.98047 5.25725L10.7226 5.43886C10.8729 5.4759 11.0209 5.39251 11.0593 5.24888L11.218 4.65697L11.3766 4.06505C11.4144 3.9241 11.3261 3.77469 11.18 3.73185L10.4464 3.51807Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8599 9.06784C12.7303 8.04102 9.84708 6.99236 8.1788 7.64805C7.51544 7.90899 7.14678 8.42508 7.083 9.18292C7.06835 9.35691 7.05844 9.51768 7.05273 9.66687L8.59453 8.91171C8.66086 8.87915 8.73797 8.87692 8.80622 8.90503C8.87443 8.93356 8.92709 8.98976 8.95082 9.05981L9.45339 10.5411L11.1342 9.75474C11.2627 9.69452 11.4156 9.75029 11.4757 9.87873C11.5359 10.0072 11.4804 10.1602 11.3519 10.2204L9.41117 11.1281C9.37672 11.1442 9.33951 11.1522 9.30233 11.1522C9.26808 11.1522 9.23376 11.1455 9.2015 11.1317C9.13436 11.1031 9.08246 11.047 9.059 10.9778L8.55812 9.50183L7.05305 10.2387C7.09556 11.1412 7.35003 11.4795 7.63394 11.8565C7.87301 12.1741 8.14392 12.5336 8.30882 13.2179C8.49341 13.9833 8.49982 14.5645 8.50669 15.18C8.50987 15.466 8.51312 15.7621 8.53492 16.0886C8.66089 17.9777 9.05493 19.3234 9.61603 19.781C9.7859 19.9198 9.96948 19.9737 10.1773 19.9461C10.2126 19.9398 10.7693 19.8368 11.0132 19.4849C11.1195 19.3314 11.15 19.1503 11.1063 18.9322L11.1052 18.9264C10.5964 16.0561 11.2971 14.4526 12.1225 13.9092C12.5969 13.597 13.1409 13.597 13.6153 13.9092C14.4407 14.4525 15.1414 16.0561 14.6325 18.9264L14.6315 18.9322C14.5876 19.1512 14.6184 19.3328 14.7257 19.4867C14.9687 19.8355 15.5253 19.9398 15.5604 19.9461C15.7682 19.9733 15.9518 19.9193 16.1217 19.781C16.6827 19.3234 17.0768 17.9777 17.2026 16.0886C17.2245 15.7621 17.2276 15.4664 17.2312 15.1801C17.2363 14.7124 17.2411 14.2646 17.3241 13.7407L17.3257 13.7308C17.3517 13.5681 17.3853 13.3981 17.4288 13.2179C17.5938 12.5336 17.8681 12.1732 18.1103 11.8556C18.4886 11.3583 18.8155 10.9292 18.6549 9.18515C18.5814 8.39028 18.2102 7.83985 17.5519 7.54903C17.316 7.44472 17.0531 7.37805 16.7742 7.34408L17.3364 8.7993C17.3806 8.91439 17.3369 9.04508 17.232 9.1102L16.339 9.66553L17.3784 10.7829C17.4752 10.8868 17.4693 11.0496 17.3654 11.146C17.3159 11.1919 17.253 11.2147 17.1906 11.2147C17.1216 11.2147 17.053 11.1875 17.0023 11.133L15.7502 9.78687C15.698 9.73067 15.6735 9.65394 15.6837 9.5781C15.6939 9.50183 15.7375 9.43449 15.8027 9.3939L16.7803 8.78592L16.2132 7.31787C15.2594 7.33846 14.2135 7.66674 13.4478 8.13514C13.7441 8.31489 14.0016 8.50225 14.2055 8.6878C14.3106 8.78326 14.3183 8.94561 14.2229 9.05088C14.1274 9.1557 13.9649 9.16328 13.8599 9.06784Z" fill="currentColor" />
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.7153 16.1228C17.6355 17.3164 17.3647 19.4302 16.4461 20.1796C16.2115 20.3709 15.9499 20.4673 15.6663 20.4673C15.6075 20.4673 15.5478 20.4628 15.4871 20.4548C15.4854 20.4544 15.4837 20.4544 15.482 20.4539C15.4495 20.449 14.6815 20.3223 14.3038 19.7804C14.1155 19.5101 14.056 19.192 14.1268 18.8343C14.5918 16.208 13.9897 14.7713 13.3325 14.339C13.0334 14.1419 12.704 14.1419 12.4048 14.339C11.7477 14.7713 11.1454 16.208 11.6105 18.8343C11.6813 19.192 11.6218 19.5101 11.4334 19.7804C11.0557 20.3223 10.2877 20.449 10.2552 20.4539C10.2535 20.4544 10.2518 20.4544 10.2501 20.4548C9.89687 20.503 9.57435 20.4106 9.29106 20.1796C8.37225 19.4302 8.10158 17.3164 8.02197 16.1228C7.99928 15.7824 7.99587 15.4791 7.99261 15.1861C7.98848 14.8137 7.9847 14.4723 7.94368 14.102C6.1845 14.5979 5.10449 15.3431 5.10449 16.0737V22.2056H20.6388V16.0737C20.6388 15.3421 19.5565 14.5965 17.7938 14.1001C17.7526 14.4711 17.7489 14.813 17.7448 15.1861C17.7412 15.4791 17.7381 15.7824 17.7153 16.1228Z" fill="currentColor" />
                                </svg>
                            </div>
                            <a href="service-details.html" class="cs_iconbox_btn_icon cs_center">
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            </a>
                        </div>
                        <h3 class="cs_iconbox_title cs_fs_32 cs_bold">{{ $engagement->title }}</h3>
                        <p class="cs_iconbox_subtitle mb-0">Consectetur adipiscing elit, sed do eiusm od tempor incididunt ut
                            labore.</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End Features Section -->

<!-- Start About Section -->
<section class="cs_about cs_style_1 position-relative" id="about">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="row align-items-center cs_gap_y_40">
            <div class="col-lg-6">
                <div class="cs_about_thumbnail">
                    <div class="cs_about_thumbnail_1">
                        <img src="{{ asset('new/img/content/about-05.jpg')}}" alt="Image">
                        <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_player_btn cs_style_1 cs_video_open">
                            <span class="cs_player_btn_icon cs_center">
                                <img src="assets/img/icons/player_icon.svg" alt="Icon">
                            </span>
                            <span class="cs_play_btn_text cs_fs_18 cs_semibold cs_accent_color">How We Works</span>
                        </a>
                    </div>
                    <div class="cs_about_thumbnail_2">
                        <img src="{{ asset('new/img/content/about-02.jpg')}}" alt="About Image">
                        <svg class="cs_about_thumbnail_shape_2 cs_accent_color" width="123" height="125" viewBox="0 0 123 125" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle opacity="0.3" cx="73" cy="75" r="49.5" stroke="currentColor" stroke-dasharray="4 4" />
                            <circle opacity="0.3" cx="62" cy="50" r="49.5" stroke="currentColor" stroke-dasharray="4 4" />
                            <circle opacity="0.3" cx="50" cy="72" r="49.5" stroke="currentColor" stroke-dasharray="4 4" />
                        </svg>
                    </div>
                    <div class="cs_experience_box cs_center cs_accent_bg cs_radius_50">
                        <p class="cs_experience_box_number cs_fs_48 cs_bold cs_white_color">30+</p>
                        <p class="cs_experience_box_title cs_fs_20 cs_medium cs_white_color">Experience</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-duration="0.9s" data-wow-delay="0.25s">
                <div class="cs_about_content">
                    <div class="cs_section_heading cs_style_1">
                        <p class="cs_section_subtitle cs_accent_color cs_fs_18 cs_semibold cs_heading_font">About us</p>
                        <h2 class="cs_section_title cs_fs_48 mb-0">Rwanda Non-Communicable <span
                                class="cs_accent_color">Disease Alliance</span></h2>
                    </div>
                    <p class="cs_about_text">Rwanda Non-Communicable Diseases Alliance is a unique civil society network, <a
                            href="https://ncdalliance.org/news-events/news/launch-of-the-rwanda-non-communicable-disease-alliance"
                            target="_blank">founded in 2016</a> and uniting 25 organizations
                        ( NCDs Patients, health care professionals and youth-led organizations and private institutions)
                        working on NCDs in Rwanda.</p>
                    <ul class="cs_list cs_style_1 cs_mp0">
                        <li>
                            <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                                <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                                <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
                            </svg>
                            Top quality Technician team
                        </li>
                        <li>
                            <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                                <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                                <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
                            </svg>
                            World Class Reputed Hospital
                        </li>
                        <li>
                            <svg class="cs_accent_color" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.0097 25.9988C8.06573 25.9993 3.50673 23.1663 1.32323 18.7073C-0.886265 14.1938 -0.217265 8.56483 2.98873 4.70033C6.19124 0.839828 11.3977 -0.844672 16.2517 0.408828C16.7862 0.546828 17.1077 1.09233 16.9702 1.62733C16.8322 2.16233 16.2862 2.48333 15.7517 2.34583C11.6457 1.28533 7.23874 2.71033 4.52823 5.97783C1.81624 9.24733 1.25023 14.0098 3.11974 17.8288C4.98223 21.6328 9.09073 24.1108 13.3077 23.9958C17.5242 23.8808 21.3507 21.3163 23.0562 17.4628C24.0577 15.1998 24.2697 12.6373 23.6522 10.2468C23.5142 9.71233 23.8357 9.16683 24.3707 9.02833C24.9042 8.88983 25.4507 9.21183 25.5892 9.74683C26.3182 12.5713 26.0687 15.5993 24.8857 18.2723C22.8697 22.8273 18.3462 25.8588 13.3627 25.9948C13.2447 25.9973 13.1267 25.9988 13.0097 25.9988Z" fill="currentColor"></path>
                                <path d="M12.9999 16.1171C12.7439 16.1171 12.4879 16.0196 12.2929 15.8241C11.9024 15.4336 11.9024 14.8006 12.2929 14.4101L24.2929 2.41006C24.6829 2.01956 25.3169 2.01956 25.7069 2.41006C26.0974 2.80056 26.0974 3.43356 25.7069 3.82406L13.7069 15.8241C13.5119 16.0191 13.2559 16.1171 12.9999 16.1171Z" fill="currentColor"></path>
                                <path d="M13.0002 16.1174C12.7442 16.1174 12.4882 16.0199 12.2932 15.8244L8.05069 11.5819C7.66019 11.1914 7.66019 10.5584 8.05069 10.1679C8.44069 9.77737 9.07469 9.77737 9.46469 10.1679L13.7072 14.4104C14.0977 14.8009 14.0977 15.4339 13.7072 15.8244C13.5122 16.0194 13.2562 16.1174 13.0002 16.1174Z" fill="currentColor"></path>
                            </svg>
                            Discount on all Pathology & Radiology treatment
                        </li>
                    </ul>
                    <a href="{{ URL::route('about_us') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100"><span class="cs_btn_text">Info More About</span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="cs_about_shape_1">
        <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_2">
        <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_3">
        <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_4">
        <img src="assets/img/about_shape_1.svg" alt="Shape Image">
    </div>
    <div class="cs_about_shape_5">
        <img src="assets/img/about_shape_4.svg" alt="Shape Image">
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>
<!-- End About Section -->

<section class="cs_video_section cs_style_1 cs_accent_bg position-relative mt-5">
    <div class="container">
        <div class="cs_vider_wrapper cs_style_1">
            <a href="https://www.youtube.com/embed/rRid6GCJtgc" class="cs_player_btn cs_style_2 cs_center cs_video_open wow zoomIn animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: zoomIn;">
                <span></span>
            </a>
            <h2 class="cs_video_title">Here our Stories
                <span class="cs_accent_color">About NCDs</span>
            </h2>
            <p class="cs_video_subtitle">Most people nowadays face a lot of challenges because of the COVID-19
                pandemic either changing their lifestyles,
                economy, and health, particularly people living with non-communicable diseases (PLWNCDs) who are
                more at
                risk for severe complications of COVID-19 and death when they are contracted.</p>
            <div class="cs_btns_group wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInUp;">
                <a href="{{ url('ncd_stories') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
                    <span class="cs_btn_text">Learn More</span>
                </a>
                <a href="{{ url('message') }}" class="cs_btn cs_style_1 cs_fs_18 cs_semibold cs_accent_bg  cs_radius_100">
                    <span class="cs_btn_text">Contact Now</span>
                </a>
            </div>
            <div class="cs_video_shape_3">
                <img src="assets/img/heartbeat.svg" alt="Icon">
            </div>
            <div class="cs_video_shape_4">
                <img src="assets/img/stethoscope.svg" alt="Icon">
            </div>
        </div>
        <div class="cs_video_shape_1">
            <img src="assets/img/icons/coronavirus.svg" alt="Icon">
        </div>
        <div class="cs_video_shape_2">
            <img src="assets/img/icons/health-insurance.svg" alt="Icon" class="cs_spinner_img">
        </div>
    </div>
</section>

<section class="cs_service_area cs_accent_bg position-relative mb-5 pb-5">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_right cs_white_color_8">Working together as an alliance provides a mutual platform for collaboration and joint advocacy to drive the NCDs agenda forward.</div>
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_white_color">Our Stories</p>
                <h2 class="cs_section_title cs_white_color">Hear testimony from our community.</h2>
            </div>
        </div>
        <div class="cs_height_50 cs_height_lg_40"></div>
        <div class="row cs_gap_y_40">
            <div class="col-xl-12">
                <div class="cs_iconbox_wrapper cs_style_2">
                    @foreach( $stories as $story)
                    <div class="col-md-4 ">
                        <div class="cs_iconbox cs_style_2 wow fadeInUp animated" data-wow-duration="0.9s" data-wow-delay="0.25s" style="visibility: visible; animation-duration: 0.9s; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <div class="cs_iconbox_text">
                                <h3 class="cs_iconbox_title cs_fs_24 cs_white_color"><a data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $story->id }}">{{ $story->name }}</a>
                                </h3>
                                <p class="cs_iconbox_subtitle cs_white_color">{{ Str::limit($story->headline, 100) }}</p>
                                <a data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $story->id }}" class="cs_text_btn">
                                    <span>Read More</span>
                                    <div class="cs_text_btn_icon cs_center">
                                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                        <span><i class="fa-solid fa-arrow-right-long"></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="cs_service_shape_1 position-absolute">
        <img src="assets/img/heartbeat_2.svg" alt="Shape">
    </div>
    <div class="cs_service_shape_2 position-absolute">
        <img src="assets/img/stethoscope_2.svg" alt="Shape" class="cs_spinner_img">
    </div>
</section>

@foreach( $stories as $story)
<!-- static Modal -->
<div class="modal fade" id="staticBackdrop{{ $story->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container">
                    <h3>{{ $story->name }}s' Story</h3>
                    <h5><strong>Disease</strong></strong>: {{ $story->disease }}</h5>

                    <p class="mt-3">
                        {!! $story->content !!}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@include('includes.event-posts')

<section class="cs_service_area cs_type_3">
    <div class="cs_height_120 cs_height_lg_80"></div>
    <div class="container">
        <div class="cs_section_heading cs_style_1 cs_type_1">
            <div class="cs_section_heading_left">
                <p class="cs_section_subtitle cs_fs_18 cs_semibold cs_accent_color cs_heading_font">Resources</p>
                <h2 class="cs_section_title cs_accent_color mb-0">We offer more than Services &amp; all Solutions Medical.</h2>
            </div>
            <div class="cs_section_heading_right cs_accent_color text-end">the other hand, we denounce with righteous
                indignation and dislike men who are so beguiled and demoralized</div>
        </div>
        <div class="cs_height_100 cs_height_lg_40"></div>
        <div class="row cs_gap_y_30">
            @foreach($resources_data as $resource)
            @if( empty( (json_decode($resource->file))[0]->download_link ) )
            @continue
            @else
            <div class="col-lg-4">
                <?php $file = (json_decode($resource->file))[0]->download_link; ?>
                <div class="cs_iconbox cs_style_8 cs_white_bg">
                    <h3 class="cs_iconbox_title cs_fs_32 cs_semibold">
                        <a href="{{ URL::asset( $file ) }}" target="_blank">{{ Str::limit($resource->title, 50)}}</a>
                    </h3>
                    <!-- <p class="cs_iconbox_subtitle">
                        {{ Str::limit($resource->title, 50)}}
                    </p> -->
                    <a href="{{ URL::asset( $file ) }}" target="_blank" class="cs_text_btn cs_fs_18 cs_semibold cs_heading_color">
                        <span>Read More</span>
                        <div class="cs_text_btn_icon cs_center">
                            <span><i class="fa-solid fa-arrow-right-long"></i></span>
                            <span><i class="fa-solid fa-arrow-right-long"></i></span>
                        </div>
                    </a>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
    <div class="cs_height_120 cs_height_lg_80"></div>
</section>

@endsection