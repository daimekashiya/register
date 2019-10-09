<div class="row">
    <div class="col-lg-3">

      <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx1" role="tablist" aria-multiselectable="true">
            <!-- Accordion card -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo1">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo1">
                        <h5 class="mb-0">
                            Categories<i class="fa fa-angle-down rotate-icon" style="float:right;"></i>
                        </h5>
                    </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo1" class="collapse" role="tabpanel" aria-labelledby="headingTwo1" data-parent="#accordionEx1" style="">
                    <div class="card-body company">
                      
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                                Air Freight Forwarding
                            </label>
                        </div>                    
                    </div>
                </div>
            </div>
            <!-- Accordion card -->
        </div>
        <!-- Accordion wrapper -->
    </div>

    <div class="col-lg-9 companyname">
        @permission('approve_company')
        @php 
            $companies = \App\Models\Membership\Company::paginate(10) ; 
        @endphp
        @else
        @php 
            $companies = \App\Models\Membership\Company::whereApproved(1)->paginate(10) ; 
        @endphp
        @endpermission

        @if($companies->count() > 0)
        @foreach($companies as $company)
        <div class="card" style="width:60vw">
            <div class="card-header" >
                {{$company->name}}
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div style="background:url({{ $company->logo_url ? asset('storage/'.$company->logo_url ) : 'http://rubickstudio.com/pplbdev/assets/images/logo/1.png' }});background-repeat: no-repeat;background-size: cover;padding: 5px;width:100%;height: 200px;"></div>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <p><b>{{$company->name}}</b></p>
                        <p>{{$company->specialize_in_description}}</p>
                        @if($company->lkp_categories->count() > 0)
                        @foreach($company->lkp_categories as $category)
                            <span class="badge badge-primary">{{$category->description}}</span>
                        @endforeach
                        <br><br>
                        @endif
                        <p class="specialized">
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i> <a class="memberdirectory" href="mailto:{{$company->email}}"> {{$company->email}}</a> </span>
                            <span><i class="fa fa-link" aria-hidden="true"></i><a href="{{$company->website_url}}" target="_blank"> {{$company->website_url}}</a> </span>
                            <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> {{$company->phone}} </span>
                            <span><i class="fa fa-print" aria-hidden="true"></i> {{$company->fax}}</span>
                        </p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$company->address}}</p>

                        @permission('approve_company')
                            @if($company->approved == 0)
                            <a href="{{URL::to('membership/approve/'.$company->id) }}" class="btn btn-warning float-right">Approve</a>
                            @endif
                        @endpermission

                    </div>
                </div>
            </div>
        </div> 
        @endforeach
        {{$companies->links()}}

        @else
        <div class="card">
            <div class="card-header">
               Tiada
            </div>
        </div> 
        @endif
        

    </div>
    
</div>