<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller bg">
      <!-- partial:partials/_sidebar.html -->
          @include('admin.sidebar')
      <!-- partial -->
     
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper bg">
        <br>
        <div class="col-lg-12 grid-margin stretch-card">
        
                  <div class="card">
                  <br>
                    <div class="card-header d-flex justify-content-between">
                    <h4 class="card-title">All Posts</h4>
                    <a href="{{ route('post.create') }}" class="text-right btn btn-primary">Add New Post</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Tag Name</th>
                            <th>Category</th>
                            <th>Slug</th>
                            <th>Createted at</th>
                            <th>Updated at</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($post as $posts )
                       
                            <tr>
                              <td>{{ $loop -> index +1}}</td>
                              <td style=" max-width:150px;">{{ $posts-> title}}</td>
                              <td style="padding:17px">
                                <ul>
                                  @foreach ( $posts -> category as $cat )
                                    <li>{{ $cat -> name }}</li>
                                  @endforeach
                                </ul>
												      </td>
                              <td style=" max-width:150px;">{{ $posts-> slug}}</td>
                              
                              <td>{{ $posts-> created_at -> diffForHumans() }}</td>
                              <td>
                                                <!----<a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a>-->
                                                <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="#">Delete</a>
                                            </td>
                            </tr>     
                          @endforeach
                     
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
                     
           <br>
        </div>  
        

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>