
<div class="col-lg-4 border-right text-white rounded" style="background-color:#083872;height:100vh;" >
  <form class="form-group p-30" method="POST" action="{{ route('login') }}">
    @csrf
    <br>
    <h1 class="border-bottom p-30 ">Login User</h1>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror


      
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" required autocomplete="current-password" class="form-control" placeholder="Password">
    </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : null }}>
      <label class="form-check-label" for="exampleCheck1">Stay Logged In</label>
    </div>
    <input type="hidden" name="form[method]" value="login">
    <button type="submit" class="btn btn-primary" id="loginform">Submit</button>
    
  </form>
  <br>
</div>
