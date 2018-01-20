@include('inc.header')

<form>
  <fieldset>
    <legend>Legend</legend>
    
    <div class="form-group">
      <label for="name">Name</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name">
    </div>
    
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>

    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
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