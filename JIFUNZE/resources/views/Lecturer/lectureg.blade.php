@include('include.header')
@include('notification')

<div class="container" style="transform:translateY(40px);">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form card p-3 shadow" >
                <div class="h3 text-center">LECTURER REGISTER</div>
                <form action="lecturesubform" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label for="firstname" class="form-label">Firstname</label>
                                <input type="firstname" class="form-control" name="firstname" placeholder="firstname" id="firstname">
                                <div class="text-danger">@error('firstname'){{ $message }}@enderror</div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="lastname" class="form-label">Lastname</label>
                                <input type="lastname" class="form-control" name="lastname" placeholder="lastname" id="lastname" >
                                <div class="text-danger">@error('lastname'){{ $message }}@enderror</div>
                            </div>
                        </div>
                    </div>   

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="email@gmail.com" id="email" >
                        <div class="text-danger">@error('emai'){{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="moduleid" class="form-label">Module</label>
                        <select name="moduleid" class="form-control" id="moduleid">
                            <option value="" selected>--choose--</option>
                            @foreach($modules as $module)
                                <option value="{{ $module->id }}">{{ $module->mname }}</option>
                            @endforeach
                        </select>
                        <div class="text-danger">@error('moduleid'){{ $message }}@enderror</div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password" id="password" >
                        <div class="text-danger">@error('password'){{ $message }}@enderror</div>
                    </div>
                    
                    <div class="text-center pt-2">
                        <button class="btn btn-success text-center" type="submit">Submit</button>
                    </div>

                    <div class="text-center pt-3">
                       Already Registered? <a href="lecturer">Login Here</a>
                    </div>

                </form>
            </div>
           
        </div>
        <div class="col-md-3"></div>
    </div>
</div>


@include('include.footer')