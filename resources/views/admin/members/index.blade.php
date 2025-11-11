@extends('layouts.app')
@section('title','Members')
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
                        Add Member
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
                                Logo
                            </th>
                            <th style="width: 8%" class="text-center">
                                Website
                            </th>
                            <th style="width: 8%" class="text-center">
                                Category
                            </th>
                            <th style="width: 20%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $members as $member )
                        <tr>
                            <td>
                                #
                            </td>
                            <td>
                                <a>
                                    {{ $member->name }}
                                </a>
                            </td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <img alt="Avatar" class="table-avatar" src="{{ asset('new/img/'.$member->logo) }}">
                                    </li>
                                </ul>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">{{ $member->website }}</span>
                            </td>
                            <td class="project-state">
                                <span class="badge badge-info">{{ ucfirst($member->category) }}</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="{{ route('members.show', $member->id) }}">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-info btn-sm" href="{{ route('members.edit', $member->id) }}">
                                    <i class="fas fa-pencil-alt">
                                    </i>
                                    Edit
                                </a>
                                <form id="delete-form" action="{{ route('members.destroy', $member->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Story?')"><i class="fas fa-trash">
                                        </i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $members->links() !!}
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
                    <form action="{{ route('members.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-header">
                            <h4 class="modal-title">Fill In Member Information</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Names">
                                </div>
                                <div class="form-group">
                                    <label for="website">website</label>
                                    <input type="text" class="form-control" name="website" id="website" placeholder="Enter website">
                                </div>
                                <div class="form-group">
                                    <label for="logo">Input logo</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="logo" id="logo">
                                            <label class="custom-file-label" for="logo">Choose logo</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category">
                                        <option value="founding">Founding Member</option>
                                        <option value="adherent">Adherent Member</option>
                                        <option value="affiliated">Affiliated Member</option>
                                    </select>
                                    <small class="form-text text-muted">Select the category for this member.</small>
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