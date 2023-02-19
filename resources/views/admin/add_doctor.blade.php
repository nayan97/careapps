
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
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Doctor Name</label>
                        <input value="{{ old('name') }}" name= "name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input value="{{ old('company') }}" name="company" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Room Number</label>
                        <input value="{{ old('company') }}" name="company" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Time</label>
                        <input value="{{ old('company') }}" name="company" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Off Day</label>
                        <input value="{{ old('company') }}" name="company" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Speaciality</label>
                        <select style="color:#000; width: 200px;" name="" id="">
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
											<label name="photo">Photo</label>
											<br>
										
											<img style="max-width:100%" id="slider-photo-preview" src="" alt="">
											<br>
										
											<input style="display:none;" name="photo" type="file" class="form-control" id="slider-photo">
											<label for="slider-photo">
                                                 <img class="" style="width:120px;cursor:pointer; margin-left: -10px !importent;" src="admin\assets\img\sohel.JPG" alt="">
											</label>
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