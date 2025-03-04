@extends('layouts.base')
@section('title','know your Number')
@section('content')

<!-- Page Sub Menu
		============================================= -->
        <div id="page-menu" style="--cnvs-page-submenu-sticky-offset: 60px;" class="">
    <div id="page-menu-wrap">
        <div class="container">
            <div class="page-menu-row">

                <div class="page-menu-title">Rwanda<span>NCDA</span></div>

                <nav class="page-menu-nav">
                    <ul class="page-menu-container">
                        <li class="page-menu-item current"><a href="#">
                                <div>@yield('title')</div>
                            </a></li>
                    </ul>
                </nav>

                <div id="page-menu-trigger"><i class="bi-list"></i></div>

            </div>
        </div>
    </div>
    <div class="page-menu-wrap-clone" style="height: 48px;"></div>
</div><!-- #page-menu end -->

@include('includes.bmi')

@endsection