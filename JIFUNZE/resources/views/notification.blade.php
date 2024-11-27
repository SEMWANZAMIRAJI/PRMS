
@if(Session::has('success'))
    <div class="alert alert-success d-block alert-dismissable fade show" id="alert-notification" style="position: absolute; top:10px; right: 10px; z-index: 9000;" role="alert">
        <strong>Congratulation!</strong> {{ session()->get('success'); }}
        <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@elseif(Session::has('error'))
    <div class="alert alert-danger d-block alert-dismissable fade show" id="alert-notification" style="position: absolute; top:10px; right: 10px; z-index: 9000; " role="alert">
        <strong>Failed!</strong> {{ session()->get('error'); }}
        <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif