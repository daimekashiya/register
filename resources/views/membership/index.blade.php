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
                            Activities &amp; Services <i class="fa fa-angle-down rotate-icon" style="float:right;"></i>
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

        <div class="card">
            <div class="card-header">
                A &amp; T Freight Management Pte Ltd
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div style="background:url(http://rubickstudio.com/pplbdev/assets/images/logo/1.png);background-repeat: no-repeat;background-size: cover;padding: 5px;width:100%;height: 200px;"></div>
                    </div>
                    <div class="col-lg-8 align-self-center">
                        <p><b>A &amp; T Freight Management Pte Ltd</b></p>
                        <p>Specialized in Consolidation / NVOCC, Hazardous Cargo &amp; Chemical Specialist, Sea Freight Forwarding, Warehousing &amp; Storage</p>
                        <p>Industries: Automotive, Fashion &amp; Apparel</p>
                        <p class="specialized">
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i> <a class="memberdirectory" href="mailto:jean@atfreight.com"> jean@atfreight.com</a> </span>
                            <span><i class="fa fa-link" aria-hidden="true"></i><a href="http://www.atfreight.com" target="_blank"> http://www.atfreight.com</a> </span>
                            <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> 6276-6116 </span>
                            <span><i class="fa fa-print" aria-hidden="true"></i> 6276-1661</span>
                        </p>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Blk 511 Kampong Bahru Road #04-03 Keppel Distripark Singapore 099447</p>

                        @permission('approve_company')
                            <a href="{{URL::to('membership/approve') }}" class="btn btn-primary float-right">Approve</a>
                        @endpermission

                    </div>
                </div>
            </div>
        </div> 
  
        <nav aria-label="pagination float-right">
            <br>
            <ul class="pagination">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                <li class="page-item ">
                <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>
    
</div>