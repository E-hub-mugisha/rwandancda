@extends('layouts.app')

@section('title', 'Workers')

@section('content')

<style>
    /* =========================================
       WORKERS PAGE
    ========================================= */

    .workers-page {
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

    /* =========================================
       HEADER
    ========================================= */

    .workers-header {
        padding: 30px 30px 20px;
    }

    .workers-header-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
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

    .workers-title {
        font-size: 28px;
        font-weight: 800;
        color: var(--blue-deep);
        margin: 0;
        line-height: 1.2;
    }

    .workers-subtitle {
        color: var(--muted);
        margin: 7px 0 0;
        font-size: 13px;
    }

    .breadcrumb-modern {
        margin: 0;
        padding: 0;
        background: transparent;
        font-size: 12px;
    }

    .breadcrumb-modern a {
        color: var(--blue);
        font-weight: 600;
    }

    .breadcrumb-modern .active {
        color: var(--muted);
    }


    /* =========================================
       CONTENT
    ========================================= */

    .workers-content {
        padding: 0 30px 35px;
    }


    /* =========================================
       STAT CARDS
    ========================================= */

    .worker-stat-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 16px;
        padding: 18px;
        display: flex;
        align-items: center;
        gap: 15px;
        height: 100%;
        box-shadow: 0 8px 25px rgba(41, 75, 120, .045);
    }

    .stat-icon {
        width: 48px;
        height: 48px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--blue-soft);
        color: var(--blue-dark);
        font-size: 18px;
        flex-shrink: 0;
    }

    .stat-icon.gold {
        background: rgba(201, 154, 62, .12);
        color: var(--gold);
    }

    .stat-label {
        color: var(--muted);
        font-size: 11px;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .stat-number {
        color: var(--blue-deep);
        font-size: 22px;
        font-weight: 800;
        line-height: 1;
    }


    /* =========================================
       MAIN CARD
    ========================================= */

    .workers-card {
        margin-top: 22px;
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        box-shadow: 0 8px 30px rgba(41, 75, 120, .055);
        overflow: hidden;
    }


    /* =========================================
       CARD HEADER
    ========================================= */

    .workers-card-header {
        padding: 20px 22px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .workers-card-title {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .workers-card-title-icon {
        width: 38px;
        height: 38px;
        border-radius: 11px;
        background: var(--blue-soft);
        color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .workers-card-title h3 {
        margin: 0;
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
    }

    .workers-card-title span {
        display: block;
        color: var(--muted);
        font-size: 11px;
        margin-top: 2px;
    }


    /* =========================================
       ADD BUTTON
    ========================================= */

    .btn-add-worker {
        display: inline-flex;
        align-items: center;
        gap: 8px;

        background: var(--blue);
        border: 0;
        color: #fff;

        padding: 10px 15px;
        border-radius: 10px;

        font-size: 12px;
        font-weight: 700;

        box-shadow: 0 5px 15px rgba(93, 137, 200, .22);

        transition: all .2s ease;
    }

    .btn-add-worker:hover {
        background: var(--blue-dark);
        color: #fff;
        transform: translateY(-1px);
    }


    /* =========================================
       SEARCH
    ========================================= */

    .workers-toolbar {
        padding: 15px 22px;
        border-bottom: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .workers-count {
        color: var(--muted);
        font-size: 12px;
    }

    .workers-count strong {
        color: var(--blue-deep);
    }

    .workers-search {
        position: relative;
        width: 240px;
    }

    .workers-search i {
        position: absolute;
        left: 13px;
        top: 50%;
        transform: translateY(-50%);
        color: #9AA7B8;
        font-size: 12px;
    }

    .workers-search input {
        width: 100%;
        height: 40px;
        border: 1px solid var(--border);
        border-radius: 10px;
        padding: 0 12px 0 36px;
        font-size: 12px;
        outline: none;
        transition: .2s;
    }

    .workers-search input:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(93, 137, 200, .12);
    }


    /* =========================================
       TABLE
    ========================================= */

    .workers-table-wrapper {
        overflow-x: auto;
    }

    .workers-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
    }

    .workers-table thead th {
        background: #F8FAFD;
        color: #718096;
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .6px;
        padding: 14px 20px;
        border-bottom: 1px solid var(--border);
        white-space: nowrap;
    }

    .workers-table tbody td {
        padding: 15px 20px;
        border-bottom: 1px solid #EDF1F5;
        vertical-align: middle;
        font-size: 13px;
    }

    .workers-table tbody tr {
        transition: all .2s ease;
    }

    .workers-table tbody tr:hover {
        background: #FBFCFE;
    }

    .workers-table tbody tr:last-child td {
        border-bottom: 0;
    }


    /* =========================================
       WORKER PROFILE
    ========================================= */

    .worker-profile {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .worker-avatar {
        width: 46px;
        height: 46px;
        border-radius: 13px;
        object-fit: cover;
        background: var(--blue-soft);
        border: 1px solid #DCE7F5;
        flex-shrink: 0;
    }

    .worker-avatar-fallback {
        width: 46px;
        height: 46px;
        border-radius: 13px;

        background: linear-gradient(
            135deg,
            var(--blue),
            var(--blue-deep)
        );

        color: #fff;

        display: flex;
        align-items: center;
        justify-content: center;

        font-weight: 800;
        font-size: 15px;

        flex-shrink: 0;
    }

    .worker-name {
        color: var(--blue-deep);
        font-weight: 700;
        font-size: 13px;
        margin-bottom: 3px;
    }

    .worker-title {
        color: var(--muted);
        font-size: 11px;
    }


    /* =========================================
       DEPARTMENT BADGE
    ========================================= */

    .department-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;

        background: var(--blue-soft);
        color: var(--blue-dark);

        padding: 6px 10px;
        border-radius: 20px;

        font-size: 10px;
        font-weight: 700;
    }

    .department-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--blue);
    }


    /* =========================================
       ACTION BUTTONS
    ========================================= */

    .worker-actions {
        display: flex;
        justify-content: flex-end;
        gap: 6px;
    }

    .worker-action {
        width: 34px;
        height: 34px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border-radius: 9px;

        border: 1px solid var(--border);
        background: #fff;

        color: var(--muted);

        transition: all .2s ease;
    }

    .worker-action:hover {
        background: var(--blue-soft);
        border-color: #C9D9EE;
        color: var(--blue-dark);
    }

    .worker-action.delete:hover {
        background: #FEF2F2;
        border-color: #FECACA;
        color: #DC2626;
    }

    .delete-form {
        margin: 0;
    }


    /* =========================================
       PAGINATION
    ========================================= */

    .workers-pagination {
        padding: 18px 22px;
        border-top: 1px solid var(--border);
        display: flex;
        justify-content: flex-end;
    }

    .workers-pagination nav {
        margin: 0;
    }

    .workers-pagination .pagination {
        margin: 0;
    }

    .workers-pagination .page-link {
        color: var(--blue-dark);
        border-color: var(--border);
        font-size: 12px;
        border-radius: 8px;
        margin: 0 2px;
    }

    .workers-pagination .page-item.active .page-link {
        background: var(--blue);
        border-color: var(--blue);
        color: #fff;
    }


    /* =========================================
       EMPTY STATE
    ========================================= */

    .workers-empty {
        text-align: center;
        padding: 60px 20px;
    }

    .workers-empty-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 15px;

        border-radius: 18px;

        background: var(--blue-soft);
        color: var(--blue);

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 22px;
    }

    .workers-empty h4 {
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
    }

    .workers-empty p {
        color: var(--muted);
        font-size: 12px;
    }


    /* =========================================
       MODAL
    ========================================= */

    .worker-modal .modal-dialog {
        max-width: 620px;
    }

    .worker-modal .modal-content {
        border: 0;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 70px rgba(41, 75, 120, .20);
    }

    .worker-modal-header {
        background: var(--blue-deep);
        color: #fff;
        padding: 22px 25px;

        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .worker-modal-title {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .worker-modal-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: rgba(255,255,255,.12);

        display: flex;
        align-items: center;
        justify-content: center;

        color: #fff;
    }

    .worker-modal-header h4 {
        margin: 0;
        font-size: 17px;
        font-weight: 700;
    }

    .worker-modal-header p {
        margin: 3px 0 0;
        font-size: 11px;
        color: rgba(255,255,255,.65);
    }

    .worker-modal-header .close {
        color: #fff;
        opacity: .75;
        text-shadow: none;
    }

    .worker-modal-header .close:hover {
        color: #fff;
        opacity: 1;
    }

    .worker-modal-body {
        padding: 25px;
        background: #fff;
    }

    .worker-form-group {
        margin-bottom: 18px;
    }

    .worker-form-label {
        display: block;
        color: var(--blue-deep);
        font-size: 11px;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .worker-form-label .required {
        color: #DC2626;
    }

    .worker-form-control {
        width: 100%;
        height: 44px;

        border: 1px solid var(--border);
        border-radius: 10px;

        padding: 0 13px;

        color: var(--ink);
        background: #fff;

        font-size: 12px;

        outline: none;

        transition: .2s;
    }

    textarea.worker-form-control {
        height: auto;
        padding-top: 12px;
    }

    .worker-form-control:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(93,137,200,.12);
    }

    .worker-form-control.is-invalid {
        border-color: #DC2626;
    }

    .worker-file {
        border: 1px dashed #C9D9EE;
        background: #F8FAFD;
        border-radius: 12px;
        padding: 15px;
    }

    .worker-file input {
        font-size: 12px;
        color: var(--muted);
    }

    .worker-modal-footer {
        padding: 18px 25px;
        border-top: 1px solid var(--border);
        background: #FAFBFD;

        display: flex;
        justify-content: flex-end;
        gap: 10px;
    }

    .btn-modal-cancel {
        border: 1px solid var(--border);
        background: #fff;
        color: var(--muted);
        border-radius: 10px;
        padding: 10px 16px;
        font-size: 12px;
        font-weight: 600;
    }

    .btn-modal-save {
        border: 0;
        background: var(--blue);
        color: #fff;
        border-radius: 10px;
        padding: 10px 18px;
        font-size: 12px;
        font-weight: 700;

        box-shadow: 0 5px 15px rgba(93,137,200,.22);
    }

    .btn-modal-save:hover {
        background: var(--blue-dark);
        color: #fff;
    }


    /* =========================================
       ERROR
    ========================================= */

    .worker-errors {
        margin: 20px 25px 0;
        border: 0;
        border-radius: 12px;
        background: #FEF2F2;
        color: #991B1B;
        padding: 13px 15px;
        font-size: 12px;
    }

    .worker-errors strong {
        font-weight: 700;
    }

    .worker-errors ul {
        margin: 7px 0 0;
        padding-left: 18px;
    }


    /* =========================================
       RESPONSIVE
    ========================================= */

    @media (max-width: 767px) {

        .workers-header {
            padding: 22px 16px 15px;
        }

        .workers-header-inner {
            display: block;
        }

        .workers-title {
            font-size: 23px;
        }

        .breadcrumb-modern {
            margin-top: 12px;
        }

        .workers-content {
            padding: 0 16px 25px;
        }

        .workers-card-header {
            display: block;
        }

        .btn-add-worker {
            margin-top: 15px;
            width: 100%;
            justify-content: center;
        }

        .workers-toolbar {
            display: block;
        }

        .workers-search {
            width: 100%;
            margin-top: 12px;
        }

        .worker-actions {
            justify-content: flex-start;
        }

        .worker-modal .modal-dialog {
            margin: 10px;
        }

        .worker-modal-body {
            padding: 20px;
        }

        .worker-modal-footer {
            padding: 15px 20px;
        }
    }
</style>


<div class="workers-page">

    <!-- =====================================
         PAGE HEADER
    ====================================== -->

    <section class="workers-header">

        <div class="workers-header-inner">

            <div>

                <div class="page-eyebrow">
                    People Management
                </div>

                <h1 class="workers-title">
                    Workers
                </h1>

                <p class="workers-subtitle">
                    Manage board members, advisory committee members and workforce.
                </p>

            </div>

            <ol class="breadcrumb breadcrumb-modern">

                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Workers
                </li>

            </ol>

        </div>

    </section>


    <!-- =====================================
         MAIN CONTENT
    ====================================== -->

    <section class="workers-content">


        <!-- =====================================
             STATISTICS
        ====================================== -->

        <div class="row">

            <div class="col-md-4 mb-3">

                <div class="worker-stat-card">

                    <div class="stat-icon">

                        <i class="fas fa-user-tie"></i>

                    </div>

                    <div>

                        <div class="stat-label">
                            Total Workers
                        </div>

                        <div class="stat-number">
                            {{ $workers->total() }}
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4 mb-3">

                <div class="worker-stat-card">

                    <div class="stat-icon gold">

                        <i class="fas fa-users"></i>

                    </div>

                    <div>

                        <div class="stat-label">
                            Board Members
                        </div>

                        <div class="stat-number">
                            {{ $workers->where('department', 'BOARD MEMBERS')->count() }}
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4 mb-3">

                <div class="worker-stat-card">

                    <div class="stat-icon">

                        <i class="fas fa-briefcase"></i>

                    </div>

                    <div>

                        <div class="stat-label">
                            Workforce
                        </div>

                        <div class="stat-number">
                            {{ $workers->where('department', 'WORKFORCE')->count() }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================
             WORKERS CARD
        ====================================== -->

        <div class="workers-card">


            <!-- Card Header -->

            <div class="workers-card-header">

                <div class="workers-card-title">

                    <div class="workers-card-title-icon">

                        <i class="fas fa-user-tie"></i>

                    </div>

                    <div>

                        <h3>
                            Worker Directory
                        </h3>

                        <span>
                            Manage your organization's team members
                        </span>

                    </div>

                </div>


                <button
                    type="button"
                    class="btn-add-worker"
                    data-toggle="modal"
                    data-target="#modal-xl">

                    <i class="fas fa-plus"></i>

                    Add Worker

                </button>

            </div>


            <!-- Toolbar -->

            <div class="workers-toolbar">

                <div class="workers-count">

                    Showing
                    <strong>{{ $workers->count() }}</strong>
                    of
                    <strong>{{ $workers->total() }}</strong>
                    workers

                </div>


                <div class="workers-search">

                    <i class="fas fa-search"></i>

                    <input
                        type="text"
                        id="workerSearch"
                        placeholder="Search workers..."
                        autocomplete="off">

                </div>

            </div>


            <!-- =====================================
                 TABLE
            ====================================== -->

            <div class="workers-table-wrapper">

                @if($workers->count())

                    <table class="workers-table">

                        <thead>

                            <tr>

                                <th style="width:5%;">
                                    #
                                </th>

                                <th>
                                    Worker
                                </th>

                                <th>
                                    Department
                                </th>

                                <th>
                                    Photo
                                </th>

                                <th class="text-right">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody id="workersTableBody">

                            @foreach($workers as $index => $worker)

                                <tr class="worker-row">

                                    <!-- Number -->

                                    <td>

                                        <span style="
                                            color:#9AA7B8;
                                            font-weight:600;
                                            font-size:12px;
                                        ">

                                            {{ $workers->firstItem() + $index }}

                                        </span>

                                    </td>


                                    <!-- Worker -->

                                    <td>

                                        <div class="worker-profile">

                                            @if($worker->photo)

                                                <img
                                                    src="{{ URL::asset($worker->photo) }}"
                                                    alt="{{ $worker->name }}"
                                                    class="worker-avatar">

                                            @else

                                                <div class="worker-avatar-fallback">

                                                    {{ strtoupper(substr($worker->name, 0, 1)) }}

                                                </div>

                                            @endif


                                            <div>

                                                <div class="worker-name">
                                                    {{ $worker->name }}
                                                </div>

                                                <div class="worker-title">
                                                    {{ $worker->title }}
                                                </div>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- Department -->

                                    <td>

                                        <span class="department-badge">

                                            <span class="department-dot"></span>

                                            {{ $worker->department }}

                                        </span>

                                    </td>


                                    <!-- Photo -->

                                    <td>

                                        @if($worker->photo)

                                            <img
                                                src="{{ URL::asset($worker->photo) }}"
                                                alt="Worker photo"
                                                style="
                                                    width:38px;
                                                    height:38px;
                                                    object-fit:cover;
                                                    border-radius:10px;
                                                    border:1px solid #E4EAF1;
                                                ">

                                        @else

                                            <span style="
                                                color:#9AA7B8;
                                                font-size:11px;
                                            ">
                                                No photo
                                            </span>

                                        @endif

                                    </td>


                                    <!-- Actions -->

                                    <td>

                                        <div class="worker-actions">

                                            <!-- View -->

                                            <a
                                                href="{{ route('workers.show', $worker->id) }}"
                                                class="worker-action"
                                                title="View Worker">

                                                <i class="fas fa-eye"></i>

                                            </a>


                                            <!-- Edit -->

                                            <a
                                                href="{{ route('workers.edit', $worker->id) }}"
                                                class="worker-action"
                                                title="Edit Worker">

                                                <i class="fas fa-pen"></i>

                                            </a>


                                            <!-- Delete -->

                                            <form
                                                class="delete-form"
                                                action="{{ route('workers.destroy', $worker->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete {{ $worker->name }}?');">

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="worker-action delete"
                                                    title="Delete Worker">

                                                    <i class="fas fa-trash-alt"></i>

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>


                    <!-- Pagination -->

                    <div class="workers-pagination">

                        {{ $workers->links() }}

                    </div>


                @else

                    <!-- Empty State -->

                    <div class="workers-empty">

                        <div class="workers-empty-icon">

                            <i class="fas fa-user-tie"></i>

                        </div>

                        <h4>
                            No workers found
                        </h4>

                        <p>
                            Add your first worker to get started.
                        </p>

                        <button
                            type="button"
                            class="btn-add-worker"
                            data-toggle="modal"
                            data-target="#modal-xl">

                            <i class="fas fa-plus"></i>

                            Add Worker

                        </button>

                    </div>

                @endif

            </div>

        </div>

    </section>

</div>


<!-- =========================================
     ADD WORKER MODAL
========================================= -->

<div
    class="modal fade worker-modal"
    id="modal-xl"
    tabindex="-1"
    role="dialog"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">


            <!-- Errors -->

            @if ($errors->any())

                <div class="worker-errors">

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


            <!-- Form -->

            <form
                action="{{ route('workers.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                <!-- Modal Header -->

                <div class="worker-modal-header">

                    <div class="worker-modal-title">

                        <div class="worker-modal-icon">

                            <i class="fas fa-user-plus"></i>

                        </div>

                        <div>

                            <h4>
                                Add New Worker
                            </h4>

                            <p>
                                Add a member to the organization directory.
                            </p>

                        </div>

                    </div>


                    <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close">

                        <span aria-hidden="true">
                            &times;
                        </span>

                    </button>

                </div>


                <!-- Modal Body -->

                <div class="worker-modal-body">


                    <!-- Name -->

                    <div class="worker-form-group">

                        <label
                            class="worker-form-label"
                            for="name">

                            Full Name
                            <span class="required">*</span>

                        </label>

                        <input
                            type="text"
                            class="worker-form-control @error('name') is-invalid @enderror"
                            name="name"
                            id="name"
                            value="{{ old('name') }}"
                            placeholder="Enter worker's full name"
                            required>

                    </div>


                    <!-- Title -->

                    <div class="worker-form-group">

                        <label
                            class="worker-form-label"
                            for="title">

                            Job Title
                            <span class="required">*</span>

                        </label>

                        <input
                            type="text"
                            class="worker-form-control @error('title') is-invalid @enderror"
                            name="title"
                            id="title"
                            value="{{ old('title') }}"
                            placeholder="e.g. Executive Director"
                            required>

                    </div>


                    <!-- Department -->

                    <div class="worker-form-group">

                        <label
                            class="worker-form-label"
                            for="department">

                            Department
                            <span class="required">*</span>

                        </label>

                        <select
                            class="worker-form-control @error('department') is-invalid @enderror"
                            name="department"
                            id="department"
                            required>

                            <option value="">
                                Select Department
                            </option>

                            <option
                                value="BOARD MEMBERS"
                                {{ old('department') == 'BOARD MEMBERS' ? 'selected' : '' }}>

                                Board Members

                            </option>

                            <option
                                value="ADVISORY COMMITTEE"
                                {{ old('department') == 'ADVISORY COMMITTEE' ? 'selected' : '' }}>

                                Advisory Committee

                            </option>

                            <option
                                value="WORKFORCE"
                                {{ old('department') == 'WORKFORCE' ? 'selected' : '' }}>

                                Workforce

                            </option>

                        </select>

                    </div>


                    <!-- Photo -->

                    <div class="worker-form-group mb-0">

                        <label
                            class="worker-form-label"
                            for="photo">

                            Profile Photo

                        </label>

                        <div class="worker-file">

                            <input
                                type="file"
                                name="photo"
                                id="photo"
                                accept="image/*">

                            <div style="
                                font-size:10px;
                                color:#9AA7B8;
                                margin-top:6px;
                            ">

                                JPG, JPEG, PNG or WEBP recommended.

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Footer -->

                <div class="worker-modal-footer">

                    <button
                        type="button"
                        class="btn-modal-cancel"
                        data-dismiss="modal">

                        Cancel

                    </button>

                    <button
                        type="submit"
                        class="btn-modal-save">

                        <i class="fas fa-save mr-1"></i>

                        Save Worker

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


<!-- =========================================
     SEARCH
========================================= -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('workerSearch');

    if (!searchInput) return;

    searchInput.addEventListener('keyup', function () {

        const search = this.value.toLowerCase().trim();

        const rows = document.querySelectorAll('.worker-row');

        rows.forEach(function (row) {

            const text = row.textContent.toLowerCase();

            row.style.display =
                text.includes(search) ? '' : 'none';

        });

    });

});

</script>

@endsection