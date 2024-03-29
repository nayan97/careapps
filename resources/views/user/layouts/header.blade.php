@php
  $theme_data = App\Models\Theme::find(1)
@endphp  
  
  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="#"><span class="mai-logo-facebook-f"></span></a>
              <a href="#"><span class="mai-logo-twitter"></span></a>
              <a href="#"><span class="mai-logo-dribbble"></span></a>
              <a href="#"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        @if ( $theme_data -> logo === 'logo.png')
        <a class="navbar-brand" href="#"><span class="text-primary"> <img style="height:100px; width:140px;" src="../assets/logo/logo.png" alt=""></a>
        @else
        <a class="navbar-brand" href="#"><span class="text-primary"> <img style="height:100px; width:140px;"src="{{ url('storage/logo/' . $theme_data -> logo ) }}" alt=""></a>
        @endif
        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link {{Request::is('/') ? 'active':''}}" href="{{ url('/')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('about') ? 'active':''}}" href="{{ url('/about')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('doctors') ? 'active':''}}" href="{{ url('/doctors')}}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('blog') ? 'active':''}}" href="{{ url('/blog')}}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::is('contact') ? 'active':''}}" href="{{ url('/contact')}}">Contact</a>
            </li>

             @if (Route::has('login'))
                
            @auth
            <li class="nav-item">
              <a class="nav-link {{Request::is('myappointment') ? 'active':''}}" style="background-color:#00D9A5; color:#fff" href="{{ url('myappointment')}}">My Appoinment</a>
            </li>
              <x-app-layout>
              </x-app-layout>
            @else
              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-primary ml-lg-3" href="{{ route('register')}}">Register</a>
              </li>
              
            @endauth

        
            @endif
          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>