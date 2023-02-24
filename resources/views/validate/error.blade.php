@if( $errors -> any())
   <div class="col-md-12 text-center">
   <p class="alert alert-danger">{{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>
   </div>

@endif