@include('inc.header')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form action="login_check" method="post">
            {{csrf_field()}}
                <fieldset>
                    <legend>Login</legend>
    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        @if($errors->has('email'))<p>{{$errors->first('email')}}</p>@endif
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        @if($errors->has('password'))<p>{{$errors->first('password')}}</p>@endif
                    </div>
    
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>

@include('inc.footer')