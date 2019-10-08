<div class="row">
    <div class="col-lg-4 border-right text-white" style="background-color:#083872; ">
      <form class="form-group p-30" id="login">
        <h1 class="border-bottom p-30 ">Login User</h1>
        <div class="form-group">
          <label for="exampleInputEmail1">Username</label>
          <input type="text" name="form[email]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="form[password]" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Stay Logged In</label>
        </div>
        <input type="hidden" name="form[method]" value="login">
        <button type="submit" class="btn btn-primary" id="loginform">Submit</button>
      </form>

    </div>
</div>