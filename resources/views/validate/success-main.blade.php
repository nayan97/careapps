@if(Session::has('success-main'))
    <div class="col-md-12 text-center">
        <p class="alert alert-success">{{Session::get('success-main')}} <button class="close" data-dismiss="alert">&times;</button></p>
    </div>

@endif
