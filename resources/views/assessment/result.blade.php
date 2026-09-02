@extends('layouts.base')

@section('title', 'Diabetes Risk Assessment Result')

@section('content')

<style>
    /* =========================================================
       Rwanda NCDA — Risk Assessment Result
       ========================================================= */

    #ncda-risk-result {
        --ncda-blue: #0A599E;
        --ncda-blue-dark: #073F70;
        --ncda-blue-soft: #EAF4FB;

        --ncda-green: #16845C;
        --ncda-green-dark: #0E6043;
        --ncda-green-soft: #EAF7F1;

        --ncda-gold: #F2B84B;

        --ncda-ink: #16241F;
        --ncda-muted: #61716B;
        --ncda-border: #DDE7E3;
        --ncda-paper: #F5F9FC;
        --ncda-white: #FFFFFF;

        background: var(--ncda-paper);
        color: var(--ncda-ink);
        font-family: 'Inter', sans-serif;
    }

    #ncda-risk-result * {
        box-sizing: border-box;
    }

    #ncda-risk-result a {
        text-decoration: none;
    }

    /* ---------------------------------------------------------
       Hero
       --------------------------------------------------------- */

    #ncda-risk-result .risk-hero {
        position: relative;
        overflow: hidden;
        padding: 95px 0 120px;
        background:
            radial-gradient(
                circle at 85% 15%,
                rgba(10, 89, 158, 0.13),
                transparent 32%
            ),
            linear-gradient(
                135deg,
                #F5F9FC 0%,
                #EEF6F5 100%
            );
    }

    #ncda-risk-result .risk-hero::after {
        content: "";
        position: absolute;
        width: 420px;
        height: 420px;
        right: -180px;
        bottom: -240px;
        border-radius: 50%;
        background: rgba(22, 132, 92, 0.07);
    }

    #ncda-risk-result .hero-content {
        position: relative;
        z-index: 2;
        max-width: 850px;
        margin: 0 auto;
        text-align: center;
    }

    #ncda-risk-result .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        margin-bottom: 20px;
        padding: 8px 14px;
        border-radius: 50px;
        background: var(--ncda-green-soft);
        color: var(--ncda-green-dark);
        font-size: 12px;
        font-weight: 800;
        letter-spacing: 0.11em;
        text-transform: uppercase;
    }

    #ncda-risk-result .eyebrow::before {
        content: "";
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--ncda-green);
    }

    #ncda-risk-result .hero-content h1 {
        margin: 0 0 20px;
        color: var(--ncda-blue-dark);
        font-family: 'Newsreader', Georgia, serif;
        font-size: clamp(42px, 6vw, 72px);
        font-weight: 600;
        line-height: 0.98;
        letter-spacing: -0.035em;
    }

    #ncda-risk-result .hero-content p {
        max-width: 700px;
        margin: 0 auto;
        color: var(--ncda-muted);
        font-size: 17px;
        line-height: 1.8;
    }

    /* ---------------------------------------------------------
       Main Result Wrapper
       --------------------------------------------------------- */

    #ncda-risk-result .results-section {
        position: relative;
        z-index: 5;
        margin-top: -55px;
        padding-bottom: 90px;
    }

    /* ---------------------------------------------------------
       Risk Score Card
       --------------------------------------------------------- */

    #ncda-risk-result .score-card {
        position: relative;
        overflow: hidden;
        margin-bottom: 30px;
        padding: 45px;
        border: 1px solid rgba(10, 89, 158, 0.08);
        border-radius: 24px;
        background: var(--ncda-white);
        box-shadow: 0 22px 60px rgba(7, 63, 112, 0.10);
    }

    #ncda-risk-result .score-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(
            90deg,
            var(--ncda-blue),
            var(--ncda-green)
        );
    }

    #ncda-risk-result .score-layout {
        display: grid;
        grid-template-columns: 260px 1fr;
        gap: 50px;
        align-items: center;
    }

    #ncda-risk-result .score-circle {
        position: relative;
        width: 210px;
        height: 210px;
        margin: 0 auto;
        border-radius: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background:
            radial-gradient(
                circle,
                #fff 56%,
                transparent 57%
            ),
            conic-gradient(
                var(--ncda-blue) 0deg,
                var(--ncda-green) 230deg,
                #DDE7E3 230deg,
                #DDE7E3 360deg
            );
    }

    #ncda-risk-result .score-circle::before {
        content: "";
        position: absolute;
        inset: 12px;
        border-radius: 50%;
        border: 1px solid var(--ncda-border);
    }

    #ncda-risk-result .score-number {
        position: relative;
        z-index: 2;
        color: var(--ncda-blue-dark);
        font-size: 52px;
        font-weight: 800;
        line-height: 1;
    }

    #ncda-risk-result .score-label {
        position: relative;
        z-index: 2;
        margin-top: 8px;
        color: var(--ncda-muted);
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    #ncda-risk-result .score-heading {
        margin-bottom: 18px;
        color: var(--ncda-blue-dark);
        font-family: 'Newsreader', Georgia, serif;
        font-size: 38px;
        font-weight: 600;
    }

    #ncda-risk-result .risk-status {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        margin-bottom: 17px;
        padding: 9px 15px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 800;
    }

    #ncda-risk-result .risk-status::before {
        content: "";
        width: 8px;
        height: 8px;
        border-radius: 50%;
    }

    /* Low */
    #ncda-risk-result .risk-low {
        background: var(--ncda-green-soft);
        color: var(--ncda-green-dark);
    }

    #ncda-risk-result .risk-low::before {
        background: var(--ncda-green);
    }

    /* Moderate */
    #ncda-risk-result .risk-moderate {
        background: #FFF6DF;
        color: #946200;
    }

    #ncda-risk-result .risk-moderate::before {
        background: var(--ncda-gold);
    }

    /* High */
    #ncda-risk-result .risk-high {
        background: #FDECEC;
        color: #A33131;
    }

    #ncda-risk-result .risk-high::before {
        background: #D94B4B;
    }

    #ncda-risk-result .risk-message {
        margin: 0;
        color: var(--ncda-muted);
        font-size: 16px;
        line-height: 1.8;
    }

    /* ---------------------------------------------------------
       Information Cards
       --------------------------------------------------------- */

    #ncda-risk-result .info-card {
        height: 100%;
        padding: 32px;
        border: 1px solid var(--ncda-border);
        border-radius: 20px;
        background: var(--ncda-white);
        box-shadow: 0 12px 35px rgba(22, 36, 31, 0.05);
    }

    #ncda-risk-result .card-heading {
        display: flex;
        align-items: center;
        gap: 13px;
        margin-bottom: 26px;
    }

    #ncda-risk-result .card-icon {
        width: 44px;
        height: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        border-radius: 12px;
        background: var(--ncda-blue-soft);
        color: var(--ncda-blue);
        font-size: 19px;
    }

    #ncda-risk-result .card-heading h3 {
        margin: 0;
        color: var(--ncda-blue-dark);
        font-family: 'Newsreader', Georgia, serif;
        font-size: 28px;
        font-weight: 600;
    }

    /* ---------------------------------------------------------
       Detail Rows
       --------------------------------------------------------- */

    #ncda-risk-result .detail-list {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    #ncda-risk-result .detail-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        padding: 15px 0;
        border-bottom: 1px solid #E9EFEC;
    }

    #ncda-risk-result .detail-item:first-child {
        padding-top: 0;
    }

    #ncda-risk-result .detail-item:last-child {
        padding-bottom: 0;
        border-bottom: 0;
    }

    #ncda-risk-result .detail-label {
        color: var(--ncda-muted);
        font-size: 14px;
    }

    #ncda-risk-result .detail-value {
        color: var(--ncda-ink);
        font-size: 14px;
        font-weight: 700;
        text-align: right;
    }

    /* ---------------------------------------------------------
       Yes / No badges
       --------------------------------------------------------- */

    #ncda-risk-result .answer-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 5px 10px;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.04em;
    }

    #ncda-risk-result .answer-yes {
        background: #FDECEC;
        color: #A33131;
    }

    #ncda-risk-result .answer-no {
        background: var(--ncda-green-soft);
        color: var(--ncda-green-dark);
    }

    /* ---------------------------------------------------------
       BMI Highlight
       --------------------------------------------------------- */

    #ncda-risk-result .bmi-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
        margin-top: 28px;
        padding: 18px 20px;
        border-radius: 14px;
        background: var(--ncda-blue-soft);
    }

    #ncda-risk-result .bmi-box span {
        color: var(--ncda-muted);
        font-size: 13px;
        font-weight: 600;
    }

    #ncda-risk-result .bmi-box strong {
        color: var(--ncda-blue-dark);
        font-size: 22px;
    }

    /* ---------------------------------------------------------
       Guidance Section
       --------------------------------------------------------- */

    #ncda-risk-result .guidance {
        margin-top: 30px;
        padding: 40px;
        border-radius: 22px;
        background: var(--ncda-blue-dark);
        color: #fff;
        overflow: hidden;
        position: relative;
    }

    #ncda-risk-result .guidance::after {
        content: "";
        position: absolute;
        right: -80px;
        top: -100px;
        width: 280px;
        height: 280px;
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 50%;
    }

    #ncda-risk-result .guidance-content {
        position: relative;
        z-index: 2;
        max-width: 800px;
    }

    #ncda-risk-result .guidance h3 {
        margin: 0 0 14px;
        color: #fff;
        font-family: 'Newsreader', Georgia, serif;
        font-size: 34px;
        font-weight: 600;
    }

    #ncda-risk-result .guidance p {
        margin: 0;
        color: rgba(255,255,255,0.76);
        line-height: 1.8;
        font-size: 15px;
    }

    /* ---------------------------------------------------------
       CTA Buttons
       --------------------------------------------------------- */

    #ncda-risk-result .actions {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 14px;
        margin-top: 35px;
    }

    #ncda-risk-result .ncda-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 9px;
        min-height: 52px;
        padding: 0 24px;
        border-radius: 10px;
        font-size: 13px;
        font-weight: 800;
        letter-spacing: 0.01em;
        transition:
            transform 0.2s ease,
            box-shadow 0.2s ease,
            background 0.2s ease;
    }

    #ncda-risk-result .ncda-btn:hover {
        transform: translateY(-2px);
    }

    #ncda-risk-result .btn-primary {
        background: var(--ncda-blue);
        color: #fff;
        box-shadow: 0 10px 25px rgba(10, 89, 158, 0.18);
    }

    #ncda-risk-result .btn-primary:hover {
        background: var(--ncda-blue-dark);
        color: #fff;
    }

    #ncda-risk-result .btn-outline {
        border: 1px solid var(--ncda-border);
        background: #fff;
        color: var(--ncda-blue-dark);
    }

    #ncda-risk-result .btn-outline:hover {
        border-color: var(--ncda-blue);
        color: var(--ncda-blue);
    }

    /* ---------------------------------------------------------
       Disclaimer
       --------------------------------------------------------- */

    #ncda-risk-result .disclaimer {
        margin-top: 25px;
        padding: 18px 20px;
        border-left: 4px solid var(--ncda-gold);
        border-radius: 8px;
        background: #FFF9EC;
        color: #6E5B31;
        font-size: 12px;
        line-height: 1.7;
    }

    #ncda-risk-result .disclaimer strong {
        color: #594719;
    }

    /* ---------------------------------------------------------
       Responsive
       --------------------------------------------------------- */

    @media (max-width: 991px) {

        #ncda-risk-result .risk-hero {
            padding: 75px 0 100px;
        }

        #ncda-risk-result .score-layout {
            grid-template-columns: 1fr;
            gap: 30px;
            text-align: center;
        }

        #ncda-risk-result .score-card {
            padding: 35px 28px;
        }

        #ncda-risk-result .score-heading {
            font-size: 34px;
        }
    }

    @media (max-width: 767px) {

        #ncda-risk-result .risk-hero {
            padding: 60px 0 90px;
        }

        #ncda-risk-result .hero-content h1 {
            font-size: 46px;
        }

        #ncda-risk-result .results-section {
            margin-top: -35px;
            padding-bottom: 60px;
        }

        #ncda-risk-result .score-card {
            padding: 30px 22px;
            border-radius: 18px;
        }

        #ncda-risk-result .score-circle {
            width: 180px;
            height: 180px;
        }

        #ncda-risk-result .score-number {
            font-size: 45px;
        }

        #ncda-risk-result .info-card {
            padding: 25px 22px;
        }

        #ncda-risk-result .guidance {
            padding: 30px 23px;
            border-radius: 18px;
        }

        #ncda-risk-result .guidance h3 {
            font-size: 29px;
        }

        #ncda-risk-result .actions {
            flex-direction: column;
        }

        #ncda-risk-result .ncda-btn {
            width: 100%;
        }
    }

    @media (max-width: 575px) {

        #ncda-risk-result .hero-content h1 {
            font-size: 40px;
        }

        #ncda-risk-result .hero-content p {
            font-size: 15px;
        }

        #ncda-risk-result .detail-item {
            align-items: flex-start;
            flex-direction: column;
            gap: 5px;
        }

        #ncda-risk-result .detail-value {
            text-align: left;
        }

        #ncda-risk-result .bmi-box {
            align-items: flex-start;
            flex-direction: column;
            gap: 6px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        #ncda-risk-result .ncda-btn {
            transition: none;
        }

        #ncda-risk-result .ncda-btn:hover {
            transform: none;
        }
    }
