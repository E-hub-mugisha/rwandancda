@extends('layouts.app')
@section('title', 'Categories')

@section('content')

<style>
    #categories-page {
        --blue: #5D89C8;
        --blue-dark: #3F679F;
        --blue-deep: #294B78;
        --blue-soft: #EEF4FC;
        --gold: #C99A3E;
        --background: #F6F8FB;
        --ink: #17263A;
        --muted: #718096;
        --border: #E4EAF1;
        --white: #FFFFFF;

        min-height: calc(100vh - 70px);
        padding: 28px;
        background: var(--background);
        color: var(--ink);
    }

    /* =========================================================
       HEADER
       ========================================================= */

    #categories-page .page-header {
        display: flex;
        align-items: flex-end;
        justify-content: space-between;
        margin-bottom: 28px;
    }

    #categories-page .eyebrow {
        margin: 0 0 7px;
        color: var(--blue);
        font-size: 11px;
        font-weight: 800;
        letter-spacing: .12em;
        text-transform: uppercase;
    }

    #categories-page .page-title {
        margin: 0;
        font-size: 34px;
        line-height: 1.1;
        font-weight: 800;
        letter-spacing: -.04em;
        color: var(--ink);
    }

    #categories-page .page-description {
        margin: 8px 0 0;
        color: var(--muted);
        font-size: 13px;
    }

    #categories-page .breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
        font-size: 13px;
    }

    #categories-page .breadcrumb a {
        color: var(--blue);
        text-decoration: none;
        font-weight: 600;
    }

    /* =========================================================
       TOOLBAR
       ========================================================= */

    #categories-page .category-toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    #categories-page .category-count {
        color: var(--muted);
        font-size: 13px;
    }

    #categories-page .category-count strong {
        color: var(--ink);
        font-weight: 800;
    }

    #categories-page .add-category-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        height: 43px;
        padding: 0 18px;
        border: 0;
        border-radius: 9px;
        background: var(--blue);
        color: #fff;
        font-size: 13px;
        font-weight: 700;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(93, 137, 200, .20);
        transition: all .2s ease;
    }

    #categories-page .add-category-btn:hover {
        background: var(--blue-dark);
        transform: translateY(-1px);
    }

    /* =========================================================
       CATEGORY GRID
       ========================================================= */

    #categories-page .category-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(0, 1fr));
        gap: 20px;
    }

    /* =========================================================
       CATEGORY CARD
       ========================================================= */

    #categories-page .category-card {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 7px 25px rgba(23, 38, 58, .055);
        transition: all .2s ease;
    }

    #categories-page .category-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 14px 35px rgba(23, 38, 58, .09);
    }

    #categories-page .category-accent {
        height: 4px;
        background: linear-gradient(
            90deg,
            var(--blue),
            var(--blue-deep)
        );
    }

    #categories-page .category-card-body {
        padding: 22px;
    }

    #categories-page .category-card-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    #categories-page .category-icon {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 13px;
        background: var(--blue-soft);
        color: var(--blue);
        font-size: 19px;
    }

    #categories-page .category-number {
        padding: 6px 9px;
        border-radius: 7px;
        background: #F5F7FA;
        color: var(--muted);
        font-size: 11px;
        font-weight: 800;
    }

    #categories-page .category-name {
        margin: 0 0 8px;
        color: var(--ink);
        font-size: 18px;
        font-weight: 800;
    }

    #categories-page .slug-label {
        margin: 0 0 6px;
        color: var(--muted);
        font-size: 10px;
        font-weight: 800;
        letter-spacing: .08em;
        text-transform: uppercase;
    }

    #categories-page .slug {
        display: inline-block;
        max-width: 100%;
        padding: 6px 10px;
        border-radius: 7px;
        background: #F5F7FA;
        color: #59677A;
        font-family: monospace;
        font-size: 11px;
        word-break: break-all;
    }

    #categories-page .category-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
        margin-top: 22px;
        padding-top: 16px;
        border-top: 1px solid #EEF2F6;
    }

    #categories-page .active-status {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #64748B;
        font-size: 11px;
        font-weight: 700;
    }

    #categories-page .status-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: #57A773;
    }

    #categories-page .delete-btn {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        min-height: 34px;
        padding: 0 11px;
        border: 1px solid #F0D1D1;
        border-radius: 8px;
        background: #FFF8F8;
        color: #B54A4A;
        font-size: 11px;
        font-weight: 700;
        cursor: pointer;
        transition: all .2s ease;
    }

    #categories-page .delete-btn:hover {
        background: #FFF0F0;
        color: #963A3A;
    }

    /* =========================================================
       EMPTY STATE
       ========================================================= */

    #categories-page .empty-state {
        grid-column: 1 / -1;
        padding: 70px 20px;
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 16px;
        text-align: center;
    }

    #categories-page .empty-icon {
        width: 64px;
        height: 64px;
        margin: 0 auto 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: var(--blue-soft);
        color: var(--blue);
        font-size: 23px;
    }

    #categories-page .empty-state h3 {
        margin: 0 0 7px;
        font-size: 17px;
        font-weight: 800;
    }

    #categories-page .empty-state p {
        margin: 0;
        color: var(--muted);
        font-size: 13px;
    }

    /* =========================================================
       VALIDATION
       ========================================================= */

    #categories-page .validation-alert {
        margin-bottom: 20px;
        padding: 15px 18px;
        border: 1px solid #F0CACA;
        border-radius: 10px;
        background: #FFF6F6;
        color: #9E3636;
        font-size: 13px;
    }

    #categories-page .validation-alert strong {
        display: block;
        margin-bottom: 6px;
    }

    /* =========================================================
       MODAL OVERLAY
       ========================================================= */

    #addCategoryModal {
        z-index: 1060 !important;
    }

    #addCategoryModal .modal-dialog {
        width: auto;
        max-width: 500px;
        margin: 1.75rem auto;
    }

    #addCategoryModal .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background: #fff;
        background-clip: padding-box;
        border: 0 !important;
        border-radius: 18px !important;
        outline: 0;
        overflow: hidden;
        box-shadow: 0 25px 70px rgba(23, 38, 58, .22) !important;
    }

    /* =========================================================
       MODAL HEADER
       ========================================================= */

    #addCategoryModal .modal-header {
        display: flex !important;
        align-items: flex-start !important;
        justify-content: space-between !important;
        padding: 23px 24px !important;
        border-bottom: 1px solid var(--border) !important;
        background: #fff !important;
    }

    #addCategoryModal .modal-title-wrapper {
        flex: 1;
    }

    #addCategoryModal .modal-title {
        display: block;
        margin: 0 !important;
        padding: 0 !important;
        color: var(--ink) !important;
        font-size: 19px !important;
        line-height: 1.3 !important;
        font-weight: 800 !important;
    }

    #addCategoryModal .modal-subtitle {
        margin: 5px 0 0 !important;
        color: var(--muted) !important;
        font-size: 12px !important;
        line-height: 1.5;
    }

    #addCategoryModal .modal-close {
        width: 34px;
        height: 34px;
        margin: -3px -4px 0 15px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 0;
        border-radius: 8px;
        background: #F5F7FA;
        color: #718096;
        font-size: 18px;
        line-height: 1;
        cursor: pointer;
        opacity: 1;
    }

    #addCategoryModal .modal-close:hover {
        background: #EEF2F6;
        color: var(--ink);
    }

    /* =========================================================
       MODAL BODY
       ========================================================= */

    #addCategoryModal .modal-body {
        padding: 26px 24px !important;
        background: #fff !important;
    }

    #addCategoryModal .form-group {
        margin-bottom: 20px !important;
    }

    #addCategoryModal .form-group:last-child {
        margin-bottom: 0 !important;
    }

    #addCategoryModal .form-label {
        display: block !important;
        margin: 0 0 8px !important;
        padding: 0 !important;
        color: var(--ink) !important;
        font-size: 12px !important;
        font-weight: 750 !important;
    }

    #addCategoryModal .form-control-category {
        display: block !important;
        width: 100% !important;
        height: 46px !important;
        min-height: 46px !important;
        padding: 10px 13px !important;
        margin: 0 !important;
        border: 1px solid #DCE3EB !important;
        border-radius: 9px !important;
        background: #FCFDFE !important;
        color: var(--ink) !important;
        font-family: inherit !important;
        font-size: 13px !important;
        line-height: 24px !important;
        outline: none !important;
        box-shadow: none !important;
        transition: all .2s ease;
    }

    #addCategoryModal .form-control-category::placeholder {
        color: #A0AEC0 !important;
    }

    #addCategoryModal .form-control-category:focus {
        border-color: var(--blue) !important;
        background: #fff !important;
        box-shadow: 0 0 0 3px rgba(93, 137, 200, .12) !important;
    }

    /* =========================================================
       MODAL FOOTER
       ========================================================= */

    #addCategoryModal .modal-footer {
        display: flex !important;
        align-items: center !important;
        justify-content: flex-end !important;
        gap: 10px !important;
        padding: 16px 24px !important;
        border-top: 1px solid var(--border) !important;
        background: #FAFBFD !important;
    }

    #addCategoryModal .btn-modal-cancel {
        height: 41px;
        padding: 0 17px;
        border: 1px solid #DCE3EB;
        border-radius: 8px;
        background: #fff;
        color: #64748B;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
    }

    #addCategoryModal .btn-modal-cancel:hover {
        background: #F7F9FB;
    }

    #addCategoryModal .btn-modal-save {
        height: 41px;
        padding: 0 18px;
        border: 0;
        border-radius: 8px;
        background: var(--blue);
        color: #fff;
        font-size: 12px;
        font-weight: 700;
        cursor: pointer;
        transition: all .2s ease;
    }

    #addCategoryModal .btn-modal-save:hover {
        background: var(--blue-dark);
    }

    /* =========================================================
       MODAL BACKDROP
       ========================================================= */

    .modal-backdrop {
        z-index: 1050 !important;
    }

    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 1100px) {

        #categories-page .category-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 768px) {

        #categories-page {
            padding: 20px 14px;
        }

        #categories-page .page-header {
            display: block;
        }

        #categories-page .breadcrumb {
            margin-top: 10px;
        }

        #categories-page .category-toolbar {
            align-items: stretch;
            flex-direction: column;
        }

        #categories-page .add-category-btn {
            width: 100%;
        }

        #categories-page .category-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }

        #addCategoryModal .modal-dialog {
            max-width: none;
            margin: .75rem;
        }
    }

    @media (max-width: 480px) {

        #categories-page .page-title {
            font-size: 28px;
        }

        #addCategoryModal .modal-header {
            padding: 20px !important;
        }

        #addCategoryModal .modal-body {
            padding: 22px 20px !important;
        }

        #addCategoryModal .modal-footer {
            padding: 14px 20px !important;
        }

        #addCategoryModal .btn-modal-cancel,
        #addCategoryModal .btn-modal-save {
            flex: 1;
        }
    }
