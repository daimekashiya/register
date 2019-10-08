
<div class="col-lg-8" style="padding-left: 50px;">
  <form class="form-group p-30 row" id="register">
    <h1 class="border-bottom p-30">New Registration</h1>
    <div class="form-group col-lg-12">
      <label>Company / Organization Name</label>
      <input type="text" class="form-control" placeholder="Enter Company / Organization Name" name="form[name]">  
    </div>

    <div class="form-group col-lg-12">
      <label>Person In Charge</label>
      <input type="text" class="form-control" placeholder="Enter Person In Charge" name="form[person_in_charge]">  
    </div>

    <div class="form-group col-lg-6">
      <label>Email </label>
      <input type="text" class="form-control" placeholder="Enter Email" name="form[email]">  
    </div>

    <div class="form-group col-lg-6">
      <label>Contact Number</label>
      <input type="text" class="form-control" placeholder="Enter Contact Number" name="form[phone_no]">  
    </div>
    
    <div class="form-group col-lg-12">
      <label>Specialized In</label>
      <input type="text" class="form-control" placeholder="Enter Company / Organization speciality" name="form[Specialized]">  
    </div>

    <input type="hidden" name="form[method]" value="register">

    <div class="form-group col-lg-12">
      <label for="exampleInputEmail1">Reason to join</label>
      <textarea class="form-control" rows="4" name="form[reason]"></textarea> 
    </div>
    
    <div class="form-group col-lg-12">
      <button type="submit" class="btn btn-primary" id="registerform">Register Now</button>
    </div>
    
  </form>


</div>
