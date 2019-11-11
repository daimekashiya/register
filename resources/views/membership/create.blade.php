<div class="col-md-8">
  <h5 style="font-weight: 600;">{{__('Register')}}</h5>
  <form class="form-group p-30 row" method="post" action="{{ route('register') }}" enctype="multipart/form-data">

    @csrf
    
    <div class="form-group col-md-12">
      <label>Company / Organization Name<font style="color:red">*</font></label>
      <input type="text" class="form-control" placeholder="Enter Company / Organization Name" name="company_name" required value="{{ old('company_name') }}">  
      @error('company_name')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

    </div>

    <div class="form-group col-md-6">
      <label>Person In Charge<font style="color:red">*</font></label>
      <input type="text" class="form-control" placeholder="Enter Person In Charge Name" name="person_in_charge_name" required value="{{ old('person_in_charge_name') }}"> 
      @error('person_in_charge_name')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

    </div>

    <div class="form-group col-md-6">
      <label>Email <font style="color:red">*</font></label>
      <input type="text" class="form-control" placeholder="Enter Email" name="email" required value="{{ old('email') }}">  

    
      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror
    


    </div>

    <div class="form-group col-md-6">
      <label>Password <font style="color:red">*</font></label>
      <input type="password" class="form-control" placeholder="8 Character Minimum" name="password" required> 
      
      
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
        </span>
        @enderror
      

    </div>


    <div class="form-group col-md-6">
      <label>Re-Type Password <font style="color:red">*</font></label>
      <input type="password" class="form-control" placeholder="8 Character Minimum" name="password_confirmation" required> 
      @error('password_confirmation')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror
      
    </div>

    <div class="form-group col-md-6">
      <label>Contact Number</label>
      <input type="text" class="form-control" placeholder="Numeric only" name="phone" value="{{ old('phone') }}">  
      @error('phone')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

    </div>

    <div class="form-group col-md-6">
      <label>Fax Number</label>
      <input type="text" class="form-control" placeholder="Numeric only" name="fax" value="{{ old('fax') }}">  
      @error('fax')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

    </div>
   
    <div class="form-group col-md-6">
      <label>Website URL</label>
      <input type="text" class="form-control" placeholder="Enter Website URL" name="website_url" value="{{ old('website_url') }}">  
      @error('website_url')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

    </div>

    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Address</label>
      <textarea class="form-control" rows="2" placeholder="Enter Company / Organization Address" name="address">{{ old('address') }}</textarea> 
      @error('address')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

    </div>


    <div class="form-group col-md-6">
      <label>Specialized In</label>
      <textarea class="form-control" rows="2" placeholder="Enter Company / Organization speciality" name="specialize_in_description" >{{ old('specialize_in_description') }}</textarea>     
      @error('specialize_in_description')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

    </div>


    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Reason to join</label>
      <textarea class="form-control" rows="2" name="reason_to_join" >{{ old('reason_to_join') }}</textarea> 
      @error('reason_to_join')
      <span class="invalid-feedback" role="alert">
          <strong style="color:red">{{ $message }}</strong>
      </span>
      @enderror

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
