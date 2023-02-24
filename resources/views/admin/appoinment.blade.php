
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
                                                <td>Email</td>
                                                <td>Cell</td>
                                                <td>Doctor Name</td>
                                                <td>Date</td>
                                                <td>Massage</td>
                                                <td>Status</td>
                                                <td>Approved</td>
                                                <td>Cancel</td>
                                              </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($appo_data as $appo_datas)
                                                <tr>
                                                    <td>{{ $loop -> index +1}}</td>
                                                    <td>{{ $appo_datas -> name}}</td>
                                                    <td>{{ $appo_datas -> email}}</td>
                                                    <td>{{ $appo_datas -> cell}}</td>
                                                    <td>{{ $appo_datas -> doctor}}</td>
                                                    <td>{{ $appo_datas -> date}}</td>
                                                    <td>{{ $appo_datas -> massege}}</td>
                                                    <td>{{ $appo_datas -> status}}</td>
                                                    <td><a onclick=" return confirm('Are You Sure')" class="btn btn-success" href="{{url('approved', $appo_datas ->id)}}">Approved</a></td>
                                                    <td><a onclick=" return confirm('Are You Sure')" class="btn btn-danger" href="{{url('cancel', $appo_datas ->id)}}">Cancel</a></td>
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