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
         <div class="container">
             <div class="row">
						<div class="col-md-12 text-center">
							<div class="card">
								<div class="card-header">
                                    @include('validate.success')
									<h4 class="card-title">Appoinment Request</h4>
								</div>

								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 
                                              <tr>
                                                <td>#</td>
                                                <td>Name</td>
                                                <td>Phone</td>
                                                <td>Room</td>
                                                <td>Time</td>
                                                <td>Off Day</td>
                                                <td>Speacialist</td>
                                                <td>Photo</td>
                                                <td>Status</td>
                                                <td>Approved</td>
                                                <td>Cancel</td>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($doctor as $doctors)
                                                <tr>
                                                    <td>{{ $loop -> index +1}}</td>
                                                    <td>{{ $doctors -> name}}</td>
                                                    <td>{{ $doctors -> phone}}</td>
                                                    <td>{{ $doctors -> room}}</td>
                                                    <td>{{ $doctors -> time}}</td>
                                                    <td>{{ $doctors -> holyday}}</td>
                                                    <td>{{ $doctors -> speaciality}}</td>
                                                    <td><img src="docimg/{{ $doctors -> photo}}" alt=""></td>
                                                    <td>{{ $doctors -> status}}</td>
                                                    <td><a onclick=" return confirm('Are You Sure')" class="btn btn-success" href="{{url('updatedoctor',$doctors -> id)}}">Edit</a></td>
                                                    <td><a onclick=" return confirm('Are You Sure')" class="btn btn-danger" href="{{url('deletedoctor', $doctors ->id)}}">Delete</a></td>
                                                </tr>
                                             @endforeach
                                       
                                       
                                        </tbody>
                                    </table>
								
								</div>
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