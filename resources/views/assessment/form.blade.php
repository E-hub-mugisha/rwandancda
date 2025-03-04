@extends('layouts.base')
@section('title','Diabetes Risk Assessment')
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

                <div class="col-lg-4 dark" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.3)), url('/new/img/content/about-02.jpg') center center / cover; min-height: 400px;" data-bs-theme="dark">
                    <h3 class="text-center mt-5"><span class="fw-bolder">Diabetes Risk Assessment</span></h3>
                    <div class="calories-wrap text-center w-100 px-2">
                        <span class="text-uppercase mb-0 ls-2">Know Your Number</span>
                        <span class="text-uppercase h6 ls-3">Diabetes Risk Assessment</span>
                    </div>
                    <small class="text-center m-0 position-absolute" style="bottom: 12px;">Metric Units</small>
                </div>

                <div class="col-lg-8 p-5">
                    <div class="calculate-form">
                        <h1><span class="fw-bolder">Diabetes Risk Assessment</span></h1>

                        <!-- Progress Indicator -->
                        <div class="progress-indicator mb-4">
                            <span id="progress-step1" class="progress-step active">Step 1</span>
                            <span id="progress-step2" class="progress-step">Step 2</span>
                            <span id="progress-step3" class="progress-step">Step 3</span>
                            <span id="progress-step4" class="progress-step">Step 4</span>
                        </div>

                        <form id="diabetesAssessmentForm" method="POST" action="{{ route('assessments.store') }}" onsubmit="return checkSubmit()">
                            @csrf

                            <!-- Step 1 -->
                            <div id="step1" class="step">
                                <h3>Step 1: Personal Information</h3>
                                <div class="mb-3">
                                    <label for="age" class="form-label">Age</label>
                                    <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" required>
                                    @error('age')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="weight" class="form-label">Weight (kg)</label>
                                    <input type="number" class="form-control" id="weight" name="weight" value="{{ old('weight') }}" required>
                                    @error('weight')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="height" class="form-label">Height (cm)</label>
                                    <input type="number" class="form-control" id="height" name="height" value="{{ old('height') }}" required>
                                    @error('height')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-primary next-btn" onclick="nextStep(1)">Next</button>
                            </div>

                            <!-- Step 2 -->
                            <div id="step2" class="step" style="display:none;">
                                <h3>Step 2: Health Factors</h3>
                                <div class="mb-3">
                                    <label for="family_history" class="form-label">Family History of Diabetes</label>
                                    <select class="form-select" id="family_history" name="family_history" required>
                                        <option value="1" {{ old('family_history') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('family_history') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                    @error('family_history')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="physical_activity" class="form-label">Do you engage in physical activity?</label>
                                    <select class="form-select" id="physical_activity" name="physical_activity" required>
                                        <option value="1" {{ old('physical_activity') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('physical_activity') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                    @error('physical_activity')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-secondary prev-btn" onclick="prevStep(1)">Previous</button>
                                <button type="button" class="btn btn-primary next-btn" onclick="nextStep(2)">Next</button>
                            </div>

                            <!-- Step 3 -->
                            <div id="step3" class="step" style="display:none;">
                                <h3>Step 3: Additional Factors</h3>
                                <div class="mb-3">
                                    <label for="smoking" class="form-label">Do you smoke?</label>
                                    <select class="form-select" id="smoking" name="smoking" required>
                                        <option value="1" {{ old('smoking') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('smoking') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                    @error('smoking')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="hypertension" class="form-label">Do you have hypertension?</label>
                                    <select class="form-select" id="hypertension" name="hypertension" required>
                                        <option value="1" {{ old('hypertension') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('hypertension') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                    @error('hypertension')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="high_cholesterol" class="form-label">Do you have high cholesterol?</label>
                                    <select class="form-select" id="high_cholesterol" name="high_cholesterol" required>
                                        <option value="1" {{ old('high_cholesterol') == 1 ? 'selected' : '' }}>Yes</option>
                                        <option value="0" {{ old('high_cholesterol') == 0 ? 'selected' : '' }}>No</option>
                                    </select>
                                    @error('high_cholesterol')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="button" class="btn btn-secondary prev-btn" onclick="prevStep(2)">Previous</button>
                                <button type="button" class="btn btn-primary next-btn" onclick="nextStep(3)">Next</button>
                            </div>

                            <!-- Step 4 -->
                            <div id="step4" class="step" style="display:none;">
                                <h3>Final Step: Review and Submit</h3>
                                <p>Please review your information before submitting.</p>
                                <div id="review">
                                    <!-- Review details will be populated dynamically -->
                                </div>
                                <button type="button" class="btn btn-secondary prev-btn" onclick="prevStep(3)">Previous</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function checkSubmit() {
        return confirm('Are you sure you want to submit the form?');
    }


    function updateProgress(step) {
        const progressSteps = document.querySelectorAll('.progress-step');
        progressSteps.forEach((progressStep, index) => {
            progressStep.classList.toggle('active', index < step);
        });
    }

    function validateStep(currentStep) {
        const step = document.getElementById('step' + currentStep);
        const inputs = step.querySelectorAll('input, select');
        let isValid = true;

        inputs.forEach((input) => {
            if (!input.checkValidity()) {
                input.classList.add('is-invalid');
                isValid = false;
            } else {
                input.classList.remove('is-invalid');
            }
        });

        return isValid;
    }

    function populateReview() {
        const formData = new FormData(document.getElementById('diabetesAssessmentForm'));
        const reviewDiv = document.getElementById('review');
        reviewDiv.innerHTML = '';

        for (const [key, value] of formData.entries()) {
            reviewDiv.innerHTML += `<p><strong>${key}:</strong> ${value}</p>`;
        }
    }

    function nextStep(currentStep) {
        if (!validateStep(currentStep)) return;
        document.getElementById('step' + currentStep).style.display = 'none';
        document.getElementById('step' + (currentStep + 1)).style.display = 'block';
        updateProgress(currentStep + 1);

        if (currentStep === 3) {
            populateReview();
        }
    }

    function prevStep(currentStep) {
        document.getElementById('step' + currentStep).style.display = 'none';
        document.getElementById('step' + (currentStep - 1)).style.display = 'block';
        updateProgress(currentStep - 1);
    }
</script>

<style>
    .progress-indicator {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .progress-step {
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .progress-step.active {
        background-color: #007bff;
        color: white;
    }

    .is-invalid {
        border-color: red;
    }
</style>

@endsection