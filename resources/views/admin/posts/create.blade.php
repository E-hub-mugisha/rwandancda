@extends('layouts.app')

@section('title', 'Create Post')

@section('content')

<style>
    /* =========================================================
       Rwanda NCD Alliance - Create Post
       ========================================================= */

    .create-post-page {
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

        --green: #198754;
        --red: #DC2626;

        min-height: 100%;
        background: var(--paper);
    }


    /* =========================================================
       HEADER
       ========================================================= */

    .create-post-header {
        padding: 30px 30px 20px;
    }

    .create-post-header-inner {
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

    .create-post-title {
        margin: 0;
        color: var(--blue-deep);
        font-size: 28px;
        font-weight: 800;
        line-height: 1.2;
    }

    .create-post-subtitle {
        margin: 7px 0 0;
        color: var(--muted);
        font-size: 13px;
        line-height: 1.6;
    }

    .create-post-breadcrumb {
        margin: 0;
        padding: 0;
        background: transparent;
        font-size: 12px;
    }

    .create-post-breadcrumb a {
        color: var(--blue);
        font-weight: 700;
        text-decoration: none;
    }

    .create-post-breadcrumb a:hover {
        color: var(--blue-dark);
    }

    .create-post-breadcrumb .active {
        color: var(--muted);
    }


    /* =========================================================
       CONTENT
       ========================================================= */

    .create-post-content {
        padding: 0 30px 40px;
    }


    /* =========================================================
       ERROR
       ========================================================= */

    .post-error-card {
        margin-bottom: 20px;

        padding: 16px 18px;

        background: #FEF2F2;

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

    .create-post-card {
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

    .create-post-card-header {
        display: flex;
        align-items: center;
        gap: 12px;

        padding: 20px 22px;

        border-bottom: 1px solid var(--border);
    }

    .create-post-card-icon {
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

    .create-post-card-header h3 {
        margin: 0;

        color: var(--blue-deep);

        font-size: 16px;

        font-weight: 800;
    }

    .create-post-card-header p {
        margin: 3px 0 0;

        color: var(--muted);

        font-size: 11px;
    }


    /* =========================================================
       FORM BODY
       ========================================================= */

    .create-post-card-body {
        padding: 25px 22px 28px;
    }


    /* =========================================================
       FORM LABELS
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


    /* =========================================================
       TITLE
       ========================================================= */

    .post-title-input {
        min-height: 48px;

        font-size: 14px;

        font-weight: 600;
    }


    /* =========================================================
       SELECT ICON BOXES
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
        position: relative;

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
        margin-top: 13px;

        width: 100%;

        font-size: 11px;

        color: var(--muted);
    }


    /* =========================================================
       IMAGE PREVIEW
       ========================================================= */

    .post-image-preview {
        display: none;

        margin-top: 15px;

        padding-top: 15px;

        border-top: 1px solid var(--border);
    }

    .post-image-preview img {
        width: 150px;
        height: 100px;

        object-fit: cover;

        border-radius: 10px;

        border: 1px solid var(--border);
    }


    /* =========================================================
       RICH TEXT EDITOR
       ========================================================= */

    .editor-wrapper {
        margin-top: 5px;
    }

    /*
     * IMPORTANT:
     * Do NOT use display:none on the textarea.
     * Summernote replaces it with its editor container.
     */

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

    .note-resizebar {
        height: 8px !important;
    }

    .editor-invalid .note-editor {
        border-color: #EF4444 !important;
    }


    /* =========================================================
       FORM FOOTER
       ========================================================= */

    .create-post-footer {
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

    .btn-cancel-post {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 7px;

        padding: 10px 16px;

        border: 1px solid var(--border);

        border-radius: 10px;

        background: #fff;

        color: var(--muted);

        font-size: 12px;

        font-weight: 700;

        text-decoration: none;
    }

    .btn-cancel-post:hover {
        background: #F8FAFD;

        color: var(--blue-deep);

        text-decoration: none;
    }

    .btn-save-post {
        display: inline-flex;
        align-items: center;
        justify-content: center;

        gap: 8px;

        padding: 10px 18px;

        border: 0;

        border-radius: 10px;

        background: var(--blue);

        color: #fff;

        font-size: 12px;

        font-weight: 800;

        cursor: pointer;

        box-shadow:
            0 5px 15px rgba(93, 137, 200, .22);

        transition: .2s ease;
    }

    .btn-save-post:hover {
        background: var(--blue-dark);

        transform: translateY(-1px);

        color: #fff;
    }


    /* =========================================================
       MOBILE
       ========================================================= */

    @media (max-width: 767px) {

        .create-post-header {
            padding: 22px 16px 15px;
        }

        .create-post-header-inner {
            display: block;
        }

        .create-post-title {
            font-size: 23px;
        }

        .create-post-subtitle {
            font-size: 12px;
        }

        .create-post-breadcrumb {
            margin-top: 12px;
        }

        .create-post-content {
            padding: 0 16px 25px;
        }

        .create-post-card-body {
            padding: 20px 16px;
        }

        .create-post-footer {
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
        .btn-save-post {
            flex: 1;
        }

        .post-file-wrapper {
            align-items: flex-start;
        }

        .note-editable {
            min-height: 260px !important;
        }

    }

</style>


<div class="create-post-page">


    {{-- =========================================================
         PAGE HEADER
         ========================================================= --}}

    <section class="create-post-header">

        <div class="create-post-header-inner">


            <div>

                <div class="page-eyebrow">
                    Content Management
                </div>

                <h1 class="create-post-title">
                    Create Post
                </h1>

                <p class="create-post-subtitle">
                    Create and publish news, stories and organizational updates.
                </p>

            </div>


            <ol class="breadcrumb create-post-breadcrumb">

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
                    Create
                </li>

            </ol>


        </div>

    </section>



    {{-- =========================================================
         CONTENT
         ========================================================= --}}

    <section class="create-post-content">


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
            action="{{ route('posts.store') }}"
            method="POST"
            enctype="multipart/form-data"
            id="createPostForm">

            @csrf



            <div class="create-post-card">


                {{-- =================================================
                     CARD HEADER
                     ================================================== --}}

                <div class="create-post-card-header">

                    <div class="create-post-card-icon">

                        <i class="fas fa-edit"></i>

                    </div>


                    <div>

                        <h3>
                            Post Information
                        </h3>

                        <p>
                            Add the details and content for your publication.
                        </p>

                    </div>

                </div>



                {{-- =================================================
                     CARD BODY
                     ================================================== --}}

                <div class="create-post-card-body">


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

                            value="{{ old('title') }}"

                            class="post-input post-title-input @error('title') is-invalid @enderror"

                            placeholder="Enter the post title"

                            autocomplete="off"

                            required>


                        <div class="post-help-text">

                            Use a clear and descriptive title for your post.

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

                                                {{ old('category_id') == $category->id ? 'selected' : '' }}>

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


                                    <select
                                        name="status"
                                        id="status"

                                        class="post-select @error('status') is-invalid @enderror"

                                        required>

                                        <option value="">
                                            Select status
                                        </option>


                                        <option
                                            value="PUBLISHED"

                                            {{ old('status') === 'PUBLISHED' ? 'selected' : '' }}>

                                            Published

                                        </option>


                                        <option
                                            value="DRAFT"

                                            {{ old('status') === 'DRAFT' ? 'selected' : '' }}>

                                            Draft

                                        </option>


                                        <option
                                            value="PENDING"

                                            {{ old('status') === 'PENDING' ? 'selected' : '' }}>

                                            Pending Approval

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

                                        <option value="">
                                            Select option
                                        </option>


                                        <option
                                            value="1"

                                            {{ old('featured') === '1' ? 'selected' : '' }}>

                                            Featured

                                        </option>


                                        <option
                                            value="0"

                                            {{ old('featured') === '0' ? 'selected' : '' }}>

                                            Not Featured

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

                        <label class="post-form-label">

                            Featured Image

                        </label>


                        <div class="post-image-upload">


                            <div class="post-file-wrapper">


                                <div class="post-file-icon">

                                    <i class="fas fa-image"></i>

                                </div>


                                <div class="post-file-info">

                                    <div class="post-file-title">
                                        Upload post image
                                    </div>

                                    <div class="post-file-description">

                                        Recommended: JPG, JPEG or PNG.
                                        Use a high-quality landscape image.

                                    </div>

                                </div>


                            </div>



                            <input
                                type="file"

                                name="image"

                                id="image"

                                class="post-file-input @error('image') is-invalid @enderror"

                                accept="image/jpeg,image/png,image/jpg,image/webp">


                            {{-- IMAGE PREVIEW --}}
                            <div
                                class="post-image-preview"
                                id="imagePreview">

                                <img
                                    src=""
                                    id="previewImage"
                                    alt="Image preview">

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
                                 Do not use display:none here.
                                 Summernote needs this textarea.
                            --}}

                            <textarea
                                id="summernote"
                                name="body"
                                required>{{ old('body') }}</textarea>


                        </div>


                        <div class="post-help-text">

                            Use the editor to format headings, paragraphs,
                            links, lists, images and other content.

                        </div>


                    </div>


                </div>



                {{-- =================================================
                     FOOTER
                     ================================================== --}}

                <div class="create-post-footer">


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
                            class="btn-save-post"
                            id="savePostButton">

                            <i class="fas fa-paper-plane"></i>

                            Save Post

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

{{-- Summernote CSS --}}
<link
    href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs4.min.css"
    rel="stylesheet">


{{-- jQuery --}}
<script
    src="https://code.jquery.com/jquery-3.7.1.min.js">
</script>


{{-- Bootstrap 4 --}}
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js">
</script>


{{-- Summernote JS --}}
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

            $('#imagePreview').hide();

            return;

        }


        if (!file.type.startsWith('image/')) {

            $('#imagePreview').hide();

            return;

        }


        const reader =
            new FileReader();


        reader.onload = function (e) {

            $('#previewImage')
                .attr('src', e.target.result);


            $('#imagePreview')
                .fadeIn(200);

        };


        reader.readAsDataURL(file);

    });



    /* =========================================================
       FORM SUBMISSION
       ========================================================= */

    $('#createPostForm').on('submit', function (event) {


        /*
         * Summernote automatically synchronizes its
         * content with the textarea.
         */

        const body =
            $('#summernote')
                .summernote('code')
                .trim();


        /*
         * Remove empty HTML generated by editor.
         */

        const cleanBody =
            body
                .replace(/<p><br><\/p>/gi, '')
                .replace(/<br>/gi, '')
                .replace(/&nbsp;/gi, '')
                .trim();


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
         * Put content back into textarea.
         */

        $('#summernote')
            .val(body);


        /*
         * Prevent double submission.
         */

        const button =
            $('#savePostButton');


        button
            .prop('disabled', true);


        button.html(
            '<i class="fas fa-spinner fa-spin"></i> Saving...'
        );


    });



    /* =========================================================
       REMOVE EDITOR ERROR WHEN USER TYPES
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