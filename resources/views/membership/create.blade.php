


<div class="col-md-8">
  <h5 style="font-weight: 600;">{{__('Register')}}</h5>
  <form class="form-group p-30 row" method="post" action="{{ route('register') }}" enctype="multipart/form-data">
    <div class="form-group col-md-12">
        @if ($errors->any())
        @foreach( $errors->all() as $e) 
        <div class='alert alert-error'>
          <button type='button' class='close' data-dismiss='alert'></button>
          {{$e}}
        </div>
        @endforeach
      @endif 
    </div>    
    
    @csrf
    
    <div class="form-group col-md-12">
      <label>Company / Organization Name</label>
      <input type="text" class="form-control" placeholder="Enter Company / Organization Name" name="company_name" >  
    </div>

    <div class="form-group col-md-6">
      <label>Person In Charge</label>
      <input type="text" class="form-control" placeholder="Enter Person In Charge Name" name="person_in_charge_name" > 
    </div>

    <div class="form-group col-md-6">
      <label>Email </label>
      <input type="text" class="form-control" placeholder="Enter Email" name="email" >  
    </div>

    <div class="form-group col-md-6">
      <label>Password </label>
      <input type="password" class="form-control" placeholder="8 Character Minimum" name="password" required>  
    </div>


    <div class="form-group col-md-6">
      <label>Re-Type Password </label>
      <input type="password" class="form-control" placeholder="8 Character Minimum" name="password_confirmation" required>  
    </div>

    <div class="form-group col-md-6">
      <label>Contact Number</label>
      <input type="text" class="form-control" placeholder="Must be numeric" name="phone" >  
    </div>

    <div class="form-group col-md-6">
      <label>Fax Number</label>
      <input type="text" class="form-control" placeholder="Must be numeric" name="fax" >  
    </div>
   
    <div class="form-group col-md-6">
      <label>Website URL</label>
      <input type="text" class="form-control" placeholder="Enter Website URL" name="website_url" >  
    </div>

    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Address</label>
      <textarea class="form-control" rows="2" placeholder="Enter Company / Organization Address" name="address"></textarea> 
    </div>


    <div class="form-group col-md-6">
      <label>Specialized In</label>
      <textarea class="form-control" rows="2" placeholder="Enter Company / Organization speciality" name="specialize_in_description" ></textarea>     
    </div>


    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Reason to join</label>
      <textarea class="form-control" rows="2" name="reason_to_join" ></textarea> 
    </div>


    <div class="form-group col-lg-12">
        <br>
  
        <label>Logo</label>&nbsp;&nbsp;
        <input type="file" name="logo" accept='image/*' id="logo" style="display:none">
        <label for="logo" class="btn btn-default shadow">Click to upload new</label> 
        <br>
        <br>

    </div>

    <div class="form-group col-md-12">
      <font size="3" color="grey">Categories</font>
    </div>
    
    @include('_partials.lkp.lkpcategories.dropdown')
  
    <div class="form-group col-md-12">
      <br>
      <button type="submit" class="btn btn-primary" id="registerform">Register Now</button>
      <br>
      <br>
      <br>
    </div>
  </form>

</div>
