@extends('layouts.base')

@section('title', 'Know Your Number')

@section('content')

<style>
    /* =========================================
       NGO BMI CALCULATOR
       ========================================= */

    :root {
        --ngo-primary: #0A599E;
        --ngo-primary-dark: #073F70;
        --ngo-secondary: #17A673;
        --ngo-accent: #F4B942;
        --ngo-danger: #D9534F;
        --ngo-light: #F4F8FB;
        --ngo-text: #263746;
        --ngo-muted: #6B7A89;
        --ngo-white: #ffffff;
        --ngo-border: #E3EBF2;
    }

    .ngo-bmi-section {
        position: relative;
        overflow: hidden;
        background:
            linear-gradient(135deg, #f7fbfe 0%, #ffffff 55%, #eef8f4 100%);
        padding: 100px 0;
    }

    .ngo-bmi-section::before {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: rgba(10, 89, 158, 0.05);
        top: -180px;
        right: -100px;
    }

    .ngo-bmi-section::after {
        content: "";
        position: absolute;
        width: 260px;
        height: 260px;
        border-radius: 50%;
        background: rgba(23, 166, 115, 0.05);
        bottom: -120px;
        left: -80px;
    }

    .ngo-bmi-container {
        position: relative;
        z-index: 2;
    }

    /* LEFT CONTENT */

    .ngo-bmi-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 15px;
        border-radius: 50px;
        background: rgba(10, 89, 158, 0.08);
        color: var(--ngo-primary);
        font-size: 13px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 18px;
    }

    .ngo-bmi-eyebrow span {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--ngo-secondary);
    }

    .ngo-bmi-title {
        font-size: clamp(36px, 4vw, 56px);
        line-height: 1.1;
        font-weight: 800;
        color: var(--ngo-text);
        margin-bottom: 22px;
        max-width: 620px;
    }

    .ngo-bmi-title span {
        color: var(--ngo-primary);
    }

    .ngo-bmi-description {
        font-size: 17px;
        line-height: 1.8;
        color: var(--ngo-muted);
        max-width: 590px;
        margin-bottom: 35px;
    }

    /* INFORMATION CARDS */

    .ngo-info-card {
        display: flex;
        align-items: flex-start;
        gap: 18px;
        padding: 20px;
        background: var(--ngo-white);
        border: 1px solid var(--ngo-border);
        border-radius: 16px;
        margin-bottom: 15px;
        transition: all 0.25s ease;
    }

    .ngo-info-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(27, 62, 88, 0.08);
    }

    .ngo-info-icon {
        flex: 0 0 48px;
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(10, 89, 158, 0.08);
        color: var(--ngo-primary);
    }

    .ngo-info-icon svg {
        width: 24px;
        height: 24px;
    }

    .ngo-info-title {
        font-size: 15px;
        font-weight: 700;
        color: var(--ngo-text);
        margin-bottom: 5px;
    }

    .ngo-info-text {
        font-size: 14px;
        line-height: 1.6;
        color: var(--ngo-muted);
        margin: 0;
    }

    /* CALCULATOR */

    .ngo-calculator {
        position: relative;
        background: var(--ngo-white);
        border-radius: 24px;
        padding: 35px;
        border: 1px solid var(--ngo-border);
        box-shadow: 0 20px 60px rgba(27, 62, 88, 0.12);
    }

    .ngo-calculator-header {
        margin-bottom: 28px;
    }

    .ngo-calculator-badge {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 30px;
        background: #E9F6F1;
        color: var(--ngo-secondary);
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 12px;
    }

    .ngo-calculator-title {
        font-size: 28px;
        font-weight: 800;
        color: var(--ngo-text);
        margin-bottom: 8px;
    }

    .ngo-calculator-subtitle {
        color: var(--ngo-muted);
        font-size: 14px;
        line-height: 1.6;
        margin: 0;
    }

    .ngo-form-group {
        margin-bottom: 20px;
    }

    .ngo-form-label {
        display: block;
        font-size: 13px;
        font-weight: 700;
        color: var(--ngo-text);
        margin-bottom: 8px;
    }

    .ngo-input-wrapper {
        position: relative;
    }

    .ngo-input {
        width: 100%;
        height: 56px;
        border: 1px solid var(--ngo-border);
        background: #FAFCFD;
        border-radius: 12px;
        padding: 0 70px 0 18px;
        font-size: 15px;
        color: var(--ngo-text);
        outline: none;
        transition: all 0.2s ease;
    }

    .ngo-input:focus {
        border-color: var(--ngo-primary);
        background: #fff;
        box-shadow: 0 0 0 4px rgba(10, 89, 158, 0.08);
    }

    .ngo-input::placeholder {
        color: #9AA8B5;
    }

    .ngo-input-unit {
        position: absolute;
        top: 50%;
        right: 17px;
        transform: translateY(-50%);
        color: var(--ngo-primary);
        font-size: 13px;
        font-weight: 700;
    }

    .ngo-calculate-btn {
        width: 100%;
        height: 58px;
        border: none;
        border-radius: 12px;
        background: var(--ngo-primary);
        color: white;
        font-size: 16px;
        font-weight: 700;
        cursor: pointer;
        transition: all 0.25s ease;
        margin-top: 5px;
    }

    .ngo-calculate-btn:hover {
        background: var(--ngo-primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(10, 89, 158, 0.22);
    }

    .ngo-privacy-note {
        text-align: center;
        color: #8A98A5;
        font-size: 12px;
        margin: 16px 0 0;
    }

    /* BMI SCALE */

    .ngo-bmi-scale {
        margin-top: 28px;
        padding: 20px;
        background: var(--ngo-light);
        border-radius: 14px;
    }

    .ngo-scale-title {
        font-size: 13px;
        font-weight: 700;
        color: var(--ngo-text);
        margin-bottom: 12px;
    }

    .ngo-scale-bar {
        display: flex;
        height: 9px;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 8px;
    }

    .ngo-scale-underweight {
        width: 23%;
        background: #17A2B8;
    }

    .ngo-scale-normal {
        width: 16%;
        background: #17A673;
    }

    .ngo-scale-overweight {
        width: 13%;
        background: #F4B942;
    }

    .ngo-scale-obesity {
        width: 48%;
        background: #D9534F;
    }

    .ngo-scale-labels {
        display: flex;
        justify-content: space-between;
        font-size: 10px;
        color: var(--ngo-muted);
    }

    /* MODAL */

    #bmiModal .modal-dialog {
        max-width: 520px;
    }

    #bmiModal .modal-content {
        border: none;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.18);
    }

    #bmiModal .modal-header {
        border: none;
        padding: 25px 28px 10px;
    }

    #bmiModal .modal-title {
        font-size: 22px;
        font-weight: 800;
        color: var(--ngo-text);
    }

    #bmiModal .modal-body {
        padding: 20px 28px 30px;
    }

    #bmiModal .modal-footer {
        border: none;
        padding: 0 28px 25px;
    }

    .ngo-result-card {
        text-align: center;
    }

    .ngo-result-number {
        width: 125px;
        height: 125px;
        margin: 0 auto 20px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #E9F6F1;
        border: 8px solid #D6EFE5;
    }

    .ngo-result-number strong {
        font-size: 30px;
        color: var(--ngo-secondary);
    }

    .ngo-result-message {
        font-size: 16px;
        color: var(--ngo-muted);
        line-height: 1.7;
    }

    .ngo-result-category {
        display: inline-block;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 700;
        margin-top: 5px;
    }

    .ngo-progress-wrapper {
        margin-top: 25px;
    }

    .ngo-progress {
        height: 12px;
        background: #EDF1F4;
        border-radius: 20px;
        overflow: hidden;
    }

    .ngo-progress .progress-bar {
        transition: width 0.8s ease;
    }

    .progress-bar-underweight {
        background: #17A2B8;
    }

    .progress-bar-normal {
        background: #17A673;
    }

    .progress-bar-overweight {
        background: #F4B942;
    }

    .progress-bar-obesity {
        background: #D9534F;
    }

    .ngo-bmi-advice {
        margin-top: 22px;
        padding: 17px;
        background: var(--ngo-light);
        border-radius: 12px;
        font-size: 13px;
        line-height: 1.6;
        color: var(--ngo-muted);
    }

    .ngo-bmi-advice a {
        color: var(--ngo-primary);
        font-weight: 700;
        text-decoration: none;
    }

    .ngo-modal-close {
        border: none;
        background: var(--ngo-primary);
        color: white;
        padding: 10px 22px;
        border-radius: 50px;
        font-weight: 600;
    }

    @media (max-width: 991px) {
        .ngo-bmi-section {
            padding: 70px 0;
        }

        .ngo-calculator {
            margin-top: 20px;
        }
    }

    @media (max-width: 575px) {
        .ngo-bmi-section {
            padding: 55px 0;
        }

        .ngo-calculator {
            padding: 25px 20px;
            border-radius: 18px;
        }

        .ngo-bmi-title {
            font-size: 36px;
        }

        .ngo-bmi-description {
            font-size: 15px;
        }
    }
