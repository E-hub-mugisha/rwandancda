@extends('layouts.app')

@section('title', 'Users')

@section('content')

<style>
    /* =========================================
       USERS PAGE
    ========================================= */

    .users-page {
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

    /* Header */

    .users-header {
        padding: 30px 30px 20px;
    }

    .users-header-inner {
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

    .users-title {
        font-size: 28px;
        font-weight: 800;
        color: var(--blue-deep);
        margin: 0;
        line-height: 1.2;
    }

    .users-subtitle {
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


    /* Main */

    .users-content {
        padding: 0 30px 35px;
    }


    /* Statistics */

    .user-stat-card {
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
    }

    .stat-icon.gold {
        background: rgba(201, 154, 62, .12);
        color: var(--gold);
    }

    .stat-label {
        color: var(--muted);
        font-size: 11px;
        font-weight: 600;
        margin-bottom: 3px;
    }

    .stat-number {
        color: var(--blue-deep);
        font-size: 22px;
        font-weight: 800;
        line-height: 1;
    }


    /* Main Card */

    .users-card {
        margin-top: 22px;
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        box-shadow: 0 8px 30px rgba(41, 75, 120, .055);
        overflow: hidden;
    }


    /* Card Header */

    .users-card-header {
        padding: 20px 22px;
        border-bottom: 1px solid var(--border);
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 15px;
    }

    .users-card-title {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .users-card-title-icon {
        width: 38px;
        height: 38px;
        background: var(--blue-soft);
        color: var(--blue);
        border-radius: 11px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .users-card-title h3 {
        margin: 0;
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
    }

    .users-card-title span {
        display: block;
        color: var(--muted);
        font-size: 11px;
        margin-top: 2px;
    }


    /* Search */

    .users-search {
        position: relative;
        width: 240px;
    }

    .users-search i {
        position: absolute;
        left: 13px;
        top: 50%;
        transform: translateY(-50%);
        color: #9AA7B8;
        font-size: 12px;
    }

    .users-search input {
        width: 100%;
        height: 40px;
        border: 1px solid var(--border);
        border-radius: 10px;
        padding: 0 12px 0 36px;
        font-size: 12px;
        outline: none;
        transition: .2s;
    }

    .users-search input:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(93, 137, 200, .12);
    }


    /* Table */

    .users-table-wrapper {
        overflow-x: auto;
    }

    .users-table {
        width: 100%;
        border-collapse: collapse;
        margin: 0;
    }

    .users-table thead th {
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

    .users-table tbody td {
        padding: 15px 20px;
        border-bottom: 1px solid #EDF1F5;
        vertical-align: middle;
        font-size: 13px;
    }

    .users-table tbody tr {
        transition: .2s ease;
    }

    .users-table tbody tr:hover {
        background: #FBFCFE;
    }

    .users-table tbody tr:last-child td {
        border-bottom: 0;
    }


    /* User */

    .user-info {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .user-avatar-table {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        object-fit: cover;
        background: var(--blue-soft);
        border: 1px solid #DCE7F5;
    }

    .user-avatar-fallback {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: linear-gradient(
            135deg,
            var(--blue),
            var(--blue-deep)
        );
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 800;
        font-size: 14px;
    }

    .user-name-table {
        color: var(--blue-deep);
        font-weight: 700;
        margin-bottom: 3px;
    }

    .user-email-table {
        color: var(--muted);
        font-size: 11px;
    }


    /* Role */

    .role-badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 10px;
        border-radius: 20px;
        background: var(--blue-soft);
        color: var(--blue-dark);
        font-size: 10px;
        font-weight: 700;
        text-transform: capitalize;
    }

    .role-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--blue);
    }


    /* Actions */

    .user-actions {
        display: flex;
        justify-content: flex-end;
        gap: 6px;
    }

    .user-action {
        width: 34px;
        height: 34px;
        border-radius: 9px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border: 1px solid var(--border);
        background: white;
        color: var(--muted);
        transition: .2s;
        font-size: 12px;
    }

    .user-action:hover {
        background: var(--blue-soft);
        border-color: #C9D9EE;
        color: var(--blue-dark);
    }

    .user-action.delete:hover {
        background: #FEF2F2;
        border-color: #FECACA;
        color: #DC2626;
    }


    /* Empty State */

    .users-empty {
        text-align: center;
        padding: 60px 20px;
    }

    .users-empty-icon {
        width: 60px;
        height: 60px;
        margin: 0 auto 15px;
        border-radius: 18px;
        background: var(--blue-soft);
        color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
    }

    .users-empty h4 {
        color: var(--blue-deep);
        font-size: 16px;
        font-weight: 700;
    }

    .users-empty p {
        color: var(--muted);
        font-size: 12px;
    }


    /* Mobile */

    @media (max-width: 767px) {

        .users-header {
            padding: 22px 16px 15px;
        }

        .users-header-inner {
            display: block;
        }

        .users-title {
            font-size: 23px;
        }

        .breadcrumb-modern {
            margin-top: 12px;
        }

        .users-content {
            padding: 0 16px 25px;
        }

        .users-card-header {
            display: block;
        }

        .users-search {
            width: 100%;
            margin-top: 15px;
        }

        .users-table thead th,
        .users-table tbody td {
            padding: 12px 14px;
        }

        .user-actions {
            justify-content: flex-start;
        }
    }
</style>


<div class="users-page">

    <!-- =========================
         PAGE HEADER
    ========================== -->

    <section class="users-header">

        <div class="users-header-inner">

            <div>

                <div class="page-eyebrow">
                    Administration
                </div>

                <h1 class="users-title">
                    Users
                </h1>

                <p class="users-subtitle">
                    Manage administrators and users who access the NGO portal.
                </p>

            </div>


            <ol class="breadcrumb breadcrumb-modern">

                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        Home
                    </a>
                </li>

                <li class="breadcrumb-item active">
                    Users
                </li>

            </ol>

        </div>

    </section>


    <!-- =========================
         CONTENT
    ========================== -->

    <section class="users-content">


        <!-- Statistics -->

        <div class="row">

            <div class="col-md-4 mb-3">

                <div class="user-stat-card">

                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <div>

                        <div class="stat-label">
                            Total Users
                        </div>

                        <div class="stat-number">
                            {{ $users->count() }}
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4 mb-3">

                <div class="user-stat-card">

                    <div class="stat-icon gold">
                        <i class="fas fa-user-shield"></i>
                    </div>

                    <div>

                        <div class="stat-label">
                            Administrators
                        </div>

                        <div class="stat-number">
                            {{ $users->where('role', 'admin')->count() }}
                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4 mb-3">

                <div class="user-stat-card">

                    <div class="stat-icon">
                        <i class="fas fa-user-check"></i>
                    </div>

                    <div>

                        <div class="stat-label">
                            Active Accounts
                        </div>

                        <div class="stat-number">
                            {{ $users->count() }}
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- =========================
             USERS CARD
        ========================== -->

        <div class="users-card">


            <!-- Card Header -->

            <div class="users-card-header">

                <div class="users-card-title">

                    <div class="users-card-title-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <div>

                        <h3>
                            User Directory
                        </h3>

                        <span>
                            View and manage registered users
                        </span>

                    </div>

                </div>


                <!-- Search -->

                <div class="users-search">

                    <i class="fas fa-search"></i>

                    <input
                        type="text"
                        id="userSearch"
                        placeholder="Search users..."
                        autocomplete="off">

                </div>

            </div>


            <!-- Table -->

            <div class="users-table-wrapper">

                @if($users->count())

                    <table class="users-table">

                        <thead>

                            <tr>

                                <th style="width: 5%;">
                                    #
                                </th>

                                <th>
                                    User
                                </th>

                                <th>
                                    Role
                                </th>

                                <th>
                                    Status
                                </th>

                                <th class="text-right">
                                    Actions
                                </th>

                            </tr>

                        </thead>


                        <tbody id="usersTableBody">

                            @foreach($users as $index => $user)

                                <tr class="user-row">

                                    <!-- Number -->

                                    <td>
                                        <span style="
                                            color:#9AA7B8;
                                            font-weight:600;
                                            font-size:12px;
                                        ">
                                            {{ $index + 1 }}
                                        </span>
                                    </td>


                                    <!-- User -->

                                    <td>

                                        <div class="user-info">

                                            <div class="user-avatar-fallback">
                                                {{ strtoupper(substr($user->name, 0, 1)) }}
                                            </div>

                                            <div>

                                                <div class="user-name-table">
                                                    {{ $user->name }}
                                                </div>

                                                <div class="user-email-table">
                                                    {{ $user->email }}
                                                </div>

                                            </div>

                                        </div>

                                    </td>


                                    <!-- Role -->

                                    <td>

                                        <span class="role-badge">

                                            <span class="role-dot"></span>

                                            {{ $user->role ?? 'User' }}

                                        </span>

                                    </td>


                                    <!-- Status -->

                                    <td>

                                        <span class="role-badge">

                                            <span
                                                class="role-dot"
                                                style="background:#5D89C8;">
                                            </span>

                                            Active

                                        </span>

                                    </td>


                                    <!-- Actions -->

                                    <td>

                                        <div class="user-actions">

                                            <a href="#"
                                               class="user-action"
                                               title="View">

                                                <i class="fas fa-eye"></i>

                                            </a>


                                            <a href="#"
                                               class="user-action"
                                               title="Edit">

                                                <i class="fas fa-pen"></i>

                                            </a>


                                            <a href="#"
                                               class="user-action delete"
                                               title="Delete">

                                                <i class="fas fa-trash-alt"></i>

                                            </a>

                                        </div>

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @else

                    <!-- Empty State -->

                    <div class="users-empty">

                        <div class="users-empty-icon">
                            <i class="fas fa-users"></i>
                        </div>

                        <h4>
                            No users found
                        </h4>

                        <p>
                            There are currently no users registered in the system.
                        </p>

                    </div>

                @endif

            </div>

        </div>

    </section>

</div>


<!-- =========================
     SEARCH SCRIPT
========================== -->

<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('userSearch');

    if (!searchInput) return;

    searchInput.addEventListener('keyup', function () {

        const search = this.value.toLowerCase().trim();

        const rows = document.querySelectorAll('.user-row');

        rows.forEach(function (row) {

            const text = row.textContent.toLowerCase();

            row.style.display =
                text.includes(search) ? '' : 'none';

        });

    });

});

</script>

@endsection