@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

<style>
    /* =========================================================
       Rwanda NCD Alliance - Edit Post
       ========================================================= */

    .edit-post-page {
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
        --red: #DC2626;
        --red-soft: #FEF2F2;

        min-height: 100%;
        color: var(--ink);
    }


    /* =========================================================
       HEADER
       ========================================================= */

    .edit-post-header {
        padding: 30px 30px 20px;
    }

    .edit-post-header-inner {
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

    .edit-post-title {
        margin: 0;
        color: var(--blue-deep);
        font-size: 28px;
        font-weight: 800;
        line-height: 1.2;
    }

    .edit-post-subtitle {
        margin: 7px 0 0;
        color: var(--muted);
        font-size: 13px;
        line-height: 1.6;
    }

    .edit-post-breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
        font-size: 12px;
    }

    .edit-post-breadcrumb a {
        color: var(--blue);
        font-weight: 700;
        text-decoration: none;
    }

    .edit-post-breadcrumb a:hover {
        color: var(--blue-dark);
    }

    .edit-post-breadcrumb .active {
        color: var(--muted);
    }


    /* =========================================================
       CONTENT
       ========================================================= */

    .edit-post-content {
        padding: 0 30px 40px;
    }


    /* =========================================================
       ERROR
       ========================================================= */

    .post-error-card {
        margin-bottom: 20px;
        padding: 16px 18px;

        background: var(--red-soft);

        border: 1px solid #FECACA;
        border-radius: 14px;

        color: #991B1B;
    }

    .post-error-header {
        display: flex;
        align-items: center;
        gap: 9px;

        margin-bottom: 8px;

        font-size: 13px;
        font-weight: 800;
    }

    .post-error-list {
        margin: 0;
        padding-left: 25px;

        font-size: 12px;
        line-height: 1.7;
    }


    /* =========================================================
       MAIN CARD
       ========================================================= */

    .edit-post-card {
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

    .edit-post-card-header {
        display: flex;
        align-items: center;
        gap: 12px;

        padding: 20px 22px;

        border-bottom: 1px solid var(--border);
    }

    .edit-post-card-icon {
        width: 42px;
        height: 42px;

        display: flex;
        align-items: center;
        justify-content: center;

        border-radius: 12px;

        background: var(--blue-soft);
        color: var(--blue);

        font-size: 17px;
    }

    .edit-post-card-header h3 {
        margin: 0;

        color: var(--blue-deep);

        font-size: 16px;
        font-weight: 800;
    }

    .edit-post-card-header p {
        margin: 3px 0 0;

        color: var(--muted);

        font-size: 11px;
    }


    /* =========================================================
       FORM BODY
       ========================================================= */

    .edit-post-card-body {
        padding: 25px 22px 28px;
    }


    /* =========================================================
       FORM
       ========================================================= */

    .post-form-group {
        margin-bottom: 20px;
    }

    .post-form-label {
        display: flex;
        align-items: center;
        gap: 4px;

        margin-bottom: 7px;

        color: var(--blue-deep);

        font-size: 11px;
        font-weight: 800;
    }

    .required {
        color: var(--red);
    }

    .post-help-text {
        margin-top: 6px;

        color: #9AA7B8;

        font-size: 10px;
    }


    /* =========================================================
       INPUTS
       ========================================================= */

    .post-input,
    .post-select {
        width: 100%;
        min-height: 44px;

        padding: 10px 13px;

        border: 1px solid var(--border);
        border-radius: 10px;

        background: #fff;

        color: var(--ink);

        font-size: 12px;

        outline: none;

        transition: .2s ease;
    }

    .post-input::placeholder {
        color: #A0AEC0;
    }

    .post-input:focus,
    .post-select:focus {
        border-color: var(--blue);

        box-shadow:
            0 0 0 3px rgba(93, 137, 200, .11);
    }

    .post-input.is-invalid,
    .post-select.is-invalid {
        border-color: #EF4444;
    }

    .post-title-input {
        min-height: 48px;

        font-size: 14px;
        font-weight: 600;
    }


    /* =========================================================
       SLUG
       ========================================================= */

    .slug-input {
        background: #F8FAFD;

        color: #718096;

        font-family: monospace;

        font-size: 11px;
    }


    /* =========================================================
       SELECT
       ========================================================= */

    .post-select-wrapper {
        position: relative;
    }

    .post-select-wrapper i {
        position: absolute;

        left: 13px;
        top: 50%;

        transform: translateY(-50%);

        color: var(--blue);

        font-size: 12px;

        pointer-events: none;
    }

    .post-select-wrapper .post-select {
        padding-left: 36px;
    }


    /* =========================================================
       IMAGE UPLOAD
       ========================================================= */

    .post-image-upload {
        padding: 18px;

        border: 1px dashed #C9D9EE;
        border-radius: 13px;

        background: #FBFCFE;

        transition: .2s ease;
    }

    .post-image-upload:hover {
        border-color: var(--blue);

        background: var(--blue-soft);
    }

    .post-file-wrapper {
        display: flex;
        align-items: center;

        gap: 14px;
    }

    .post-file-icon {
        width: 45px;
        height: 45px;

        display: flex;
        align-items: center;
        justify-content: center;

        flex-shrink: 0;

        border-radius: 12px;

        background: var(--blue-soft);

        color: var(--blue);

        font-size: 17px;
    }

    .post-file-info {
        flex: 1;
        min-width: 0;
    }

    .post-file-title {
        color: var(--blue-deep);

        font-size: 12px;
        font-weight: 700;

        margin-bottom: 3px;
    }

    .post-file-description {
        color: var(--muted);

        font-size: 10px;
    }

    .post-file-input {
        width: 100%;

        margin-top: 13px;

        font-size: 11px;

        color: var(--muted);
    }


    /* =========================================================
       CURRENT IMAGE
       ========================================================= */

    .current-image-wrapper {
        margin-top: 16px;

        padding-top: 16px;

        border-top: 1px solid var(--border);
    }

    .current-image-label {
        margin-bottom: 9px;

        color: var(--muted);

        font-size: 10px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .current-image-container {
        display: flex;
        align-items: flex-start;

        gap: 14px;
    }

    .current-post-image {
        width: 180px;
        height: 115px;

        object-fit: cover;

        border-radius: 11px;

        border: 1px solid var(--border);

        background: var(--blue-soft);
    }

    .current-image-info {
        padding-top: 4px;
    }

    .current-image-info strong {
        display: block;

        margin-bottom: 4px;

        color: var(--blue-deep);

        font-size: 11px;
    }

    .current-image-info span {
        color: var(--muted);

        font-size: 10px;
        line-height: 1.5;
    }


    /* =========================================================
       NEW IMAGE PREVIEW
       ========================================================= */

    .new-image-preview {
        display: none;

        margin-top: 15px;

        padding-top: 15px;

        border-top: 1px solid var(--border);
    }

    .new-image-preview-label {
        margin-bottom: 8px;

        color: var(--muted);

        font-size: 10px;
        font-weight: 700;

        text-transform: uppercase;
        letter-spacing: .5px;
    }

    .new-image-preview img {
        width: 180px;
        height: 115px;

        object-fit: cover;

        border-radius: 11px;

        border: 1px solid var(--border);
    }


    /* =========================================================
       RICH TEXT EDITOR
       ========================================================= */

    #summernote {
        width: 100%;
        min-height: 350px;
    }

    .note-editor.note-frame {
        overflow: hidden;

        border: 1px solid var(--border) !important;

        border-radius: 12px !important;

        box-shadow: none !important;

        background: #fff;
    }

    .note-editor.note-frame:focus-within {
        border-color: var(--blue) !important;

        box-shadow:
            0 0 0 3px rgba(93, 137, 200, .10) !important;
    }

    .note-toolbar {
        padding: 8px 10px !important;

        background: #F8FAFD !important;

        border-bottom: 1px solid var(--border) !important;
    }

    .note-btn {
        border: 1px solid transparent !important;

        border-radius: 7px !important;

        color: var(--blue-deep) !important;

        background: transparent !important;

        font-size: 12px !important;
    }

    .note-btn:hover,
    .note-btn:focus {
        background: var(--blue-soft) !important;

        border-color: #D5E2F2 !important;

        color: var(--blue-dark) !important;
    }

    .note-btn.active {
        background: var(--blue-soft) !important;

        color: var(--blue-dark) !important;
    }

    .note-editable {
        min-height: 330px !important;

        padding: 18px !important;

        color: var(--ink) !important;

        font-family:
            Inter,
            -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            sans-serif !important;

        font-size: 14px !important;

        line-height: 1.7 !important;

        background: #fff !important;
    }

    .note-editable:focus {
        outline: none !important;
    }

    .note-placeholder {
        color: #A0AEC0 !important;
    }

    .note-statusbar {
        background: #FAFBFD !important;

        border-top: 1px solid var(--border) !important;
    }

    .editor-invalid .note-editor {
        border-color: #EF4444 !important;

        box-shadow:
            0 0 0 3px rgba(220, 38, 38, .08) !important;
    }


    /* =========================================================
       FOOTER
       ========================================================= */

    .edit-post-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;

        gap: 15px;

        padding: 18px 22px;

        background: #FAFBFD;

        border-top: 1px solid var(--border);
    }

    .form-footer-info {
        color: var(--muted);

        font-size: 10px;
    }

    .form-actions {
        display: flex;

        gap: 8px;
    }

    .btn-cancel-post,
    .btn-update-post {
        display: inline-flex;

        align-items: center;
        justify-content: center;

        gap: 7px;

        padding: 10px 17px;

        border-radius: 10px;

        font-size: 12px;
        font-weight: 700;

        text-decoration: none;

        transition: .2s ease;
    }

    .btn-cancel-post {
        border: 1px solid var(--border);

        background: #fff;

        color: var(--muted);
    }

    .btn-cancel-post:hover {
        background: #F8FAFD;

        color: var(--blue-deep);

        text-decoration: none;
    }

    .btn-update-post {
        border: 0;

        background: var(--blue);

        color: #fff;

        cursor: pointer;

        box-shadow:
            0 5px 15px rgba(93, 137, 200, .22);
    }

    .btn-update-post:hover {
        background: var(--blue-dark);

        color: #fff;

        transform: translateY(-1px);
    }

    .btn-update-post:disabled {
        opacity: .7;

        cursor: not-allowed;

        transform: none;
    }


    /* =========================================================
       RESPONSIVE
       ========================================================= */

    @media (max-width: 767px) {

        .edit-post-header {
            padding: 22px 16px 15px;
        }

        .edit-post-header-inner {
            display: block;
        }

        .edit-post-title {
            font-size: 23px;
        }

        .edit-post-subtitle {
            font-size: 12px;
        }

        .edit-post-breadcrumb {
            margin-top: 12px;
        }

        .edit-post-content {
            padding: 0 16px 25px;
        }

        .edit-post-card-body {
            padding: 20px 16px;
        }

        .edit-post-footer {
            display: block;

            padding: 16px;
        }

        .form-footer-info {
            margin-bottom: 12px;
        }

        .form-actions {
            width: 100%;
        }

        .btn-cancel-post,
        .btn-update-post {
            flex: 1;
        }

        .current-image-container {
            display: block;
        }

        .current-post-image,
        .new-image-preview img {
            width: 100%;
            max-width: 280px;
            height: auto;
            aspect-ratio: 16 / 10;
        }

        .note-editable {
            min-height: 260px !important;
        }

    }

</style>


<div class="edit-post-page">


    {{-- =========================================================
         PAGE HEADER
         ========================================================= --}}

    <section class="edit-post-header">

        <div class="edit-post-header-inner">


            <div>

                <div class="page-eyebrow">
                    Content Management
                </div>

                <h1 class="edit-post-title">
                    Edit Post
                </h1>

                <p class="edit-post-subtitle">
                    Update your post content, publication settings and featured image.
                </p>

            </div>


            <ol class="breadcrumb edit-post-breadcrumb">

                <li class="breadcrumb-item">

                    <a href="{{ route('dashboard') }}">
                        Home
                    </a>

                </li>

                <li class="breadcrumb-item">

                    <a href="{{ route('posts') }}">
                        Posts
                    </a>

                </li>

                <li class="breadcrumb-item active">
                    Edit
                </li>

            </ol>


        </div>

    </section>



    {{-- =========================================================
         CONTENT
         ========================================================= --}}

    <section class="edit-post-content">


        {{-- =====================================================
             VALIDATION ERRORS
             ===================================================== --}}

        @if ($errors->any())

            <div class="post-error-card">

                <div class="post-error-header">

                    <i class="fas fa-exclamation-circle"></i>

                    <span>
                        Please correct the following errors
                    </span>

                </div>


                <ul class="post-error-list">

                    @foreach ($errors->all() as $error)

                        <li>
                            {{ $error }}
                        </li>

                    @endforeach

                </ul>

            </div>

        @endif



        {{-- =====================================================
             FORM
             ===================================================== --}}

        <form
            action="{{ route('posts.update', $post->id) }}"
            method="POST"
            enctype="multipart/form-data"
            id="editPostForm">

            @csrf

            @method('PUT')



            <div class="edit-post-card">


                {{-- =================================================
                     CARD HEADER
                     ================================================== --}}

                <div class="edit-post-card-header">

                    <div class="edit-post-card-icon">

                        <i class="fas fa-pen"></i>

                    </div>


                    <div>

                        <h3>
                            Post Information
                        </h3>

                        <p>
                            Update the details and content of this publication.
                        </p>

                    </div>

                </div>



                {{-- =================================================
                     CARD BODY
                     ================================================== --}}

                <div class="edit-post-card-body">


                    {{-- =================================================
                         TITLE
                         ================================================== --}}

                    <div class="post-form-group">

                        <label
                            for="title"
                            class="post-form-label">

                            Post Title

                            <span class="required">
                                *
                            </span>

                        </label>


                        <input
                            type="text"

                            name="title"

                            id="title"

                            value="{{ old('title', $post->title) }}"

                            class="post-input post-title-input @error('title') is-invalid @enderror"

                            placeholder="Enter the post title"

                            autocomplete="off"

                            required>


                        <div class="post-help-text">

                            Use a clear and descriptive title for your post.

                        </div>

                    </div>



                    {{-- =================================================
                         SLUG
                         ================================================== --}}

                    <div class="post-form-group">

                        <label
                            for="slug"
                            class="post-form-label">

                            Slug

                        </label>


                        <input
                            type="text"

                            name="slug"

                            id="slug"

                            value="{{ old('slug', $post->slug) }}"

                            class="post-input slug-input @error('slug') is-invalid @enderror"

                            placeholder="post-url-slug">


                        <div class="post-help-text">

                            The URL-friendly version of the post title.

                        </div>

                    </div>



                    {{-- =================================================
                         CATEGORY / STATUS / FEATURED
                         ================================================== --}}

                    <div class="row">


                        {{-- CATEGORY --}}
                        <div class="col-lg-4">

                            <div class="post-form-group">

                                <label
                                    for="category_id"
                                    class="post-form-label">

                                    Category

                                    <span class="required">
                                        *
                                    </span>

                                </label>


                                <div class="post-select-wrapper">

                                    <i class="fas fa-folder"></i>


                                    <select
                                        name="category_id"
                                        id="category_id"

                                        class="post-select @error('category_id') is-invalid @enderror"

                                        required>

                                        <option value="">
                                            Select category
                                        </option>


                                        @foreach($categories as $category)

                                            <option
                                                value="{{ $category->id }}"

                                                {{ old(
                                                    'category_id',
                                                    $post->category_id
                                                ) == $category->id
                                                    ? 'selected'
                                                    : '' }}>

                                                {{ $category->name }}

                                            </option>

                                        @endforeach

                                    </select>

                                </div>

                            </div>

                        </div>



                        {{-- STATUS --}}
                        <div class="col-lg-4">

                            <div class="post-form-group">

                                <label
                                    for="status"
                                    class="post-form-label">

                                    Post Status

                                    <span class="required">
                                        *
                                    </span>

                                </label>


                                <div class="post-select-wrapper">

                                    <i class="fas fa-circle"></i>


                                    @php

                                        $currentStatus = strtolower(
                                            old(
                                                'status',
                                                $post->status
                                            )
                                        );

                                    @endphp


                                    <select
                                        name="status"
                                        id="status"

                                        class="post-select @error('status') is-invalid @enderror"

                                        required>

                                        <option value="">
                                            Select status
                                        </option>


                                        <option
                                            value="published"

                                            {{ $currentStatus === 'published'
                                                ? 'selected'
                                                : '' }}>

                                            Published

                                        </option>


                                        <option
                                            value="draft"

                                            {{ $currentStatus === 'draft'
                                                ? 'selected'
                                                : '' }}>

                                            Draft

                                        </option>


                                        <option
                                            value="pending"

                                            {{ $currentStatus === 'pending'
                                                ? 'selected'
                                                : '' }}>

                                            Pending Approval

                                        </option>


                                        <option
                                            value="archived"

                                            {{ $currentStatus === 'archived'
                                                ? 'selected'
                                                : '' }}>

                                            Archived

                                        </option>

                                    </select>

                                </div>

                            </div>

                        </div>



                        {{-- FEATURED --}}
                        <div class="col-lg-4">

                            <div class="post-form-group">

                                <label
                                    for="featured"
                                    class="post-form-label">

                                    Featured Post

                                </label>


                                <div class="post-select-wrapper">

                                    <i class="fas fa-star"></i>


                                    <select
                                        name="featured"
                                        id="featured"

                                        class="post-select @error('featured') is-invalid @enderror">


                                        <option value="0">

                                            Not Featured

                                        </option>


                                        <option
                                            value="1"

                                            {{ old(
                                                'featured',
                                                $post->featured
                                            ) == 1
                                                ? 'selected'
                                                : '' }}>

                                            Featured

                                        </option>


                                    </select>

                                </div>

                            </div>

                        </div>


                    </div>



                    {{-- =================================================
                         IMAGE
                         ================================================== --}}

                    <div class="post-form-group">


                        <label
                            for="image"
                            class="post-form-label">

                            Featured Image

                        </label>


                        <div class="post-image-upload">


                            <div class="post-file-wrapper">


                                <div class="post-file-icon">

                                    <i class="fas fa-image"></i>

                                </div>


                                <div class="post-file-info">

                                    <div class="post-file-title">

                                        Replace post image

                                    </div>

                                    <div class="post-file-description">

                                        Select a new image only if you want
                                        to replace the current one.

                                    </div>

                                </div>


                            </div>



                            <input
                                type="file"

                                name="image"

                                class="post-file-input @error('image') is-invalid @enderror"

                                id="image"

                                accept="image/jpeg,image/png,image/jpg,image/webp">



                            {{-- CURRENT IMAGE --}}
                            @if($post->image)

                                <div class="current-image-wrapper">

                                    <div class="current-image-label">

                                        Current Image

                                    </div>


                                    <div class="current-image-container">


                                        <img
                                            src="{{ asset('image/' . $post->image) }}"

                                            alt="{{ $post->title }}"

                                            class="current-post-image"


                                            onerror="this.onerror=null;this.src='{{ asset($post->image) }}';">


                                        <div class="current-image-info">

                                            <strong>
                                                Current featured image
                                            </strong>

                                            <span>
                                                Upload a new image above
                                                to replace this image.
                                            </span>

                                        </div>


                                    </div>

                                </div>

                            @endif



                            {{-- NEW IMAGE PREVIEW --}}
                            <div
                                class="new-image-preview"
                                id="newImagePreview">

                                <div class="new-image-preview-label">

                                    New Image Preview

                                </div>


                                <img
                                    src=""
                                    id="previewImage"

                                    alt="New image preview">

                            </div>


                        </div>


                    </div>



                    {{-- =================================================
                         RICH TEXT CONTENT
                         ================================================== --}}

                    <div
                        class="post-form-group"
                        id="editorContainer">


                        <label
                            for="summernote"
                            class="post-form-label">

                            Post Content

                            <span class="required">
                                *
                            </span>

                        </label>


                        <div class="editor-wrapper">


                            {{-- IMPORTANT:
                                 Do NOT use display:none.
                                 Summernote requires the textarea.
                            --}}

                            <textarea
                                id="summernote"
                                name="body"
                                required>{{ old('body', $post->body) }}</textarea>


                        </div>


                        <div class="post-help-text">

                            Format your post using headings, paragraphs,
                            lists, links, images and other rich-text tools.

                        </div>


                    </div>


                </div>



                {{-- =================================================
                     FOOTER
                     ================================================== --}}

                <div class="edit-post-footer">


                    <div class="form-footer-info">

                        <i class="fas fa-info-circle mr-1"></i>

                        Fields marked with
                        <span class="required">*</span>
                        are required.

                    </div>



                    <div class="form-actions">


                        <a
                            href="{{ route('posts') }}"
                            class="btn-cancel-post">

                            <i class="fas fa-arrow-left"></i>

                            Cancel

                        </a>


                        <button
                            type="submit"

                            class="btn-update-post"

                            id="updatePostButton">

                            <i class="fas fa-save"></i>

                            Update Post

                        </button>


                    </div>


                </div>


            </div>


        </form>


    </section>


</div>



{{-- =============================================================
     SUMMERNOTE
     ============================================================= --}}

<link
    href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css"
    rel="stylesheet">


{{-- Only keep these if layouts.app does NOT already load them --}}
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js">
</script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
</script>


<script
    src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.js">
</script>



<script>

$(document).ready(function () {


    /* =========================================================
       INITIALIZE SUMMERNOTE
       ========================================================= */

    $('#summernote').summernote({

        height: 350,

        minHeight: 300,

        maxHeight: 600,

        focus: false,

        placeholder: 'Write your post content here...',

        dialogsInBody: true,

        disableDragAndDrop: false,


        toolbar: [

            ['style', [
                'style'
            ]],

            ['font', [
                'bold',
                'italic',
                'underline',
                'clear'
            ]],

            ['fontname', [
                'fontname'
            ]],

            ['fontsize', [
                'fontsize'
            ]],

            ['color', [
                'color'
            ]],

            ['para', [
                'ul',
                'ol',
                'paragraph'
            ]],

            ['table', [
                'table'
            ]],

            ['insert', [
                'link',
                'picture',
                'video'
            ]],

            ['view', [
                'fullscreen',
                'codeview',
                'help'
            ]]

        ]

    });



    /* =========================================================
       IMAGE PREVIEW
       ========================================================= */

    $('#image').on('change', function (event) {


        const file =
            event.target.files[0];


        if (!file) {

            $('#newImagePreview').hide();

            return;

        }


        if (!file.type.startsWith('image/')) {

            $('#newImagePreview').hide();

            return;

        }


        const reader =
            new FileReader();


        reader.onload = function (e) {

            $('#previewImage')
                .attr('src', e.target.result);


            $('#newImagePreview')
                .fadeIn(200);

        };


        reader.readAsDataURL(file);

    });



    /* =========================================================
       FORM SUBMISSION
       ========================================================= */

    $('#editPostForm').on('submit', function (event) {


        /*
         * Get the current HTML from Summernote.
         */

        const body =
            $('#summernote')
                .summernote('code');


        /*
         * Remove empty HTML.
         */

        const cleanBody =
            body
                .replace(/<p><br><\/p>/gi, '')
                .replace(/<br\s*\/?>/gi, '')
                .replace(/&nbsp;/gi, '')
                .replace(/<[^>]*>/g, '')
                .trim();


        /*
         * Validate rich text.
         */

        if (!cleanBody) {

            event.preventDefault();


            $('#editorContainer')
                .addClass('editor-invalid');


            alert(
                'Please enter the post content.'
            );


            $('#summernote')
                .summernote('focus');


            return false;

        }


        /*
         * Make sure textarea contains
         * the latest Summernote content.
         */

        $('#summernote')
            .val(body);


        /*
         * Prevent double submission.
         */

        const button =
            $('#updatePostButton');


        button
            .prop('disabled', true);


        button.html(
            '<i class="fas fa-spinner fa-spin"></i> Updating...'
        );


    });



    /* =========================================================
       REMOVE EDITOR ERROR
       ========================================================= */

    $('#summernote').on(
        'summernote.change',
        function () {

            $('#editorContainer')
                .removeClass('editor-invalid');

        }
    );


});

</script>

@endsection