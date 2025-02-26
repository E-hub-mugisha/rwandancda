@extends('layouts.app')
@section('title','Edit Worker')
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

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit {{ $worker->name}}'s Information</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
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
                        <form action="{{ route('workers.update',$worker->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="names">Names</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $worker->name}}" placeholder="Enter Names">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="title" class="form-control" name="title" id="title" value="{{ $worker->title}}" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label>Select Department</label>
                                    <select class="form-control" name="department" id="department">
                                        <option></option>
                                        <option value="BOARD MEMBERS">BOARD MEMBERS</option>
                                        <option value="ADVISORY COMMITTEE">ADVISORY COMMITTEE</option>
                                        <option value="WORKFORCE">WORKFORCE</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="photo">Input Photo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="photo">
                                            <label class="custom-file-label" for="photo">Choose Photo</label>
                                        </div>
                                    </div>
                                    <img src="/image/{{ $worker->photo }}" width="300px">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection