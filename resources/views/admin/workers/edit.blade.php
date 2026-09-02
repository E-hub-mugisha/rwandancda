@extends('layouts.app')

@section('title', 'Edit Worker')

@section('content')

<style>
    .edit-worker-page {
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

    .edit-header {
        padding: 30px 30px 20px;
    }

    .edit-header-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .page-eyebrow {
        color: var(--blue);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .edit-title {
        margin: 0;
        color: var(--blue-deep);
        font-size: 28px;
        font-weight: 800;
    }

    .edit-subtitle {
        margin: 7px 0 0;
        color: var(--muted);
        font-size: 13px;
    }

    .edit-breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
        font-size: 12px;
    }

    .edit-breadcrumb a {
        color: var(--blue);
        font-weight: 600;
    }

    .edit-breadcrumb .active {
        color: var(--muted);
    }

    .edit-content {
        padding: 0 30px 35px;
    }

    /* Main card */

    .edit-card {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 35px rgba(41,75,120,.06);
    }

    .edit-card-header {
        padding: 20px 24px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .edit-card-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: var(--blue-soft);
        color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .edit-card-header h3 {
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
        margin: 0;
    }

    .edit-card-header p {
        color: var(--muted);
        font-size: 11px;
        margin: 3px 0 0;
    }

    .edit-card-body {
        padding: 25px;
    }

    /* Form */

    .form-group-modern {
        margin-bottom: 20px;
    }

    .form-label-modern {
        display: block;
        color: var(--blue-deep);
        font-size: 11px;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .required {
        color: #DC2626;
    }

    .form-control-modern {
        width: 100%;
        height: 45px;
        padding: 0 13px;
        border: 1px solid var(--border);
        border-radius: 10px;
        background: #fff;
        color: var(--ink);
        font-size: 12px;
        outline: none;
        transition: .2s ease;
    }

    .form-control-modern:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(93,137,200,.12);
    }

    .form-control-modern.is-invalid {
        border-color: #DC2626;
    }

    select.form-control-modern {
        cursor: pointer;
    }

    /* Photo section */

    .photo-section {
        background: #F8FAFD;
        border: 1px solid var(--border);
        border-radius: 14px;
        padding: 18px;
    }

    .photo-preview-wrapper {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 16px;
    }

    .current-photo {
        width: 75px;
        height: 75px;
        border-radius: 18px;
        object-fit: cover;
        border: 3px solid #fff;
        box-shadow: 0 5px 18px rgba(41,75,120,.12);
    }

    .current-photo-fallback {
        width: 75px;
        height: 75px;
        border-radius: 18px;
        background: linear-gradient(
            135deg,
            var(--blue),
            var(--blue-deep)
        );
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 25px;
        font-weight: 800;
    }

    .photo-info-title {
        color: var(--blue-deep);
        font-size: 12px;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .photo-info-text {
        color: var(--muted);
        font-size: 10px;
        line-height: 1.5;
    }

    .custom-file-modern {
        position: relative;
        border: 1px dashed #C9D9EE;
        background: #fff;
        border-radius: 11px;
        padding: 13px;
    }

    .custom-file-modern input {
        width: 100%;
        font-size: 11px;
        color: var(--muted);
    }

    .photo-help {
        margin-top: 7px;
        color: #9AA7B8;
        font-size: 10px;
    }

    /* Footer */

    .edit-card-footer {
        padding: 18px 25px;
        border-top: 1px solid var(--border);
        background: #FAFBFD;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 12px;
    }

    .back-btn {
        color: var(--muted);
        border: 1px solid var(--border);
        background: #fff;
        border-radius: 10px;
        padding: 10px 15px;
        font-size: 12px;
        font-weight: 600;
        display: inline-flex;
        align-items: center;
        gap: 7px;
    }

    .back-btn:hover {
        color: var(--blue-dark);
        background: var(--blue-soft);
    }

    .update-btn {
        color: #fff;
        border: 0;
        background: var(--blue);
        border-radius: 10px;
        padding: 10px 18px;
        font-size: 12px;
        font-weight: 700;
        display: inline-flex;
        align-items: center;
        gap: 7px;
        box-shadow: 0 5px 15px rgba(93,137,200,.22);
        transition: .2s ease;
    }

    .update-btn:hover {
        background: var(--blue-dark);
        color: #fff;
        transform: translateY(-1px);
    }

    /* Error */

    .validation-errors {
        margin: 20px 25px 0;
        padding: 14px 16px;
        border-radius: 12px;
        background: #FEF2F2;
        color: #991B1B;
        font-size: 12px;
    }

    .validation-errors strong {
        font-weight: 700;
    }

    .validation-errors ul {
        margin: 7px 0 0;
        padding-left: 18px;
    }

    /* Side card */

    .edit-side-card {
        background: var(--blue-deep);
        color: #fff;
        border-radius: 20px;
        padding: 25px;
        box-shadow: 0 10px 35px rgba(41,75,120,.10);
        height: 100%;
    }

    .side-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: rgba(255,255,255,.10);
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 18px;
        font-size: 18px;
    }

    .edit-side-card h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 8px;
    }

    .edit-side-card p {
        color: rgba(255,255,255,.68);
        font-size: 12px;
        line-height: 1.7;
        margin-bottom: 22px;
    }

    .side-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        padding: 12px 0;
        border-top: 1px solid rgba(255,255,255,.09);
    }

    .side-item i {
        color: var(--gold);
        margin-top: 2px;
    }

    .side-item span {
        color: rgba(255,255,255,.75);
        font-size: 11px;
        line-height: 1.5;
    }

    @media (max-width: 767px) {

        .edit-header {
            padding: 22px 16px 15px;
        }

        .edit-header-inner {
            display: block;
        }

        .edit-title {
            font-size: 23px;
        }

        .edit-breadcrumb {
            margin-top: 12px;
        }

        .edit-content {
            padding: 0 16px 25px;
        }

        .edit-card-body {
            padding: 20px;
        }

        .edit-card-footer {
            padding: 15px 20px;
        }

        .edit-side-card {
            margin-top: 20px;
        }
    }
