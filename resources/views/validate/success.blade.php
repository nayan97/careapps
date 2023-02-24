@if(Session::has('success'))

<div class="col-md-12 text-center">
    <p class="alert alert-success">{{Session::get('success')}} <button class="close" data-dismiss="alert">&times;</button></p>
</div>

 @endif