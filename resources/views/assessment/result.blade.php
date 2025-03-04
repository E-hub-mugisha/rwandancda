@extends('layouts.base')
@section('title','Diabetes Risk Assessment result')
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

<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row shadow bg-light border">
                <div class="calculate-area pt-100 pb-70">
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="calculate-form">
                                <h1><span class="fw-bolder">Diabetes Risk Assessment Result</span></h1>

                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="mt-4">Risk Score</h4>
                                        <p><strong>Risk Score:</strong> {{ $assessment->risk_score }}</p>

                                        <!-- Displaying risk level based on score -->
                                        <div role="alert" class="alert 
                        @if ($assessment->risk_score >= 15) alert-danger 
                        @elseif ($assessment->risk_score >= 10) alert-warning 
                        @else alert-success 
                        @endif">
                                            @if ($assessment->risk_score >= 15)
                                            <strong>High Risk:</strong> Your risk of diabetes is high. Please consult with a healthcare provider for further advice.
                                            @elseif ($assessment->risk_score >= 10)
                                            <strong>Moderate Risk:</strong> You may be at risk for diabetes. Consider lifestyle changes and regular check-ups.
                                            @else
                                            <strong>Low Risk:</strong> Your risk of diabetes is low. Keep up the good work with healthy habits!
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <h3 class="mt-4">Assessment Details</h3>

                                        <p><strong>Age:</strong> {{ $assessment->age }} years</p>
                                        <p><strong>Weight:</strong> {{ $assessment->weight }} kg</p>
                                        <p><strong>Height:</strong> {{ $assessment->height }} cm</p>
                                        <p><strong>BMI:</strong> {{ $assessment->bmi }} kg/m²</p>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="mt-4">Health Factors</h4>
                                        <p><strong>Family History of Diabetes:</strong> {{ $assessment->family_history ? 'Yes' : 'No' }}</p>
                                        <p><strong>Physical Activity:</strong> {{ $assessment->physical_activity ? 'Yes' : 'No' }}</p>
                                        <p><strong>Smoking:</strong> {{ $assessment->smoking ? 'Yes' : 'No' }}</p>
                                        <p><strong>Hypertension:</strong> {{ $assessment->hypertension ? 'Yes' : 'No' }}</p>
                                        <p><strong>High Cholesterol:</strong> {{ $assessment->high_cholesterol ? 'Yes' : 'No' }}</p>
                                    </div>

                                    <div class="col-md-12">
                                        <!-- Retry Button -->
                                        <a href="{{ route('assessments.create') }}" class="btn btn-primary mt-4">Take Another Assessment</a>

                                        <!-- Optional: Download or Print -->
                                        <a href="#" class="btn btn-secondary mt-4">Download Report</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection