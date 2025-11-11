
@extends('layouts.app')
@section('title','Create Post')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="row">
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                            </div>
                            <div class="row">
                            <div class="col-md-4 form-group">
                                    <label>Post Category</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option></option>
                                        @foreach( $categories as $category )
                                          <option value="{{$category->id}}"> {{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            
                                <div class="col-md-4 form-group">
                                    <label>Post Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option></option>
                                        <option value="PUBLISHED">PUBLISHED</option>
                                        <option value="DRAFT">DRAFT</option>
                                        <option value="PENDING">PENDING APPROVAL</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Featured</label>
                                    <select class="form-control" name="featured" id="featured">
                                        <option></option>
                                        <option value="1">FEATURED</option>
                                        <option value="0">NOT FEATURED</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="image">Input image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="image">
                                        <label class="custom-file-label" for="image">Choose image</label>
                                    </div>
                                </div>
                            </div>
                            <textarea id="summernote" name="body" style="display: none;"> 
                            </textarea>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-success">Save Post</button>
                </div>
            </form>
        </div>
        <!-- ./row -->

    </section>

</div>
@endsection