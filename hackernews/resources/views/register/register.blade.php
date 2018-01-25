@include('inc.header')

<div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="register_action" method="post">
                {{csrf_field()}}
                    <fieldset>
                        <legend>Register</legend>    

                        @if(Session::has('succes'))

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-success">
                                        {{Session::get('succes')}}
                                    </div>
                                </div>
                            </div>
                        @endif
    
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="name" name="username" class="form-control" id="name" placeholder="Enter name">
                            @if($errors->has('username'))<p>{{$errors->first('username')}}</p>@endif
                        </div>
    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            @if($errors->has('email'))<p>{{$errors->first('email')}}</p>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            @if($errors->has('password'))<p>{{$errors->first('password')}}</p>@endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Confirm Password</label>
                            <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
                            @if($errors->has('cpassword'))<p>{{$errors->first('cpassword')}}</p>@endif
                        </div>
    
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </fieldset>
                </form>
            </div>
        </div>  
    </div>

@include('inc.footer')