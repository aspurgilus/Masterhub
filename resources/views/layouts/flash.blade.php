@if (session('status'))
    <div class="col-md-6 mx-auto text-center alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
@if (session('success'))
    <div class="col-md-6 mx-auto text-center alert alert-success" role="alert">
        {{session('success')}}
    </div>
@endif
@if (session('error'))
    <div class="col-md-6 mx-auto text-center alert alert-danger" role="alert">
        {{session('error')}}
    </div>
@endif
@if (session('info'))
    <div class="col-md-6 mx-auto text-center alert alert-info" role="alert">
        {{session('info')}}
    </div>
@endif