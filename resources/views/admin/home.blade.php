
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.style')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
          @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper bg">
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
        <!-- partial -->
          @include('admin.body')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>