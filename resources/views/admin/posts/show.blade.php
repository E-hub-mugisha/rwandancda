@extends('layouts.app')
@section('title','Posts Detail')
@section('content')

<div class="content-wrapper" style="min-height: 1604.71px;">

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
                <h3 class="card-title">{{ $post->title }}</h3>
            </div>
            <div class="card-body">
                <div class="post">
                    <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="{{ URL::asset($post->image) }}" alt="user image">
                        <span class="username">
                            <!-- <a href="#">Jonathan Burke Jr.</a> -->
                        </span>
                        <span class="description">Shared publicly - {{ $post->created_at }}</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
                <div>
                    @if($comments_data->count() > 0)
                    <h4>Comments</h4>
                    @foreach($comments_data as $comment)
                    <div class="mt-2">
                        <h5>{{ $comment->name }}</h5>
                        <form id="delete-form" action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this comment?')">Delete Post</button>
                    </form>
                        <p>
                            <i class="icofont-quote-left"></i><br>
                            {{ $comment->message }}<br>
                            <i class="icofont-quote-right"></i>
                        </p>
                        <p>Posted On: {{ $comment->created_at }}</p>
                        <hr>
                    </div>
                    @endforeach
                    @else
                    <h4>No Comments Yet</h4>
                    @endif

                </div>
            </div>
            <div class="card-footer">
                <div class="text-center mt-5 mb-3">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">Edit Post</a>
                    <form id="delete-form" action="{{ route('posts.destroy', $post->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this worker?')">Delete Post</button>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>


@endsection