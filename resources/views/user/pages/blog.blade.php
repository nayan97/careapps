@extends('user.layouts.app')
@section('frontend-main')
<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
</div>

@php
      if( isset($_GET['name']) ){
        $key = $_GET['name'];
        $posts = App\Models\Post::where('title', 'LIKE', '%'.$key.'%') -> orwhere('content', 'LIKE', '%'.$key.'%') -> get();
      }
      
    @endphp

<div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">

          @foreach ( $posts as $post)
            <div class="col-sm-6 py-3">
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
           

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>

          </div> <!-- .row -->
        </div>
        @include('user.pages.sidebar')
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div>

  
  @endsection