</style>

<section class="ngo-bmi-section">
    <div class="container ngo-bmi-container">

        <div class="row align-items-center g-5">

            {{-- LEFT SIDE --}}
            <div class="col-lg-6">

                <div class="ngo-bmi-eyebrow">
                    <span></span>
                    Health Awareness Tool
                </div>

                <h1 class="ngo-bmi-title">
                    Know your number.
                    <span>Understand your health.</span>
                </h1>

                <p class="ngo-bmi-description">
                    Your Body Mass Index (BMI) is one simple way to understand
                    your weight in relation to your height. Use this free tool
                    to get a quick indication of your BMI and learn more about
                    healthy living.
                </p>

                {{-- INFORMATION CARDS --}}
                <div class="ngo-info-card">

                    <div class="ngo-info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h6l5 5v11a2 2 0 01-2 2z"/>
                        </svg>
                    </div>

                    <div>
                        <div class="ngo-info-title">
                            What is BMI?
                        </div>

                        <p class="ngo-info-text">
                            BMI is a simple index of weight-for-height commonly
                            used to classify underweight, healthy weight,
                            overweight and obesity in adults.
                        </p>
                    </div>

                </div>

                <div class="ngo-info-card">

                    <div class="ngo-info-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="1.8"
                                  d="M17 20h5v-2a4 4 0 00-4-4h-1M9 20H4v-2a4 4 0 014-4h1m4-4a4 4 0 100-8 4 4 0 000 8zm6 2a4 4 0 10-3-6.7"/>
                        </svg>
                    </div>

                    <div>
                        <div class="ngo-info-title">
                            A starting point, not a diagnosis
                        </div>

                        <p class="ngo-info-text">
                            BMI is a general screening measure and does not
                            directly measure body fat or overall health.
                            Use your result as a starting point for healthier
                            choices.
                        </p>
                    </div>

                </div>

            </div>


            {{-- RIGHT SIDE --}}
            <div class="col-lg-6">

                <div class="ngo-calculator">

                    <div class="ngo-calculator-header">

                        <span class="ngo-calculator-badge">
                            Free health tool
                        </span>

                        <h2 class="ngo-calculator-title">
                            Calculate your BMI
                        </h2>

                        <p class="ngo-calculator-subtitle">
                            Enter your details below to calculate your
                            Body Mass Index.
                        </p>

                    </div>

                    <form id="bmiForm">

                        {{-- AGE --}}
                        <div class="ngo-form-group">

                            <label class="ngo-form-label">
                                Age
                            </label>

                            <div class="ngo-input-wrapper">

                                <input
                                    type="number"
                                    name="fitness-form-age"
                                    id="age"
                                    class="ngo-input"
                                    placeholder="Enter your age"
                                    min="1"
                                    max="120"
                                    required
                                >

                                <span class="ngo-input-unit">
                                    years
                                </span>

                            </div>

                        </div>


                        {{-- WEIGHT --}}
                        <div class="ngo-form-group">

                            <label class="ngo-form-label">
                                Weight
                            </label>

                            <div class="ngo-input-wrapper">

                                <input
                                    type="number"
                                    name="weight"
                                    id="weight"
                                    class="ngo-input"
                                    placeholder="Enter your weight"
                                    min="1"
                                    step="0.1"
                                    required
                                >

                                <span class="ngo-input-unit">
                                    kg
                                </span>

                            </div>

                        </div>


                        {{-- HEIGHT --}}
                        <div class="ngo-form-group">

                            <label class="ngo-form-label">
                                Height
                            </label>

                            <div class="ngo-input-wrapper">

                                <input
                                    type="number"
                                    name="height"
                                    id="height"
                                    class="ngo-input"
                                    placeholder="Enter your height"
                                    min="50"
                                    max="250"
                                    step="0.1"
                                    required
                                >

                                <span class="ngo-input-unit">
                                    cm
                                </span>

                            </div>

                        </div>


                        <button
                            type="submit"
                            class="ngo-calculate-btn">

                            Calculate my BMI

                        </button>

                    </form>


                    <p class="ngo-privacy-note">
                        Your information is used only to calculate your BMI.
                    </p>


                    {{-- BMI SCALE --}}
                    <div class="ngo-bmi-scale">

                        <div class="ngo-scale-title">
                            Adult BMI categories
                        </div>

                        <div class="ngo-scale-bar">

                            <div class="ngo-scale-underweight"></div>

                            <div class="ngo-scale-normal"></div>

                            <div class="ngo-scale-overweight"></div>

                            <div class="ngo-scale-obesity"></div>

                        </div>

                        <div class="ngo-scale-labels">
                            <span>Underweight</span>
                            <span>Normal</span>
                            <span>Overweight</span>
                            <span>Obesity</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


{{-- =========================================
     BMI RESULT MODAL
========================================= --}}

<div
    class="modal fade"
    id="bmiModal"
    tabindex="-1"
    aria-labelledby="bmiModalLabel"
    aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-header">

                <h5
                    class="modal-title"
                    id="bmiModalLabel">

                    Your BMI Result

                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>


            <div class="modal-body">

                <div class="ngo-result-card">

                    <div class="ngo-result-number">
                        <strong id="bmiNumber">0</strong>
                    </div>

                    <div
                        id="bmiResult"
                        class="ngo-result-message">
                    </div>

                    <div
                        id="bmiCategory"
                        class="ngo-result-category">
                    </div>

                </div>


                <div class="ngo-progress-wrapper">

                    <div class="ngo-progress">

                        <div
                            id="bmiProgressBar"
                            class="progress-bar"
                            role="progressbar"
                            style="width: 0%;"
                            aria-valuenow="0"
                            aria-valuemin="0"
                            aria-valuemax="40">
                        </div>

                    </div>

                </div>


                <div class="ngo-bmi-advice">

                    <strong>Keep learning about your health.</strong>
                    BMI is only one indicator of health. For practical
                    guidance on nutrition, physical activity and healthy
                    living,

                    <a
                        href="https://www.youtube.com/watch?v=l7vGq4UNDqE"
                        target="_blank"
                        rel="noopener">

                        watch our health education video.

                    </a>

                </div>

            </div>


            <div class="modal-footer">

                <button
                    type="button"
                    class="ngo-modal-close"
                    data-bs-dismiss="modal">

                    Done

                </button>

            </div>

        </div>

    </div>

</div>


<script>

document.getElementById('bmiForm').addEventListener('submit', function(event) {

    event.preventDefault();

    const weight = parseFloat(
        document.getElementById('weight').value
    );

    const heightCm = parseFloat(
        document.getElementById('height').value
    );

    if (!weight || !heightCm || weight <= 0 || heightCm <= 0) {
        return;
    }

    const height = heightCm / 100;

    const bmi = (weight / (height * height)).toFixed(2);

    let category = '';
    let progressBarClass = '';
    let categoryBackground = '';
    let progressBarValue = Math.min((bmi / 40) * 100, 100);

    if (bmi < 18.5) {

        category = 'Underweight';
        progressBarClass = 'progress-bar-underweight';
        categoryBackground = '#E8F6F8';

    } else if (bmi >= 18.5 && bmi < 25) {

        category = 'Normal weight';
        progressBarClass = 'progress-bar-normal';
        categoryBackground = '#E9F6F1';

    } else if (bmi >= 25 && bmi < 30) {

        category = 'Overweight';
        progressBarClass = 'progress-bar-overweight';
        categoryBackground = '#FFF7E3';

    } else {

        category = 'Obesity';
        progressBarClass = 'progress-bar-obesity';
        categoryBackground = '#FCEBEC';

    }


    // BMI NUMBER
    document.getElementById('bmiNumber').textContent = bmi;


    // RESULT MESSAGE
    document.getElementById('bmiResult').innerHTML =
        `Your BMI is <strong>${bmi}</strong>`;


    // CATEGORY
    const categoryElement =
        document.getElementById('bmiCategory');

    categoryElement.textContent = category;

    categoryElement.style.background =
        categoryBackground;


    // PROGRESS BAR
    const progressBar =
        document.getElementById('bmiProgressBar');

    progressBar.className =
        'progress-bar ' + progressBarClass;

    progressBar.style.width =
        progressBarValue + '%';

    progressBar.setAttribute(
        'aria-valuenow',
        bmi
    );


    // SHOW MODAL
    const bmiModal =
        new bootstrap.Modal(
            document.getElementById('bmiModal')
        );

    bmiModal.show();

});

</script>

@endsection