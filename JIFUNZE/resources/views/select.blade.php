@include('include.header')
@include('notification')

<div class="container" style="transform:translateY(130px);">
    <div class="h1 text-center">ENTER AS...</div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-5">
            <a href="lecturer" style="text-decoration:none;">
                <div class="card p-3 text-center">
                LECTURER
                </div>
            </a>
        </div>
        <div class="col-md-5">
        <a href="studentlog" style="text-decoration:none;" >
                <div class="card p-3 text-center" >
               STUDENT
                </div>
          </a>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

@include('include.footer')