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
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <br>
                  <div class="card-header d-flex justify-content-between">
        
                    <a href="{{ url('/post') }}" class="text-right btn btn-primary">View All Post</a>
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Add New Post</h4>
                    @include('validate.error')
                     @include('validate.success')
                  
                    <form class="forms-sample" action="{{ route('post.store')}}" method="POST" enctype="multipart-formdata">
                        @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                          <input name="title" type="text" class="form-control" id="exampleInputUsername2" placeholder="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputTag" class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                          <select style="font-size:20px;" class="form-control" name="tag[]" id="tags" multiple>
                            @foreach( $tags as $tag )
                            <option value="{{ $tag -> id }}">{{ $tag -> name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    
                      <div class="form-group row">
                        <label for="exampleInputCategory" class="col-sm-2 col-form-label">Category</label>
                        <div class="form-group col-sm-10">                      
                          <ul class="comet-list">
                            @foreach ($cats as $cat)
                              <li> 
                                <label><input name="cat[]" value="{{ $cat -> id }}" type="checkbox"> {{ $cat -> name }}</label> 
                              </li>
                            @endforeach
                            
                          </ul>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                            <textarea name="content" id="post_editor" cols="30" rows="10"></textarea>
									    	</div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputFile" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                          <input name="featured" style="" type="file" class="form-control" id="exampleInputFile">
                        </div>
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