<div class="col-lg-8" style="padding-left: 50px;">
    <form class="form-group p-30 row" method="post" action="{{ Auth::user()->company != null ? URL::to('membership/update/'.Auth::user()->company->id) : route('register') }}" enctype="multipart/form-data">
        @csrf
        <h1 class="border-bottom p-30">
        {{ Auth::user()->company != null ? 'Update Company' : 'New Registration' }}
        </h1>
        <div class="form-group col-lg-12">
        <label>Company / Organization Name</label>
        <input type="text" class="form-control" placeholder="Enter Company / Organization Name" name="company_name" value="{{ Auth::user()->company != null ? Auth::user()->company->name : null }}">  
    
    
    
        </div>
    
        <div class="form-group col-lg-6">
        <label>Person In Charge</label>
        <input type="text" class="form-control" placeholder="Enter Person In Charge Name" name="person_in_charge_name" value="{{ Auth::user()->company != null ? Auth::user()->company->name : null }}"> 
        </div>
    
        <div class="form-group col-lg-6">
        <label>Email </label>
        <input type="text" class="form-control" placeholder="Enter Email" name="email" value="{{ Auth::user()->company != null ? Auth::user()->company->email : null }}">  
        </div>
    
        <div class="form-group col-lg-6">
        <label>Password </label>
        <input type="password" class="form-control" placeholder="{{Auth::user()->company != null ? 'Enter if you wish to change your password' : 'Enter Password' }}" name="password" required>  
        </div>
    
    
        <div class="form-group col-lg-6">
        <label>Re-Type Password </label>
        <input type="password" class="form-control" placeholder="{{Auth::user()->company != null ? 'Enter if you wish to change your password' : 'Re-enter Password' }}" name="password_confirmation" required>  
        </div>
    
        <div class="form-group col-lg-6">
        <label>Contact Number</label>
        <input type="text" class="form-control" placeholder="Enter Contact Number" name="phone" value="{{ Auth::user()->company != null ? Auth::user()->company->phone : null }}">  
        </div>
    
        <div class="form-group col-lg-6">
        <label>Fax Number</label>
        <input type="text" class="form-control" placeholder="Enter Fax Number" name="fax" value="{{ Auth::user()->company != null ? Auth::user()->company->fax : null }}">  
        </div>
        
        <div class="form-group col-lg-6">
        <label>Website URL</label>
        <input type="text" class="form-control" placeholder="Enter Website URL" name="website_url" value="{{ Auth::user()->company != null ? Auth::user()->company->website_url : null }}">  
        </div>
    
        <div class="form-group col-lg-6">
        <label for="exampleInputEmail1">Address</label>
        <textarea class="form-control" rows="2" placeholder="Enter Company / Organization Address" name="address">{{ Auth::user()->company != null ? Auth::user()->company->address : null }}</textarea> 
        </div>
    
    
        <div class="form-group col-lg-6">
        <label>Specialized In</label>
        <textarea class="form-control" rows="2" placeholder="Enter Company / Organization speciality" name="specialize_in_description" >{{ Auth::user()->company != null ? Auth::user()->company->specialize_in_description : null }}</textarea>     
        </div>
    
    
        <div class="form-group col-lg-6">
        <label for="exampleInputEmail1">Reason to join</label>
        <textarea class="form-control" rows="2" name="reason_to_join" >{{ Auth::user()->company != null ? Auth::user()->company->reason_to_join : null }}</textarea> 
        </div>
    
        <div class="form-group col-lg-12">
        <label>Logo</label>&nbsp;&nbsp;
        <input type="file" name="logo" accept='image/*'> 
        </div>
    
        <div class="form-group col-lg-12">
        <h5>Categories</h5>
        </div>
       
        @foreach( \App\Models\Lkp\LkpCategory::all() as $category )
        <div class="form-group col-lg-3">
            <input type="checkbox" name="categories[]" value="{{$category->id}}"
                @if(Auth::user()->company != null)
                    @if(Auth::user()->company->lkp_categories->count() > 0)
                        {{ Auth::user()->company->lkp_categories->where('id',$category->id)->count() == 1 ? 'checked' : null }}
                    @endif
                @endif
            >  
            <label>{{$category->description}}</label>
        </div>
        @endforeach
        
        
        <div class="form-group col-lg-12">
        <button type="submit" class="btn btn-primary" id="registerform">{{ Auth::user()->company != null ? 'Update Company' : 'Register Now' }}</button>
        </div>
    </form>
    
</div>
      