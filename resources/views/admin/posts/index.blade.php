@extends('layouts.app')

@section('title', 'Posts')

@section('content')

<style>
    /* =========================================================
       Rwanda NCD Alliance - Posts Management
       ========================================================= */

    .posts-page {
        --blue: #5D89C8;
        --blue-dark: #3F679F;
        --blue-deep: #294B78;
        --blue-soft: #EEF4FC;

        --gold: #C99A3E;

        --ink: #17263A;
        --muted: #718096;

        --border: #E4EAF1;
        --border-light: #EDF1F5;

        --paper: #F6F8FB;
        --white: #FFFFFF;

        --green: #198754;
        --green-soft: #ECFDF3;

        --orange: #EA580C;
        --orange-soft: #FFF7ED;

        --red: #DC2626;
        --red-dark: #B91C1C;
        --red-soft: #FEF2F2;

        min-height: 100%;
        color: var(--ink);
    }


    /* =========================================================
       PAGE HEADER
       ========================================================= */

    .posts-header {
        padding: 30px 30px 20px;
    }

    .posts-header-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 20px;
    }

    .page-eyebrow {
        color: var(--blue);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 1.3px;
        text-transform: uppercase;
        margin-bottom: 6px;
    }

    .posts-title {
        margin: 0;
        color: var(--blue-deep);
        font-size: 28px;
        font-weight: 800;
        line-height: 1.2;
    }

    .posts-subtitle {
        margin: 7px 0 0;
        color: var(--muted);
        font-size: 13px;
        line-height: 1.6;
    }

    .posts-breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
        font-size: 12px;
    }

    .posts-breadcrumb a {
        color: var(--blue);
        font-weight: 700;
        text-decoration: none;
    }

    .posts-breadcrumb a:hover {
        color: var(--blue-dark);
    }

    .posts-breadcrumb .active {
        color: var(--muted);
    }


    /* =========================================================
       CONTENT
       ========================================================= */

    .posts-content {
        padding: 0 30px 35px;
    }


    /* =========================================================
       STAT CARDS
       ========================================================= */

    .post-stat-card {
        height: 100%;
        min-height: 86px;

        display: flex;
        align-items: center;
        gap: 15px;

        padding: 18px;

        background: var(--white);

        border: 1px solid var(--border);
        border-radius: 16px;

        box-shadow:
            0 8px 25px rgba(41, 75, 120, .045);

        transition:
            transform .2s ease,
            box-shadow .2s ease;
    }

    .post-stat-card:hover {
        transform: translateY(-2px);

        box-shadow:
            0 12px 30px rgba(41, 75, 120, .08);
    }

    .stat-icon {
        width: 48px;
        height: 48px;

        border-radius: 14px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        background: var(--blue-soft);
        color: var(--blue-dark);

        font-size: 18px;
    }

    .stat-icon.green {
        background: var(--green-soft);
        color: var(--green);
    }

    .stat-icon.orange {
        background: var(--orange-soft);
        color: var(--orange);
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


    /* =========================================================
       MAIN CARD
       ========================================================= */

    .posts-card {
        margin-top: 22px;

        overflow: hidden;

        background: var(--white);

        border: 1px solid var(--border);
        border-radius: 18px;

        box-shadow:
            0 8px 30px rgba(41, 75, 120, .055);
    }


    /* =========================================================
       CARD HEADER
       ========================================================= */

    .posts-card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 15px;

        padding: 20px 22px;

        border-bottom: 1px solid var(--border);
    }

    .posts-card-title {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .posts-card-title-icon {
        width: 38px;
        height: 38px;

        border-radius: 11px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: var(--blue-soft);
        color: var(--blue);

        flex-shrink: 0;
    }

    .posts-card-title h3 {
        margin: 0;

        color: var(--blue-deep);

        font-size: 16px;
        font-weight: 700;
    }

    .posts-card-title span {
        display: block;

        margin-top: 2px;

        color: var(--muted);

        font-size: 11px;
    }


    /* =========================================================
       ADD BUTTON
       ========================================================= */

    .btn-add-post {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 8px;

        padding: 10px 15px;

        border: 0;
        border-radius: 10px;

        background: var(--blue);
        color: #fff;

        font-size: 12px;
        font-weight: 700;

        text-decoration: none;

        box-shadow:
            0 5px 15px rgba(93, 137, 200, .22);

        transition: all .2s ease;
    }

    .btn-add-post:hover {
        background: var(--blue-dark);
        color: #fff;

        text-decoration: none;

        transform: translateY(-1px);
    }


    /* =========================================================
       TOOLBAR
       ========================================================= */

    .posts-toolbar {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 15px;

        padding: 15px 22px;

        border-bottom: 1px solid var(--border);
    }

    .posts-count {
        color: var(--muted);

        font-size: 12px;

        white-space: nowrap;
    }

    .posts-count strong {
        color: var(--blue-deep);
        font-weight: 800;
    }

    .posts-filters {
        display: flex;
        align-items: center;
        gap: 8px;
    }


    /* =========================================================
       SEARCH
       ========================================================= */

    .posts-search {
        position: relative;

        width: 240px;
    }

    .posts-search i {
        position: absolute;

        left: 13px;
        top: 50%;

        transform: translateY(-50%);

        color: #9AA7B8;

        font-size: 12px;

        pointer-events: none;
    }

    .posts-search input {
        width: 100%;
        height: 40px;

        padding: 0 12px 0 36px;

        border: 1px solid var(--border);
        border-radius: 10px;

        outline: none;

        background: #fff;

        color: var(--ink);

        font-size: 12px;

        transition: .2s;
    }

    .posts-search input::placeholder {
        color: #A0AEC0;
    }

    .posts-search input:focus {
        border-color: var(--blue);

        box-shadow:
            0 0 0 3px rgba(93, 137, 200, .12);
    }


    /* =========================================================
       FILTERS
       ========================================================= */

    .posts-filter {
        height: 40px;

        min-width: 125px;

        padding: 0 10px;

        border: 1px solid var(--border);
        border-radius: 10px;

        background: #fff;

        color: var(--muted);

        font-size: 11px;

        outline: none;

        cursor: pointer;

        transition: .2s;
    }

    .posts-filter:focus {
        border-color: var(--blue);

        box-shadow:
            0 0 0 3px rgba(93, 137, 200, .08);
    }


    /* =========================================================
       TABLE
       ========================================================= */

    .posts-table-wrapper {
        overflow-x: auto;
    }

    .posts-table {
        width: 100%;

        margin: 0;

        border-collapse: collapse;
    }

    .posts-table thead th {
        padding: 14px 18px;

        background: #F8FAFD;

        border-bottom: 1px solid var(--border);

        color: #718096;

        font-size: 10px;

        font-weight: 800;

        letter-spacing: .6px;

        text-transform: uppercase;

        white-space: nowrap;
    }

    .posts-table tbody td {
        padding: 15px 18px;

        border-bottom: 1px solid var(--border-light);

        vertical-align: middle;

        font-size: 12px;
    }

    .posts-table tbody tr {
        transition: .2s ease;
    }

    .posts-table tbody tr:hover {
        background: #FBFCFE;
    }

    .posts-table tbody tr:last-child td {
        border-bottom: 0;
    }


    /* =========================================================
       POST
       ========================================================= */

    .post-profile {
        display: flex;
        align-items: center;

        gap: 12px;

        min-width: 270px;
    }

    .post-image {
        width: 58px;
        height: 46px;

        object-fit: cover;

        border-radius: 10px;

        border: 1px solid var(--border);

        background: var(--blue-soft);

        flex-shrink: 0;
    }

    .post-image-fallback {
        width: 58px;
        height: 46px;

        border-radius: 10px;

        background: var(--blue-soft);

        color: var(--blue);

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        font-size: 16px;
    }

    .post-title {
        color: var(--blue-deep);

        font-size: 13px;

        font-weight: 700;

        line-height: 1.4;

        margin-bottom: 3px;

        max-width: 380px;
    }

    .post-meta {
        color: var(--muted);

        font-size: 10px;
    }


    /* =========================================================
       AUTHOR
       ========================================================= */

    .author-info {
        display: flex;
        align-items: center;

        gap: 8px;

        white-space: nowrap;
    }

    .author-avatar {
        width: 30px;
        height: 30px;

        border-radius: 9px;

        background: var(--blue-soft);
        color: var(--blue-dark);

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 11px;
        font-weight: 800;

        flex-shrink: 0;
    }

    .author-name {
        color: var(--blue-deep);

        font-size: 11px;

        font-weight: 700;
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

        background: var(--blue-soft);
        color: var(--blue-dark);

        font-size: 10px;
        font-weight: 700;

        white-space: nowrap;
    }

    .category-dot {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: var(--blue);

        flex-shrink: 0;
    }


    /* =========================================================
       STATUS
       ========================================================= */

    .status-badge {
        display: inline-flex;
        align-items: center;

        gap: 6px;

        padding: 6px 10px;

        border-radius: 20px;

        font-size: 10px;
        font-weight: 700;

        white-space: nowrap;
    }

    .status-published {
        background: var(--green-soft);
        color: #16734A;
    }

    .status-draft {
        background: var(--orange-soft);
        color: #C2410C;
    }

    .status-pending {
        background: #FFF7ED;
        color: #B45309;
    }

    .status-archived {
        background: #F1F5F9;
        color: #64748B;
    }

    .status-default {
        background: var(--blue-soft);
        color: var(--blue-dark);
    }

    .status-dot {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: currentColor;
    }


    /* =========================================================
       FEATURED
       ========================================================= */

    .featured-badge {
        display: inline-flex;
        align-items: center;

        gap: 5px;

        margin-top: 4px;

        color: var(--gold);

        font-size: 9px;

        font-weight: 700;
    }


    /* =========================================================
       DATE
       ========================================================= */

    .post-date {
        color: var(--blue-deep);

        font-size: 11px;

        font-weight: 700;

        white-space: nowrap;
    }


    /* =========================================================
       ACTIONS
       ========================================================= */

    .post-actions {
        display: flex;
        justify-content: flex-end;

        gap: 6px;

        white-space: nowrap;
    }

    .post-action {
        width: 34px;
        height: 34px;

        display: inline-flex;
        align-items: center;
        justify-content: center;

        border: 1px solid var(--border);
        border-radius: 9px;

        background: #fff;
        color: var(--muted);

        text-decoration: none;

        transition: .2s ease;
    }

    .post-action:hover {
        background: var(--blue-soft);

        border-color: #C9D9EE;

        color: var(--blue-dark);

        text-decoration: none;
    }

    .post-action.delete {
        cursor: pointer;
    }

    .post-action.delete:hover {
        background: var(--red-soft);

        border-color: #FECACA;

        color: var(--red);
    }

    .delete-form {
        margin: 0;
    }


    /* =========================================================
       PAGINATION
       ========================================================= */

    .posts-pagination {
        display: flex;

        justify-content: flex-end;

        padding: 18px 22px;

        border-top: 1px solid var(--border);
    }

    .posts-pagination .pagination {
        margin: 0;
    }

    .posts-pagination .page-link {
        margin: 0 2px;

        border-color: var(--border);

        border-radius: 8px;

        color: var(--blue-dark);

        font-size: 12px;
    }

    .posts-pagination .page-link:hover {
        background: var(--blue-soft);

        color: var(--blue-dark);
    }

    .posts-pagination .page-item.active .page-link {
        background: var(--blue);

        border-color: var(--blue);

        color: #fff;
    }


    /* =========================================================
       EMPTY STATE
       ========================================================= */

    .posts-empty {
        padding: 70px 20px;

        text-align: center;
    }

    .posts-empty-icon {
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

    .posts-empty h4 {
        margin: 0 0 6px;

        color: var(--blue-deep);

        font-size: 16px;

        font-weight: 700;
    }

    .posts-empty p {
        margin-bottom: 20px;

        color: var(--muted);

        font-size: 12px;
    }


    /* =========================================================
       DELETE MODAL
       ========================================================= */

    .post-delete-modal .modal-dialog {
        max-width: 430px;
    }

    .post-delete-modal .modal-content {
        overflow: hidden;

        border: 0;

        border-radius: 20px;

        box-shadow:
            0 25px 70px rgba(0, 0, 0, .18);
    }

    .delete-content {
        padding: 30px 25px 25px;

        text-align: center;
    }

    .delete-icon {
        width: 62px;
        height: 62px;

        margin: 0 auto 16px;

        border-radius: 18px;

        background: var(--red-soft);

        color: var(--red);

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 22px;
    }

    .delete-content h4 {
        margin: 0 0 8px;

        color: var(--blue-deep);

        font-size: 17px;

        font-weight: 800;
    }

    .delete-content p {
        margin: 0;

        color: var(--muted);

        font-size: 12px;

        line-height: 1.7;
    }

    .delete-post-name {
        color: var(--blue-deep);

        font-weight: 800;
    }

    .delete-footer {
        display: flex;

        justify-content: center;

        gap: 10px;

        padding: 16px 20px;

        border-top: 1px solid var(--border);

        background: #FAFBFD;
    }

    .btn-delete-cancel {
        padding: 10px 18px;

        border: 1px solid var(--border);

        border-radius: 10px;

        background: #fff;

        color: var(--muted);

        font-size: 12px;

        font-weight: 600;

        cursor: pointer;
    }

    .btn-delete-cancel:hover {
        background: #F8FAFD;

        color: var(--blue-deep);
    }

    .btn-delete-confirm {
        padding: 10px 18px;

        border: 0;

        border-radius: 10px;

        background: var(--red);

        color: #fff;

        font-size: 12px;

        font-weight: 700;

        cursor: pointer;
    }

    .btn-delete-confirm:hover {
        background: var(--red-dark);

        color: #fff;
    }


    /* =========================================================
       SEARCH EMPTY
       ========================================================= */

    .posts-filter-empty {
        display: none;

        padding: 50px 20px;

        text-align: center;
    }

    .posts-filter-empty-icon {
        width: 55px;
        height: 55px;

        margin: 0 auto 12px;

        border-radius: 15px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: var(--blue-soft);

        color: var(--blue);

        font-size: 18px;
    }

    .posts-filter-empty h4 {
        margin: 0 0 5px;

        color: var(--blue-deep);

        font-size: 15px;

        font-weight: 700;
    }

    .posts-filter-empty p {
        margin: 0;

        color: var(--muted);

        font-size: 11px;
    }


    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 1100px) {

        .posts-toolbar {
            display: block;
        }

        .posts-filters {
            margin-top: 12px;
            flex-wrap: wrap;
        }

        .posts-search {
            flex: 1;
            width: auto;
        }

    }


    @media (max-width: 767px) {

        .posts-header {
            padding: 22px 16px 15px;
        }

        .posts-header-inner {
            display: block;
        }

        .posts-title {
            font-size: 23px;
        }

        .posts-subtitle {
            font-size: 12px;
        }

        .posts-breadcrumb {
            margin-top: 12px;
        }

        .posts-content {
            padding: 0 16px 25px;
        }

        .posts-card-header {
            display: block;
        }

        .btn-add-post {
            width: 100%;

            margin-top: 15px;
        }

        .posts-toolbar {
            padding: 15px;
        }

        .posts-filters {
            display: block;
        }

        .posts-search {
            width: 100%;

            margin-bottom: 8px;
        }

        .posts-filter {
            width: 100%;

            margin-bottom: 8px;
        }

        .post-actions {
            justify-content: flex-start;
        }

        .posts-pagination {
            justify-content: center;

            padding: 15px;
        }

        .post-delete-modal .modal-dialog {
            margin: 10px;
        }

    }


    @media (max-width: 575px) {

        .post-stat-card {
            padding: 14px;

            gap: 10px;
        }

        .stat-icon {
            width: 40px;
            height: 40px;

            border-radius: 11px;

            font-size: 15px;
        }

        .stat-number {
            font-size: 19px;
        }

        .stat-label {
            font-size: 10px;
        }

    }

</style>


<div class="posts-page">


    {{-- =====================================================
         PAGE HEADER
         ====================================================== --}}

    <section class="posts-header">

        <div class="posts-header-inner">

            <div>

                <div class="page-eyebrow">
                    Content Management
                </div>

                <h1 class="posts-title">
                    Posts
                </h1>

                <p class="posts-subtitle">
                    Create, publish and manage news, stories and organizational updates.
                </p>

            </div>


            <ol class="breadcrumb posts-breadcrumb">

                <li class="breadcrumb-item">

                    <a href="{{ route('dashboard') }}">
                        Home
                    </a>

                </li>

                <li class="breadcrumb-item active">
                    Posts
                </li>

            </ol>

        </div>

    </section>



    {{-- =====================================================
         CONTENT
         ====================================================== --}}

    <section class="posts-content">


        {{-- =================================================
             STATISTICS
             ================================================== --}}

        <div class="row">


            {{-- TOTAL --}}
            <div class="col-md-3 col-6 mb-3">

                <div class="post-stat-card">

                    <div class="stat-icon">

                        <i class="fas fa-newspaper"></i>

                    </div>

                    <div>

                        <div class="stat-label">
                            Total Posts
                        </div>

                        <div class="stat-number">
                            {{ $totalPosts ?? $posts->total() }}
                        </div>

                    </div>

                </div>

            </div>


            {{-- PUBLISHED --}}
            <div class="col-md-3 col-6 mb-3">

                <div class="post-stat-card">

                    <div class="stat-icon green">

                        <i class="fas fa-check-circle"></i>

                    </div>

                    <div>

                        <div class="stat-label">
                            Published
                        </div>

                        <div class="stat-number">
                            {{ $publishedPosts ?? 0 }}
                        </div>

                    </div>

                </div>

            </div>


            {{-- DRAFTS --}}
            <div class="col-md-3 col-6 mb-3">

                <div class="post-stat-card">

                    <div class="stat-icon orange">

                        <i class="fas fa-edit"></i>

                    </div>

                    <div>

                        <div class="stat-label">
                            Drafts
                        </div>

                        <div class="stat-number">
                            {{ $draftPosts ?? 0 }}
                        </div>

                    </div>

                </div>

            </div>


            {{-- FEATURED --}}
            <div class="col-md-3 col-6 mb-3">

                <div class="post-stat-card">

                    <div class="stat-icon gold">

                        <i class="fas fa-star"></i>

                    </div>

                    <div>

                        <div class="stat-label">
                            Featured
                        </div>

                        <div class="stat-number">
                            {{ $featuredPosts ?? 0 }}
                        </div>

                    </div>

                </div>

            </div>


        </div>



        {{-- =================================================
             POSTS CARD
             ================================================== --}}

        <div class="posts-card">


            {{-- =================================================
                 CARD HEADER
                 ================================================== --}}

            <div class="posts-card-header">


                <div class="posts-card-title">

                    <div class="posts-card-title-icon">

                        <i class="fas fa-file-alt"></i>

                    </div>


                    <div>

                        <h3>
                            Post Directory
                        </h3>

                        <span>
                            Manage website content and publications
                        </span>

                    </div>

                </div>



                <a
                    href="{{ route('posts.create') }}"
                    class="btn-add-post">

                    <i class="fas fa-plus"></i>

                    Add Post

                </a>


            </div>



            {{-- =================================================
                 TOOLBAR
                 ================================================== --}}

            <div class="posts-toolbar">


                <div class="posts-count">

                    Showing

                    <strong id="visiblePostsCount">
                        {{ $posts->count() }}
                    </strong>

                    posts

                </div>



                <div class="posts-filters">


                    {{-- SEARCH --}}
                    <div class="posts-search">

                        <i class="fas fa-search"></i>

                        <input
                            type="text"
                            id="postSearch"
                            placeholder="Search posts..."
                            autocomplete="off">

                    </div>



                    {{-- STATUS --}}
                    <select
                        class="posts-filter"
                        id="statusFilter">

                        <option value="">
                            All Statuses
                        </option>

                        <option value="published">
                            Published
                        </option>

                        <option value="draft">
                            Draft
                        </option>

                        <option value="pending">
                            Pending
                        </option>

                        <option value="archived">
                            Archived
                        </option>

                    </select>



                    {{-- CATEGORY --}}
                    <select
                        class="posts-filter"
                        id="categoryFilter">

                        <option value="">
                            All Categories
                        </option>

                        @php
                            $categories = $posts
                                ->pluck('category')
                                ->filter()
                                ->unique('id')
                                ->sortBy('name');
                        @endphp

                        @foreach($categories as $category)

                            <option value="{{ strtolower($category->name) }}">

                                {{ $category->name }}

                            </option>

                        @endforeach

                    </select>


                </div>

            </div>



            {{-- =================================================
                 TABLE
                 ================================================== --}}

            <div class="posts-table-wrapper">


                @if($posts->count())


                    <table class="posts-table">


                        <thead>

                            <tr>

                                <th style="width: 5%;">
                                    #
                                </th>

                                <th>
                                    Post
                                </th>

                                <th>
                                    Author
                                </th>

                                <th>
                                    Category
                                </th>

                                <th>
                                    Status
                                </th>

                                <th>
                                    Date
                                </th>

                                <th class="text-right">
                                    Actions
                                </th>

                            </tr>

                        </thead>



                        <tbody id="postsTableBody">


                            @foreach($posts as $index => $post)


                                @php

                                    /*
                                    |--------------------------------------------------------------------------
                                    | Status
                                    |--------------------------------------------------------------------------
                                    */

                                    $status = strtolower(
                                        $post->status ?? 'unknown'
                                    );


                                    $statusClass = match($status) {

                                        'published'
                                            => 'status-published',

                                        'draft'
                                            => 'status-draft',

                                        'pending'
                                            => 'status-pending',

                                        'archived'
                                            => 'status-archived',

                                        default
                                            => 'status-default'

                                    };


                                    /*
                                    |--------------------------------------------------------------------------
                                    | Author relationship
                                    |--------------------------------------------------------------------------
                                    */

                                    $authorName = $post->author
                                        ? $post->author->name
                                        : 'Unknown Author';


                                    /*
                                    |--------------------------------------------------------------------------
                                    | Category relationship
                                    |--------------------------------------------------------------------------
                                    */

                                    $categoryName = $post->category
                                        ? $post->category->name
                                        : 'Uncategorized';


                                    /*
                                    |--------------------------------------------------------------------------
                                    | Featured
                                    |--------------------------------------------------------------------------
                                    */

                                    $isFeatured = (bool) $post->featured;


                                    /*
                                    |--------------------------------------------------------------------------
                                    | Initial
                                    |--------------------------------------------------------------------------
                                    */

                                    $authorInitial = strtoupper(
                                        substr(
                                            trim($authorName),
                                            0,
                                            1
                                        )
                                    );

                                @endphp



                                <tr
                                    class="post-row"

                                    data-status="{{ $status }}"

                                    data-category="{{ strtolower($categoryName) }}"

                                    data-search="{{ strtolower(
                                        $post->title .
                                        ' ' .
                                        $authorName .
                                        ' ' .
                                        $categoryName
                                    ) }}">


                                    {{-- =================================================
                                         NUMBER
                                         ================================================== --}}

                                    <td>

                                        <span style="
                                            color:#9AA7B8;
                                            font-weight:600;
                                            font-size:12px;
                                        ">

                                            {{ $posts->firstItem() + $index }}

                                        </span>

                                    </td>



                                    {{-- =================================================
                                         POST
                                         ================================================== --}}

                                    <td>

                                        <div class="post-profile">


                                            @if($post->image)

                                                <img
                                                    src="{{ URL::asset($post->image) }}"
                                                    alt="{{ $post->title }}"
                                                    class="post-image">

                                            @else

                                                <div class="post-image-fallback">

                                                    <i class="fas fa-newspaper"></i>

                                                </div>

                                            @endif



                                            <div>


                                                <div class="post-title">

                                                    {{ $post->title }}

                                                </div>



                                                @if($isFeatured)

                                                    <div class="featured-badge">

                                                        <i class="fas fa-star"></i>

                                                        Featured Post

                                                    </div>

                                                @endif


                                            </div>


                                        </div>

                                    </td>



                                    {{-- =================================================
                                         AUTHOR
                                         ================================================== --}}

                                    <td>

                                        <div class="author-info">


                                            <div class="author-avatar">

                                                {{ $authorInitial }}

                                            </div>



                                            <div class="author-name">

                                                {{ $authorName }}

                                            </div>


                                        </div>

                                    </td>



                                    {{-- =================================================
                                         CATEGORY
                                         ================================================== --}}

                                    <td>

                                        <span class="category-badge">

                                            <span class="category-dot"></span>

                                            {{ $categoryName }}

                                        </span>

                                    </td>



                                    {{-- =================================================
                                         STATUS
                                         ================================================== --}}

                                    <td>

                                        <span
                                            class="status-badge {{ $statusClass }}">

                                            <span class="status-dot"></span>

                                            {{ ucfirst($status) }}

                                        </span>

                                    </td>



                                    {{-- =================================================
                                         DATE
                                         ================================================== --}}

                                    <td>

                                        @if($post->created_at)

                                            <div class="post-date">

                                                {{ $post->created_at->format('d M Y') }}

                                            </div>

                                        @else

                                            <span style="
                                                color:#9AA7B8;
                                                font-size:10px;
                                            ">
                                                —
                                            </span>

                                        @endif

                                    </td>



                                    {{-- =================================================
                                         ACTIONS
                                         ================================================== --}}

                                    <td>

                                        <div class="post-actions">


                                            {{-- VIEW --}}
                                            <a
                                                href="{{ route('posts.show', $post->id) }}"
                                                class="post-action"
                                                title="View Post"
                                                data-toggle="tooltip">

                                                <i class="fas fa-eye"></i>

                                            </a>



                                            {{-- EDIT --}}
                                            <a
                                                href="{{ route('posts.edit', $post->id) }}"
                                                class="post-action"
                                                title="Edit Post"
                                                data-toggle="tooltip">

                                                <i class="fas fa-pen"></i>

                                            </a>



                                            {{-- DELETE --}}
                                            <button
                                                type="button"

                                                class="post-action delete"

                                                title="Delete Post"

                                                data-toggle="modal"

                                                data-target="#deletePostModal{{ $post->id }}">

                                                <i class="fas fa-trash-alt"></i>

                                            </button>


                                        </div>

                                    </td>


                                </tr>


                            @endforeach


                        </tbody>


                    </table>



                    {{-- =================================================
                         FILTER EMPTY
                         ================================================== --}}

                    <div
                        id="filterEmpty"
                        class="posts-filter-empty">

                        <div class="posts-filter-empty-icon">

                            <i class="fas fa-search"></i>

                        </div>

                        <h4>
                            No matching posts
                        </h4>

                        <p>
                            Try changing your search or filters.
                        </p>

                    </div>



                    {{-- =================================================
                         PAGINATION
                         ================================================== --}}

                    @if(method_exists($posts, 'links'))

                        <div class="posts-pagination">

                            {{ $posts->links() }}

                        </div>

                    @endif


                @else


                    {{-- =================================================
                         EMPTY DATABASE
                         ================================================== --}}

                    <div class="posts-empty">

                        <div class="posts-empty-icon">

                            <i class="fas fa-newspaper"></i>

                        </div>


                        <h4>
                            No posts found
                        </h4>


                        <p>
                            Create your first post to start publishing content.
                        </p>


                        <a
                            href="{{ route('posts.create') }}"
                            class="btn-add-post">

                            <i class="fas fa-plus"></i>

                            Create Post

                        </a>

                    </div>


                @endif


            </div>


        </div>


    </section>


</div>



{{-- =============================================================
     DELETE MODALS
     ============================================================= --}}

@if($posts->count())


    @foreach($posts as $post)


        <div
            class="modal fade post-delete-modal"

            id="deletePostModal{{ $post->id }}"

            tabindex="-1"

            role="dialog"

            aria-labelledby="deletePostModalLabel{{ $post->id }}"

            aria-hidden="true">


            <div
                class="modal-dialog modal-dialog-centered"
                role="document">


                <div class="modal-content">


                    {{-- MODAL CONTENT --}}
                    <div class="delete-content">


                        <div class="delete-icon">

                            <i class="fas fa-trash-alt"></i>

                        </div>


                        <h4
                            id="deletePostModalLabel{{ $post->id }}">

                            Delete Post?

                        </h4>


                        <p>

                            Are you sure you want to permanently delete

                            <span class="delete-post-name">

                                {{ $post->title }}

                            </span>?

                            <br>

                            This action cannot be undone.

                        </p>


                    </div>



                    {{-- MODAL FOOTER --}}
                    <div class="delete-footer">


                        <button
                            type="button"

                            class="btn-delete-cancel"

                            data-dismiss="modal">

                            Cancel

                        </button>



                        <form
                            class="delete-form"

                            action="{{ route('posts.destroy', $post->id) }}"

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



{{-- =============================================================
     SEARCH / FILTER SCRIPT
     ============================================================= --}}

<script>

document.addEventListener('DOMContentLoaded', function () {


    const searchInput =
        document.getElementById('postSearch');


    const statusFilter =
        document.getElementById('statusFilter');


    const categoryFilter =
        document.getElementById('categoryFilter');


    const rows =
        document.querySelectorAll('.post-row');


    const visibleCount =
        document.getElementById('visiblePostsCount');


    const filterEmpty =
        document.getElementById('filterEmpty');



    function filterPosts() {


        const search =
            searchInput
                ? searchInput.value
                    .toLowerCase()
                    .trim()
                : '';


        const status =
            statusFilter
                ? statusFilter.value
                    .toLowerCase()
                : '';


        const category =
            categoryFilter
                ? categoryFilter.value
                    .toLowerCase()
                : '';



        let visible = 0;



        rows.forEach(function (row) {


            const rowSearch =
                row.dataset.search || '';


            const rowStatus =
                row.dataset.status || '';


            const rowCategory =
                row.dataset.category || '';



            const matchesSearch =
                !search ||
                rowSearch.includes(search);


            const matchesStatus =
                !status ||
                rowStatus === status;


            const matchesCategory =
                !category ||
                rowCategory === category;



            const shouldShow =
                matchesSearch &&
                matchesStatus &&
                matchesCategory;



            if (shouldShow) {

                row.style.display = '';

                visible++;

            } else {

                row.style.display = 'none';

            }


        });



        if (visibleCount) {

            visibleCount.textContent = visible;

        }



        if (filterEmpty) {

            filterEmpty.style.display =
                rows.length > 0 && visible === 0
                    ? 'block'
                    : 'none';

        }


    }



    if (searchInput) {

        searchInput.addEventListener(
            'input',
            filterPosts
        );

    }



    if (statusFilter) {

        statusFilter.addEventListener(
            'change',
            filterPosts
        );

    }



    if (categoryFilter) {

        categoryFilter.addEventListener(
            'change',
            filterPosts
        );

    }



    /*
    |--------------------------------------------------------------------------
    | Bootstrap tooltip
    |--------------------------------------------------------------------------
    */

    if (
        typeof $ !== 'undefined' &&
        $.fn.tooltip
    ) {

        $('[data-toggle="tooltip"]').tooltip();

    }


});

</script>

@endsection