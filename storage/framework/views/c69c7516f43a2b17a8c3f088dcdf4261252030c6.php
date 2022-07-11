<?php $__env->startSection('jaki-page'); ?>
     <!-- start page title -->
     <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div>
                <h4 class="page-title">Dashboard</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 


    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">

                  <ul class="alert-token"></ul>
                  <div class="success-token"></div>

                    <div class="row">

                        <input hidden type="text" id="id_token" value="<?php echo e($data->id_token); ?>">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-1" class="control-label">SID</label>
                                <input type="text" id="sid" value="<?php echo e($data->sid); ?>" class="form-control " id="field-1" placeholder="Enter Text">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Phone</label>
                                <input type="text" id="phone" value="<?php echo e($data->phone); ?>" class="form-control" id="field-2" placeholder="Enter number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Token</label>
                                <input type="text" id="token" value="<?php echo e($data->token); ?>" class="form-control " id="field-3" placeholder="Enter Token">
                            </div>
                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group no-margin">
                                <label for="field-7" class="control-label">Pesan</label>
                                <textarea class="form-control " id="pesan" placeholder="Write Message"><?php echo e($data->pesan); ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <input type="button" value="Update" class="btn btn-secondary btn-sm" id="update-token">
                        </div>

                       
                    </div>

                  
                    
                    

                   

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col-->

     
        
      
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Stenly\Documents\WebApp\jaki\resources\views/pages/token.blade.php ENDPATH**/ ?>