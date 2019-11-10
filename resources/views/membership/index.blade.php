@extends('layouts.theme.header1')
    <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->
@section('content')
    <div class="breadcrumbs-wrap data-grad-bg">

      <div class="container">
        
        <h1 class="page-title">{{__('layouts.company_list')}}</h1>

        <ul class="breadcrumbs">

          <li><a href="{{URL::to('/')}}">Home</a></li>
          <li>{{__('layouts.company_list')}}</li>

        </ul>

      </div>

    </div>

    <!-- - - - - - - - - - - - - end Breadcrumbs - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->

    <div id="content" class="page-content-wrap">
      
      <!--/ content-element -->

      <div class="content-element">
        
        <div class="container">

          <div class="content-element">
          
            <div class="row">
        
              <div class="col-sm-6">
                
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


                <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
                <div class="testimonial type-2">
                  
                  <div class="author-box">

                    <a href="#" class="avatar">
                      <img src="{{ $company->logo_url ? asset('storage/'.$company->logo_url ) : asset('green_blue/images/120x120_avatar1.png') }}" style="width:120px;height:120px" alt="">
                    </a>

                    <div class="author-info">

                      <span class="author-name">{{$company->email}}</span>
                      <span class="author-position">Phone:{{$company->phone}}</span>
                      @permission('approve_company')
                      @if($company->approved == 0)
                      <span class="author-position"><a href="{{URL::to('membership/approve/'.$company->id) }}" class="btn btn-small btn-primary" style="width:100%">Approve</a></span>
                      @endif
                      @endpermission                      


                    </div>

                  </div>

                  <div class="testimonial-holder">

                    <h4>{{$company->name}} ({{$company->person_in_charge_name}}) </h4>
                    <blockquote>
                      <p>
                          <b>Address :</b>
                          {{$company->address}}<br>
                          <b>Specialized In :</b>
                          {{$company->specialize_in_description}}<br>
                          <b>Reason to Join :</b>
                          {{$company->reason_to_join}}<br>
                          {{-- <b>Phone :</b>
                          {{$company->phone}}<br> --}}
                          {{-- <b>Email :</b>
                          {{$company->email}}<br> --}}
                          <b>Fax :</b>
                          {{$company->fax}}<br>
                          <b>Website :</b>
                          {{$company->website_url}}<br>
                          @if($company->lkp_categories->count() > 0)
                          @foreach($company->lkp_categories as $category)
                          <a href="" class="btn btn-small btn-style-2">{{$category->description}}</a>
                          @endforeach
                          @endif

                      </p>
                    </blockquote>

                  </div>

                </div>
                <!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->
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

          </div>
          <!--/ content-element -->

        </div>

      </div>
      <!--/ content-element -->

    </div>

    <!-- - - - - - - - - - - - - end Content - - - - - - - - - - - - - - - -->
@endsection