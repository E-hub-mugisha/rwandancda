@extends('layouts.base')
@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section bg-img cover-background" data-overlay-dark="6" data-background="img/bg/bg-03.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>{!! $data->title !!}</h1>
      </div>
      <div class="col-md-12">
        <div class="breadcrumb">
          <span class="left-dot"></span>
          <span class="right-dot"></span>
          <ul>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li><a href="#!">Post Details</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="bg-transparent border-width-2 border-solid border-secondary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 left-5 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-secondary p-1-6 d-lg-block rounded-circle position-absolute top-25 right-25 ani-top-bottom d-none z-index-3"></div>
  <div class="bg-white p-2 d-sm-inline-block rounded-circle position-absolute top-40 left-25 ani-left-right d-none z-index-3"></div>
</section>

<!-- BLOG DETAILS
        ================================================== -->
<section>
  <div class="container">
    <div class="row">
      <!-- blog-details left -->
      <div class="col-lg-10 mb-5 mb-lg-0">
        <div class="pe-lg-1-6">

          <article class="card card-style6">
            <div class="image-box">
              <img src="{{ asset('new/img')}}/{{ $data->image }}" class="border-radius-10" alt="{!! $data->title !!}">
              <div class="blog-date"><span>30</span> Mar 21</div>
            </div>
            <div class="card-body border-radius-10">
              <ul class="list-unstyled mb-3">
                <li class="d-inline-block me-3 text-capitalize"><i class="ti-user me-2 text-primary"></i><a href="#!">admin</a></li>
                <li class="d-inline-block"><i class="ti-comment me-2 text-primary align-middle"></i> 06 Comment</li>
              </ul>
              <h2 class="mb-4">{!! $data->title !!}</h2>
              <p class="w-lg-95">{!! $data->body !!}</p>
            </div>
            <div class="p-1-9 g-0 d-md-flex align-items-center entry-footer float-start">

              <div class="tags flex-grow-1 mb-4 mb-md-0 pe-md-3 wow fadeIn" data-wow-delay="200ms">
                <div id="copy" class="d-none">
                  {{ URL::current() }}
                </div>
                <a type="button" class="copyButton btn btn-success" id="copyButtonId" data-id="{{ URL::current() }}" data-clipboard-action="copy" data-clipboard-target="div#copy" onclick="toastr.success('Ready! Link Copied to Clipboard!');">Copy to share Link !</a>
              </div>
              <div class="blog-share-icon wow fadeIn wow fadeIn" data-wow-delay="400ms">
                <label class="h6 me-1 mb-0">Share:</label>
                <ul class="share-post m-0 p-0 d-inline-block">
                  <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#!"><i class="fab fa-pinterest-p"></i></a></li>
                  <li><a href="#!"><i class="fab fa-linkedin-in"></i></a></li>
                </ul>
              </div>
            </div>
          </article>


          <div class="card card-style6 mb-5">
            <div class="card-body border-0 border-radius-10 p-1-6 p-sm-1-9 p-md-2-2 mt-0">
              <!-- Comments -->
              <div class="comments-area wow fadeIn" data-wow-delay="200ms">
                @if($comments_data->count() > 0)
                <div class="title-g mb-5">
                  <h3>4 Comments</h3>
                </div>
                @foreach($comments_data as $comment)
                <div class="comment-box">
                  <div class="author-thumb">
                    <img alt="..." src="img/avatar/avatar-03.jpg" class="avatar avatar-80 photo">
                  </div>
                  <div class="comment-info">
                    <h6 class="h5">{{ $comment->name }}</h6>

                    <p>{{ $comment->message }}</p>
                    <a class="comment-reply-link" href="#!">Reply</a>
                  </div>
                </div>
                @endforeach
                @else
                <h4>No Comments Yet</h4>
                @endif
                <!-- #comment-## -->

              </div>
              <!-- End Comments -->
            </div>
          </div>

          <div class="card card-style6">
            <div class="card-body border-0 border-radius-10 p-1-6 p-sm-1-9 p-md-2-2 mt-0">

              <div class="row g-0">
                <div class="col-lg-12">
                  <h3 class="mb-4">Post a comment</h3>
                  <!-- Form -->
                  <form action="{{ URL::route('post_comment', ['title' => $data->slug]) }}" method="POST">
                    @csrf
                    <div class="row">
                      <div class="form-group">
                        <textarea name="message" rows="6" class="form-control h-100" placeholder="Your comment"></textarea>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <input type="email" class="form-control" name="email" placeholder="Email Address">
                        </div>
                      </div>
                    </div>
                    <div>
                      <button class="butn" type="submit">Leave Comment</button>
                    </div>
                  </form>
                  <!-- End Form -->
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- end blog-details left -->

    </div>
  </div>
  <div class="bg-secondary p-2-2 d-sm-inline-block rounded-circle position-absolute bottom-10 right-5 d-none"></div>
  <div class="bg-primary p-3 d-sm-inline-block rounded-circle position-absolute bottom-10 right-5 ani-top-bottom d-none"></div>
</section>

<script>
  $(function() {
    var clipboard = new Clipboard('.copyButton');
    clipboard.on('success', function(e) {
      console.log(e);
    });
    clipboard.on('error', function(e) {
      console.log(e);
    });
  });
</script>
@endsection