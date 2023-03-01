@extends('user.layouts.app')
  

  @section('frontend-main')

         @include('validate.error')
          @include('validate.success')

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Doctors</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Our Doctors</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div>

  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="row">
          @foreach ($doctor as $doctors )
            <div class="col-md-4 col-lg-4 py-3 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">

            
              <div class="card-doctor">
                <div class="header">
                  <img style="width:100%; height:100%" src="docimg/{{ $doctors -> photo}}" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">{{ $doctors -> name}}</p>
                  <span class="text-sm text-grey">{{$doctors -> speaciality}}</span>
                </div>
              </div>
              
            </div>
            @endforeach

          </div>

        </div>
      </div>
    </div> <!-- .container -->
  </div>



<!-- .page-section -->

@include('user.appointment')

<!-- .page-section -->


@endsection

