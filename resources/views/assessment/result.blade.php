@extends('layouts.base')
@section('title','Diabetes Risk Assessment Result')
@section('content')

<!-- Page Sub Menu -->
<div id="page-menu" style="--cnvs-page-submenu-sticky-offset: 60px;">
    <div id="page-menu-wrap">
        <div class="container">
            <div class="page-menu-row">
                <div class="page-menu-title">Rwanda <span>NCDA</span></div>
                <nav class="page-menu-nav">
                    <ul class="page-menu-container">
                        <li class="page-menu-item current">
                            <a href="#"><div>@yield('title')</div></a>
                        </li>
                    </ul>
                </nav>
                <div id="page-menu-trigger"><i class="bi-list"></i></div>
            </div>
        </div>
    </div>
    <div class="page-menu-wrap-clone" style="height: 48px;"></div>
</div>

<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="row shadow bg-white border rounded p-5 my-5">
                <div class="col-lg-12 text-center mb-4">
                    <h1 class="fw-bolder">Diabetes Risk Assessment Result</h1>
                    <p class="text-muted">Review your results below and consider consulting a healthcare professional for further guidance.</p>
                </div>

                <!-- Risk Score Section -->
                <div class="col-md-12 text-center mb-4">
                    <h4 class="mt-3">Your Risk Score</h4>
                    <p class="display-4 fw-bold">{{ $assessment->risk_score }}</p>

                    <div role="alert" class="alert 
                        @if ($assessment->risk_score >= 15) alert-danger 
                        @elseif ($assessment->risk_score >= 10) alert-warning 
                        @else alert-success 
                        @endif">
                        @if ($assessment->risk_score >= 15)
                            <strong>High Risk:</strong> Your risk of developing diabetes is high. We strongly recommend you consult a healthcare professional for comprehensive evaluation and possible intervention.
                        @elseif ($assessment->risk_score >= 10)
                            <strong>Moderate Risk:</strong> You may be at increased risk for diabetes. Please consider lifestyle adjustments such as healthy eating, regular exercise, and periodic medical check-ups.
                        @else
                            <strong>Low Risk:</strong> Your current risk of diabetes is low. Keep maintaining your healthy lifestyle.
                        @endif
                    </div>
                </div>

                <!-- Details Section -->
                <div class="col-md-6">
                    <h4 class="mb-3">Personal Details</h4>
                    <p><strong>Age:</strong> {{ $assessment->age }} years</p>
                    <p><strong>Weight:</strong> {{ $assessment->weight }} kg</p>
                    <p><strong>Height:</strong> {{ $assessment->height }} cm</p>
                    <p><strong>Body Mass Index (BMI):</strong> {{ $assessment->bmi }} kg/m²</p>
                </div>

                <div class="col-md-6">
                    <h4 class="mb-3">Health Risk Factors</h4>
                    <p><strong>Family History of Diabetes:</strong> {{ $assessment->family_history ? 'Yes' : 'No' }}</p>
                    <p><strong>Regular Physical Activity:</strong> {{ $assessment->physical_activity ? 'Yes' : 'No' }}</p>
                    <p><strong>Smoking:</strong> {{ $assessment->smoking ? 'Yes' : 'No' }}</p>
                    <p><strong>Hypertension:</strong> {{ $assessment->hypertension ? 'Yes' : 'No' }}</p>
                    <p><strong>High Cholesterol:</strong> {{ $assessment->high_cholesterol ? 'Yes' : 'No' }}</p>
                </div>

                <!-- Action Buttons -->
                <div class="col-md-12 text-center mt-5">
                    <a href="{{ route('assessments.create') }}" class="btn btn-primary btn-lg mx-2">
                        <i class="bi-arrow-clockwise"></i> Take Another Assessment
                    </a>
                    <a href="#" class="btn btn-secondary btn-lg mx-2">
                        <i class="bi-download"></i> Download Report
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
