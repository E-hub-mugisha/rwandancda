@extends('layouts.app')
@section('title','Member')
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
                        <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
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
                <div class="col-md-5">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle" src="{{ URL::asset($member->logo) }}" alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center">{{ $member->name }}</h3>

                            <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                    <b>Website</b> <a class="float-right">{{ $member->website }}</a>
                                </li>
                                <!-- <li class="list-group-item">
                                    <b>Friends</b> <a class="float-right">13,287</a>
                                </li> -->
                            </ul>

                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary btn-block"><b>Edit</b></a>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection