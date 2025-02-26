@extends('layouts.app')
@section('title','Create Story')
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
            <form action="{{ route('stories.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                            </div>
                            <div class="form-group">
                                <label for="phone">phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone">
                            </div>
                            <div class="form-group">
                                <label for="disease">disease</label>
                                <input type="text" class="form-control" name="disease" id="disease" placeholder="Enter disease">
                            </div>
                            <div class="form-group">
                                <label for="headline">headline</label>
                                <input type="text" class="form-control" name="headline" id="headline" placeholder="Enter headline">
                            </div>
                            <div class="form-group">
                                <label for="photo">Input photo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="photo">
                                        <label class="custom-file-label" for="photo">Choose photo</label>
                                    </div>
                                </div>
                            </div>
                            <textarea id="summernote" name="content" style="display: none;">
                            
                            </textarea>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
        <!-- ./row -->

    </section>

</div>
@endsection