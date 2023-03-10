
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
     
        <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <div class="container">
                @include('validate.error')
                @include('validate.success')
                <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <br>
                    <div>
                        <h3>Add Doctor Data</h3>
                    </div>
                    <br>
                    <div class="form-group">
                        <label>Doctor Name</label>
                        <input value="{{ old('name') }}" name= "name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input value="{{ old('phone') }}" name="phone" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Room Number</label>
                        <input value="{{ old('room') }}" name="room" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input value="{{ old('time') }}" name="time" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Off Day</label>
                        <input value="{{ old('holyday') }}" name="holyday" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Speaciality</label>
                        <select style="color:#000; width: 200px;" name="speaciality" id="">
                            <option>Select</option>
                            <option value="skin">Skin</option>
                            <option value="medichin">Medichin</option>
                            <option value="heart">Heart</option>
                            <option value="giney">Giney</option>
                            <option value="child">Child</option>
                            <option value="ortho">Ortho</option>
                        </select>
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