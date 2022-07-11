<?php $__env->startSection('jaki-page'); ?>
     
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo e($title1); ?></a></li>
                    <li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo e($title2); ?></a></li>
                    <li class="breadcrumb-item active"><?php echo e($title3); ?></li>
                </ol>
            </div>
            <h4 class="page-title">Top Up</h4>

            <div class="alert-wisata"></div>
        </div>
    </div>
</div> 



    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">

                  <ul class="saldo"></ul>
                  <div class="success"></div>

                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="field-1" class="control-label">SID</label>
                                <input type="text" disabled id="id_user" value="" class="form-control " id="field-1" placeholder="Enter Text">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Phone</label>
                                <input type="number" id="search" value="" class="form-control hp" placeholder="Enter number">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="field-2" class="control-label">Nama </label>
                                <input type="text" disabled id="nama" value="" class="form-control" id="field-2" placeholder="Enter number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3" class="control-label">Saldo</label>
                                <input type="text" id="saldo" value="" class="form-control " id="field-3" placeholder="Enter Token">
                            </div>
                        </div>
                    </div>
                   
        
                    <div class="row">
                        <div class="col-4">
                            <input type="button" value="Top-Up" class="btn btn-secondary" id="top-up">
                        </div>

                       
                    </div>

                  
                    
                    

                   

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col-->

     
        
      
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Stenly\Documents\WebApp\jaki\resources\views/pages/saldo.blade.php ENDPATH**/ ?>