</style>


<div id="categories-page">

    <!-- =====================================================
         PAGE HEADER
         ===================================================== -->

    <div class="page-header">

        <div>

            <p class="eyebrow">
                Content Management
            </p>

            <h1 class="page-title">
                Categories
            </h1>

            <p class="page-description">
                Organize and manage categories used across your posts.
            </p>

        </div>

        <ol class="breadcrumb">

            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">
                    Home
                </a>
            </li>

            <li class="breadcrumb-item active">
                Categories
            </li>

        </ol>

    </div>


    <!-- =====================================================
         VALIDATION
         ===================================================== -->

    @if ($errors->any())

        <div class="validation-alert">

            <strong>
                Please check the following:
            </strong>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif


    <!-- =====================================================
         TOOLBAR
         ===================================================== -->

    <div class="category-toolbar">

        <div class="category-count">

            <strong>
                {{ $categories->count() }}
            </strong>

            {{ $categories->count() == 1 ? 'category' : 'categories' }}

        </div>


        <button
            type="button"
            class="add-category-btn"
            data-toggle="modal"
            data-target="#addCategoryModal"
        >
            <i class="fas fa-plus"></i>
            Add Category
        </button>

    </div>


    <!-- =====================================================
         CATEGORY CARDS
         ===================================================== -->

    <div class="category-grid">

        @forelse($categories as $category)

            <div class="category-card">

                <div class="category-accent"></div>

                <div class="category-card-body">

                    <div class="category-card-top">

                        <div class="category-icon">
                            <i class="fas fa-folder"></i>
                        </div>

                        <span class="category-number">
                            #{{ $loop->iteration }}
                        </span>

                    </div>


                    <h2 class="category-name">
                        {{ $category->name }}
                    </h2>


                    <p class="slug-label">
                        Slug
                    </p>

                    <span class="slug">
                        {{ $category->slug }}
                    </span>

                    <div class="description-label">
                        Description
                    </div>

                    <p class="description">
                        {{ $category->description }}
                    </p>


                    <div class="category-footer">

                        <div class="active-status">

                            <span class="status-dot"></span>

                            Active Category

                        </div>


                        <form
                            action="{{ route('categories.destroy', $category->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete the category &quot;{{ $category->name }}&quot;?')"
                        >

                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="delete-btn"
                            >
                                <i class="fas fa-trash-alt"></i>
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            </div>

        @empty

            <div class="empty-state">

                <div class="empty-icon">
                    <i class="fas fa-folder-open"></i>
                </div>

                <h3>
                    No Categories Yet
                </h3>

                <p>
                    Create your first category to start organizing your posts.
                </p>

            </div>

        @endforelse

    </div>

</div>


<!-- =========================================================
     ADD CATEGORY MODAL
     ========================================================= -->

<div
    class="modal fade"
    id="addCategoryModal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="addCategoryModalLabel"
    aria-hidden="true"
>

    <div
        class="modal-dialog modal-dialog-centered"
        role="document"
    >

        <div class="modal-content">

            <form
                action="{{ route('categories.store') }}"
                method="POST"
            >

                @csrf

                <!-- MODAL HEADER -->

                <div class="modal-header">

                    <div class="modal-title-wrapper">

                        <h4
                            class="modal-title"
                            id="addCategoryModalLabel"
                        >
                            Add Category
                        </h4>

                        <p class="modal-subtitle">
                            Create a new category for your posts.
                        </p>

                    </div>

                    <button
                        type="button"
                        class="modal-close"
                        data-dismiss="modal"
                        aria-label="Close"
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>


                <!-- MODAL BODY -->

                <div class="modal-body">

                    <div class="form-group">

                        <label
                            for="category_name"
                            class="form-label"
                        >
                            Category Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            id="category_name"
                            class="form-control-category"
                            value="{{ old('name') }}"
                            placeholder="Enter category name"
                            required
                        >

                    </div>

                    <div class="form-group">

                        <label
                            for="category_description"
                            class="form-label"
                        >
                            Description
                        </label>

                        <textarea
                            name="description"
                            id="category_description"
                            class="form-control-category"
                            placeholder="Enter category description"
                            required
                        >{{ old('description') }}</textarea>

                    </div>

                </div>


                <!-- MODAL FOOTER -->

                <div class="modal-footer">

                    <button
                        type="button"
                        class="btn-modal-cancel"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        class="btn-modal-save"
                    >
                        <i class="fas fa-save mr-1"></i>
                        Save Category
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection