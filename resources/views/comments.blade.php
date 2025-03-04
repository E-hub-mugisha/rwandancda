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