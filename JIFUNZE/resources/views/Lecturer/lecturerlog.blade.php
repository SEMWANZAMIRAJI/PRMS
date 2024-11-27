@include('include.header')
@include('notification')
<div class="container" style="transform:translateY(80px);">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form card p-3 shadow" >
                <div class="h3 text-center">LECTURER LOGIN</div>
                <form action="lectlogin" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email@gmail.com" id="email" >
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" id="password" >
                    </div>
                        <div class="text-center pt-2">
                    <button class="btn btn-success text-center" type="submit">Submit</button>
                    </div>
                    <div class="text-center pt-3">
                       Not Registered? <a href="lectureg">Register Here</a>
                    </div>
                    
                </form>
            </div>
           
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


@include('include.footer')