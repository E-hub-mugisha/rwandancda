@extends('layouts.base')
@section('content')
  <!-- ======= Intro Section ======= -->
  <section id="conf-intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url({{ URL::asset('new/img/conference/3.jpeg') }})">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">National NCD Conference 2021</h2>
                <p class="animate__animated animate__fadeInUp"><span class="fa fa-calendar"></span>&nbsp;25-26th November 2021 &nbsp;&nbsp;<span class="fa fa-map-marker"></span>&nbsp;Kigali-Rwanda</p>
                <!--<a href="#" class="btn-get-started scrollto animate__animated animate__fadeInUp">Save the date</a>-->
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
        <section id="conference-about">
            <div class="container" data-aos="zoom-out">
                <header class="section-header">
                    <h3>THE NATIONAL NCD CONFERENCE 2021</h3>
                </header>
                <div class="row conference-info">
                    <div class="col-md-6 fes7-text-cont conference-detail p-80-cont">
                        <h3><b>THEME:</b><br>Multisectoral Collaboration for NCDs and UHC</h3>
                        <p class="mb-60">
                            Rwanda NCD Alliance hosted the first-ever highlevel national conference on non-communicable diseases (NCDs) in which different stakeholders, from health and non-health sectors, and people living with NCDs discussed, learned, and shared experience on how to further promote multisectoral collaboration and participation to NCD prevention and universal health coverage (UHC) for
                        </p>
                        <a href="https://www.rwandancda.org/new/resources/April2022/XkoinVrTaQ5BvcQom89O.pdf" target=”_blank” class="btn-get-started scrollto animate__animated animate__fadeInUp">Conference Report:&nbsp;<i class="fa fa-download" aria-hidden="true"></i></a>
                    </div>
                    <div class="col-md-6 conference-image">
                        <img src="{{ URL::asset('new/img/conference/3.jpeg') }}" height="100%" width="100%">
                    </div>
                </div>
            </div>
        </section>
    
    <!-- ======= Our Clients Section ======= -->
    <section id="daystogo">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Days to go:</h3>
        </header>
        <div class="row">
            <div class="col-md-4">
                <h3>When</h3>
                <p>25th - 26th November 2021</p>
            </div>
            <div class="col-md-4">
                <h3>Where?</h3>
                <p>Kigali-Rwanda</p>
            </div>
            <div class="col-md-4">
                <h3>Theme</h3>
                <p>Multisectoral Collaboration for NCDs and UHC</p>
            </div>
        </div>
        

      </div>
    
    </section>
          
        <section id="conference-about">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <h3>National NCD Conference 2021 Photos:</h3>
                </header>
                <div class="row conference-info">
                    <div class="d-flex fes7-text-cont justify-content-center conference-detail p-80-cont">
                        <a data-flickr-embed="true" href="https://www.flickr.com/photos/182846285@N04/albums/72157720196860688" title="National NCD Conference 2021"><img src="https://live.staticflickr.com/65535/51720385453_86768b3d03.jpg" width="500" height="375" alt="National NCD Conference 2021"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="https://flic.kr/s/aHsmXchWYY" target=”_blank” class="btn btn-outline-success scrollto animate__animated animate__fadeInUp">More Photo</a>
                    </div>
                </div>
            </div>
        </section>
    
    <!-- ======= Our Clients Section ======= -->
    <section id="clients">
      <div class="container" data-aos="zoom-in">

        <header class="section-header">
          <h3>Our Partners</h3>
        </header>
        
        <div class="owl-carousel clients-carousel">
            <!--<img src="https://www.rwandancda.org/partners/February2021/b00w32jDyqd1N10IO3LW.png" />  -->
            <img src="https://www.rwandancda.org/new/partners/July2022/hfKRP9AyRW1iwSQfC234.png" />
            <img src="https://www.rwandancda.org/new/partners/April2021/4XH2GhDC4XkYLHvkchl3.png" />
        </div>
        

      </div>
    </section> 
@endsection