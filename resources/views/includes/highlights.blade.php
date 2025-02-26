<style>
    /*HYPER LINK*/
    a:hover {}

    a,
    a:focus,
    a:hover {
        text-decoration: none;
        color: inherit;
    }

    a:hover,
    .btn {
        outline: none !important;
    }

    /*ROUNDED CORNER*/


    /*CATEGORIES BADGE*/
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

    .embed-responsive-16by9 {
        padding-bottom: 56.25%;
        /* 16:9 ratio */
        height: 0;
        overflow: hidden;
        position: relative;
        width: 100%;
    }

    .embed-responsive-16by9 iframe {
        border: 0;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
    }
    .fixed-size {
    width: 100%; /* Ensure full width */
    height: 300px; /* Set a fixed height */
    object-fit: cover; /* Crop image to fit container */
}
</style>
<div class="container">
    <div class="section-heading-02 text-center mb-1-9 mb-md-2-9">
        <div class="sub-title mb-3">
            <span class="text-secondary">Our Activities</span>
            <div class="title-img">
                <img src="{{ asset('new/img/icons/habitro-icon.png')}}" alt="...">
            </div>
        </div>
        <h2 class="h1 fw-bolder mb-0">Social Engagements</h2>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 py-0 pl-3 pr-1 featcard">
    <div class="highlight-carousel1 owl-carousel owl-theme">
        @foreach($images as $image)
        <div class="highlight-style-03">
            <div class="card bg-dark text-white">
                <img class="card-img img-fluid fixed-size" 
                     src="{{ asset('new/img/galleries') }}/{{$image->image }}" 
                     alt="{{ $image->event }}">
                <div class="card-img-overlay d-flex linkfeat">
                    <a href="{{ asset('new/img/galleries') }}/{{$image->image }}" class="align-self-end">
                        <h4 class="card-title">{{ $image->event }}</h4>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

        <div class="col-6 py-0 px-1">
            <div class="row">
                <div class="col-md-6 py-0 px-1">
                    <div class="card bg-dark text-white mb-2">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2K4yolH6XYQ?autoplay=1&loop=1&playlist=2K4yolH6XYQ&mute=1" allowfullscreen></iframe>
                        </div>
                        <!-- <div class="card-img-overlay d-flex">
                            <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID_1" class="align-self-end text-white">
                                <span class="badge badge-primary">Finansial</span>
                                <h6 class="card-title">BI Atur Standarisasi QR Code</h6>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6 py-0 px-1">
                    <div class="card bg-dark text-white mb-2">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XiBuCe_4cxg?autoplay=1&loop=1&playlist=XiBuCe_4cxg&mute=1" allowfullscreen></iframe>
                        </div>
                        <!-- <div class="card-img-overlay d-flex">
                            <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID_2" class="align-self-end text-white">
                                <span class="badge badge-primary">Industri</span>
                                <h6 class="card-title">PTSP BP Batam Masuk 10 Terbaik di Indonesia</h6>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6 py-0 px-1">
                    <div class="card bg-dark text-white mb-2">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kWiL9TAI41Y?autoplay=1&loop=1&playlist=kWiL9TAI41Y&mute=1" allowfullscreen></iframe>
                        </div>
                        <!-- <div class="card-img-overlay d-flex">
                            <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID_3" class="align-self-end text-white">
                                <span class="badge badge-primary">Ekspor</span>
                                <h6 class="card-title">Review GSP: Amerika Ingin Perdagangan Saling Menguntungkan</h6>
                            </a>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-6 py-0 px-1">
                    <div class="card bg-dark text-white mb-2">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2K4yolH6XYQ?autoplay=1&loop=1&playlist=2K4yolH6XYQ&mute=1" allowfullscreen></iframe>
                        </div>
                        <!-- <div class="card-img-overlay d-flex">
                            <a href="https://www.youtube.com/watch?v=YOUR_VIDEO_ID_4" class="align-self-end text-white">
                                <span class="badge badge-primary">Industri</span>
                                <h6 class="card-title">PTSP BP Batam Masuk 10 Terbaik di Indonesia</h6>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>