@extends('layouts.app')

@section('title', 'Members')

@section('content')

<style>
    .members-page {
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

    /* =========================================================
       HEADER
    ========================================================= */

    .members-header {
        padding: 30px 30px 20px;
    }

    .members-header-inner {
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

    .members-title {
        font-size: 28px;
        font-weight: 800;
        color: var(--blue-deep);
        margin: 0;
        line-height: 1.2;
    }

    .members-subtitle {
        color: var(--muted);
        margin: 7px 0 0;
        font-size: 13px;
    }

    .members-breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
        font-size: 12px;
    }

    .members-breadcrumb a {
        color: var(--blue);
        font-weight: 600;
    }

    .members-breadcrumb .active {
        color: var(--muted);
    }

    .members-content {
        padding: 0 30px 35px;
    }


    /* =========================================================
       STAT CARDS
    ========================================================= */

    .member-stat-card {
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

    .stat-icon.green {
        background: #ECFDF3;
        color: #198754;
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


    /* =========================================================
       MAIN CARD
    ========================================================= */

    .members-card {
        margin-top: 22px;
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        box-shadow: 0 8px 30px rgba(41, 75, 120, .055);
        overflow: hidden;
    }

    .members-card-header {
        padding: 20px 22px;
        border-bottom: 1px solid var(--border);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 15px;
    }

    .members-card-title {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .members-card-title-icon {
        width: 38px;
        height: 38px;
        border-radius: 11px;
        background: var(--blue-soft);
        color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .members-card-title h3 {
        margin: 0;
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
    }

    .members-card-title span {
        display: block;
        color: var(--muted);
        font-size: 11px;
        margin-top: 2px;
    }

    .btn-add-member {
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

    .btn-add-member:hover {
        background: var(--blue-dark);
        color: #fff;
        transform: translateY(-1px);
    }


    /* =========================================================
       TOOLBAR
    ========================================================= */

    .members-toolbar {
        padding: 15px 22px;
        border-bottom: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .members-count {
        color: var(--muted);
        font-size: 12px;
    }

    .members-count strong {
        color: var(--blue-deep);
    }

    .members-search {
        position: relative;
        width: 250px;
    }

    .members-search i {
        position: absolute;
        left: 13px;
        top: 50%;
        transform: translateY(-50%);
        color: #9AA7B8;
        font-size: 12px;
    }

    .members-search input {
        width: 100%;
        height: 40px;
        border: 1px solid var(--border);
        border-radius: 10px;
        padding: 0 12px 0 36px;
        font-size: 12px;
        outline: none;
        transition: .2s;
    }

    .members-search input:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(93, 137, 200, .12);
    }


    /* =========================================================
       TABLE
    ========================================================= */

    .members-table-wrapper {
        overflow-x: auto;
    }

    .members-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
    }

    .members-table thead th {
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

    .members-table tbody td {
        padding: 15px 20px;
        border-bottom: 1px solid #EDF1F5;
        vertical-align: middle;
        font-size: 13px;
    }

    .members-table tbody tr {
        transition: all .2s ease;
    }

    .members-table tbody tr:hover {
        background: #FBFCFE;
    }

    .members-table tbody tr:last-child td {
        border-bottom: 0;
    }


    /* =========================================================
       MEMBER PROFILE
    ========================================================= */

    .member-profile {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .member-logo {
        width: 48px;
        height: 48px;
        border-radius: 13px;
        object-fit: contain;
        background: #fff;
        border: 1px solid var(--border);
        padding: 5px;
        flex-shrink: 0;
    }

    .member-logo-fallback {
        width: 48px;
        height: 48px;
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
        font-size: 16px;
        flex-shrink: 0;
    }

    .member-name {
        color: var(--blue-deep);
        font-weight: 700;
        font-size: 13px;
        margin-bottom: 3px;
    }

    .member-description {
        color: var(--muted);
        font-size: 10px;
    }


    /* =========================================================
       WEBSITE
    ========================================================= */

    .website-link {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: var(--blue-dark);
        background: var(--blue-soft);
        padding: 6px 9px;
        border-radius: 8px;
        font-size: 10px;
        font-weight: 600;
        max-width: 200px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .website-link:hover {
        color: var(--blue-deep);
        text-decoration: none;
        background: #E3EDF9;
    }


    /* =========================================================
       CATEGORY
    ========================================================= */

    .category-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        border-radius: 20px;
        font-size: 10px;
        font-weight: 700;
    }

    .category-founding {
        background: rgba(201,154,62,.12);
        color: #9A7425;
    }

    .category-adherent {
        background: var(--blue-soft);
        color: var(--blue-dark);
    }

    .category-affiliated {
        background: #ECFDF3;
        color: #16734A;
    }

    .category-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
    }


    /* =========================================================
       ACTIONS
    ========================================================= */

    .member-actions {
        display: flex;
        justify-content: flex-end;
        gap: 6px;
    }

    .member-action {
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

    .member-action:hover {
        background: var(--blue-soft);
        border-color: #C9D9EE;
        color: var(--blue-dark);
    }

    .member-action.delete:hover {
        background: #FEF2F2;
        border-color: #FECACA;
        color: #DC2626;
    }

    .delete-form {
        margin: 0;
    }


    /* =========================================================
       PAGINATION
    ========================================================= */

    .members-pagination {
        padding: 18px 22px;
        border-top: 1px solid var(--border);
        display: flex;
        justify-content: flex-end;
    }

    .members-pagination nav {
        margin: 0;
    }

    .members-pagination .pagination {
        margin: 0;
    }

    .members-pagination .page-link {
        color: var(--blue-dark);
        border-color: var(--border);
        font-size: 12px;
        border-radius: 8px;
        margin: 0 2px;
    }

    .members-pagination .page-item.active .page-link {
        background: var(--blue);
        border-color: var(--blue);
        color: #fff;
    }


    /* =========================================================
       EMPTY
    ========================================================= */

    .members-empty {
        text-align: center;
        padding: 60px 20px;
    }

    .members-empty-icon {
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

    .members-empty h4 {
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
    }

    .members-empty p {
        color: var(--muted);
        font-size: 12px;
    }


    /* =========================================================
       MODALS
    ========================================================= */

    .member-modal .modal-dialog {
        max-width: 650px;
    }

    .member-modal .modal-content {
        border: 0;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 70px rgba(41,75,120,.20);
    }

    .member-modal-header {
        background: var(--blue-deep);
        color: #fff;
        padding: 22px 25px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .member-modal-title {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .member-modal-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: rgba(255,255,255,.12);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .member-modal-header h4 {
        margin: 0;
        font-size: 17px;
        font-weight: 700;
    }

    .member-modal-header p {
        margin: 3px 0 0;
        font-size: 11px;
        color: rgba(255,255,255,.65);
    }

    .member-modal-header .close {
        color: #fff;
        opacity: .75;
        text-shadow: none;
    }

    .member-modal-header .close:hover {
        opacity: 1;
    }

    .member-modal-body {
        padding: 25px;
        background: #fff;
    }

    .member-form-group {
        margin-bottom: 18px;
    }

    .member-form-label {
        display: block;
        color: var(--blue-deep);
        font-size: 11px;
        font-weight: 700;
        margin-bottom: 7px;
    }

    .required {
        color: #DC2626;
    }

    .member-form-control {
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

    .member-form-control:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(93,137,200,.12);
    }

    .member-form-control.is-invalid {
        border-color: #DC2626;
    }

    .member-file {
        border: 1px dashed #C9D9EE;
        background: #F8FAFD;
        border-radius: 12px;
        padding: 15px;
    }

    .member-file input {
        font-size: 12px;
        color: var(--muted);
    }

    .member-file-help {
        font-size: 10px;
        color: #9AA7B8;
        margin-top: 6px;
    }

    .member-modal-footer {
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


    /* =========================================================
       VIEW MODAL
    ========================================================= */

    .member-view-modal .modal-dialog {
        max-width: 560px;
    }

    .member-view-card {
        text-align: center;
        padding: 10px 10px 5px;
    }

    .member-view-logo {
        width: 110px;
        height: 110px;
        object-fit: contain;
        border-radius: 25px;
        padding: 10px;
        background: #fff;
        border: 1px solid var(--border);
        box-shadow: 0 10px 30px rgba(41,75,120,.10);
    }

    .member-view-logo-fallback {
        width: 110px;
        height: 110px;
        margin: 0 auto;
        border-radius: 25px;
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
    }

    .member-view-name {
        color: var(--blue-deep);
        font-size: 22px;
        font-weight: 800;
        margin-top: 16px;
        margin-bottom: 6px;
    }

    .member-view-category {
        display: inline-flex;
        padding: 7px 12px;
        border-radius: 20px;
        background: var(--blue-soft);
        color: var(--blue-dark);
        font-size: 10px;
        font-weight: 700;
    }

    .member-info-grid {
        margin-top: 25px;
        text-align: left;
        border-top: 1px solid var(--border);
    }

    .member-info-item {
        padding: 14px 0;
        border-bottom: 1px solid #EDF1F5;
    }

    .member-info-label {
        color: var(--muted);
        font-size: 10px;
        font-weight: 600;
        margin-bottom: 4px;
        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .member-info-value {
        color: var(--blue-deep);
        font-size: 12px;
        font-weight: 700;
        word-break: break-word;
    }

    .member-info-value a {
        color: var(--blue);
    }


    /* =========================================================
       DELETE MODAL
    ========================================================= */

    .delete-modal .modal-dialog {
        max-width: 430px;
    }

    .delete-modal .modal-content {
        border: 0;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 25px 70px rgba(0,0,0,.18);
    }

    .delete-content {
        text-align: center;
        padding: 30px 25px 25px;
    }

    .delete-icon {
        width: 62px;
        height: 62px;
        margin: 0 auto 16px;
        border-radius: 18px;
        background: #FEF2F2;
        color: #DC2626;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    .delete-content h4 {
        color: var(--blue-deep);
        font-size: 17px;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .delete-content p {
        color: var(--muted);
        font-size: 12px;
        line-height: 1.6;
        margin: 0;
    }

    .delete-member-name {
        color: var(--blue-deep);
        font-weight: 800;
    }

    .delete-footer {
        padding: 16px 20px;
        border-top: 1px solid var(--border);
        background: #FAFBFD;
        display: flex;
        justify-content: center;
        gap: 10px;
    }

    .btn-delete-cancel {
        border: 1px solid var(--border);
        background: #fff;
        color: var(--muted);
        border-radius: 10px;
        padding: 10px 18px;
        font-size: 12px;
        font-weight: 600;
    }

    .btn-delete-confirm {
        border: 0;
        background: #DC2626;
        color: #fff;
        border-radius: 10px;
        padding: 10px 18px;
        font-size: 12px;
        font-weight: 700;
    }

    .btn-delete-confirm:hover {
        background: #B91C1C;
        color: #fff;
    }


    /* =========================================================
       VALIDATION
    ========================================================= */

    .member-errors {
        margin: 20px 25px 0;
        border: 0;
        border-radius: 12px;
        background: #FEF2F2;
        color: #991B1B;
        padding: 13px 15px;
        font-size: 12px;
    }

    .member-errors strong {
        font-weight: 700;
    }

    .member-errors ul {
        margin: 7px 0 0;
        padding-left: 18px;
    }


    /* =========================================================
       RESPONSIVE
    ========================================================= */

    @media (max-width: 767px) {

        .members-header {
            padding: 22px 16px 15px;
        }

        .members-header-inner {
            display: block;
        }

        .members-title {
            font-size: 23px;
        }

        .members-breadcrumb {
            margin-top: 12px;
        }

        .members-content {
            padding: 0 16px 25px;
        }

        .members-card-header {
            display: block;
        }

        .btn-add-member {
            width: 100%;
            justify-content: center;
            margin-top: 15px;
        }

        .members-toolbar {
            display: block;
        }

        .members-search {
            width: 100%;
            margin-top: 12px;
        }

        .member-actions {
            justify-content: flex-start;
        }

        .member-modal .modal-dialog,
        .member-view-modal .modal-dialog,
        .delete-modal .modal-dialog {
            margin: 10px;
        }

        .member-modal-body {
            padding: 20px;
        }

        .member-modal-footer {
            padding: 15px 20px;
        }
    }
</style>


<div class="members-page">

    <!-- =====================================================
         HEADER
    ====================================================== -->

    <section class="members-header">

        <div class="members-header-inner">

            <div>

                <div class="page-eyebrow">
                    Partnerships & Network
                </div>

                <h1 class="members-title">
                    Members
                </h1>

                <p class="members-subtitle">
                    Manage founding, adherent and affiliated members.
                </p>

            </div>

            <ol class="breadcrumb members-breadcrumb">

                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Members
                </li>

            </ol>

        </div>

    </section>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <section class="members-content">

        <!-- STATISTICS -->

        <div class="row">

            <div class="col-md-4 mb-3">

                <div class="member-stat-card">

                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <div>

                        <div class="stat-label">
                            Total Members
                        </div>

                        <div class="stat-number">
                            {{ $members->total() }}
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4 mb-3">

                <div class="member-stat-card">

                    <div class="stat-icon gold">
                        <i class="fas fa-star"></i>
                    </div>

                    <div>

                        <div class="stat-label">
                            Founding Members
                        </div>

                        <div class="stat-number">
                            {{ $members->where('category', 'founding')->count() }}
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4 mb-3">

                <div class="member-stat-card">

                    <div class="stat-icon green">
                        <i class="fas fa-handshake"></i>
                    </div>

                    <div>

                        <div class="stat-label">
                            Network Members
                        </div>

                        <div class="stat-number">
                            {{ $members->whereIn('category', ['adherent', 'affiliated'])->count() }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- DIRECTORY -->

        <div class="members-card">

            <div class="members-card-header">

                <div class="members-card-title">

                    <div class="members-card-title-icon">
                        <i class="fas fa-building"></i>
                    </div>

                    <div>

                        <h3>
                            Member Directory
                        </h3>

                        <span>
                            Organizations and partners in the NCD Alliance network
                        </span>

                    </div>

                </div>


                <button
                    type="button"
                    class="btn-add-member"
                    data-toggle="modal"
                    data-target="#addMemberModal">

                    <i class="fas fa-plus"></i>

                    Add Member

                </button>

            </div>


            <!-- TOOLBAR -->

            <div class="members-toolbar">

                <div class="members-count">

                    Showing

                    <strong>
                        {{ $members->count() }}
                    </strong>

                    of

                    <strong>
                        {{ $members->total() }}
                    </strong>

                    members

                </div>


                <div class="members-search">

                    <i class="fas fa-search"></i>

                    <input
                        type="text"
                        id="memberSearch"
                        placeholder="Search members..."
                        autocomplete="off">

                </div>

            </div>


            <!-- TABLE -->

            <div class="members-table-wrapper">

                @if($members->count())

                    <table class="members-table">

                        <thead>

                            <tr>

                                <th style="width:5%;">
                                    #
                                </th>

                                <th>
                                    Member
                                </th>

                                <th>
                                    Website
                                </th>

                                <th>
                                    Category
                                </th>

                                <th class="text-right">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody id="membersTableBody">

                            @foreach($members as $index => $member)

                                <tr class="member-row">

                                    <!-- NUMBER -->

                                    <td>

                                        <span style="
                                            color:#9AA7B8;
                                            font-weight:600;
                                            font-size:12px;
                                        ">
                                            {{ $members->firstItem() + $index }}
                                        </span>

                                    </td>


                                    <!-- MEMBER -->

                                    <td>

                                        <div class="member-profile">

                                            @if($member->logo)

                                                <img
                                                    src="{{ asset('new/img/'.$member->logo) }}"
                                                    alt="{{ $member->name }}"
                                                    class="member-logo">

                                            @else

                                                <div class="member-logo-fallback">

                                                    {{ strtoupper(substr($member->name, 0, 1)) }}

                                                </div>

                                            @endif


                                            <div>

                                                <div class="member-name">
                                                    {{ $member->name }}
                                                </div>

                                                <div class="member-description">
                                                    Network Member
                                                </div>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- WEBSITE -->

                                    <td>

                                        @if($member->website)

                                            @php
                                                $websiteUrl = $member->website;

                                                if (!preg_match('/^https?:\/\//', $websiteUrl)) {
                                                    $websiteUrl = 'https://' . $websiteUrl;
                                                }
                                            @endphp

                                            <a
                                                href="{{ $websiteUrl }}"
                                                target="_blank"
                                                rel="noopener noreferrer"
                                                class="website-link"
                                                title="{{ $member->website }}">

                                                <i class="fas fa-external-link-alt"></i>

                                                {{ $member->website }}

                                            </a>

                                        @else

                                            <span style="
                                                color:#9AA7B8;
                                                font-size:11px;
                                            ">
                                                No website
                                            </span>

                                        @endif

                                    </td>


                                    <!-- CATEGORY -->

                                    <td>

                                        @php

                                            $categoryClass = match($member->category) {
                                                'founding' => 'category-founding',
                                                'adherent' => 'category-adherent',
                                                'affiliated' => 'category-affiliated',
                                                default => 'category-adherent'
                                            };

                                            $categoryLabel = match($member->category) {
                                                'founding' => 'Founding Member',
                                                'adherent' => 'Adherent Member',
                                                'affiliated' => 'Affiliated Member',
                                                default => ucfirst($member->category)
                                            };

                                        @endphp


                                        <span class="category-badge {{ $categoryClass }}">

                                            <span class="category-dot"></span>

                                            {{ $categoryLabel }}

                                        </span>

                                    </td>


                                    <!-- ACTIONS -->

                                    <td>

                                        <div class="member-actions">

                                            <!-- VIEW -->

                                            <button
                                                type="button"
                                                class="member-action"
                                                title="View Member"
                                                data-toggle="modal"
                                                data-target="#viewMemberModal{{ $member->id }}">

                                                <i class="fas fa-eye"></i>

                                            </button>


                                            <!-- EDIT -->

                                            <button
                                                type="button"
                                                class="member-action"
                                                title="Edit Member"
                                                data-toggle="modal"
                                                data-target="#editMemberModal{{ $member->id }}">

                                                <i class="fas fa-pen"></i>

                                            </button>


                                            <!-- DELETE -->

                                            <button
                                                type="button"
                                                class="member-action delete"
                                                title="Delete Member"
                                                data-toggle="modal"
                                                data-target="#deleteMemberModal{{ $member->id }}">

                                                <i class="fas fa-trash-alt"></i>

                                            </button>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>


                    <!-- PAGINATION -->

                    <div class="members-pagination">

                        {{ $members->links() }}

                    </div>

                @else

                    <div class="members-empty">

                        <div class="members-empty-icon">

                            <i class="fas fa-building"></i>

                        </div>

                        <h4>
                            No members found
                        </h4>

                        <p>
                            Add your first member to get started.
                        </p>

                        <button
                            type="button"
                            class="btn-add-member"
                            data-toggle="modal"
                            data-target="#addMemberModal">

                            <i class="fas fa-plus"></i>

                            Add Member

                        </button>

                    </div>

                @endif

            </div>

        </div>

    </section>

</div>


{{-- ============================================================
     ADD MEMBER MODAL
============================================================= --}}

<div
    class="modal fade member-modal"
    id="addMemberModal"
    tabindex="-1"
    role="dialog"
    aria-hidden="true">

    <div class="modal-dialog modal-lg" role="document">

        <div class="modal-content">


            @if ($errors->any() && !session('edit_member_id'))

                <div class="member-errors">

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
                action="{{ route('members.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf


                <div class="member-modal-header">

                    <div class="member-modal-title">

                        <div class="member-modal-icon">
                            <i class="fas fa-building"></i>
                        </div>

                        <div>

                            <h4>
                                Add New Member
                            </h4>

                            <p>
                                Add an organization to the member network.
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


                <div class="member-modal-body">

                    <!-- NAME -->

                    <div class="member-form-group">

                        <label
                            class="member-form-label"
                            for="add_name">

                            Organization Name

                            <span class="required">
                                *
                            </span>

                        </label>

                        <input
                            type="text"
                            class="member-form-control @error('name') is-invalid @enderror"
                            name="name"
                            id="add_name"
                            value="{{ old('name') }}"
                            placeholder="Enter organization name"
                            required>

                    </div>


                    <!-- WEBSITE -->

                    <div class="member-form-group">

                        <label
                            class="member-form-label"
                            for="add_website">

                            Website

                        </label>

                        <input
                            type="text"
                            class="member-form-control @error('website') is-invalid @enderror"
                            name="website"
                            id="add_website"
                            value="{{ old('website') }}"
                            placeholder="https://example.org">

                    </div>


                    <!-- CATEGORY -->

                    <div class="member-form-group">

                        <label
                            class="member-form-label"
                            for="add_category">

                            Member Category

                            <span class="required">
                                *
                            </span>

                        </label>

                        <select
                            class="member-form-control @error('category') is-invalid @enderror"
                            name="category"
                            id="add_category"
                            required>

                            <option value="">
                                Select Category
                            </option>

                            <option
                                value="founding"
                                {{ old('category') == 'founding' ? 'selected' : '' }}>

                                Founding Member

                            </option>

                            <option
                                value="adherent"
                                {{ old('category') == 'adherent' ? 'selected' : '' }}>

                                Adherent Member

                            </option>

                            <option
                                value="affiliated"
                                {{ old('category') == 'affiliated' ? 'selected' : '' }}>

                                Affiliated Member

                            </option>

                        </select>

                    </div>


                    <!-- LOGO -->

                    <div class="member-form-group mb-0">

                        <label
                            class="member-form-label"
                            for="add_logo">

                            Organization Logo

                        </label>

                        <div class="member-file">

                            <input
                                type="file"
                                name="logo"
                                id="add_logo"
                                accept="image/jpeg,image/png,image/jpg,image/webp">

                            <div class="member-file-help">
                                Recommended: PNG, JPG, JPEG or WEBP.
                            </div>

                        </div>

                    </div>

                </div>


                <div class="member-modal-footer">

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

                        Save Member

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


{{-- ============================================================
     VIEW + EDIT + DELETE MODALS
============================================================= --}}

@if($members->count())

    @foreach($members as $member)

        {{-- =====================================================
             VIEW MEMBER MODAL
        ====================================================== --}}

        <div
            class="modal fade member-modal member-view-modal"
            id="viewMemberModal{{ $member->id }}"
            tabindex="-1"
            role="dialog"
            aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="member-modal-header">

                        <div class="member-modal-title">

                            <div class="member-modal-icon">
                                <i class="fas fa-eye"></i>
                            </div>

                            <div>

                                <h4>
                                    Member Profile
                                </h4>

                                <p>
                                    Organization information
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


                    <div class="member-modal-body">

                        <div class="member-view-card">

                            @if($member->logo)

                                <img
                                    src="{{ asset('new/img/'.$member->logo) }}"
                                    alt="{{ $member->name }}"
                                    class="member-view-logo">

                            @else

                                <div class="member-view-logo-fallback">

                                    {{ strtoupper(substr($member->name, 0, 1)) }}

                                </div>

                            @endif


                            <div class="member-view-name">
                                {{ $member->name }}
                            </div>


                            <span class="member-view-category">

                                <i class="fas fa-users mr-1"></i>

                                {{ $categoryLabel }}

                            </span>


                            <div class="member-info-grid">

                                <div class="member-info-item">

                                    <div class="member-info-label">
                                        Organization
                                    </div>

                                    <div class="member-info-value">
                                        {{ $member->name }}
                                    </div>

                                </div>


                                <div class="member-info-item">

                                    <div class="member-info-label">
                                        Category
                                    </div>

                                    <div class="member-info-value">
                                        {{ $categoryLabel }}
                                    </div>

                                </div>


                                <div class="member-info-item">

                                    <div class="member-info-label">
                                        Website
                                    </div>

                                    <div class="member-info-value">

                                        @if($member->website)

                                            @php
                                                $viewWebsite = $member->website;

                                                if (!preg_match('/^https?:\/\//', $viewWebsite)) {
                                                    $viewWebsite = 'https://' . $viewWebsite;
                                                }
                                            @endphp

                                            <a
                                                href="{{ $viewWebsite }}"
                                                target="_blank"
                                                rel="noopener noreferrer">

                                                {{ $member->website }}

                                                <i class="fas fa-external-link-alt ml-1"></i>

                                            </a>

                                        @else

                                            <span style="color:#9AA7B8;">
                                                No website provided
                                            </span>

                                        @endif

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="member-modal-footer">

                        <button
                            type="button"
                            class="btn-modal-cancel"
                            data-dismiss="modal">

                            Close

                        </button>


                        <button
                            type="button"
                            class="btn-modal-save"
                            data-dismiss="modal"
                            data-toggle="modal"
                            data-target="#editMemberModal{{ $member->id }}">

                            <i class="fas fa-pen mr-1"></i>

                            Edit Member

                        </button>

                    </div>

                </div>

            </div>

        </div>


        {{-- =====================================================
             EDIT MEMBER MODAL
        ====================================================== --}}

        <div
            class="modal fade member-modal"
            id="editMemberModal{{ $member->id }}"
            tabindex="-1"
            role="dialog"
            aria-hidden="true">

            <div class="modal-dialog modal-lg" role="document">

                <div class="modal-content">

                    <div class="member-modal-header">

                        <div class="member-modal-title">

                            <div class="member-modal-icon">
                                <i class="fas fa-user-edit"></i>
                            </div>

                            <div>

                                <h4>
                                    Edit Member
                                </h4>

                                <p>
                                    Update {{ $member->name }}'s information.
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


                    <form
                        action="{{ route('members.update', $member->id) }}"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        @method('PUT')


                        <div class="member-modal-body">

                            <!-- NAME -->

                            <div class="member-form-group">

                                <label
                                    class="member-form-label"
                                    for="edit_name_{{ $member->id }}">

                                    Organization Name

                                    <span class="required">
                                        *
                                    </span>

                                </label>

                                <input
                                    type="text"
                                    class="member-form-control"
                                    name="name"
                                    id="edit_name_{{ $member->id }}"
                                    value="{{ $member->name }}"
                                    required>

                            </div>


                            <!-- WEBSITE -->

                            <div class="member-form-group">

                                <label
                                    class="member-form-label"
                                    for="edit_website_{{ $member->id }}">

                                    Website

                                </label>

                                <input
                                    type="text"
                                    class="member-form-control"
                                    name="website"
                                    id="edit_website_{{ $member->id }}"
                                    value="{{ $member->website }}"
                                    placeholder="https://example.org">

                            </div>


                            <!-- CATEGORY -->

                            <div class="member-form-group">

                                <label
                                    class="member-form-label"
                                    for="edit_category_{{ $member->id }}">

                                    Member Category

                                    <span class="required">
                                        *
                                    </span>

                                </label>

                                <select
                                    class="member-form-control"
                                    name="category"
                                    id="edit_category_{{ $member->id }}"
                                    required>

                                    <option
                                        value="founding"
                                        {{ $member->category == 'founding' ? 'selected' : '' }}>

                                        Founding Member

                                    </option>

                                    <option
                                        value="adherent"
                                        {{ $member->category == 'adherent' ? 'selected' : '' }}>

                                        Adherent Member

                                    </option>

                                    <option
                                        value="affiliated"
                                        {{ $member->category == 'affiliated' ? 'selected' : '' }}>

                                        Affiliated Member

                                    </option>

                                </select>

                            </div>


                            <!-- CURRENT LOGO -->

                            <div class="member-form-group">

                                <label class="member-form-label">
                                    Current Logo
                                </label>

                                <div style="
                                    display:flex;
                                    align-items:center;
                                    gap:15px;
                                    background:#F8FAFD;
                                    border:1px solid var(--border);
                                    border-radius:12px;
                                    padding:14px;
                                ">

                                    @if($member->logo)

                                        <img
                                            src="{{ asset('new/img/'.$member->logo) }}"
                                            alt="{{ $member->name }}"
                                            style="
                                                width:65px;
                                                height:65px;
                                                object-fit:contain;
                                                border-radius:12px;
                                                background:#fff;
                                                border:1px solid #E4EAF1;
                                                padding:5px;
                                            ">

                                    @else

                                        <div style="
                                            width:65px;
                                            height:65px;
                                            border-radius:12px;
                                            background:linear-gradient(135deg,#5D89C8,#294B78);
                                            color:#fff;
                                            display:flex;
                                            align-items:center;
                                            justify-content:center;
                                            font-size:22px;
                                            font-weight:800;
                                        ">

                                            {{ strtoupper(substr($member->name, 0, 1)) }}

                                        </div>

                                    @endif


                                    <div>

                                        <div style="
                                            color:#294B78;
                                            font-size:12px;
                                            font-weight:700;
                                        ">
                                            Existing Logo
                                        </div>

                                        <div style="
                                            color:#718096;
                                            font-size:10px;
                                            margin-top:3px;
                                        ">
                                            Upload another image below to replace it.
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <!-- NEW LOGO -->

                            <div class="member-form-group mb-0">

                                <label
                                    class="member-form-label"
                                    for="edit_logo_{{ $member->id }}">

                                    Replace Logo

                                </label>

                                <div class="member-file">

                                    <input
                                        type="file"
                                        name="logo"
                                        id="edit_logo_{{ $member->id }}"
                                        accept="image/jpeg,image/png,image/jpg,image/webp">

                                    <div class="member-file-help">
                                        Leave empty to keep the current logo.
                                    </div>

                                </div>

                            </div>

                        </div>


                        <div class="member-modal-footer">

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

                                Update Member

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>


        {{-- =====================================================
             DELETE CONFIRMATION MODAL
        ====================================================== --}}

        <div
            class="modal fade delete-modal"
            id="deleteMemberModal{{ $member->id }}"
            tabindex="-1"
            role="dialog"
            aria-hidden="true">

            <div class="modal-dialog" role="document">

                <div class="modal-content">

                    <div class="delete-content">

                        <div class="delete-icon">

                            <i class="fas fa-trash-alt"></i>

                        </div>


                        <h4>
                            Delete Member?
                        </h4>


                        <p>

                            Are you sure you want to permanently delete

                            <span class="delete-member-name">
                                {{ $member->name }}
                            </span>?

                            <br>

                            This action cannot be undone.

                        </p>

                    </div>


                    <div class="delete-footer">

                        <button
                            type="button"
                            class="btn-delete-cancel"
                            data-dismiss="modal">

                            Cancel

                        </button>


                        <form
                            class="delete-form"
                            action="{{ route('members.destroy', $member->id) }}"
                            method="POST">

                            @csrf

                            @method('DELETE')


                            <button
                                type="submit"
                                class="btn-delete-confirm">

                                <i class="fas fa-trash-alt mr-1"></i>

                                Yes, Delete

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    @endforeach

@endif


{{-- ============================================================
     SEARCH
============================================================= --}}

<script>
document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('memberSearch');

    if (!searchInput) {
        return;
    }

    searchInput.addEventListener('keyup', function () {

        const search = this.value.toLowerCase().trim();

        const rows = document.querySelectorAll('.member-row');

        rows.forEach(function (row) {

            const text = row.textContent.toLowerCase();

            row.style.display =
                text.includes(search) ? '' : 'none';

        });

    });

});
</script>


{{-- ============================================================
     REOPEN MODAL AFTER VALIDATION ERROR
============================================================= --}}

@if($errors->any())

<script>
document.addEventListener('DOMContentLoaded', function () {

    @if(session('edit_member_id'))

        $('#editMemberModal{{ session('edit_member_id') }}').modal('show');

    @else

        $('#addMemberModal').modal('show');

    @endif

});
</script>

@endif

@endsection