</style>

<div class="edit-worker-page">

    <!-- Header -->

    <section class="edit-header">

        <div class="edit-header-inner">

            <div>

                <div class="page-eyebrow">
                    People Management
                </div>

                <h1 class="edit-title">
                    Edit Worker
                </h1>

                <p class="edit-subtitle">
                    Update {{ $worker->name }}'s professional information.
                </p>

            </div>

            <ol class="breadcrumb edit-breadcrumb">

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
                    Edit
                </li>

            </ol>

        </div>

    </section>


    <!-- Content -->

    <section class="edit-content">

        <div class="row">

            <div class="col-lg-8 mb-4">

                <div class="edit-card">

                    <div class="edit-card-header">

                        <div class="edit-card-icon">
                            <i class="fas fa-user-edit"></i>
                        </div>

                        <div>

                            <h3>
                                {{ $worker->name }}
                            </h3>

                            <p>
                                Update worker information
                            </p>

                        </div>

                    </div>


                    @if ($errors->any())

                        <div class="validation-errors">

                            <strong>
                                Please correct the following:
                            </strong>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>
                                        {{ $error }}
                                    </li>

                                @endforeach

                            </ul>

                        </div>

                    @endif


                    <form
                        action="{{ route('workers.update', $worker->id) }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        @method('PUT')


                        <div class="edit-card-body">

                            <!-- Name -->

                            <div class="form-group-modern">

                                <label
                                    class="form-label-modern"
                                    for="name">

                                    Full Name
                                    <span class="required">*</span>

                                </label>

                                <input
                                    type="text"
                                    class="form-control-modern @error('name') is-invalid @enderror"
                                    name="name"
                                    id="name"
                                    value="{{ old('name', $worker->name) }}"
                                    placeholder="Enter worker's full name"
                                    required>

                            </div>


                            <!-- Title -->

                            <div class="form-group-modern">

                                <label
                                    class="form-label-modern"
                                    for="title">

                                    Job Title
                                    <span class="required">*</span>

                                </label>

                                <input
                                    type="text"
                                    class="form-control-modern @error('title') is-invalid @enderror"
                                    name="title"
                                    id="title"
                                    value="{{ old('title', $worker->title) }}"
                                    placeholder="e.g. Executive Director"
                                    required>

                            </div>


                            <!-- Department -->

                            <div class="form-group-modern">

                                <label
                                    class="form-label-modern"
                                    for="department">

                                    Department
                                    <span class="required">*</span>

                                </label>

                                <select
                                    class="form-control-modern @error('department') is-invalid @enderror"
                                    name="department"
                                    id="department"
                                    required>

                                    <option value="">
                                        Select Department
                                    </option>

                                    <option
                                        value="BOARD MEMBERS"
                                        {{ old('department', $worker->department) == 'BOARD MEMBERS' ? 'selected' : '' }}>

                                        Board Members

                                    </option>

                                    <option
                                        value="ADVISORY COMMITTEE"
                                        {{ old('department', $worker->department) == 'ADVISORY COMMITTEE' ? 'selected' : '' }}>

                                        Advisory Committee

                                    </option>

                                    <option
                                        value="WORKFORCE"
                                        {{ old('department', $worker->department) == 'WORKFORCE' ? 'selected' : '' }}>

                                        Workforce

                                    </option>

                                </select>

                            </div>


                            <!-- Photo -->

                            <div class="form-group-modern mb-0">

                                <label class="form-label-modern">
                                    Profile Photo
                                </label>

                                <div class="photo-section">

                                    <div class="photo-preview-wrapper">

                                        @if($worker->photo)

                                            <img
                                                src="{{ URL::asset($worker->photo) }}"
                                                alt="{{ $worker->name }}"
                                                class="current-photo">

                                        @else

                                            <div class="current-photo-fallback">

                                                {{ strtoupper(substr($worker->name, 0, 1)) }}

                                            </div>

                                        @endif


                                        <div>

                                            <div class="photo-info-title">
                                                Current Profile Photo
                                            </div>

                                            <div class="photo-info-text">
                                                Upload a new image to replace the current profile photo.
                                            </div>

                                        </div>

                                    </div>


                                    <div class="custom-file-modern">

                                        <input
                                            type="file"
                                            name="photo"
                                            id="photo"
                                            accept="image/jpeg,image/png,image/jpg,image/webp">

                                        <div class="photo-help">
                                            Recommended: JPG, JPEG, PNG or WEBP.
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>


                        <!-- Footer -->

                        <div class="edit-card-footer">

                            <a
                                href="{{ route('workers.show', $worker->id) }}"
                                class="back-btn">

                                <i class="fas fa-arrow-left"></i>

                                Cancel

                            </a>


                            <button
                                type="submit"
                                class="update-btn">

                                <i class="fas fa-save"></i>

                                Update Worker

                            </button>

                        </div>

                    </form>

                </div>

            </div>


            <!-- Side information -->

            <div class="col-lg-4 mb-4">

                <div class="edit-side-card">

                    <div class="side-icon">
                        <i class="fas fa-user-cog"></i>
                    </div>

                    <h3>
                        Worker Information
                    </h3>

                    <p>
                        Keep your organization directory accurate and up to date.
                        Changes made here will update this worker's profile.
                    </p>


                    <div class="side-item">

                        <i class="fas fa-check-circle"></i>

                        <span>
                            Use the worker's full professional name.
                        </span>

                    </div>


                    <div class="side-item">

                        <i class="fas fa-check-circle"></i>

                        <span>
                            Keep the job title clear and accurate.
                        </span>

                    </div>


                    <div class="side-item">

                        <i class="fas fa-check-circle"></i>

                        <span>
                            Select the correct organizational department.
                        </span>

                    </div>


                    <div class="side-item">

                        <i class="fas fa-image"></i>

                        <span>
                            Upload a clear professional profile photo.
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>

</div>

@endsection