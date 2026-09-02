@extends('layouts.app')

@section('title', 'Worker Profile')

@section('content')

<style>
    .worker-profile-page {
        --blue: #5D89C8;
        --blue-dark: #3F679F;
        --blue-deep: #294B78;
        --blue-soft: #EEF4FC;
        --gold: #C99A3E;
        --ink: #17263A;
        --muted: #718096;
        --border: #E4EAF1;
        --paper: #F6F8FB;
        --white: #FFFFFF;
    }

    .profile-header {
        padding: 30px 30px 20px;
    }

    .profile-header-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .page-eyebrow {
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1.2px;
        color: var(--blue);
        margin-bottom: 6px;
    }

    .profile-page-title {
        margin: 0;
        color: var(--blue-deep);
        font-size: 28px;
        font-weight: 800;
        line-height: 1.2;
    }

    .profile-page-subtitle {
        color: var(--muted);
        font-size: 13px;
        margin: 7px 0 0;
    }

    .profile-breadcrumb {
        padding: 0;
        margin: 0;
        background: transparent;
        font-size: 12px;
    }

    .profile-breadcrumb a {
        color: var(--blue);
        font-weight: 600;
    }

    .profile-breadcrumb .active {
        color: var(--muted);
    }

    .profile-content {
        padding: 0 30px 35px;
    }

    /* Main profile card */

    .profile-main-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 35px rgba(41, 75, 120, .06);
        height: 100%;
    }

    .profile-cover {
        height: 110px;
        background:
            linear-gradient(
                135deg,
                var(--blue-deep),
                var(--blue-dark)
            );
        position: relative;
    }

    .profile-cover::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        right: -50px;
        top: -90px;
        background: rgba(255,255,255,.07);
    }

    .profile-avatar-wrapper {
        position: relative;
        margin-top: -55px;
        padding: 0 25px;
    }

    .profile-avatar {
        width: 110px;
        height: 110px;
        border-radius: 28px;
        object-fit: cover;
        border: 5px solid #fff;
        box-shadow: 0 8px 25px rgba(41,75,120,.18);
        background: var(--blue-soft);
    }

    .profile-avatar-fallback {
        width: 110px;
        height: 110px;
        border-radius: 28px;
        border: 5px solid #fff;
        background: linear-gradient(
            135deg,
            var(--blue),
            var(--blue-deep)
        );
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
        font-weight: 800;
        box-shadow: 0 8px 25px rgba(41,75,120,.18);
    }

    .profile-info {
        padding: 15px 25px 25px;
    }

    .profile-name {
        color: var(--blue-deep);
        font-size: 23px;
        font-weight: 800;
        margin: 0;
    }

    .profile-title {
        color: var(--muted);
        font-size: 13px;
        margin-top: 5px;
    }

    .department-pill {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        margin-top: 13px;
        padding: 7px 12px;
        border-radius: 30px;
        background: var(--blue-soft);
        color: var(--blue-dark);
        font-size: 10px;
        font-weight: 700;
    }

    .department-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--blue);
    }

    .profile-details {
        margin-top: 22px;
        border-top: 1px solid var(--border);
    }

    .profile-detail {
        padding: 15px 0;
        border-bottom: 1px solid #EDF1F5;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .profile-detail:last-child {
        border-bottom: 0;
    }

    .profile-detail-label {
        color: var(--muted);
        font-size: 11px;
        font-weight: 600;
    }

    .profile-detail-value {
        color: var(--blue-deep);
        font-size: 12px;
        font-weight: 700;
        text-align: right;
    }

    .profile-edit-btn {
        width: 100%;
        margin-top: 15px;
        border: 0;
        border-radius: 11px;
        padding: 11px 15px;
        background: var(--blue);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        transition: .2s ease;
    }

    .profile-edit-btn:hover {
        background: var(--blue-dark);
        color: #fff;
        transform: translateY(-1px);
    }

    /* About card */

    .about-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 35px rgba(41,75,120,.06);
    }

    .about-card-header {
        padding: 20px 23px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: 11px;
    }

    .about-header-icon {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        background: var(--blue-soft);
        color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-card-header h3 {
        margin: 0;
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
    }

    .about-card-header p {
        margin: 3px 0 0;
        color: var(--muted);
        font-size: 11px;
    }

    .about-body {
        padding: 5px 23px 20px;
    }

    .about-section {
        padding: 20px 0;
        border-bottom: 1px solid #EDF1F5;
    }

    .about-section:last-child {
        border-bottom: 0;
    }

    .about-section-title {
        display: flex;
        align-items: center;
        gap: 10px;
        color: var(--blue-deep);
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .about-section-title i {
        color: var(--blue);
        width: 18px;
        text-align: center;
    }

    .about-text {
        color: var(--muted);
        font-size: 12px;
        line-height: 1.7;
        margin: 0 0 0 28px;
    }

    .empty-about {
        color: #A0AEC0;
        font-style: italic;
    }

    /* Quick info cards */

    .quick-info {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 12px;
        margin-top: 18px;
    }

    .quick-info-item {
        padding: 15px;
        border-radius: 13px;
        background: #F8FAFD;
        border: 1px solid var(--border);
    }

    .quick-info-label {
        color: var(--muted);
        font-size: 10px;
        margin-bottom: 5px;
    }

    .quick-info-value {
        color: var(--blue-deep);
        font-size: 12px;
        font-weight: 700;
    }

    @media (max-width: 767px) {

        .profile-header {
            padding: 22px 16px 15px;
        }

        .profile-header-inner {
            display: block;
        }

        .profile-page-title {
            font-size: 23px;
        }

        .profile-breadcrumb {
            margin-top: 12px;
        }

        .profile-content {
            padding: 0 16px 25px;
        }

        .profile-avatar {
            width: 95px;
            height: 95px;
        }

        .profile-avatar-fallback {
            width: 95px;
            height: 95px;
        }

        .profile-name {
            font-size: 20px;
        }

        .quick-info {
            grid-template-columns: 1fr;
        }
    }
</style>

<div class="worker-profile-page">

    <!-- Header -->
    <section class="profile-header">

        <div class="profile-header-inner">

            <div>
                <div class="page-eyebrow">
                    People Management
                </div>

                <h1 class="profile-page-title">
                    Worker Profile
                </h1>

                <p class="profile-page-subtitle">
                    View and manage this team member's information.
                </p>
            </div>

            <ol class="breadcrumb profile-breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="breadcrumb-item">
                    <a href="{{ route('workers') }}">
                        Workers
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Profile
                </li>

            </ol>

        </div>

    </section>


    <!-- Content -->
    <section class="profile-content">

        <div class="row">

            <!-- Profile -->
            <div class="col-lg-5 mb-4">

                <div class="profile-main-card">

                    <div class="profile-cover"></div>

                    <div class="profile-avatar-wrapper">

                        @if($worker->photo)

                            <img
                                src="{{ URL::asset($worker->photo) }}"
                                alt="{{ $worker->name }}"
                                class="profile-avatar">

                        @else

                            <div class="profile-avatar-fallback">
                                {{ strtoupper(substr($worker->name, 0, 1)) }}
                            </div>

                        @endif

                    </div>


                    <div class="profile-info">

                        <h2 class="profile-name">
                            {{ $worker->name }}
                        </h2>

                        <div class="profile-title">
                            {{ $worker->title }}
                        </div>

                        <div class="department-pill">

                            <span class="department-dot"></span>

                            {{ $worker->department }}

                        </div>


                        <div class="profile-details">

                            <div class="profile-detail">

                                <div class="profile-detail-label">
                                    Full Name
                                </div>

                                <div class="profile-detail-value">
                                    {{ $worker->name }}
                                </div>

                            </div>


                            <div class="profile-detail">

                                <div class="profile-detail-label">
                                    Position
                                </div>

                                <div class="profile-detail-value">
                                    {{ $worker->title }}
                                </div>

                            </div>


                            <div class="profile-detail">

                                <div class="profile-detail-label">
                                    Department
                                </div>

                                <div class="profile-detail-value">
                                    {{ $worker->department }}
                                </div>

                            </div>

                        </div>


                        <a
                            href="{{ route('workers.edit', $worker->id) }}"
                            class="profile-edit-btn">

                            <i class="fas fa-pen"></i>

                            Edit Worker

                        </a>

                    </div>

                </div>

            </div>


            <!-- About -->
            <div class="col-lg-7 mb-4">

                <div class="about-card">

                    <div class="about-card-header">

                        <div class="about-header-icon">
                            <i class="fas fa-user-circle"></i>
                        </div>

                        <div>

                            <h3>
                                About {{ $worker->name }}
                            </h3>

                            <p>
                                Professional information
                            </p>

                        </div>

                    </div>


                    <div class="about-body">

                        <div class="about-section">

                            <div class="about-section-title">

                                <i class="fas fa-graduation-cap"></i>

                                Education

                            </div>

                            <p class="about-text empty-about">
                                No education information has been added.
                            </p>

                        </div>


                        <div class="about-section">

                            <div class="about-section-title">

                                <i class="fas fa-map-marker-alt"></i>

                                Location

                            </div>

                            <p class="about-text empty-about">
                                No location information has been added.
                            </p>

                        </div>


                        <div class="about-section">

                            <div class="about-section-title">

                                <i class="fas fa-tools"></i>

                                Skills

                            </div>

                            <p class="about-text empty-about">
                                No skills information has been added.
                            </p>

                        </div>


                        <div class="about-section">

                            <div class="about-section-title">

                                <i class="far fa-file-alt"></i>

                                Notes

                            </div>

                            <p class="about-text">
                                No additional notes have been added for this worker.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Quick Information -->

                <div class="quick-info">

                    <div class="quick-info-item">

                        <div class="quick-info-label">
                            Department
                        </div>

                        <div class="quick-info-value">
                            {{ $worker->department }}
                        </div>

                    </div>


                    <div class="quick-info-item">

                        <div class="quick-info-label">
                            Role
                        </div>

                        <div class="quick-info-value">
                            {{ $worker->title }}
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection