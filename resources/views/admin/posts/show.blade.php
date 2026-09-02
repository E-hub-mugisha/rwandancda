@extends('layouts.app')
@section('title', 'Post Detail')

@section('content')

<style>
    /* =========================================================
       Rwanda NCD Alliance — Post Detail
       ========================================================= */

    #post-detail-page {
        --blue: #5D89C8;
        --blue-dark: #3F679F;
        --blue-deep: #294B78;
        --blue-soft: #EEF4FC;
        --gold: #C99A3E;
        --gold-soft: #F8F1E4;
        --background: #F6F8FB;
        --ink: #17263A;
        --muted: #718096;
        --border: #E4EAF1;
        --white: #FFFFFF;

        color: var(--ink);
        background: var(--background);
        min-height: calc(100vh - 70px);
        padding: 28px;
    }

    /* =========================
       Page Header
       ========================= */

    #post-detail-page .page-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        gap: 20px;
        margin-bottom: 24px;
    }

    #post-detail-page .eyebrow {
        margin: 0 0 7px;
        color: var(--blue);
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .12em;
    }

    #post-detail-page .page-title {
        margin: 0;
        color: var(--ink);
        font-size: clamp(26px, 3vw, 36px);
        font-weight: 800;
        letter-spacing: -0.035em;
        line-height: 1.1;
    }

    #post-detail-page .breadcrumb-wrap {
        color: var(--muted);
        font-size: 13px;
        white-space: nowrap;
    }

    #post-detail-page .breadcrumb-wrap a {
        color: var(--blue);
        text-decoration: none;
        font-weight: 600;
    }

    #post-detail-page .breadcrumb-wrap a:hover {
        color: var(--blue-dark);
    }

    /* =========================
       Main Grid
       ========================= */

    #post-detail-page .post-layout {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 310px;
        gap: 24px;
        align-items: start;
    }

    /* =========================
       Main Post Card
       ========================= */

    #post-detail-page .post-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 30px rgba(23, 38, 58, .06);
    }

    #post-detail-page .post-cover {
        position: relative;
        width: 100%;
        height: 390px;
        overflow: hidden;
        background: linear-gradient(
            135deg,
            var(--blue-deep),
            var(--blue)
        );
    }

    #post-detail-page .post-cover img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }

    #post-detail-page .post-cover-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(
            to top,
            rgba(10, 25, 45, .72) 0%,
            rgba(10, 25, 45, .18) 45%,
            rgba(10, 25, 45, 0) 75%
        );
        pointer-events: none;
    }

    #post-detail-page .post-cover-content {
        position: absolute;
        left: 30px;
        right: 30px;
        bottom: 28px;
        color: white;
    }

    #post-detail-page .post-badges {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
        margin-bottom: 13px;
    }

    #post-detail-page .badge-modern {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 6px 11px;
        border-radius: 999px;
        background: rgba(255,255,255,.94);
        color: var(--blue-deep);
        font-size: 11px;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: .04em;
    }

    #post-detail-page .badge-featured {
        color: #805F19;
        background: #FFF4D8;
    }

    #post-detail-page .post-cover-title {
        max-width: 850px;
        margin: 0;
        color: white;
        font-size: clamp(28px, 4vw, 42px);
        line-height: 1.12;
        font-weight: 800;
        letter-spacing: -0.035em;
    }

    /* Fallback when there is no image */

    #post-detail-page .post-cover.no-image {
        display: flex;
        align-items: flex-end;
        min-height: 330px;
        padding: 30px;
        background:
            radial-gradient(circle at top right, rgba(255,255,255,.18), transparent 35%),
            linear-gradient(135deg, var(--blue-deep), var(--blue));
    }

    /* =========================
       Post Meta
       ========================= */

    #post-detail-page .post-meta {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 18px;
        padding: 20px 28px;
        border-bottom: 1px solid var(--border);
    }

    #post-detail-page .author-block {
        display: flex;
        align-items: center;
        gap: 11px;
        min-width: 220px;
    }

    #post-detail-page .author-avatar {
        width: 42px;
        height: 42px;
        flex: 0 0 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--blue-soft);
        color: var(--blue-deep);
        font-size: 15px;
        font-weight: 800;
    }

    #post-detail-page .author-name {
        margin: 0 0 2px;
        color: var(--ink);
        font-size: 14px;
        font-weight: 800;
    }

    #post-detail-page .meta-text {
        margin: 0;
        color: var(--muted);
        font-size: 12px;
    }

    #post-detail-page .meta-divider {
        width: 1px;
        height: 35px;
        background: var(--border);
    }

    #post-detail-page .meta-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: var(--muted);
        font-size: 13px;
    }

    #post-detail-page .meta-item i {
        color: var(--blue);
        font-size: 15px;
    }

    /* =========================
       Article Content
       ========================= */

    #post-detail-page .article-body {
        padding: 34px 32px 38px;
        color: #334155;
        font-size: 16px;
        line-height: 1.85;
        overflow-wrap: anywhere;
    }

    #post-detail-page .article-body > *:first-child {
        margin-top: 0;
    }

    #post-detail-page .article-body > *:last-child {
        margin-bottom: 0;
    }

    #post-detail-page .article-body h1,
    #post-detail-page .article-body h2,
    #post-detail-page .article-body h3,
    #post-detail-page .article-body h4,
    #post-detail-page .article-body h5,
    #post-detail-page .article-body h6 {
        color: var(--ink);
        font-weight: 800;
        line-height: 1.3;
        margin-top: 1.6em;
        margin-bottom: .6em;
    }

    #post-detail-page .article-body h2 {
        font-size: 28px;
    }

    #post-detail-page .article-body h3 {
        font-size: 23px;
    }

    #post-detail-page .article-body p {
        margin-bottom: 1.2em;
    }

    #post-detail-page .article-body a {
        color: var(--blue-dark);
        font-weight: 600;
    }

    #post-detail-page .article-body ul,
    #post-detail-page .article-body ol {
        margin-bottom: 1.3em;
        padding-left: 28px;
    }

    #post-detail-page .article-body li {
        margin-bottom: 7px;
    }

    #post-detail-page .article-body blockquote {
        margin: 25px 0;
        padding: 18px 22px;
        border-left: 4px solid var(--gold);
        border-radius: 0 10px 10px 0;
        background: var(--gold-soft);
        color: #5D5140;
    }

    #post-detail-page .article-body img {
        max-width: 100%;
        height: auto;
        border-radius: 12px;
        margin: 15px 0;
    }

    #post-detail-page .article-body table {
        width: 100%;
        margin: 20px 0;
        border-collapse: collapse;
        overflow: hidden;
    }

    #post-detail-page .article-body th,
    #post-detail-page .article-body td {
        padding: 10px 12px;
        border: 1px solid var(--border);
    }

    #post-detail-page .article-body th {
        background: var(--blue-soft);
        color: var(--ink);
        font-weight: 800;
    }

    #post-detail-page .article-body pre {
        padding: 18px;
        border-radius: 12px;
        background: #17263A;
        color: #fff;
        overflow-x: auto;
    }

    /* =========================
       Comments
       ========================= */

    #post-detail-page .comments-section {
        margin-top: 24px;
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        box-shadow: 0 8px 30px rgba(23, 38, 58, .05);
        overflow: hidden;
    }

    #post-detail-page .comments-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 21px 24px;
        border-bottom: 1px solid var(--border);
    }

    #post-detail-page .comments-title {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        font-size: 17px;
        font-weight: 800;
    }

    #post-detail-page .comments-count {
        min-width: 28px;
        height: 28px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0 8px;
        border-radius: 999px;
        background: var(--blue-soft);
        color: var(--blue-deep);
        font-size: 12px;
        font-weight: 800;
    }

    #post-detail-page .comment-item {
        padding: 22px 24px;
        border-bottom: 1px solid var(--border);
    }

    #post-detail-page .comment-item:last-child {
        border-bottom: 0;
    }

    #post-detail-page .comment-top {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 15px;
    }

    #post-detail-page .comment-user {
        display: flex;
        align-items: center;
        gap: 11px;
    }

    #post-detail-page .comment-avatar {
        width: 40px;
        height: 40px;
        flex: 0 0 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--blue-soft);
        color: var(--blue-deep);
        font-weight: 800;
    }

    #post-detail-page .comment-name {
        margin: 0 0 3px;
        color: var(--ink);
        font-size: 14px;
        font-weight: 800;
    }

    #post-detail-page .comment-date {
        color: var(--muted);
        font-size: 11px;
    }

    #post-detail-page .comment-message {
        margin: 16px 0 0 51px;
        padding: 14px 16px;
        border-radius: 10px;
        background: #F8FAFC;
        color: #475569;
        font-size: 14px;
        line-height: 1.7;
    }

    #post-detail-page .comment-delete {
        border: 0;
        background: transparent;
        color: #B54A4A;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        padding: 5px 7px;
        border-radius: 6px;
    }

    #post-detail-page .comment-delete:hover {
        background: #FFF0F0;
    }

    #post-detail-page .empty-comments {
        padding: 50px 25px;
        text-align: center;
    }

    #post-detail-page .empty-comments-icon {
        width: 52px;
        height: 52px;
        margin: 0 auto 13px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--blue-soft);
        color: var(--blue);
        font-size: 21px;
    }

    #post-detail-page .empty-comments h4 {
        margin: 0 0 5px;
        font-size: 15px;
        font-weight: 800;
    }

    #post-detail-page .empty-comments p {
        margin: 0;
        color: var(--muted);
        font-size: 13px;
    }

    /* =========================
       Sidebar
       ========================= */

    #post-detail-page .sidebar-card {
        background: var(--white);
        border: 1px solid var(--border);
        border-radius: 18px;
        box-shadow: 0 8px 30px rgba(23, 38, 58, .05);
        overflow: hidden;
    }

    #post-detail-page .sidebar-card + .sidebar-card {
        margin-top: 18px;
    }

    #post-detail-page .sidebar-header {
        padding: 18px 20px;
        border-bottom: 1px solid var(--border);
    }

    #post-detail-page .sidebar-header h3 {
        margin: 0;
        font-size: 14px;
        font-weight: 800;
    }

    #post-detail-page .sidebar-body {
        padding: 20px;
    }

    #post-detail-page .info-row {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 15px;
        padding: 13px 0;
        border-bottom: 1px solid #EEF2F6;
    }

    #post-detail-page .info-row:first-child {
        padding-top: 0;
    }

    #post-detail-page .info-row:last-child {
        padding-bottom: 0;
        border-bottom: 0;
    }

    #post-detail-page .info-label {
        color: var(--muted);
        font-size: 12px;
    }

    #post-detail-page .info-value {
        color: var(--ink);
        font-size: 12px;
        font-weight: 700;
        text-align: right;
    }

    #post-detail-page .status-pill {
        display: inline-flex;
        align-items: center;
        padding: 5px 9px;
        border-radius: 999px;
        background: var(--blue-soft);
        color: var(--blue-deep);
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
    }

    #post-detail-page .featured-pill {
        background: #FFF4D8;
        color: #80601A;
    }

    /* =========================
       Actions
       ========================= */

    #post-detail-page .action-card {
        padding: 20px;
    }

    #post-detail-page .action-card h3 {
        margin: 0 0 15px;
        font-size: 14px;
        font-weight: 800;
    }

    #post-detail-page .action-buttons {
        display: grid;
        gap: 10px;
    }

    #post-detail-page .action-btn {
        width: 100%;
        min-height: 43px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        border-radius: 9px;
        font-size: 13px;
        font-weight: 700;
        text-decoration: none;
        transition: .2s ease;
    }

    #post-detail-page .btn-edit {
        background: var(--blue);
        color: white;
    }

    #post-detail-page .btn-edit:hover {
        background: var(--blue-dark);
        color: white;
        transform: translateY(-1px);
    }

    #post-detail-page .btn-back {
        background: var(--blue-soft);
        color: var(--blue-deep);
    }

    #post-detail-page .btn-back:hover {
        background: #E3EDF9;
        color: var(--blue-deep);
    }

    #post-detail-page .btn-delete {
        border: 1px solid #F0D1D1;
        background: #FFF8F8;
        color: #B54A4A;
        cursor: pointer;
    }

    #post-detail-page .btn-delete:hover {
        background: #FFF0F0;
        border-color: #E9BDBD;
    }

    /* =========================
       Responsive
       ========================= */

    @media (max-width: 1100px) {
        #post-detail-page .post-layout {
            grid-template-columns: 1fr;
        }

        #post-detail-page .sidebar {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        #post-detail-page .sidebar-card + .sidebar-card {
            margin-top: 0;
        }
    }

    @media (max-width: 768px) {
        #post-detail-page {
            padding: 18px 14px;
        }

        #post-detail-page .page-header {
            display: block;
        }

        #post-detail-page .breadcrumb-wrap {
            margin-top: 10px;
        }

        #post-detail-page .post-cover {
            height: 300px;
        }

        #post-detail-page .post-cover-content {
            left: 20px;
            right: 20px;
            bottom: 20px;
        }

        #post-detail-page .post-cover-title {
            font-size: 27px;
        }

        #post-detail-page .post-meta {
            padding: 17px 20px;
            gap: 14px;
        }

        #post-detail-page .meta-divider {
            display: none;
        }

        #post-detail-page .article-body {
            padding: 25px 20px 30px;
            font-size: 15px;
        }

        #post-detail-page .sidebar {
            grid-template-columns: 1fr;
        }

        #post-detail-page .comment-message {
            margin-left: 0;
        }

        #post-detail-page .comment-top {
            align-items: center;
        }
    }

    @media (max-width: 480px) {
        #post-detail-page .post-cover {
            height: 250px;
        }

        #post-detail-page .post-cover-title {
            font-size: 24px;
        }

        #post-detail-page .author-block {
            min-width: 100%;
        }

        #post-detail-page .comment-top {
            gap: 8px;
        }

        #post-detail-page .comment-delete {
            font-size: 11px;
        }
    }
</style>


<div id="post-detail-page">

    <!-- =====================================================
         Page Header
         ===================================================== -->
    <div class="page-header">

        <div>
            <p class="eyebrow">
                Content Management
            </p>

            <h1 class="page-title">
                Post Detail
            </h1>
        </div>

        <div class="breadcrumb-wrap">
            <a href="{{ route('dashboard') }}">
                Home
            </a>

            <span class="mx-1">/</span>

            <a href="{{ route('posts.index') }}">
                Posts
            </a>

            <span class="mx-1">/</span>

            <span>
                Detail
            </span>
        </div>

    </div>


    <!-- =====================================================
         Main Layout
         ===================================================== -->
    <div class="post-layout">

        <!-- =================================================
             LEFT COLUMN
             ================================================= -->
        <div>

            <!-- Post -->
            <article class="post-card">

                @if($post->image)

                    <div class="post-cover">

                        <img
                            src="{{ asset('image/' . $post->image) }}"
                            alt="{{ $post->title }}"
                            onerror="this.style.display='none'; this.parentElement.classList.add('no-image');"
                        >

                        <div class="post-cover-overlay"></div>

                        <div class="post-cover-content">

                            <div class="post-badges">

                                @if($post->status)
                                    <span class="badge-modern">
                                        <i class="fas fa-circle" style="font-size: 6px;"></i>
                                        {{ $post->status }}
                                    </span>
                                @endif

                                @if($post->featured)
                                    <span class="badge-modern badge-featured">
                                        <i class="fas fa-star"></i>
                                        Featured
                                    </span>
                                @endif

                            </div>

                            <h2 class="post-cover-title">
                                {{ $post->title }}
                            </h2>

                        </div>

                    </div>

                @else

                    <div class="post-cover no-image">

                        <div class="post-cover-content">

                            <div class="post-badges">

                                @if($post->status)
                                    <span class="badge-modern">
                                        <i class="fas fa-circle" style="font-size: 6px;"></i>
                                        {{ $post->status }}
                                    </span>
                                @endif

                                @if($post->featured)
                                    <span class="badge-modern badge-featured">
                                        <i class="fas fa-star"></i>
                                        Featured
                                    </span>
                                @endif

                            </div>

                            <h2 class="post-cover-title">
                                {{ $post->title }}
                            </h2>

                        </div>

                    </div>

                @endif


                <!-- Post Meta -->
                <div class="post-meta">

                    <div class="author-block">

                        <div class="author-avatar">
                            @if($post->author)
                                {{ strtoupper(substr($post->author->name, 0, 1)) }}
                            @else
                                <i class="fas fa-user"></i>
                            @endif
                        </div>

                        <div>
                            <p class="author-name">
                                {{ $post->author->name ?? 'Unknown Author' }}
                            </p>

                            <p class="meta-text">
                                Published {{ $post->created_at->format('M d, Y') }}
                            </p>
                        </div>

                    </div>


                    <div class="meta-divider"></div>


                    @if($post->category)

                        <div class="meta-item">
                            <i class="fas fa-folder"></i>

                            <span>
                                {{ $post->category->name }}
                            </span>
                        </div>

                    @endif


                    <div class="meta-item">
                        <i class="far fa-clock"></i>

                        <span>
                            {{ $post->created_at->format('M d, Y • H:i') }}
                        </span>
                    </div>

                </div>


                <!-- Article Body -->
                <div class="article-body">

                    {!! $post->body !!}

                </div>

            </article>


            <!-- =================================================
                 Comments
                 ================================================= -->
            <section class="comments-section">

                <div class="comments-header">

                    <h3 class="comments-title">

                        <i class="far fa-comments"></i>

                        Comments

                        <span class="comments-count">
                            {{ $comments_data->count() }}
                        </span>

                    </h3>

                </div>


                @if($comments_data->count() > 0)

                    @foreach($comments_data as $comment)

                        <div class="comment-item">

                            <div class="comment-top">

                                <div class="comment-user">

                                    <div class="comment-avatar">
                                        {{ strtoupper(substr($comment->name, 0, 1)) }}
                                    </div>

                                    <div>

                                        <h4 class="comment-name">
                                            {{ $comment->name }}
                                        </h4>

                                        <div class="comment-date">
                                            {{ $comment->created_at->format('M d, Y • H:i') }}
                                        </div>

                                    </div>

                                </div>


                                <!-- Delete Comment -->
                                <form
                                    action="{{ route('comments.destroy', $comment->id) }}"
                                    method="POST"
                                    onsubmit="return confirm('Are you sure you want to delete this comment?')"
                                >
                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="comment-delete"
                                        title="Delete comment"
                                    >
                                        <i class="fas fa-trash-alt"></i>
                                        Delete
                                    </button>

                                </form>

                            </div>


                            <div class="comment-message">

                                <i
                                    class="fas fa-quote-left"
                                    style="font-size: 11px; margin-right: 5px; opacity: .5;"
                                ></i>

                                {{ $comment->message }}

                                <i
                                    class="fas fa-quote-right"
                                    style="font-size: 11px; margin-left: 5px; opacity: .5;"
                                ></i>

                            </div>

                        </div>

                    @endforeach

                @else

                    <div class="empty-comments">

                        <div class="empty-comments-icon">
                            <i class="far fa-comment"></i>
                        </div>

                        <h4>
                            No Comments Yet
                        </h4>

                        <p>
                            There are currently no comments on this post.
                        </p>

                    </div>

                @endif

            </section>

        </div>


        <!-- =================================================
             RIGHT SIDEBAR
             ================================================= -->
        <aside class="sidebar">

            <!-- Post Information -->
            <div class="sidebar-card">

                <div class="sidebar-header">

                    <h3>
                        Post Information
                    </h3>

                </div>

                <div class="sidebar-body">

                    <div class="info-row">

                        <span class="info-label">
                            Status
                        </span>

                        <span class="info-value">
                            <span class="status-pill">
                                {{ $post->status ?? 'N/A' }}
                            </span>
                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            Category
                        </span>

                        <span class="info-value">
                            {{ $post->category->name ?? 'Uncategorized' }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            Author
                        </span>

                        <span class="info-value">
                            {{ $post->author->name ?? 'Unknown' }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            Featured
                        </span>

                        <span class="info-value">

                            @if($post->featured)

                                <span class="status-pill featured-pill">
                                    <i class="fas fa-star mr-1"></i>
                                    Yes
                                </span>

                            @else

                                <span class="status-pill">
                                    No
                                </span>

                            @endif

                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            Created
                        </span>

                        <span class="info-value">
                            {{ $post->created_at->format('M d, Y') }}
                        </span>

                    </div>


                    <div class="info-row">

                        <span class="info-label">
                            Last Updated
                        </span>

                        <span class="info-value">
                            {{ $post->updated_at->format('M d, Y') }}
                        </span>

                    </div>

                </div>

            </div>


            <!-- Actions -->
            <div class="sidebar-card">

                <div class="action-card">

                    <h3>
                        Post Actions
                    </h3>

                    <div class="action-buttons">

                        <!-- Edit -->
                        <a
                            href="{{ route('posts.edit', $post->id) }}"
                            class="action-btn btn-edit"
                        >
                            <i class="fas fa-edit"></i>
                            Edit Post
                        </a>


                        <!-- Back -->
                        <a
                            href="{{ route('posts.index') }}"
                            class="action-btn btn-back"
                        >
                            <i class="fas fa-arrow-left"></i>
                            Back to Posts
                        </a>


                        <!-- Delete -->
                        <form
                            action="{{ route('posts.destroy', $post->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to permanently delete this post?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="action-btn btn-delete"
                            >
                                <i class="fas fa-trash-alt"></i>
                                Delete Post
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </aside>

    </div>

</div>

@endsection