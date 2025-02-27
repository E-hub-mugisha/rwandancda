@extends('layouts.base')
@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="img/bg/bg-03.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>{{$data->title}}</h1>
            </div>
            <div class="col-md-12">
                <div class="breadcrumb">
                    <span class="left-dot"></span>
                    <span class="right-dot"></span>
                    <ul>
                        <li><a href="{{ route('home')}}">Home</a></li>
                        <li><a href="#!">{{$data->title}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
    <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
    <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
</section>

<!-- PERSONALIZED NUTRITION
        ================================================== -->
<section>
    <div class="container">
        <div class="row">
            <!-- service left -->
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="service-details-sidebar pe-lg-1-6">
                    <aside class="widget widget-nav-menu">
                        <h4 class="widget-title title-font text-secondary">Related Program</h4>
                        <div class="widget-body">
                            <ul class="list-style3">
                                @foreach( $relatedProgram as $relatedProgram)
                                <li><a href="{{ route('detail', $relatedProgram->id ) }}">{{ Str::limit($relatedProgram->title, 30) }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- end service left -->

            <!-- service right -->
            <div class="col-lg-8 order-1 order-lg-2 mb-2-9 mb-lg-0">
                <div>
                    <img class="mb-2-6 border-radius-10" src="{{ asset('new/img')}}/{{$data->poster}}" alt="...">
                    <div class="row mb-1-9">
                        <div class="col-lg-12">
                            <h3 class="h4 mb-3">{{ $data->title}}</h3>
                            <p class="w-95 mb-0">
                                {!! $data->content !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end service right -->
        </div>
    </div>
</section>
@endsection