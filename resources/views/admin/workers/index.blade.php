@extends('layouts.app')
@section('title','Workers')
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

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">@yield('title')</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-xl">
                        Add Worker
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 1%">
                                #
                            </th>
                            <th style="width: 30%">
                                Names
                            </th>
                            <th style="width: 10%">
                                Image
                            </th>
                            <th style="width: 8%" class="text-center">
                                Department
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $workers as $worker )
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    {{ $worker->name }}
                                </a>
                                <br />
                                <small>
                                    {{ $worker->title }}
                                </small>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{ URL::asset($worker->photo) }}">
                                    </li>
                                </ul>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">{{ $worker->department }}</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('workers.show', $worker->id) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('workers.edit', $worker->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form id="delete-form" action="{{ route('workers.destroy', $worker->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this worker?')"><i class="fas fa-trash">
                                        </i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!!  $workers->links() !!}
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <div class="modal fade" id="modal-xl">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
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
                    <form action="{{ route('workers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Fill In Worker Information</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="names">Names</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Names">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="title" class="form-control" name="title" id="title" placeholder="Enter title">
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
                                            <input type="file" class="custom-file-input" name="photo" id="photo">
                                            <label class="custom-file-label" for="photo">Choose Photo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection