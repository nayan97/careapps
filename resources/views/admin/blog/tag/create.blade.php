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
        
                    <a href="{{ url('/tag') }}" class="text-right btn btn-primary">View All Tags</a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Add New Tag Name</h4>
                    @include('validate.error')
                     @include('validate.success')
            
                    <form class="forms-sample" action="{{ route('tag.store')}}" method="POST">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" type="text" class="form-control" id="exampleInputName1" placeholder="Name">
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