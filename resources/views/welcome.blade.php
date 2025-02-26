<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('img/logo2.jpeg') }}" rel="icon">
  <link href="{{ URL::asset('img/logo2.jpeg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('vendor/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <!-- <link href="{{ URL::asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet"> -->
  <!-- <link href="{{ URL::asset('vendor/venobox/venobox.css') }}" rel="stylesheet"> -->
  <link href="{{ URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link href="{{ URL::asset('vendor/aos/aos.css') }}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

</head>
<style>
  .testimonial9 {
    font-family: "Montserrat", sans-serif;
    color: #8d97ad;
    font-weight: 300;
  }

  .testimonial9 h1,
  .testimonial9 h2,
  .testimonial9 h3,
  .testimonial9 h4,
  .testimonial9 h5,
  .testimonial9 h6 {
    color: #3e4555;
  }

  .testimonial9 .bg-light {
    background-color: #f4f8fa !important;
  }

  .testimonial9 h5 {
    line-height: 30px;
    font-size: 18px;
  }

  .testimonial9 .font-13 {
    font-size: 13px;
  }

  .testimonial9 .card.card-shadow {
    -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
  }

  .testimonial9 .card::after {
    position: absolute;
    bottom: -15px;
    left: 35px;
    content: '';
    border-left: 15px solid transparent;
    border-right: 15px solid transparent;
    border-top: 15px solid #ffffff;
  }

  .testimonial9 .owl-theme .owl-dots .owl-dot.active span,
  .testimonial9 .owl-theme .owl-dots .owl-dot:hover span {
    background: #188ef4;
  }

  .testimonial9 .owl-dots {
    position: absolute;
    left: -108%;
    top: 70%;
  }

  .testimonial9 .devider {
    height: 2px;
    width: 40px;
  }

  .testimonial9 .bg-info {
    background-color: #188ef4 !important;
  }

  .testimonial9 .customer-thumb img {
    width: 60px;
  }

  @media (max-width: 767px) {
    .testimonial9 .owl-dots {
      position: relative;
      top: 0px;
      left: 0px;
    }
  }

  .banner3 {
    font-family: "Montserrat", sans-serif;
    color: #8d97ad;
    font-weight: 300;
    /*max-height: 800px;*/
  }

  .banner3 .banner {
    position: relative;
    max-height: 700px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center top;
    width: 100%;
    display: table;
  }

  .banner3 .banner::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    opacity: 0.75;
  }

  .banner3 h1,
  .banner3 h2,
  .banner3 h3,
  .banner3 h4,
  .banner3 h5,
  .banner3 h6 {
    color: #3e4555;
  }

  .banner3 .font-weight-medium {
    font-weight: 500;
  }

  .banner3 .subtitle {
    color: #8d97ad;
    line-height: 24px;
  }

  .banner3 .btn-danger-gradiant {
    background: #ff4d7e;
    background: -webkit-linear-gradient(legacy-direction(to right), #ff4d7e 0%, #ff6a5b 100%);
    background: -webkit-gradient(linear, left top, right top, from(#ff4d7e), to(#ff6a5b));
    background: -webkit-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
    background: -o-linear-gradient(left, #ff4d7e 0%, #ff6a5b 100%);
    background: linear-gradient(to right, #ff4d7e 0%, #ff6a5b 100%);
    border: 0px;
  }

  .banner3 .btn-danger-gradiant:hover {
    background: #ff6a5b;
    background: -webkit-linear-gradient(legacy-direction(to right), #ff6a5b 0%, #ff4d7e 100%);
    background: -webkit-gradient(linear, left top, right top, from(#ff6a5b), to(#ff4d7e));
    background: -webkit-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
    background: -o-linear-gradient(left, #ff6a5b 0%, #ff4d7e 100%);
    background: linear-gradient(to right, #ff6a5b 0%, #ff4d7e 100%);
  }

  .banner3 .btn-danger-gradiant.active,
  .banner3 .btn-danger-gradiant:active,
  .banner3 .btn-danger-gradiant:focus {
    -webkit-box-shadow: 0px;
    box-shadow: 0px;
    opacity: 1;
  }


  .banner3 .btn-md {
    padding: 15px 45px;
    font-size: 16px;
  }

  .banner3 .form-row {
    margin: 0;
  }

  .banner3 label.font-12 {
    font-size: 12px;
    font-weight: 500;
    margin-bottom: 5px;
  }

  .banner3 .form-control {
    color: #8d97ad;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
  }

  .banner3 .date label {
    cursor: pointer;
    margin: 0;
  }

  @media (max-width: 370px) {

    .banner3 .left,
    .banner3 .right {
      padding: 25px;
    }
  }

  @media (max-width: 320px) {

    .banner3 .left,
    .banner3 .right {
      padding: 25px 15px;
    }
  }

  .banner3 .font-14 {
    font-size: 14px;
  }

  .banner3 .text-inverse {
    color: #3e4555 !important;
  }

  #myCarousel .carousel-caption {
    left: 0;
    right: 0;
    bottom: 0;
    text-align: left;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
    text-shadow: none;
  }

  #myCarousel .list-group {
    position: absolute;
    top: 0;
    right: 0;
  }

  #myCarousel .list-group-item {
    border-radius: 0px;
    cursor: pointer;
  }

  #myCarousel .list-group .active {
    background-color: #eee;
  }

  @media (min-width: 992px) {

    /*#myCarousel {padding-right:33.3333%;}*/
    #myCarousel .carousel-controls {
      display: none;
    }
  }

  @media (max-width: 991px) {

    .carousel-caption p,
    #myCarousel .list-group {
      display: none;
    }
  }

  .badge {
    font-weight: 600;
    font-size: 13px;
    color: white;
    background-color: #289dcc;
  }

  /*FEATURED*/
  .mg-2,
  .mg-4 {
    margin-left: -20px;
  }

  .linkfeat {
    background: rgba(76, 76, 76, 0);
    background: -moz-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
    background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(76, 76, 76, 0)), color-stop(49%, rgba(48, 48, 48, 0)), color-stop(100%, rgba(19, 19, 19, 1)));
    background: -webkit-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
    background: -o-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
    background: -ms-linear-gradient(top, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
    background: linear-gradient(to bottom, rgba(76, 76, 76, 0) 0%, rgba(48, 48, 48, 0) 49%, rgba(19, 19, 19, 1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0);
  }

  #myCarousel {
    max-width: 1200px;
    margin: 0 auto;
  }

  .carousel-control-next,
  .carousel-control-prev {
    width: 9% !important;
  }

  .carousel-inner {
    background: #111;
  }

  .carousel-indicators {
    bottom: -13px !important;
  }

  .carousel-item {
    padding-bottom: 25px;
  }

  .video {
    width: 100%;
  }

  /*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
  .blog {
    padding: 40px 0 20px 0;
  }

  .blog .entry {
    padding: 30px;
    margin-bottom: 60px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }

  .blog .entry .entry-img {
    max-height: 440px;
    margin: -30px -30px 20px -30px;
    overflow: hidden;
  }

  .blog .entry .entry-title {
    font-size: 28px;
    font-weight: bold;
    padding: 0;
    margin: 0 0 20px 0;
  }

  .blog .entry .entry-title a {
    color: #333333;
    transition: 0.3s;
  }

  .blog .entry .entry-title a:hover {
    color: #18d26e;
  }

  .blog .entry .entry-meta {
    margin-bottom: 15px;
    color: #18d26e;
  }

  .blog .entry .entry-meta ul {
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    align-items: center;
    padding: 0;
    margin: 0;
  }

  .blog .entry .entry-meta ul li+li {
    padding-left: 20px;
  }

  .blog .entry .entry-meta i {
    font-size: 16px;
    margin-right: 8px;
    line-height: 0;
  }

  .blog .entry .entry-meta a {
    color: #666666;
    font-size: 14px;
    display: inline-block;
    line-height: 1;
  }

  .blog .entry .entry-content p {
    line-height: 24px;
  }

  .blog .entry .entry-content .read-more {
    -moz-text-align-last: right;
    text-align-last: right;
  }

  .blog .entry .entry-content .read-more a {
    display: inline-block;
    background: #fff;
    color: #333333;
    padding: 6px 30px 8px 30px;
    transition: 0.3s;
    font-size: 14px;
    border-radius: 50px;
    border: 2px solid #18d26e;
  }

  .blog .entry .entry-content .read-more a:hover {
    background: #18d26e;
    color: #fff;
  }

  .blog .entry .entry-content h3 {
    font-size: 22px;
    margin-top: 30px;
    font-weight: bold;
  }

  .blog .entry .entry-content blockquote {
    overflow: hidden;
    background-color: #fafafa;
    padding: 60px;
    position: relative;
    text-align: center;
    margin: 20px 0;
  }

  .blog .entry .entry-content blockquote p {
    color: #666666;
    line-height: 1.6;
    margin-bottom: 0;
    font-style: italic;
    font-weight: 500;
    font-size: 22px;
  }

  .blog .entry .entry-content blockquote::after {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 3px;
    background-color: #18d26e;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .blog .entry .entry-footer {
    padding-top: 10px;
    border-top: 1px solid #e6e6e6;
  }

  .blog .entry .entry-footer i {
    color: #18d26e;
    display: inline;
  }

  .blog .entry .entry-footer a {
    color: #666666;
    transition: 0.3s;
  }

  .blog .entry .entry-footer a:hover {
    color: #18d26e;
  }

  .blog .entry .entry-footer .cats {
    list-style: none;
    display: inline;
    padding: 0 20px 0 0;
    font-size: 14px;
  }

  .blog .entry .entry-footer .cats li {
    display: inline-block;
  }

  .blog .entry .entry-footer .tags {
    list-style: none;
    display: inline;
    padding: 0;
    font-size: 14px;
  }

  .blog .entry .entry-footer .tags li {
    display: inline-block;
  }

  .blog .entry .entry-footer .tags li+li::before {
    padding-right: 6px;
    color: #6c757d;
    content: ",";
  }

  .blog .entry .entry-footer .share {
    font-size: 16px;
  }

  .blog .entry .entry-footer .share i {
    padding-left: 5px;
  }

  .blog .entry-single {
    margin-bottom: 30px;
  }

  .blog .blog-author {
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }

  .blog .blog-author img {
    width: 120px;
    margin-right: 20px;
  }

  .blog .blog-author h4 {
    font-weight: 600;
    font-size: 22px;
    margin-bottom: 0px;
    padding: 0;
    color: #333333;
  }

  .blog .blog-author .social-links {
    margin: 0 10px 10px 0;
  }

  .blog .blog-author .social-links a {
    color: rgba(51, 51, 51, 0.4);
    margin-right: 5px;
    transition: 0.3s;
  }

  .blog .blog-author .social-links a:hover {
    color: #18d26e;
  }

  .blog .blog-author p {
    font-style: italic;
    color: #666666;
  }

  .blog .blog-comments {
    margin-bottom: 30px;
  }

  .blog .blog-comments .comments-count {
    font-weight: bold;
  }

  .blog .blog-comments .comment {
    margin-top: 30px;
    position: relative;
  }

  .blog .blog-comments .comment .comment-img {
    margin-right: 14px;
  }

  .blog .blog-comments .comment .comment-img img {
    width: 60px;
  }

  .blog .blog-comments .comment h5 {
    font-size: 16px;
    margin-bottom: 2px;
  }

  .blog .blog-comments .comment h5 a {
    font-weight: bold;
    color: #666666;
    transition: 0.3s;
  }

  .blog .blog-comments .comment h5 a:hover {
    color: #333333;
  }

  .blog .blog-comments .comment h5 .reply {
    padding-left: 10px;
    color: #18d26e;
  }

  .blog .blog-comments .comment h5 .reply i {
    font-size: 20px;
  }

  .blog .blog-comments .comment time {
    display: block;
    font-size: 14px;
    color: #999999;
    margin-bottom: 5px;
  }

  .blog .blog-comments .comment.comment-reply {
    padding-left: 40px;
  }

  .blog .blog-comments .reply-form {
    margin-top: 30px;
    padding: 30px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }

  .blog .blog-comments .reply-form h4 {
    font-weight: bold;
    font-size: 22px;
  }

  .blog .blog-comments .reply-form p {
    font-size: 14px;
  }

  .blog .blog-comments .reply-form input {
    border-radius: 4px;
    padding: 10px 10px;
    font-size: 14px;
  }

  .blog .blog-comments .reply-form input:focus {
    box-shadow: none;
    border-color: #666666;
  }

  .blog .blog-comments .reply-form textarea {
    border-radius: 4px;
    padding: 10px 10px;
    font-size: 14px;
  }

  .blog .blog-comments .reply-form textarea:focus {
    box-shadow: none;
    border-color: #666666;
  }

  .blog .blog-comments .reply-form .form-group {
    margin-bottom: 25px;
  }

  .blog .blog-comments .reply-form .btn-primary {
    border-radius: 50px;
    padding: 10px 30px;
    border: 0;
    background-color: #18d26e;
  }

  .blog .blog-comments .reply-form .btn-primary:hover {
    background-color: #1ee57a;
  }

  .blog .blog-pagination {
    color: #18d26e;
  }

  .blog .blog-pagination ul {
    display: flex;
    padding: 0;
    margin: 0;
    list-style: none;
  }

  .blog .blog-pagination li {
    margin: 0 5px;
    transition: 0.3s;
  }

  .blog .blog-pagination li a {
    color: #18d26e;
    padding: 6px 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50px;
    font-weight: bold;
  }

  .blog .blog-pagination li.active,
  .blog .blog-pagination li:hover {
    background: #18d26e;
    border-radius: 50px;
  }

  .blog .blog-pagination li.active a,
  .blog .blog-pagination li:hover a {
    color: #fff;
  }

  .blog .sidebar {
    padding: 30px;
    margin: 0 0 60px 20px;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
  }

  .blog .sidebar .sidebar-title {
    font-size: 20px;
    font-weight: 700;
    padding: 0 0 0 0;
    margin: 0 0 15px 0;
    color: #333333;
    position: relative;
  }

  .blog .sidebar .sidebar-item {
    margin-bottom: 30px;
  }

  .blog .sidebar .search-form form {
    background: #fff;
    border: 1px solid #ddd;
    padding: 3px 10px;
    position: relative;
    border-radius: 50px;
  }

  .blog .sidebar .search-form form input {
    border: 0;
    padding: 4px;
    border-radius: 4px;
    width: calc(100% - 70px);
    box-shadow: none;
  }

  .blog .sidebar .search-form form input:focus {
    box-shadow: none;
  }

  .blog .sidebar .search-form form button {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 30px;
    margin: -1px;
    background: #18d26e;
    color: #fff;
    transition: 0.3s;
    line-height: 0;
    border-radius: 50px;
  }

  .blog .sidebar .search-form form button i {
    line-height: 0;
  }

  .blog .sidebar .search-form form button:hover {
    background: #13a456;
  }

  .blog .sidebar .categories ul {
    list-style: none;
    padding: 0;
  }

  .blog .sidebar .categories ul li+li {
    padding-top: 10px;
  }

  .blog .sidebar .categories ul a {
    color: #333333;
    transition: 0.3s;
  }

  .blog .sidebar .categories ul a:hover {
    color: #18d26e;
  }

  .blog .sidebar .categories ul a span {
    padding-left: 5px;
    color: #b3b3b3;
    font-size: 14px;
  }

  .blog .sidebar .recent-posts .post-item+.post-item {
    margin-top: 15px;
  }

  .blog .sidebar .recent-posts img {
    width: 80px;
    float: left;
  }

  .blog .sidebar .recent-posts h4 {
    font-size: 15px;
    margin-left: 95px;
    font-weight: bold;
  }

  .blog .sidebar .recent-posts h4 a {
    color: #333333;
    transition: 0.3s;
  }

  .blog .sidebar .recent-posts h4 a:hover {
    color: #18d26e;
  }

  .blog .sidebar .recent-posts time {
    display: block;
    margin-left: 95px;
    font-style: italic;
    font-size: 14px;
    color: #b3b3b3;
  }

  .blog .sidebar .tags {
    margin-bottom: -10px;
  }

  .blog .sidebar .tags ul {
    list-style: none;
    padding: 0;
  }

  .blog .sidebar .tags ul li {
    display: inline-block;
  }

  .blog .sidebar .tags ul a {
    color: #333333;
    font-size: 14px;
    padding: 6px 20px;
    margin: 0 6px 8px 0;
    border: 1px solid #18d26e;
    display: inline-block;
    border-radius: 50px;
    transition: 0.3s;
  }

  .blog .sidebar .tags ul a:hover {
    color: #fff;
    background: #18d26e;
  }

  .blog .sidebar .tags ul a span {
    padding-left: 5px;
    color: white;
    font-size: 14px;
  }
</style>

<body>

  @include('header')

  <!-- ======= Intro Section ======= -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ URL::asset('img/intro-carousel/header.png') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Fourth Global NCD Alliance Forum to take place in
                  Kigali, Rwanda in October 2024</h2>
                <!--<p class="animate__animated animate__fadeInUp d-none d-sm-block">NCDs affect people in all corners of the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to affect each and everyone of us! It’s better to fight as one..</p>-->
                <a href="/ncd_news/network-release-fourth-global-ncd-alliance-forum-to-take-place-in-kigali-rwanda-in-october-2024" class="btn-get-started scrollto animate__animated animate__fadeInUp">Read More....</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ URL::asset('img/intro-carousel/1.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">WE STAND UNITED FOR OUR LIVES AND FOR OUR FUTURE
                  GENERATION</h2>
                <p class="animate__animated animate__fadeInUp d-none d-sm-block">NCDs affect people in all corners of
                  the globe, rich and poor, old and young in cities and villages, the privileged and the vulnerable.
                  They are likely to affect each and everyone of us! It’s better to fight as one..</p>
                <a href="{{ URL::route('about_us') }}" class="btn-get-started scrollto animate__animated animate__fadeInUp">Read More....</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ URL::asset('img/intro-carousel/2.jpeg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">CAR FREE DAY INITIATIVE</h2>
                <p class="animate__animated animate__fadeInUp">NCDs affect people in all corners of the globe, rich and
                  poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to
                  affect each and everyone of us! It’s better to fight as one..</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ URL::asset('img/intro-carousel/2.png') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">VIRTUAL FITNESS SHOW & HEALTHY LIFE EDUCATION</h2>
                <p class="animate__animated animate__fadeInUp">NCDs affect people in all corners of the globe, rich and
                  poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to
                  affect each and everyone of us! It’s better to fight as one..</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ URL::asset('img/intro-carousel/3.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">CITY CANCER CHALLENGE</h2>
                <p class="animate__animated animate__fadeInUp">NCDs affect people in all corners of the globe, rich and
                  poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to
                  affect each and everyone of us! It’s better to fight as one..</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ URL::asset('img/intro-carousel/4.png') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">NCDs STORIES SHARING</h2>
                <p class="animate__animated animate__fadeInUp">NCDs affect people in all corners of the globe, rich and
                  poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to
                  affect each and everyone of us! It’s better to fight as one..</p>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url({{ URL::asset('img/intro-carousel/5.jpg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">MEDIA ENGAGEMENT</h2>
                <p class="animate__animated animate__fadeInUp">NCDs affect people in all corners of the globe, rich and
                  poor, old and young in cities and villages, the privileged and the vulnerable. They are likely to
                  affect each and everyone of us! It’s better to fight as one..</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about">
      <div class="container" data-aos="fade-up">

        <header class="section-header">
        </header>

        <div class="row about-cols" style="text-align: justify;">


          <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
            <div class="about-col shadow-lg p-3 mb-5 bg-white rounded" style="height: 500px;">
              <div class="img">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#"> Vision</a></h2>
              <p>
                A healthy people in a nation free from preventable suffering, disability, and deaths caused by Non
                Communicable Diseases.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
            <div class="about-col shadow-lg p-3 mb-5 bg-white rounded" style="height: 500px;">
              <div class="img">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>

              <h2 class="title"><a href="#">Our Mission</a></h2>
              <p>
                To unite the efforts and create a powerful voice for the NCDs awareness rising, advocate for the
                prevention and control of NCDs and their risk factors in Rwanda; by promoting multisectoral
                partnerships, healthy living style education, early detection and responding to NCDs challenges to
                improve health and well-being.
              </p>
            </div>
          </div>

          <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
            <div class="about-col shadow-lg p-3 mb-5 bg-white rounded" style="height: 500px;">
              <div class="img">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Our Objectives</a></h2>
              <p data-aos="fade-up" data-aos-delay="100">Building capacity and providing technical support to the
                members</p>
              <p data-aos="fade-up" data-aos-delay="100">Leading awareness and healthy life education for NCDs
                Prevention</p>
              <p data-aos="fade-up" data-aos-delay="100">Empower people living with NCDs and Advocate for them on access
                to quality care</p>
              <p data-aos="fade-up" data-aos-delay="100">Advocate for the community concerning the prevention and
                control of NCDs</p>
              <p data-aos="fade-up" data-aos-delay="100">Contribute to evidence based NCD policies and practices.</p>
              </p>
            </div>
          </div>


        </div>

      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3 class="section-title">{{ $header ?? 'Recent News & Events' }}</h3>
        </header>
        <div class="row">
          @foreach($posts as $post)
          <div class="col-lg-4 entries">

            <article class="entry" style="height: 30rem;">

              <div class="entry-img">
                <img src="{{ URL::asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid" height="100">
              </div>

              <h2 class="entry-title">
                <a href="{{ url('ncd_news', $post->slug) }}">{{ Str::limit($post->title, 60) }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="{{ url('ncd_news', $post->slug) }}"><time datetime="2020-01-01">{{ $post->created_at }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ url('ncd_news', $post->slug) }}">Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                <!--<p>-->
                <!--    {!! Str::limit($post->body, 40) !!}-->
                <!--</p>-->

                <div class="read-more">
                  <a href="{{ url('ncd_news', $post->slug) }}">Read More</a>
                </div>
              </div>

            </article><!-- End blog entry -->
          </div>
          @endforeach
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="active"><a href="{{ url('ncd_news')}}">Read more</a></li>
            </ul>
          </div>

        </div><!-- End blog entries list -->
      </div>
    </section><!-- End Blog Section -->

    <div class="testimonial9 py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-7">
            <h3 class="mt-4 section-header">NCD Stories</h3>
            <span class="devider bg-success d-inline-block my-3"></span>
            <p style="text-align: justify;">Most people nowadays face a lot of challenges because of the COVID-19
              pandemic either changing their lifestyles,
              economy, and health, particularly people living with non-communicable diseases (PLWNCDs) who are more at
              risk
              for severe complications of COVID-19 and death when they are contracted. This is a compiled 15 testimonies
              collected through Our Views Our Voices
              Project funded by NCD Alliance to support the involvement of PLWNCDs in “NCD Story Sharing".</p>
          </div>
          <div class="col-lg-5 col-md-5 ml-auto">
            <div class="owl-carousel testimonials-carousel owl-theme testi9">
              @foreach($stories as $story)
              <!-- item -->
              <div class="item">
                <div class="card card-shadow border-0 mb-4 position-relative">
                  <div class="p-4">
                    <h5 class="font-weight-light">
                      {{ $story->headline }}
                    </h5>
                    <div>
                      <a href="{{ url('story', $story->name) }}" class="btn btn-outline-primary">Read Story ..</a>
                    </div>
                  </div>
                </div>
                <div class="d-flex align-items-center ml-3">
                  <div class="customer-thumb"><img src="{{ URL::asset($story->photo) }}" alt="wrapkit" class="rounded-circle mr-3" style="max-width:100px;width:auto;height:50%;" /></div>
                  <div class="">
                    <h6 class="font-weight-bold mb-0">{{ $story->name }}</h6><span class="font-13">{{ $story->disease }}</span>
                  </div>
                </div>
              </div>
              <!-- item -->
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container">

        <header class="section-header">
          <h3>Recent Resources</h3>
        </header>
        <div class="row clients-carousel">
          @foreach($resources_data as $resource)
          @if( empty( (json_decode($resource->file))[0]->download_link ) )
          @continue
          @else
          <?php $file = (json_decode($resource->file))[0]->download_link; ?>
          <!--<a href="{{ Voyager::image( $file ) }}" target="_blank"></a>-->

          <div class="col-md-4 card">
            <div class="card-body  d-flex flex-column">
              <h6 class="card-subtitle mb-2 text-muted"><img src="{{ URL::asset('img/pdf_icon.png') }}" style="width: 50px; height: 50px;"></h6>
              <p class="card-text">{{ Str::limit($resource->title, 50)}}.</p>
              <a href="{{ URL::asset( $file ) }}" target="_blank" type="button" class="btn btn-outline-success mt-auto">Read More...</a>
            </div>
          </div>

          @endif
          @endforeach

          <!-- <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="active"><a href="{{ url('ncd_resources')}}">Read more</a></li>
            </ul>
          </div> -->
        </div>
      </div>
    </section>
    <!-- End Our Clients Section -->

    

    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>PROJECT Partners</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          @foreach($partners as $partner)
          @if($partner->type == 1)
          <img src="{{ URL::asset($partner->logo) }}" />
          @endif

          @endforeach


        </div>

        <header class="section-header">
          <h3>STRATEGIC Partners</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          @foreach($partners as $partner)
          @if($partner->type != 1)
          <img src="{{ URL::asset($partner->logo) }}" alt="{{ $partner->name }}" />
          @endif

          @endforeach


        </div>

      </div>
    </section>
    <!-- End Our Clients Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">

        <div class="text-center">
          <a style="background: #0ed94c; border-color: #0ed94c; color: #fff;" href="{{ URL::route('message') }}" type="button" class="btn btn-success">Send Us Message</a>
        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  @include('includes.footer')

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ URL::asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ URL::asset('vendor/venobox/venobox.min.js') }}"></script>
  <!-- <script src="{{ URL::asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script> -->
  <!-- <script src="{{ URL::asset('vendor/aos/aos.js') }}"></script> -->
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

  <script src="{{ URL::asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ URL::asset('js/main.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>