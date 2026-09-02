@extends('layouts.base')

@section('title', 'Diabetes & Hypertension Risk Assessment')

@section('description', 'Assess your risk of diabetes and hypertension and learn why early detection and healthy lifestyle choices matter.')

@section('content')

<style>
    /* =========================================================
       MODERN NGO HEALTH ASSESSMENT
       ========================================================= */

    #ncda-risk {
        --primary: #0A599E;
        --primary-dark: #073F70;
        --green: #16845C;
        --green-dark: #0E6043;
        --accent: #F2B84B;

        --ink: #172B3A;
        --muted: #667784;

        --background: #F5F9FC;
        --surface: #FFFFFF;
        --border: #E1EAF0;

        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        color: var(--ink);
        background: var(--background);
    }

    #ncda-risk h1,
    #ncda-risk h2,
    #ncda-risk h3,
    #ncda-risk h4 {
        font-family: 'Newsreader', Georgia, serif;
    }


    /* =========================================================
       HERO
       ========================================================= */

    .ncda-risk-hero {
        position: relative;
        overflow: hidden;

        padding: 105px 0 90px;

        background:
            linear-gradient(
                135deg,
                #F1F8FC 0%,
                #FFFFFF 55%,
                #EFF8F4 100%
            );
    }

    .ncda-risk-hero::before {
        content: "";

        position: absolute;

        width: 500px;
        height: 500px;

        border-radius: 50%;

        background: rgba(10, 89, 158, .045);

        top: -280px;
        right: -130px;
    }

    .ncda-risk-hero::after {
        content: "";

        position: absolute;

        width: 300px;
        height: 300px;

        border-radius: 50%;

        border: 1px solid rgba(22, 132, 92, .08);

        bottom: -170px;
        left: -100px;
    }

    .ncda-risk-hero-inner {
        position: relative;
        z-index: 2;
    }

    .ncda-risk-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 9px;

        color: var(--primary);

        font-size: 13px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: 1.2px;

        margin-bottom: 18px;
    }

    .ncda-risk-eyebrow::before {
        content: "";

        width: 28px;
        height: 3px;

        border-radius: 5px;

        background: var(--green);
    }

    .ncda-risk-hero h1 {
        max-width: 800px;

        font-size: clamp(42px, 6vw, 68px);
        line-height: 1.03;

        color: var(--primary-dark);

        margin: 0 0 22px;
    }

    .ncda-risk-hero h1 span {
        color: var(--green);
    }

    .ncda-risk-intro {
        max-width: 690px;

        color: var(--muted);

        font-size: 17px;
        line-height: 1.8;

        margin: 0;
    }


    /* =========================================================
       HERO POINTS
       ========================================================= */

    .ncda-risk-points {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;

        margin-top: 30px;
    }

    .ncda-risk-point {
        display: flex;
        align-items: center;
        gap: 8px;

        padding: 10px 14px;

        background: rgba(255,255,255,.75);

        border: 1px solid var(--border);

        border-radius: 50px;

        color: var(--primary-dark);

        font-size: 12px;
        font-weight: 600;
    }

    .ncda-risk-point i {
        color: var(--green);
    }


    /* =========================================================
       ASSESSMENT AREA
       ========================================================= */

    .ncda-risk-area {
        padding: 85px 0 110px;

        background: var(--background);
    }

    .ncda-risk-layout {
        display: grid;

        grid-template-columns: .75fr 1.25fr;

        gap: 45px;

        align-items: start;
    }


    /* =========================================================
       LEFT INFORMATION PANEL
       ========================================================= */

    .ncda-risk-info {
        position: sticky;
        top: 30px;
    }

    .ncda-risk-info-label {
        display: inline-block;

        padding: 7px 12px;

        border-radius: 50px;

        background: #E8F5EF;

        color: var(--green);

        font-size: 11px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: .8px;

        margin-bottom: 15px;
    }

    .ncda-risk-info h2 {
        color: var(--primary-dark);

        font-size: 38px;
        line-height: 1.15;

        margin: 0 0 15px;
    }

    .ncda-risk-info > p {
        color: var(--muted);

        font-size: 15px;
        line-height: 1.75;

        margin-bottom: 28px;
    }


    /* INFO BOX */

    .ncda-risk-note {
        padding: 20px;

        background: #FFFFFF;

        border: 1px solid var(--border);

        border-radius: 16px;

        margin-bottom: 14px;
    }

    .ncda-risk-note-header {
        display: flex;
        align-items: center;
        gap: 12px;

        margin-bottom: 9px;
    }

    .ncda-risk-note-icon {
        flex: 0 0 38px;

        width: 38px;
        height: 38px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 11px;

        background: #EDF5FA;

        color: var(--primary);
    }

    .ncda-risk-note h3 {
        font-family: 'Inter', sans-serif;

        font-size: 14px;
        font-weight: 700;

        color: var(--ink);

        margin: 0;
    }

    .ncda-risk-note p {
        color: var(--muted);

        font-size: 13px;
        line-height: 1.65;

        margin: 0;
    }


    /* =========================================================
       FORM CARD
       ========================================================= */

    .ncda-risk-form-card {
        background: #FFFFFF;

        border: 1px solid var(--border);

        border-radius: 24px;

        padding: 38px;

        box-shadow:
            0 20px 60px rgba(20, 55, 80, .09);
    }

    .ncda-form-header {
        display: flex;
        justify-content: space-between;
        align-items: start;

        gap: 20px;

        padding-bottom: 25px;

        border-bottom: 1px solid var(--border);

        margin-bottom: 28px;
    }

    .ncda-form-header h2 {
        color: var(--primary-dark);

        font-size: 30px;

        margin: 0 0 6px;
    }

    .ncda-form-header p {
        color: var(--muted);

        font-size: 13px;
        line-height: 1.6;

        margin: 0;
    }

    .ncda-form-step {
        flex: 0 0 auto;

        display: flex;
        align-items: center;
        justify-content: center;

        width: 42px;
        height: 42px;

        border-radius: 50%;

        background: #EDF5FA;

        color: var(--primary);

        font-size: 13px;
        font-weight: 800;
    }


    /* =========================================================
       FORM SECTIONS
       ========================================================= */

    .ncda-form-section {
        margin-bottom: 32px;
    }

    .ncda-form-section:last-of-type {
        margin-bottom: 10px;
    }

    .ncda-form-section-title {
        display: flex;
        align-items: center;
        gap: 10px;

        color: var(--primary-dark);

        font-family: 'Inter', sans-serif;

        font-size: 14px;
        font-weight: 800;

        margin-bottom: 18px;
    }

    .ncda-form-section-title::before {
        content: "";

        width: 4px;
        height: 18px;

        border-radius: 5px;

        background: var(--green);
    }


    /* =========================================================
       FORM FIELDS
       ========================================================= */

    .ncda-field {
        margin-bottom: 20px;
    }

    .ncda-field label {
        display: block;

        color: var(--ink);

        font-size: 12px;
        font-weight: 700;

        margin-bottom: 8px;
    }

    .ncda-input-wrapper {
        position: relative;
    }

    .ncda-input,
    .ncda-select {
        width: 100%;

        height: 54px;

        border: 1px solid var(--border);

        border-radius: 11px;

        background: #FAFCFD;

        color: var(--ink);

        padding: 0 16px;

        font-family: inherit;

        font-size: 14px;

        outline: none;

        transition:
            border-color .2s ease,
            box-shadow .2s ease,
            background .2s ease;
    }

    .ncda-input-wrapper .ncda-input {
        padding-right: 55px;
    }

    .ncda-input:focus,
    .ncda-select:focus {
        border-color: var(--primary);

        background: #FFFFFF;

        box-shadow:
            0 0 0 4px rgba(10, 89, 158, .07);
    }

    .ncda-input::placeholder {
        color: #9AA8B5;
    }

    .ncda-input-unit {
        position: absolute;

        right: 16px;
        top: 50%;

        transform: translateY(-50%);

        color: var(--primary);

        font-size: 12px;
        font-weight: 700;
    }

    .ncda-select {
        appearance: none;

        cursor: pointer;

        padding-right: 40px;

        background-image:
            linear-gradient(45deg, transparent 50%, #71808C 50%),
            linear-gradient(135deg, #71808C 50%, transparent 50%);

        background-position:
            calc(100% - 18px) 23px,
            calc(100% - 13px) 23px;

        background-size: 5px 5px, 5px 5px;

        background-repeat: no-repeat;
    }


    /* =========================================================
       QUESTION CARDS
       ========================================================= */

    .ncda-question-card {
        padding: 18px;

        border: 1px solid var(--border);

        border-radius: 14px;

        background: #FBFDFE;

        margin-bottom: 15px;
    }

    .ncda-question-card label {
        font-size: 13px;

        line-height: 1.5;

        margin-bottom: 10px;
    }


    /* =========================================================
       SUBMIT
       ========================================================= */

    .ncda-submit-area {
        padding-top: 25px;

        border-top: 1px solid var(--border);

        margin-top: 28px;
    }

    .ncda-submit-btn {
        width: 100%;

        min-height: 58px;

        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;

        border: none;

        border-radius: 12px;

        background: var(--primary);

        color: #FFFFFF;

        font-size: 15px;
        font-weight: 700;

        cursor: pointer;

        transition:
            transform .2s ease,
            background .2s ease,
            box-shadow .2s ease;
    }

    .ncda-submit-btn:hover {
        background: var(--primary-dark);

        transform: translateY(-2px);

        box-shadow:
            0 12px 30px rgba(10, 89, 158, .2);
    }

    .ncda-submit-btn i {
        transition: transform .2s ease;
    }

    .ncda-submit-btn:hover i {
        transform: translateX(4px);
    }

    .ncda-submit-note {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 7px;

        color: #8997A2;

        font-size: 11px;

        margin: 14px 0 0;
    }

    .ncda-submit-note i {
        color: var(--green);
    }


    /* =========================================================
       FOOTNOTE
       ========================================================= */

    .ncda-risk-disclaimer {
        margin-top: 20px;

        padding: 17px 20px;

        border-radius: 12px;

        background: #FFF9ED;

        border: 1px solid #F4E6C4;

        color: #786743;

        font-size: 12px;

        line-height: 1.65;
    }

    .ncda-risk-disclaimer strong {
        color: #5D4A20;
    }


    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 991px) {

        .ncda-risk-layout {
            grid-template-columns: 1fr;

            gap: 40px;
        }

        .ncda-risk-info {
            position: static;
        }

        .ncda-risk-hero {
            padding: 80px 0 70px;
        }

    }

    @media (max-width: 767px) {

        .ncda-risk-area {
            padding: 60px 0 80px;
        }

        .ncda-risk-form-card {
            padding: 25px 20px;

            border-radius: 18px;
        }

        .ncda-form-header {
            align-items: center;
        }

        .ncda-form-header h2 {
            font-size: 25px;
        }

        .ncda-risk-info h2 {
            font-size: 32px;
        }

    }

    @media (max-width: 575px) {

        .ncda-risk-hero {
            padding: 60px 0;
        }

        .ncda-risk-hero h1 {
            font-size: 40px;
        }

        .ncda-risk-intro {
            font-size: 15px;
        }

        .ncda-risk-points {
            display: grid;
            grid-template-columns: 1fr;
        }

        .ncda-risk-point {
            border-radius: 10px;
        }

    }


    /* =========================================================
       ACCESSIBILITY
       ========================================================= */

    @media (prefers-reduced-motion: reduce) {

        .ncda-submit-btn,
        .ncda-submit-btn i,
        .ncda-input,
        .ncda-select {
            transition: none;
        }

    }
</style>


{{-- GOOGLE FONTS --}}
<link rel="preconnect" href="https://fonts.googleapis.com">

<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Newsreader:wght@400;500;600&display=swap"
    rel="stylesheet"
>


<div id="ncda-risk">


    {{-- =====================================================
         HERO
    ====================================================== --}}

    <section class="ncda-risk-hero">

        <div class="container ncda-risk-hero-inner">

            <div class="ncda-risk-eyebrow">
                Health awareness
            </div>

            <h1>
                Know your risk.
                <span>Take action early.</span>
            </h1>

            <p class="ncda-risk-intro">
                Diabetes and hypertension can develop quietly, sometimes
                without noticeable symptoms. This simple assessment helps
                you understand some of the factors that may influence your
                risk and encourages you to take the next step toward better
                health.
            </p>

            <div class="ncda-risk-points">

                <div class="ncda-risk-point">
                    <i class="fa-solid fa-clock"></i>
                    Takes only a few minutes
                </div>

                <div class="ncda-risk-point">
                    <i class="fa-solid fa-heart-pulse"></i>
                    Focus on prevention
                </div>

                <div class="ncda-risk-point">
                    <i class="fa-solid fa-shield-heart"></i>
                    Health awareness tool
                </div>

            </div>

        </div>

    </section>


    {{-- =====================================================
         ASSESSMENT
    ====================================================== --}}

    <section class="ncda-risk-area">

        <div class="container">

            <div class="ncda-risk-layout">


                {{-- =================================================
                     INFORMATION
                ================================================== --}}

                <aside class="ncda-risk-info">

                    <span class="ncda-risk-info-label">
                        Before you begin
                    </span>

                    <h2>
                        A few questions about your health
                    </h2>

                    <p>
                        Answer the questions as accurately as you can.
                        Your answers help us estimate your risk based on
                        several common health and lifestyle factors.
                    </p>


                    {{-- INFO CARD --}}

                    <div class="ncda-risk-note">

                        <div class="ncda-risk-note-header">

                            <div class="ncda-risk-note-icon">
                                <i class="fa-solid fa-person"></i>
                            </div>

                            <h3>
                                Personal information
                            </h3>

                        </div>

                        <p>
                            We ask for basic information such as age,
                            height and weight to help provide a more
                            meaningful assessment.
                        </p>

                    </div>


                    <div class="ncda-risk-note">

                        <div class="ncda-risk-note-header">

                            <div class="ncda-risk-note-icon">
                                <i class="fa-solid fa-heart-pulse"></i>
                            </div>

                            <h3>
                                Health & lifestyle
                            </h3>

                        </div>

                        <p>
                            Your answers about physical activity,
                            family history and existing conditions
                            help identify important risk factors.
                        </p>

                    </div>


                    <div class="ncda-risk-note">

                        <div class="ncda-risk-note-header">

                            <div class="ncda-risk-note-icon">
                                <i class="fa-solid fa-user-doctor"></i>
                            </div>

                            <h3>
                                Remember
                            </h3>

                        </div>

                        <p>
                            This assessment is for awareness and does
                            not replace professional medical advice,
                            diagnosis or testing.
                        </p>

                    </div>

                </aside>


                {{-- =================================================
                     FORM
                ================================================== --}}

                <div class="ncda-risk-form-card">

                    <div class="ncda-form-header">

                        <div>

                            <h2>
                                Assess your risk
                            </h2>

                            <p>
                                Please complete all the questions below.
                            </p>

                        </div>

                        <div class="ncda-form-step">
                            01
                        </div>

                    </div>


                    <form
                        id="diabetesAssessmentForm"
                        method="POST"
                        action="{{ route('assessments.store') }}"
                        onsubmit="return checkSubmit()"
                    >

                        @csrf


                        {{-- ==========================================
                             PERSONAL INFORMATION
                        =========================================== --}}

                        <div class="ncda-form-section">

                            <div class="ncda-form-section-title">
                                Personal information
                            </div>

                            <div class="row">


                                {{-- AGE --}}

                                <div class="col-md-4">

                                    <div class="ncda-field">

                                        <label for="age">
                                            Age
                                        </label>

                                        <div class="ncda-input-wrapper">

                                            <input
                                                type="number"
                                                name="age"
                                                id="age"
                                                class="ncda-input"
                                                placeholder="Enter your age"
                                                min="1"
                                                max="120"
                                                required
                                            >

                                            <span class="ncda-input-unit">
                                                years
                                            </span>

                                        </div>

                                    </div>

                                </div>


                                {{-- WEIGHT --}}

                                <div class="col-md-4">

                                    <div class="ncda-field">

                                        <label for="weight">
                                            Weight
                                        </label>

                                        <div class="ncda-input-wrapper">

                                            <input
                                                type="number"
                                                name="weight"
                                                id="weight"
                                                class="ncda-input"
                                                placeholder="Your weight"
                                                min="1"
                                                step="0.1"
                                                required
                                            >

                                            <span class="ncda-input-unit">
                                                kg
                                            </span>

                                        </div>

                                    </div>

                                </div>


                                {{-- HEIGHT --}}

                                <div class="col-md-4">

                                    <div class="ncda-field">

                                        <label for="height">
                                            Height
                                        </label>

                                        <div class="ncda-input-wrapper">

                                            <input
                                                type="number"
                                                name="height"
                                                id="height"
                                                class="ncda-input"
                                                placeholder="Your height"
                                                min="50"
                                                max="250"
                                                step="0.1"
                                                required
                                            >

                                            <span class="ncda-input-unit">
                                                cm
                                            </span>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        {{-- ==========================================
                             HEALTH HISTORY
                        =========================================== --}}

                        <div class="ncda-form-section">

                            <div class="ncda-form-section-title">
                                Health history
                            </div>


                            {{-- FAMILY HISTORY --}}

                            <div class="ncda-question-card">

                                <label for="family_history">
                                    Does anyone in your immediate family
                                    have diabetes?
                                </label>

                                <select
                                    class="ncda-select"
                                    id="family_history"
                                    name="family_history"
                                    required
                                >

                                    <option value="" disabled selected>
                                        Select an answer
                                    </option>

                                    <option value="1">
                                        Yes
                                    </option>

                                    <option value="0">
                                        No
                                    </option>

                                </select>

                            </div>


                            {{-- HYPERTENSION --}}

                            <div class="ncda-question-card">

                                <label for="hypertension">
                                    Have you been diagnosed with hypertension?
                                </label>

                                <select
                                    class="ncda-select"
                                    id="hypertension"
                                    name="hypertension"
                                    required
                                >

                                    <option value="" disabled selected>
                                        Select an answer
                                    </option>

                                    <option value="1">
                                        Yes
                                    </option>

                                    <option value="0">
                                        No
                                    </option>

                                </select>

                            </div>


                            {{-- CHOLESTEROL --}}

                            <div class="ncda-question-card">

                                <label for="high_cholesterol">
                                    Have you been told that you have
                                    high cholesterol?
                                </label>

                                <select
                                    class="ncda-select"
                                    id="high_cholesterol"
                                    name="high_cholesterol"
                                    required
                                >

                                    <option value="" disabled selected>
                                        Select an answer
                                    </option>

                                    <option value="1">
                                        Yes
                                    </option>

                                    <option value="0">
                                        No
                                    </option>

                                </select>

                            </div>

                        </div>


                        {{-- ==========================================
                             LIFESTYLE
                        =========================================== --}}

                        <div class="ncda-form-section">

                            <div class="ncda-form-section-title">
                                Lifestyle
                            </div>


                            {{-- PHYSICAL ACTIVITY --}}

                            <div class="ncda-question-card">

                                <label for="physical_activity">
                                    Do you engage in regular physical activity?
                                </label>

                                <select
                                    class="ncda-select"
                                    id="physical_activity"
                                    name="physical_activity"
                                    required
                                >

                                    <option value="" disabled selected>
                                        Select an answer
                                    </option>

                                    <option value="1">
                                        Yes, regularly
                                    </option>

                                    <option value="0">
                                        No
                                    </option>

                                </select>

                            </div>


                            {{-- SMOKING --}}

                            <div class="ncda-question-card">

                                <label for="smoking">
                                    Do you currently smoke?
                                </label>

                                <select
                                    class="ncda-select"
                                    id="smoking"
                                    name="smoking"
                                    required
                                >

                                    <option value="" disabled selected>
                                        Select an answer
                                    </option>

                                    <option value="1">
                                        Yes
                                    </option>

                                    <option value="0">
                                        No
                                    </option>

                                </select>

                            </div>

                        </div>


                        {{-- ==========================================
                             SUBMIT
                        =========================================== --}}

                        <div class="ncda-submit-area">

                            <button
                                type="submit"
                                class="ncda-submit-btn"
                            >

                                Assess my risk

                                <i class="fa-solid fa-arrow-right"></i>

                            </button>

                            <p class="ncda-submit-note">

                                <i class="fa-solid fa-lock"></i>

                                Please answer all questions honestly
                                for a more useful assessment.

                            </p>

                        </div>


                        {{-- DISCLAIMER --}}

                        <div class="ncda-risk-disclaimer">

                            <strong>Important:</strong>
                            This assessment is intended for health education
                            and awareness. It does not provide a medical
                            diagnosis. If you have concerns about your health,
                            symptoms, blood pressure or blood sugar, speak
                            with a qualified healthcare professional.

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection