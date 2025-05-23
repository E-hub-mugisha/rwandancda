@extends('layouts.app')
@section('title','Dashboard')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $totalWorkers}}</h3>

              <p>Total Workers</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="{{ route('workers') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $totalPosts }}</h3>

              <p>Total Posts</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('posts') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>{{ $totalStory }}</h3>

              <p>Total NCD Stories</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('stories') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

          <!-- DIRECT CHAT -->
          <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">NCD Recent Stories</h3>

              <div class="card-tools">
                <span title="3 New Messages" class="badge badge-primary">{{ $totalStory }}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                @foreach ($stories as $story)
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">{{ $story->name }}</span>
                    <span class="direct-chat-timestamp float-right">{{ $story->created_at }}</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="{{ URL::asset($story->photo) }}" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    {{ $story->headline }}
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                @endforeach
                <!-- /.direct-chat-msg -->

              </div>
              <!--/.direct-chat-messages-->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <span class="input-group-append">
                <a href="{{ route('stories') }}" type="button" class="btn btn-primary">View All</a>
              </span>
            </div>
            <!-- /.card-footer-->
          </div>
          <!--/.direct-chat -->


        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">
          <!-- TO DO List -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                Latest Resources
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <ul class="todo-list" data-widget="todo-list">
                @foreach($resources as $resource)
                <li>
                  <!-- drag handle -->
                  <span class="handle">
                    <i class="fas fa-ellipsis-v"></i>
                    <i class="fas fa-ellipsis-v"></i>
                  </span>
                  <!-- todo text -->
                  <span class="text">{{ $resource->title}}</span>
                  <!-- Emphasis label -->
                  <small class="badge badge-danger"><i class="far fa-clock"></i> {{ $resource->created_at }}</small>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <a href="{{ route('resources.show', $resource->id) }}"><i class="fas fa-edit"></i></a>

                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <a href="{{ route('resources') }}" type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> View All</a>
            </div>
          </div>
          <!-- /.card -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection