<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
          @include('admin.sidebar')
      <!-- partial -->
     
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper bg">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <br>
                  <div class="card-header d-flex justify-content-between">
        
                    <a href="{{ url('/category') }}" class="text-right btn btn-primary">View All Category</a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Update Theme Data</h4>
                    @include('validate.error')
                     @include('validate.success')
            
                    <form class="forms-sample" action="{{ route('theme.update', 1)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputName1" value="{{ $theme -> title}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">TagLine</label>
                        <input name="tagline" type="text" class="form-control" id="exampleInputName1" value="{{ $theme -> tagline}}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Copyright</label>
                        <input name="copy" type="text" class="form-control" id="exampleInputName1" value="{{ $theme -> copy}}">
                      </div>
                      <div class="form-group">
			            			<label>Logo</label>
                        <br>
                          @if ( $theme -> logo === 'logo.png')
                            <a class="navbar-brand" href="#"><span class="text-primary"> <img style="height:100px; width:140px;" src="../assets/logo/logo.png" alt=""></a>
                          @else
                            <a class="navbar-brand" href="#"><span class="text-primary"> <img src="{{ url('storage/logo/' . $theme -> logo ) }}" alt=""></a>
                          @endif
                          <br>
                          <br>
                        <input type="hidden" name="old_logo" value="{{ $theme -> logo }}">
                        <input type="file" name="logo">
  
				            	</div>
                      
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>
   
        

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>