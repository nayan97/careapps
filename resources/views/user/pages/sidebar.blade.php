
<div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input name="name" type="text" class="form-control" placeholder="Type a keyword and hit enter">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
            @php
                $cat = App\Models\Postcategory::all();
            @endphp

            <div class="sidebar-block">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="categories">
                @foreach ($cat as $catss )
                <li><a href="#">{{ $catss -> name}} <span>12</span></a></li>
                @endforeach
               
              </ul>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>

              @php
                $post = App\Models\Post::all();
            @endphp

            @foreach ( $post as $posts )
            <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="{{ url('storage/posts/' . $posts -> featured ) }}" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="{{ route('blog.single', $posts -> slug)}}">{{ Str::of($posts -> title) -> words(7) }}</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> {{ date('F d,Y', strtotime($posts -> created_at)) }}</a>
                    <a href="#"><span class="mai-person"></span>{{ $posts -> author -> name }}</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              
            @endforeach

            </div>

            @php
                $tag = App\Models\Posttag::all();
            @endphp

            <div class="sidebar-block">
              <h3 class="sidebar-title">Tag Cloud</h3>
              <div class="tagcloud">
                @foreach ( $tag as $tags )
                <a href="#" class="tag-cloud-link">{{ $tags -> name}}</a>
                @endforeach
                
            </div>
          </div>
        </div> 