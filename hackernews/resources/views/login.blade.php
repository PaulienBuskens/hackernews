@include('inc.header')

<form action="login_check" method="post">
{{csrf_field()}}
  <fieldset>
    <legend>Legend</legend>
    
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
    
    <fieldset class="form-group">
    <legend>Checkboxes</legend>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="" checked="">
       remember me
      </label>
    </div>
    
  </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

@include('inc.footer')