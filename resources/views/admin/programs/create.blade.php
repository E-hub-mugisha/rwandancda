@extends('layouts.app')
@section('title','Create Program')
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
            <form action="{{ route('programs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                            </div>
                            <div class=" form-group">
                                <label>Engagement Category</label>
                                <select class="form-control" name="engagement" id="engagement">
                                    <option></option>
                                    @foreach( $engagements as $engagement )
                                    <option value="{{$engagement->id}}"> {{$engagement->title}} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="poster">Input poster</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="poster" class="custom-file-input" id="poster">
                                        <label class="custom-file-label" for="poster">Choose poster</label>
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
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-success">Save Program</button>
                </div>
            </form>
        </div>
        <!-- ./row -->

    </section>

</div>
@endsection