</style>


<div id="ncda-risk-result">

    <!-- =====================================================
         HERO
         ===================================================== -->
    <section class="risk-hero">
        <div class="container">
            <div class="hero-content">

                <div class="eyebrow">
                    Health awareness
                </div>

                <h1>
                    Your health,<br>
                    your next step.
                </h1>

                <p>
                    Your diabetes and hypertension risk assessment has been
                    completed. Review your score and the information below,
                    then consider the next steps that can support your health.
                </p>

            </div>
        </div>
    </section>


    <!-- =====================================================
         RESULTS
         ===================================================== -->
    <section class="results-section">

        <div class="container">

            <!-- Risk Score -->
            <div class="score-card">

                <div class="score-layout">

                    <div>
                        <div class="score-circle">

                            <div class="score-number">
                                {{ $assessment->risk_score }}
                            </div>

                            <div class="score-label">
                                Risk score
                            </div>

                        </div>
                    </div>


                    <div>

                        @if ($assessment->risk_score >= 15)

                            <div class="risk-status risk-high">
                                Higher risk
                            </div>

                            <h2 class="score-heading">
                                Your assessment indicates a high level of risk.
                            </h2>

                            <p class="risk-message">
                                Your result suggests that you may have several
                                factors associated with an increased risk of
                                diabetes. We strongly recommend discussing your
                                result with a qualified healthcare professional
                                for appropriate evaluation and guidance.
                            </p>

                        @elseif ($assessment->risk_score >= 10)

                            <div class="risk-status risk-moderate">
                                Moderate risk
                            </div>

                            <h2 class="score-heading">
                                There are some risk factors to pay attention to.
                            </h2>

                            <p class="risk-message">
                                Your result suggests that you may have an
                                increased risk of developing diabetes. Healthy
                                lifestyle choices and regular health check-ups
                                can help you stay informed about your health.
                            </p>

                        @else

                            <div class="risk-status risk-low">
                                Lower risk
                            </div>

                            <h2 class="score-heading">
                                Your current assessed risk is low.
                            </h2>

                            <p class="risk-message">
                                This result indicates a lower assessed risk at
                                the time of this assessment. Continue supporting
                                your health through healthy lifestyle habits and
                                regular health monitoring.
                            </p>

                        @endif

                    </div>

                </div>

            </div>


            <!-- =================================================
                 DETAILS
                 ================================================= -->
            <div class="row g-4">

                <!-- Personal Details -->
                <div class="col-lg-6">

                    <div class="info-card">

                        <div class="card-heading">

                            <div class="card-icon">
                                <i class="bi-person"></i>
                            </div>

                            <h3>
                                Personal details
                            </h3>

                        </div>


                        <ul class="detail-list">

                            <li class="detail-item">
                                <span class="detail-label">
                                    Age
                                </span>

                                <span class="detail-value">
                                    {{ $assessment->age }} years
                                </span>
                            </li>

                            <li class="detail-item">
                                <span class="detail-label">
                                    Weight
                                </span>

                                <span class="detail-value">
                                    {{ $assessment->weight }} kg
                                </span>
                            </li>

                            <li class="detail-item">
                                <span class="detail-label">
                                    Height
                                </span>

                                <span class="detail-value">
                                    {{ $assessment->height }} cm
                                </span>
                            </li>

                        </ul>


                        <div class="bmi-box">

                            <span>
                                Body Mass Index (BMI)
                            </span>

                            <strong>
                                {{ $assessment->bmi }} kg/m²
                            </strong>

                        </div>

                    </div>

                </div>


                <!-- Health Factors -->
                <div class="col-lg-6">

                    <div class="info-card">

                        <div class="card-heading">

                            <div class="card-icon">
                                <i class="bi-heart-pulse"></i>
                            </div>

                            <h3>
                                Health & lifestyle
                            </h3>

                        </div>


                        <ul class="detail-list">

                            <li class="detail-item">

                                <span class="detail-label">
                                    Family history of diabetes
                                </span>

                                @if($assessment->family_history)
                                    <span class="answer-badge answer-yes">
                                        Yes
                                    </span>
                                @else
                                    <span class="answer-badge answer-no">
                                        No
                                    </span>
                                @endif

                            </li>


                            <li class="detail-item">

                                <span class="detail-label">
                                    Regular physical activity
                                </span>

                                @if($assessment->physical_activity)
                                    <span class="answer-badge answer-yes">
                                        Yes
                                    </span>
                                @else
                                    <span class="answer-badge answer-no">
                                        No
                                    </span>
                                @endif

                            </li>


                            <li class="detail-item">

                                <span class="detail-label">
                                    Smoking
                                </span>

                                @if($assessment->smoking)
                                    <span class="answer-badge answer-yes">
                                        Yes
                                    </span>
                                @else
                                    <span class="answer-badge answer-no">
                                        No
                                    </span>
                                @endif

                            </li>


                            <li class="detail-item">

                                <span class="detail-label">
                                    Hypertension
                                </span>

                                @if($assessment->hypertension)
                                    <span class="answer-badge answer-yes">
                                        Yes
                                    </span>
                                @else
                                    <span class="answer-badge answer-no">
                                        No
                                    </span>
                                @endif

                            </li>


                            <li class="detail-item">

                                <span class="detail-label">
                                    High cholesterol
                                </span>

                                @if($assessment->high_cholesterol)
                                    <span class="answer-badge answer-yes">
                                        Yes
                                    </span>
                                @else
                                    <span class="answer-badge answer-no">
                                        No
                                    </span>
                                @endif

                            </li>

                        </ul>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 GUIDANCE
                 ================================================= -->
            <div class="guidance">

                <div class="guidance-content">

                    <h3>
                        What should you do next?
                    </h3>

                    @if ($assessment->risk_score >= 15)

                        <p>
                            Because your assessment indicates a higher level of
                            risk, consider arranging an appointment with a
                            healthcare professional. They can review your
                            individual circumstances and determine whether
                            additional checks or support are appropriate.
                        </p>

                    @elseif ($assessment->risk_score >= 10)

                        <p>
                            Use this result as an opportunity to pay closer
                            attention to your health. Consider discussing your
                            risk factors with a healthcare professional and
                            maintaining healthy eating, physical activity and
                            regular health monitoring habits.
                        </p>

                    @else

                        <p>
                            Keep building on the healthy habits you already have.
                            Continue to stay active, make balanced food choices
                            and participate in routine health checks when
                            appropriate.
                        </p>

                    @endif

                </div>

            </div>


            <!-- =================================================
                 ACTIONS
                 ================================================= -->
            <div class="actions">

                <a
                    href="{{ route('assessments.create') }}"
                    class="ncda-btn btn-primary"
                >
                    <i class="bi-arrow-repeat"></i>
                    Take another assessment
                </a>

                <button
                    type="button"
                    class="ncda-btn btn-outline"
                    onclick="window.print()"
                >
                    <i class="bi-printer"></i>
                    Print / Save report
                </button>

            </div>


            <!-- =================================================
                 DISCLAIMER
                 ================================================= -->
            <div class="disclaimer">

                <strong>Important:</strong>
                This assessment is intended for health awareness and
                educational purposes only. It does not diagnose diabetes,
                hypertension, or any other medical condition and should not
                replace professional medical advice, diagnosis or treatment.
                If you have concerns about your health, please consult a
                qualified healthcare professional.

            </div>

        </div>

    </section>

</div>

@endsection