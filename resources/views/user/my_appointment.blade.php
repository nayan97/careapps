
@extends('user.layouts.app')

@section('frontend-main')
<!-- .bg-light -->
 
        <br>
      <div class="container">
       <div class="row">
						<div class="col-md-12 text-center">
							<div class="card">
								<div class="card-header">
                @include('validate.success')
									<h4 class="card-title">My Request</h4>
								</div>

								<div class="card-body">
                                    <table class="table table-striped">
                                        <thead> 
                                              <tr>
                                                <td>#</td>
                                                <td>Doctor Name</td>
                                                <td>Date</td>
                                                <td>Massage</td>
                                                <td>Status</td>
                                                <td>Cancel Appoinment</td>
                                              </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($appoint as $appoints )
                                               <tr>
                                               <td>{{ $loop -> index + 1 }}</td>
                                                <td>{{ $appoints -> doctor}}</td>
                                                <td>{{ $appoints -> date}}</td>
                                                <td>{{ $appoints -> message}}</td>
                                                <td>{{ $appoints -> status}}</td>
                                                <td><a onclick=" return confirm('Are You Sure')" class="btn btn-danger" href="{{url('cancel_appoinment', $appoints->id)}}">Cancel</a></td>
                                              
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

@endsection
  
