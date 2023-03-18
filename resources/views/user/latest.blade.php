<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Latest News</h1>
      <div class="row mt-5">
      @foreach ( $posts as $post)
        <div class="col-lg-4 py-2 wow zoomIn">
        <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                  @foreach ( $post -> tag as $tag )
                  <a href="#">{{ $tag -> name}}</a>
                  @endforeach  
                 
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="{{ url('storage/posts/' . $post -> featured ) }}" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="{{ route('blog.single', $post -> slug)}}">{{ Str::of($post -> title) -> words(7) }}</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="{{ $post -> featured }}" alt="">
                      </div>
                      <span>{{ $post -> author -> name }}</span>
                    </div>
                    <span class="mai-time"></span> {{ date('F d,Y', strtotime($post -> created_at)) }}
                  </div>
                </div>
              </div>
        </div>

      @endforeach

        <div class="col-12 text-center mt-4 wow zoomIn">
          <a href="{{ url('/blog')}}" class="btn btn-primary">Read More</a>
        </div>

      </div>
    </div>
  </div> 