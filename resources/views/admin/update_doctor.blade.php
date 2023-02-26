
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
        <div class="container-fluid page-body-wrapper">
            <div class="container">
                <br>
                    <div class="card-header text-center">
                      
                        <h4 class="card-title">Update Doctor Data</h4>
                    </div>
                @include('validate.error')
                @include('validate.success')
                <form action="{{ url('editdoctor', $data -> id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Doctor Name</label>
                        <input style="color:#000" value="{{ $data -> name }}" name= "name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input style="color:#000" value="{{ $data -> phone }}" name="phone" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Room Number</label>
                        <input style="color:#000" value="{{ $data -> room }}" name="room" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input style="color:#000" value="{{ $data -> time  }}" name="time" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Off Day</label>
                        <input style="color:#000" value="{{ $data -> holyday  }}" name="holyday" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Speaciality</label>
                        <select style="color:#000" value="" style="color:#000; width: 200px;" name="speaciality" id="">
                            <option>Select</option>
                            <option value="{{ $data -> speaciality   }}">Skin</option>
                            <option value="{{ $data -> speaciality   }}">Medichin</option>
                            <option value="{{ $data -> speaciality   }}">Heart</option>
                            <option value="{{ $data -> speaciality   }}">Giney</option>
                            <option value="{{ $data -> speaciality   }}">Child</option>
                            <option value="{{ $data -> speaciality   }}">Ortho</option>
                        </select>
                    </div>
                    <div class="form-group">
						<label>Photo</label>
                        <img style="width:120px; height:120px" src="docimg/{{ $data -> photo}}" alt="">
					</div>
                    <div class="form-group">
						<label>Photo</label>
                        <input type="file" name="photo">
					</div>
                    
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </div>
        </div>  
        

    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.js')
    <!-- End custom js for this page -->
  </body>
</html>