@extends('layouts.base')
@section('title','Team Members')
@section('content')

<!-- Content
		============================================= -->
<section id="content">
    <div class="content-wrap">
        <div class="container">


            <div class="fancy-title title-border mt-5">
                <h2><span class="fw-bolder">Board</span> members</h2>
            </div>

            <div class="row col-mb-50 mb-0">
                @foreach($workers as $worker)

                @if($worker->department === 'BOARD MEMBERS')
                <div class="col-lg-3 col-md-6">

                    <div class="team">
                        <div class="team-image">
                            <img src="{{ asset('new/img')}}/{{$worker->photo }}" alt="{{ $worker->name }}" class="rounded-6">
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4>{{ $worker->name }}</h4><span>{{ $worker->title }}</span>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-x-twitter">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-google">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                @endif
                @endforeach

            </div>

            <div class="fancy-title title-border mt-5">
                <h2><span class="fw-bolder"> Staff</span> members</h2>
            </div>

            <div class="row col-mb-50 mb-0">
                @foreach($workers as $worker)

                @if($worker->department === 'WORKFORCE')
                <div class="col-lg-4 col-md-6">

                    <div class="team">
                        <div class="team-image">
                            <img src="{{ asset('new/img')}}/{{$worker->photo }}" alt="{{ $worker->name }}" class="rounded-6">
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4>{{ $worker->name }}</h4><span>{{ $worker->title }}</span>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-x-twitter">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-google">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                @endif
                @endforeach

            </div>

            <div class="fancy-title title-border mt-5">
                <h2><span class="fw-bolder">ADVISORY</span> COMMITTEE</h2>
            </div>

            <div class="row col-mb-50 mb-0">
                @foreach($workers as $worker)

                @if($worker->department === 'ADVISORY COMMITTEE')
                <div class="col-lg-4 col-md-6">

                    <div class="team">
                        <div class="team-image">
                            <img src="{{ asset('new/img')}}/{{$worker->photo }}" alt="{{ $worker->name }}" class="rounded-6">
                        </div>
                        <div class="team-desc">
                            <div class="team-title">
                                <h4>{{ $worker->name }}</h4><span>{{ $worker->title }}</span>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-facebook">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-x-twitter">
                                    <i class="fa-brands fa-x-twitter"></i>
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-google">
                                    <i class="fa-brands fa-google"></i>
                                    <i class="fa-brands fa-google"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                @endif
                @endforeach

            </div>

        </div>
    </div>
</section><!-- #content end -->


<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row justify-content-center g-0 mb-2-9">
                <div class="col-md-9">
                    <h2 class="mb-1-6 font-weight-400">About VOLUNTEERS &<span class="fw-bolder"> TECHNICAL WORKING GROUP</h2>
                    <p>
                        More than 1000 volunteers already affiliated with RNCDA. The volunteers have a health background. They are young and well educated
                        (normally they are recent graduates and university students). They are much eager to serve as well as bringing back what they have
                        acquired from universities to the communities. However, few of them have received proper training in NCDs and data collection, and
                        more have to be recruited through the already existing network of RNCDA and its member organizations.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection