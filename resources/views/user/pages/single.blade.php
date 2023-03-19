@extends('user.layouts.app')
@section('frontend-main')

<div class="page-section pt-5">
    <div class="container">
   
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
              <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ url('/blog')}}">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $post -> title }}</li>
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="{{ url('storage/posts/' . $post -> featured ) }}" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a href="#">{{ $post -> author -> name }}</a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#">{{ date('F d,Y', strtotime($post -> created_at)) }}</a>
              </div>
              <span class="divider">|</span>
              <div>
              @foreach ( $post -> tag as $tag )
                  <a href="#">{{ $tag -> name}}</a>
                  @endforeach  
              </div>
              <span class="divider">|</span>
              <div class="post-comment-count">
                <a href="#">8 Comments</a>
              </div>
            </div>
            <h2 class="post-title h1">{{ $post -> title }}</h2>
            <div class="post-content">
            {!! (htmlspecialchars_decode($post -> content))!!}
            </div>
            <div class="post-tags">
                 @foreach ( $post -> tag as $tag )
                  <a href="#">{{ $tag -> name}}</a>
                  @endforeach  
            </div>
          </article> <!-- .blog-details -->
    

          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="#" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
                </div>
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div>
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="msg" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
        </div>
      @include('user.pages.sidebar')
      </div> <!-- .row -->
        
      
    
    </div> <!-- .container -->
  </div>

  @endsection