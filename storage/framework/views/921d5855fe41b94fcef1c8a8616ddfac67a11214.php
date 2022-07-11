<?php $__env->startSection('jaki-page'); ?>
     <!-- start page title -->
     <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-lg-6 col-xl-3">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-blue rounded">
                            <i class="fe-layers avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">12,008</span></h3>
                            <p class="text-muted mb-0 text-truncate">Campaign Sent</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->

        <div class="col-lg-6 col-xl-3">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-success rounded">
                            <i class="fe-award avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">7,410</span></h3>
                            <p class="text-muted mb-0 text-truncate">New Leads</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-danger rounded">
                            <i class="fe-delete avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1"><span data-plugin="counterup">2,125</span></h3>
                            <p class="text-muted mb-0 text-truncate">Deals</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
        <div class="col-lg-6 col-xl-3">
            <div class="card-box bg-pattern">
                <div class="row">
                    <div class="col-6">
                        <div class="avatar-md bg-warning rounded">
                            <i class="fe-dollar-sign avatar-title font-22 text-white"></i>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-right">
                            <h3 class="text-dark my-1">$<span data-plugin="counterup">256</span>k</h3>
                            <p class="text-muted mb-0 text-truncate">Booked Revenue</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>
    <!-- end row-->


    <div class="row">
        <div class="col-xl-6">
            <div class="card-box pb-2">
                <div class="float-right d-none d-md-inline-block">
                    <div class="btn-group mb-2">
                        <button type="button" class="btn btn-xs btn-light">Today</button>
                        <button type="button" class="btn btn-xs btn-light">Weekly</button>
                        <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                    </div>
                </div>

                <h4 class="header-title mb-3">Deals Analytics</h4>

                <div dir="ltr">
                    <div id="deal-analytics" class="mt-4" data-colors="#1abc9c,#f1556c"></div>
                </div>
            </div> <!-- end card-box -->
        </div> <!-- end col-->

        
    </div>
    <!-- end row -->


    <div class="row">
        

        <div class="col-xl-4 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
                    <h4 class="header-title mb-4" >Recent Leads</h4>

                    
                    <div class="media mt-3" id="recent_leads">
                        
                    </div>

                    
                    

                       
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card-->
        </div>
        <!-- end col -->  
        
        <div class="col-xl-4  col-lg-6">
            <div class="card">
                <div class="card-body" dir="ltr">
                    <div class="card-widgets">
                        <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                        <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <h4 class="header-title mb-0">Campaigns Ratio</h4>

                    <div id="cardCollpase4" class="collapse pt-3 show">
                        <div id="campaigns-ratio-chart" class="apex-charts" data-colors="#f1556c"></div>
                        <div class="row text-center mt-2">
                            <div class="col-md-4">
                                <h3 class="font-weight-normal mt-3">
                                    <span>6,510</span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> Total Sent</p>
                            </div>
                            <div class="col-md-4">
                                <h3 class="font-weight-normal mt-3">
                                    <span>3,487</span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Reached</p>
                            </div>
                            <div class="col-md-4">
                                <h3 class="font-weight-normal mt-3">
                                    <span>1,568</span>
                                </h3>
                                <p class="text-muted mb-0 mb-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Opened</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col-->

    </div>
    <!-- end row-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Stenly\Documents\WebApp\jaki\resources\views/pages/beranda.blade.php ENDPATH**/ ?>